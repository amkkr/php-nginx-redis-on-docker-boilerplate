FROM php:8.2.12-bookworm

WORKDIR /var/www/html

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        locales \
    && apt-get -y autoremove \
    && apt-get clean \

# 非rootで80番を開けるのに必要
RUN setcap "cap_net_bind_service=+ep" /usr/local/bin/php

RUN groupadd --force -g $WWWGROUP sail \
    && useradd -ms /bin/bash --no-user-group -g $WWWGROUP -u 1337 sail

COPY start-container /usr/local/bin/start-container
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY php.ini ${PHP_INI_DIR}/conf.d/99-sail.ini
RUN chmod +x /usr/local/bin/start-container

ENTRYPOINT ["start-container"]
