FROM php:8.1-apache

# Install MySQL extensions for PHP
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy project files to Apache root
COPY . /var/www/html/

EXPOSE 80