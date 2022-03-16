FROM php:8-apache

ENV APPLICATION_NAME=Harpia
RUN echo "ServerName ${APPLICATION_NAME}" >> /etc/apache2/apache2.conf

ENV APACHE_DOCUMENT_ROOT=/var/www/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/conf-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

RUN apt update && apt install -y \
    sudo \
    npm \
    nodejs \
    zip \
    unzip \
    curl \
    libicu-dev \
    libbz2-dev \
    libpng-dev \
    libjpeg-dev \
    libmcrypt-dev \
    libreadline-dev \
    libfreetype6-dev \
    g++

RUN a2enmod rewrite headers

RUN docker-php-ext-install \
    bz2 \
    intl \
    iconv \
    bcmath \
    opcache \
    calendar \
    pdo_mysql

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

RUN chown -R www-data:www-data /var/www
