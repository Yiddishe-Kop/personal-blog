#!/bin/bash
# cd /var/www/torah/
# whoami
echo $PATH

# activate maintenance mode
php artisan down

# update source code
git reset --hard HEAD
git pull

# npm run build
# update PHP dependencies
#composer install --no-interaction --no-dev --prefer-dist
# --no-interaction Do not ask any interactive question
# --no-dev  Disables installation of require-dev packages.
# --prefer-dist  Forces installation from package dist even for dev versions.# update database
php artisan migrate --force
# --force  Required to run when in production.# stop maintenance mode
php artisan up
