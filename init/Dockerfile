FROM php:8.2.12-bookworm

WORKDIR /var/www/html

# Timezone
RUN apt-get -y update && \
    apt-get -y install git make cmake  g++ gcc wget curl gzip vim &&  \
    apt-get -y autoremove && apt-get -y autoclean

# cache
RUN pecl install redis && \
    docker-php-ext-enable redis

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

## Application init
# RUN composer create-project --prefer-dist laravel/lumen blog

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"


RUN cd /var/www/html
RUN composer require --dev friendsofphp/php-cs-fixer
RUN touch .php-cs-fixer.dist.php
RUN composer require --dev phpstan/phpstan phpstan/extension-installer
