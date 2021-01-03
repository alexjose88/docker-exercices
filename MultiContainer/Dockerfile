FROM composer as backend

WORKDIR /app

COPY composer.json composer.lock /app/

RUN composer install \
    --ignore-platform-reqs \
    --no-ansi \
    --no-autoloader \
    --no-dev \
    --no-interaction \
    --no-scripts

COPY . /app

RUN composer dump-autoload --no-dev --optimize --classmap-authoritative

FROM php:7.3-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

WORKDIR /app

COPY --from=backend /app /var/www/html/
COPY index.php /var/www/html/