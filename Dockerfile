FROM php:8.4-fpm

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    libpq-dev \
    && docker-php-ext-install zip pdo pdo_pgsql

# Install NodeJS and npm
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Composer install
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www/html

RUN composer install

RUN npm install && npm run build

RUN chown -R www-data:www-data /var/www/html
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
