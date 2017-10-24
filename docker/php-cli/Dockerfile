FROM php:7.1-cli

RUN apt-get update && apt-get install -y curl git

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

ENTRYPOINT ["tail", "-f", "/dev/null"]