FROM nginx:alpine
# Timezone
RUN apk add --update-cache --no-cache tzdata && \
    cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime && \
    apk del tzdata
COPY ./docker/nginx/default.conf /etc/nginx/conf.d/default.conf
