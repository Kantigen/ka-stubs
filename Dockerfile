FROM php:8.0-apache
RUN a2enmod rewrite
RUN a2enmod headers
