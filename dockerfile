FROM php:8.2-fpm

RUN apt-get update && apt-get install -y libonig-dev libzip-dev unzip libpq-dev \
    && docker-php-ext-install pdo pdo_mysql zip


