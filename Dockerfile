FROM php:8.1-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite

COPY . /var/www/html/

RUN mkdir -p /var/www/html/runtime/session /var/www/html/runtime/logs /var/www/html/runtime/cache /var/www/html/runtime/security \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/runtime \
    && chmod 0700 /var/www/html/runtime/session

EXPOSE 80