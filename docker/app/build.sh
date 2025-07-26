#!/bin/sh
set -e

echo "Setting permissions..."
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

composer install
npm install

echo "Running artisan commands..."
php /var/www/html/artisan migrate
php /var/www/html/artisan config:cache
php /var/www/html/artisan route:cache
# Thêm lệnh artisan khác nếu cần


echo "Done artisan tasks."
