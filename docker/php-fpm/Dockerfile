FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
        libbz2-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        libicu-dev \
        icu-devtools \
        libxml2-dev \
        libssl-dev \
        libcurl3-openssl-dev \
        libevent-dev \
        libxslt-dev \
        ca-certificates \
        curl \
        wget \
        git \
        mc \
    && docker-php-ext-install -j$(nproc) bcmath bz2 calendar curl exif ftp gd gettext intl mysqli opcache pcntl pdo_mysql shmop simplexml soap sockets tokenizer xsl zip \
    && docker-php-ext-enable bcmath bz2 calendar curl exif ftp gd gettext intl mysqli opcache pcntl pdo_mysql shmop simplexml soap sockets tokenizer xsl zip \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-enable gd \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && rm -rf /var/lib/apt/lists/*

RUN chmod 777 /tmp
RUN mkdir /var/www/.composer
RUN chmod 777 /var/www/.composer
RUN chown www-data:www-data /var/www/.composer

USER www-data

WORKDIR /var/www/dnd.localhost/