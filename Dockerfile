FROM php:8.1-cli

WORKDIR /var/www/html

COPY . .

RUN apt-get update && apt-get install -y unzip curl \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

CMD ["php", "-S", "0.0.0.0:80", "-t", "."]
