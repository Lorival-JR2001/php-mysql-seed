FROM php:8.1-apache
COPY apache/000-default.conf /etc/apache2/sites-available/000-default.conf
RUN docker-php-ext-install mysqli && a2enmod rewrite
