#!/bin/sh

FROM prooph/composer:7.2

WORKDIR /usr/src/app

COPY ./ ./

RUN composer install

RUN vendor/bin/mftf build:project
