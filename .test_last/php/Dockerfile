FROM php:5.6-apache

MAINTAINER Eugene Sawfly aka Yevgeniy Trach <eugene.sawfly@gmail.com>

RUN docker-php-ext-install mysqli
COPY ./php.ini /usr/local/etc/php/
COPY ./test_last_app.conf /etc/apache2/sites-available/
RUN a2ensite test_last_app.conf
WORKDIR /var/www/test_last.app/public

EXPOSE 80 443
