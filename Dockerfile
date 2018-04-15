FROM php:5.6.35-apache 
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN apt-get update && \
    apt-get install nano
RUN a2enmod rewrite
