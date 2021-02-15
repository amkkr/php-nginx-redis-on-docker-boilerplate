FROM php:7.4-fpm
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && apt-get install -y git apt-utils zip unzip nodejs npm
    
        
RUN npm install n -g
RUN n stable

RUN apt purge -y nodejs npm

#Composer install
COPY --from=composer /usr/bin/composer /usr/bin/composer

#PATH
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

ENV ll='ls -al'

WORKDIR /var/www
RUN composer global require "laravel/installer"
