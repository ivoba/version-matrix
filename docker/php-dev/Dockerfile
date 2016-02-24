FROM php:7-cli

RUN apt-get update &&\
    apt-get install -y unzip libz-dev git tar&&\
    rm -r /var/lib/apt/lists/*

RUN docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer&& \
         composer global require hirak/prestissimo

RUN usermod -u 1000 www-data

WORKDIR /app

EXPOSE 8000