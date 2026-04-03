#!/bin/bash
set -e

# Ensure Laravel storage directory structure exists.
# Needed when a named Docker volume is mounted over storage/ (starts empty).
mkdir -p \
    storage/app/public \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs

chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Run only for the main php-fpm container, not for queue workers
if [ "${1}" = "php-fpm" ]; then
    echo "[entrypoint] Running database migrations..."
    php artisan migrate --force

    echo "[entrypoint] Caching config / routes / views..."
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache

    echo "[entrypoint] Application ready."
fi

exec "$@"
