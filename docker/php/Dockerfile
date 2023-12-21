FROM php:8.2.12-fpm-bullseye

WORKDIR /var/www/html

RUN apt-get update &&\
    apt-get install -y --no-install-recommends \
    locales unzip git make cmake zip g++ gcc wget curl gzip vim &&\
    apt-get -y autoremove &&\
    apt-get clean \

RUN docker-php-ext-install pdo_mysql
