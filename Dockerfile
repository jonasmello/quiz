FROM php:7.1-apache

ADD . /app

RUN apt-get update && \
    apt-get install \
    git zip unzip \
    -y --no-install-recommends

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN a2enmod rewrite

RUN cp /app/.docker/apache2/sites-available/000-default.conf /etc/apache2/sites-available/

RUN service apache2 restart

WORKDIR /var/www/html

