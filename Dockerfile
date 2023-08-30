FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libmcrypt-dev \
    libzip-dev \
    && docker-php-ext-install -j$(nproc) mysqli pdo_mysql gd zip
