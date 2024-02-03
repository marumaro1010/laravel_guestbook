FROM php:7.2.34-fpm-alpine

RUN apk update && \ 
    apk upgrade

RUN apk add git \
            curl \
            wget \
            nodejs \
            npm

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

WORKDIR /var/www

COPY .  /var/www
