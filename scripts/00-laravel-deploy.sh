#!/usr/bin/env bash
echo 'Running composer'
# composer global require hirak/prestissimo
composer install
 
echo 'Caching config...'
php artisan config:cache
 
echo 'Caching routes...'
php artisan route:cache
 
echo 'Running migrations...'
php artisan migrate && php artisan migrate:fresh --seed