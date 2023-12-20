FROM php:8.0.23-zts-alpine3.16

# Timezone
RUN apk add --update-cache --no-cache tzdata && \
    cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime && \
    apk del tzdata

RUN apk add --update-cache --no-cache \
    icu-dev \
    git \
    autoconf make g++ gcc cmake curl wget gzip

# cache
RUN pecl install redis && \
    docker-php-ext-enable redis

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer
COPY ./docker/php/config/www.conf /usr/local/etc/php-fpm.d/zzz-www.conf

RUN docker-php-ext-install -j$(nproc) intl \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY ./docker/php/config/php.ini /usr/local/etc/php/php.ini
