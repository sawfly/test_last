FROM debian:jessie
MAINTAINER Eugene Sawfly aka Yevgeniy Trach <eugene.sawfly@gmail.com>

RUN apt-get update && apt-get upgrade
RUN apt-get install -y nano \
                       php5 \
                       php5-fpm \
                       curl \
                       php5-cli \
                       php5-gd \
                       php5-mysql \
                       git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ARG PATH_TO_PROJECT

RUN bash
WORKDIR $PATH_TO_PROJECT