# docker/php/Dockerfile

FROM php:8.2-fpm-alpine

# Cài extension PHP cần thiết
RUN apk add --no-cache zip unzip git libzip-dev libpng-dev oniguruma-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql zip mbstring exif pcntl bcmath gd

# Copy composer từ image composer chính thức
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy toàn bộ code Laravel vào image
COPY . /var/www/html

# Cài dependencies composer
RUN composer install --no-dev --optimize-autoloader

# Quyền cho storage và bootstrap cache
RUN chown -R www-data:www-data storage bootstrap/cache

# Copy script build.sh vào container
COPY docker/app/build.sh /usr/local/bin/build.sh
RUN chmod +x /usr/local/bin/build.sh

# Expose port php-fpm
EXPOSE 9000
# lệnh chạy sau khi container running
# sudo chmod -R 777 storage bootstrap/cache
CMD ["php-fpm"]
