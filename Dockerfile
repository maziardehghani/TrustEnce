FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    git \
    libssl-dev \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# خاموش کردن ارورهای deprecation
RUN echo "error_reporting = E_ALL & ~E_DEPRECATED & ~E_NOTICE" >> /usr/local/etc/php/conf.d/error_reporting.ini

# نصب Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

# نصب Composer dependencies بدون اجرای scriptها
RUN composer install --no-scripts --no-interaction --prefer-dist

# اجرای artisan دستورات بعد از نصب
RUN php artisan package:discover --ansi || true

RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www

ARG UID=1000
ARG GID=1000

RUN addgroup --gid $GID appgroup \
    && adduser --disabled-password --gecos "" --uid $UID --gid $GID appuser

RUN chown -R appuser:appgroup /var/www

USER appuser

EXPOSE 9000

CMD ["php-fpm"]
