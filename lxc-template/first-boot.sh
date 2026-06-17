#!/usr/bin/env bash
# =============================================================
# techdomov first-boot setup
# Run once inside the LXC container after creation.
#
# What it does:
#   1. Nastaví MySQL root heslo + vytvoří DB a uživatele
#   2. Importuje edsystem.sql (pokud existuje)
#   3. Vygeneruje APP_KEY, spustí storage:link + migrate
# =============================================================
set -euo pipefail

APP_DIR="/var/www/html"
ENV_FILE="$APP_DIR/.env"
SQL_DUMP="$APP_DIR/storage/app/private/mysql/edsystem.sql"

_log()  { printf '\e[32m[SETUP]\e[0m %s\n' "$*"; }
_warn() { printf '\e[33m[WARN]\e[0m %s\n'  "$*"; }
_err()  { printf '\e[31m[ERROR]\e[0m %s\n' "$*" >&2; exit 1; }

[[ $EUID -eq 0 ]] || _err "Run as root"
[[ -f "$ENV_FILE" ]] || _err ".env not found at $ENV_FILE — template nebyl sestaven správně"

# ── 1. Načti .env ─────────────────────────────────────────────
_log "Reading .env..."
set -a
# shellcheck disable=SC1090
source "$ENV_FILE"
set +a

: "${DB_DATABASE:?DB_DATABASE not set in .env}"
: "${DB_USERNAME:?DB_USERNAME not set in .env}"
: "${DB_PASSWORD:?DB_PASSWORD not set in .env}"
: "${DB_ROOT_PASSWORD:?DB_ROOT_PASSWORD not set in .env}"

# ── 2. MySQL setup ────────────────────────────────────────────
_log "Waiting for MySQL to be ready..."
for i in {1..30}; do
    mysqladmin ping -h 127.0.0.1 --silent 2>/dev/null && break
    sleep 2
    [[ $i -eq 30 ]] && _err "MySQL did not start in time"
done

_log "Configuring MySQL root password and application user..."
# Fresh install: try root with no password first (--initialize-insecure),
# fall back to DB_ROOT_PASSWORD if already set
MYSQL_INIT_OPTS="-u root --socket=/var/run/mysqld/mysqld.sock"
if mysql $MYSQL_INIT_OPTS -e "SELECT 1;" >/dev/null 2>&1; then
    _log "Connected as root without password (fresh install)"
elif mysql $MYSQL_INIT_OPTS --password="${DB_ROOT_PASSWORD}" -e "SELECT 1;" >/dev/null 2>&1; then
    _log "Connected as root with DB_ROOT_PASSWORD"
    MYSQL_INIT_OPTS="$MYSQL_INIT_OPTS --password=${DB_ROOT_PASSWORD}"
else
    _err "Cannot connect to MySQL as root — check credentials"
fi
mysql $MYSQL_INIT_OPTS <<SQL
ALTER USER 'root'@'localhost' IDENTIFIED WITH caching_sha2_password BY '${DB_ROOT_PASSWORD}';
CREATE DATABASE IF NOT EXISTS \`${DB_DATABASE}\`
    CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER IF NOT EXISTS '${DB_USERNAME}'@'%' IDENTIFIED BY '${DB_PASSWORD}';
GRANT ALL PRIVILEGES ON \`${DB_DATABASE}\`.* TO '${DB_USERNAME}'@'%';
FLUSH PRIVILEGES;
SQL

# ── 3. Import edsystem.sql ────────────────────────────────────
# Drop and recreate DB to ensure clean import (idempotent re-runs)
mysql -h 127.0.0.1 -u root -p"${DB_ROOT_PASSWORD}" -e "DROP DATABASE IF EXISTS \`${DB_DATABASE}\`; CREATE DATABASE \`${DB_DATABASE}\` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

if [[ -f "$SQL_DUMP" ]]; then
    _log "Importing edsystem.sql (foreign key checks disabled)..."
    {
        echo "SET FOREIGN_KEY_CHECKS=0;"
        cat "$SQL_DUMP"
        echo "SET FOREIGN_KEY_CHECKS=1;"
    } | mysql -h 127.0.0.1 -u root -p"${DB_ROOT_PASSWORD}" "${DB_DATABASE}"
    _log "Import complete."
else
    _warn "edsystem.sql not found at $SQL_DUMP — skipping import"
fi

# ── 4. Laravel bootstrap ──────────────────────────────────────
_log "Running Laravel bootstrap as www-data..."

su -s /bin/bash www-data -c "
    cd $APP_DIR

    php artisan key:generate --force

    mkdir -p storage/app/public \
             storage/framework/cache/data \
             storage/framework/sessions \
             storage/framework/views \
             storage/logs

    php artisan storage:link --force
    php artisan config:cache
    php artisan route:cache
    php artisan migrate --force
"

# ── 5. Restart services ───────────────────────────────────────
_log "Starting services..."
systemctl restart php8.4-fpm nginx laravel-queue laravel-scheduler.timer

_log ""
_log "Setup complete!"
_log "  App:        http://$(hostname -I | awk '{print $1}'):8080"
_log "  phpMyAdmin: http://$(hostname -I | awk '{print $1}'):8081"
