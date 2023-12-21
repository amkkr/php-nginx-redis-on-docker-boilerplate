FROM php:8.2.12-bookworm

# apt installes
RUN apt-get update -y && \
    apt-get -y install git make cmake  g++ gcc wget curl gzip vim unzip &&  \
    apt-get -y autoremove && apt-get -y autoclean

# pecl install 
RUN pecl install redis && \
    docker-php-ext-enable redis

ENV SETUP_FILE_NAME='setup.php'

## get composer
RUN php -r "copy('https://getcomposer.org/installer', '${SETUP_FILE_NAME}');" && \
    php ${SETUP_FILE_NAME} && \
    php -r "unlink('${SETUP_FILE_NAME}');" && \
    mv ./composer.phar /bin/composer

# containerはrootでは叩けない
ENV COMPOSER_ALLOW_EXISTING_PROJECT_DIR=true

WORKDIR /var/www/html
