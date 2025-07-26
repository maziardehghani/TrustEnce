FROM php:8.2-apache


RUN apt-get update && apt-get install -y \
    libzip-dev unzip zip git curl \
    && docker-php-ext-install pdo_mysql zip


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


COPY . /var/www/html


RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

WORKDIR /var/www/html

RUN composer install

CMD ["apache2-foreground"]
