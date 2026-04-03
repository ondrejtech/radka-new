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

# Always regenerate package discovery cache (removes stale dev providers)
echo "[entrypoint] Caching config / routes..."
php artisan config:cache
php artisan route:cache

# Run migrations only for the main php-fpm container
if [ "${1}" = "php-fpm" ]; then
    echo "[entrypoint] Running database migrations..."
    php artisan migrate --force
    echo "[entrypoint] Application ready."
fi

exec "$@"
