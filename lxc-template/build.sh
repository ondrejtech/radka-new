#!/usr/bin/env bash
# =============================================================
# Builds a Proxmox LXC template (tar.gz rootfs) for techdomov.
# Run as root on the Proxmox host.
#
# Usage:
#   bash build.sh [output-path]
#
# Default output: /var/lib/vz/template/cache/debian-13-techdomov_YYYYMMDD_amd64.tar.gz
# =============================================================
set -euo pipefail

# ── Paths ─────────────────────────────────────────────────────
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
PROJECT_DIR="$(cd "$SCRIPT_DIR/.." && pwd)"
ROOTFS="/tmp/techdomov-rootfs"
OUTPUT="${1:-/var/lib/vz/template/cache/debian-13-techdomov_$(date +%Y%m%d)_amd64.tar.gz}"
PMA_VERSION="5.2.1"

# ── Helpers ───────────────────────────────────────────────────
_log()  { printf '\e[32m[BUILD]\e[0m %s\n' "$*"; }
_warn() { printf '\e[33m[WARN]\e[0m %s\n'  "$*"; }
_err()  { printf '\e[31m[ERROR]\e[0m %s\n' "$*" >&2; exit 1; }
chr()      { chroot "$ROOTFS" "$@"; }
chr_env()  { chroot "$ROOTFS" env DEBIAN_FRONTEND=noninteractive "$@"; }

# ── Pre-flight checks ─────────────────────────────────────────
[[ $EUID -eq 0 ]] || _err "Must be run as root"

command -v debootstrap >/dev/null || { _log "Installing debootstrap..."; apt-get install -y debootstrap; }
command -v rsync       >/dev/null || { _log "Installing rsync...";       apt-get install -y rsync; }

[[ -f "$PROJECT_DIR/.env.production" ]] || _err ".env.production not found in project root"
[[ -d "$PROJECT_DIR/public/build" ]]    || _err "public/build/ missing — run 'npm run build' in the project first"

_log "Project: $PROJECT_DIR"
_log "Output:  $OUTPUT"

# ── Cleanup on exit ───────────────────────────────────────────
cleanup() {
    _log "Unmounting pseudo-filesystems..."
    for mp in proc sys dev/pts dev/shm dev; do
        mountpoint -q "$ROOTFS/$mp" 2>/dev/null && umount -lf "$ROOTFS/$mp" || true
    done
}
trap cleanup EXIT

# ── Step 1: Bootstrap Debian 13 (trixie) ─────────────────────
_log "Step 1: Bootstrapping Debian 13 (trixie) — this takes a few minutes..."
if [[ -d "$ROOTFS" ]]; then
    for mp in proc sys dev/pts dev; do
        mountpoint -q "$ROOTFS/$mp" 2>/dev/null && umount -lf "$ROOTFS/$mp" || true
    done
    rm -rf "$ROOTFS"
fi
debootstrap --arch=amd64 trixie "$ROOTFS" http://deb.debian.org/debian

# ── Step 2: Mount pseudo-filesystems ─────────────────────────
mount -t proc   proc    "$ROOTFS/proc"
mount -t sysfs  sysfs   "$ROOTFS/sys"

# Use isolated tmpfs for /dev — never bind-mount host /dev (would corrupt host device nodes)
mount -t tmpfs tmpfs "$ROOTFS/dev"
mknod -m 666 "$ROOTFS/dev/null"    c 1 3
mknod -m 666 "$ROOTFS/dev/zero"    c 1 5
mknod -m 666 "$ROOTFS/dev/random"  c 1 8
mknod -m 666 "$ROOTFS/dev/urandom" c 1 9
mknod -m 666 "$ROOTFS/dev/tty"     c 5 0
mknod -m 620 "$ROOTFS/dev/tty0"    c 4 0
ln -s /proc/self/fd   "$ROOTFS/dev/fd"
ln -s /proc/self/fd/0 "$ROOTFS/dev/stdin"
ln -s /proc/self/fd/1 "$ROOTFS/dev/stdout"
ln -s /proc/self/fd/2 "$ROOTFS/dev/stderr"
mkdir -p "$ROOTFS/dev/pts" "$ROOTFS/dev/shm"
mount -t devpts devpts "$ROOTFS/dev/pts" -o gid=5,mode=620
mount -t tmpfs  tmpfs  "$ROOTFS/dev/shm"

# Forward DNS into chroot
cp /etc/resolv.conf "$ROOTFS/etc/resolv.conf"

# ── Step 3: Base system config ────────────────────────────────
_log "Step 3: Configuring base system..."

echo "techdomov" > "$ROOTFS/etc/hostname"
ln -sf /usr/share/zoneinfo/Europe/Prague "$ROOTFS/etc/localtime"
echo "Europe/Prague" > "$ROOTFS/etc/timezone"

cat > "$ROOTFS/etc/network/interfaces" <<'EOF'
auto lo
iface lo inet loopback

auto eth0
iface eth0 inet dhcp
EOF

cat > "$ROOTFS/etc/fstab" <<'EOF'
# LXC — managed by Proxmox
EOF

# ── Step 4: Add PHP 8.4 and MySQL 8.0 repos ──────────────────
_log "Step 4: Adding PHP 8.4 (sury.org) and MySQL 8.0 repositories..."

chr_env apt-get update -qq
chr_env apt-get install -y --no-install-recommends \
    ca-certificates curl gnupg lsb-release apt-transport-https wget

# PHP 8.4 — packages.sury.org
chr bash -c 'curl -sSLo /tmp/debsuryorg-keyring.deb https://packages.sury.org/debsuryorg-archive-keyring.deb && dpkg -i /tmp/debsuryorg-keyring.deb' \
    || _err "Failed to install sury.org keyring"
echo "deb [signed-by=/usr/share/keyrings/deb.sury.org-php.gpg] https://packages.sury.org/php/ trixie main" \
    > "$ROOTFS/etc/apt/sources.list.d/php.list"

# MySQL 8.0 — instalace z .deb bundle (obejde expirovaný GPG klíč)
_log "Downloading MySQL 8.0 deb bundle..."
mkdir -p "$ROOTFS/tmp/mysql-debs"
wget -q --content-disposition -O "$ROOTFS/tmp/mysql-bundle.tar" \
    "https://cdn.mysql.com//archives/mysql-8.0/mysql-server_8.0.42-1debian12_amd64.deb-bundle.tar" \
    || _err "Failed to download MySQL bundle — check internet connectivity"
tar xf "$ROOTFS/tmp/mysql-bundle.tar" -C "$ROOTFS/tmp/mysql-debs/"

chr_env apt-get update -qq

# ── Step 5: Install packages ──────────────────────────────────
_log "Step 5: Installing packages (takes several minutes)..."

chr_env apt-get install -y --no-install-recommends \
    systemd systemd-sysv dbus \
    nginx \
    php8.4-fpm php8.4-cli \
    php8.4-bcmath php8.4-gd php8.4-intl php8.4-mbstring \
    php8.4-opcache php8.4-mysql php8.4-redis \
    php8.4-xml php8.4-zip php8.4-curl \
    composer \
    unzip curl wget rsync \
    logrotate cron \
    equivs libaio1t64 libnuma1 libmecab2 perl

# Debian 13 (trixie) compat: libaio1t64 was renamed from libaio1 and does NOT provide
# the libaio1 virtual package. MySQL debian12 bundle depends on libaio1, so we create
# a compatibility stub + symlink so MySQL can be installed and run on trixie.
chr bash -c '
    # Runtime symlink: MySQL binary links against libaio.so.1, trixie only has libaio.so.1t64
    ln -sf libaio.so.1t64 /usr/lib/x86_64-linux-gnu/libaio.so.1

    # Create equivs stub so dpkg considers libaio1 satisfied
    cat > /tmp/libaio1-compat.ctl <<EOF
Section: libs
Priority: optional
Standards-Version: 4.5.1
Package: libaio1
Version: 0.3.113-8+compat1
Architecture: amd64
Maintainer: Compat <root@localhost>
Depends: libaio1t64
Description: Debian 13 compatibility stub for libaio1 -> libaio1t64
EOF
    cd /tmp && equivs-build /tmp/libaio1-compat.ctl 2>&1
    dpkg -i /tmp/libaio1_0.3.113-8+compat1_amd64.deb 2>&1 || dpkg -i /tmp/libaio1*.deb 2>&1
'

# MySQL 8.0 — instalace z lokálních .deb souborů ve správném pořadí
_log "Step 5b: Installing MySQL 8.0 from deb bundle..."

# Zabrání spuštění služeb během dpkg (standardní praxe při chroot builds)
echo '#!/bin/sh
exit 101' > "$ROOTFS/usr/sbin/policy-rc.d"
chmod +x "$ROOTFS/usr/sbin/policy-rc.d"

# Pre-seed debconf — odpovědi na MySQL dialogy před instalací
chr bash -c 'cat <<EOF | debconf-set-selections
mysql-community-server mysql-community-server/root-pass       password
mysql-community-server mysql-community-server/re-root-pass    password
mysql-community-server mysql-server/default-auth-override     select Use Strong Password Encryption (RECOMMENDED)
EOF'

chr bash -c "
    cd /tmp/mysql-debs
    DEBIAN_FRONTEND=noninteractive dpkg -i \
        mysql-common_*.deb \
        mysql-community-client-plugins_*.deb \
        mysql-community-client-core_*.deb \
        mysql-community-client_*.deb \
        mysql-client_*.deb \
        mysql-community-server-core_*.deb \
        mysql-community-server_*.deb \
        mysql-server_*.deb 2>&1 || true
    DEBIAN_FRONTEND=noninteractive apt-get install -f -y 2>&1 || true
    rm -rf /tmp/mysql-debs /tmp/mysql-bundle.tar
"

# Obnov normální chování služeb
rm -f "$ROOTFS/usr/sbin/policy-rc.d"

# ── Step 6: Copy project files ────────────────────────────────
_log "Step 6: Copying project files..."

mkdir -p "$ROOTFS/var/www/html"
rsync -a --delete \
    --exclude='.git' \
    --exclude='.env' \
    --exclude='.env.*' \
    --exclude='node_modules' \
    --exclude='vendor' \
    --exclude='lxc-template' \
    --exclude='storage/logs/*' \
    --exclude='storage/framework/cache/data/*' \
    --exclude='storage/framework/sessions/*' \
    --exclude='storage/framework/views/*' \
    --exclude='bootstrap/cache/*.php' \
    "$PROJECT_DIR/" "$ROOTFS/var/www/html/"

# Zkopíruj .env.production jako .env a oprav DB_HOST (Docker hostname → localhost)
_log "Step 6b: Deploying .env.production as .env (DB_HOST: db → 127.0.0.1)..."
sed 's/^DB_HOST=db$/DB_HOST=127.0.0.1/' "$PROJECT_DIR/.env.production" \
    > "$ROOTFS/var/www/html/.env"
chr chown www-data:www-data /var/www/html/.env
chr chmod 640 /var/www/html/.env

# Spusť composer install uvnitř chrootu — závislosti jsou buildnuty pro cílové PHP 8.4
_log "Step 6c: Running composer install inside chroot..."
chr bash -c "
    cd /var/www/html
    composer install \
        --no-dev \
        --optimize-autoloader \
        --no-scripts \
        --no-interaction \
        --quiet
"

# Ensure storage directory structure exists
mkdir -p \
    "$ROOTFS/var/www/html/storage/app/public" \
    "$ROOTFS/var/www/html/storage/framework/cache/data" \
    "$ROOTFS/var/www/html/storage/framework/sessions" \
    "$ROOTFS/var/www/html/storage/framework/views" \
    "$ROOTFS/var/www/html/storage/logs"

chr chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chr chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# ── Step 7: Install phpMyAdmin ────────────────────────────────
_log "Step 7: Installing phpMyAdmin ${PMA_VERSION}..."

chr bash -c "
    wget -q -O /tmp/pma.tar.gz \
        'https://files.phpmyadmin.net/phpMyAdmin/${PMA_VERSION}/phpMyAdmin-${PMA_VERSION}-all-languages.tar.gz'
    tar -xzf /tmp/pma.tar.gz -C /var/www/
    mv /var/www/phpMyAdmin-${PMA_VERSION}-all-languages /var/www/phpmyadmin
    rm /tmp/pma.tar.gz
    chown -R www-data:www-data /var/www/phpmyadmin
    chmod -R 755 /var/www/phpmyadmin
"

# phpMyAdmin runtime config
chr bash -c "
    mkdir -p /var/www/phpmyadmin/tmp
    chown www-data:www-data /var/www/phpmyadmin/tmp
"
cp "$SCRIPT_DIR/config/phpmyadmin.php" "$ROOTFS/var/www/phpmyadmin/config.inc.php"

# ── Step 8: Place config files ────────────────────────────────
_log "Step 8: Installing config files..."

# Remove default nginx site
rm -f "$ROOTFS/etc/nginx/sites-enabled/default"
rm -f "$ROOTFS/etc/nginx/conf.d/default.conf"

cp "$SCRIPT_DIR/config/nginx-app.conf"     "$ROOTFS/etc/nginx/conf.d/techdomov.conf"
cp "$SCRIPT_DIR/config/nginx-pma.conf"     "$ROOTFS/etc/nginx/conf.d/phpmyadmin.conf"
cp "$SCRIPT_DIR/config/php.ini"            "$ROOTFS/etc/php/8.4/fpm/conf.d/99-app.ini"
cp "$SCRIPT_DIR/config/php-fpm-www.conf"   "$ROOTFS/etc/php/8.4/fpm/pool.d/www.conf"

# ── Step 9: Systemd services ──────────────────────────────────
_log "Step 9: Installing systemd services..."

cp "$SCRIPT_DIR/systemd/laravel-queue.service"        "$ROOTFS/etc/systemd/system/"
cp "$SCRIPT_DIR/systemd/laravel-scheduler.service"    "$ROOTFS/etc/systemd/system/"
cp "$SCRIPT_DIR/systemd/laravel-scheduler.timer"      "$ROOTFS/etc/systemd/system/"
cp "$SCRIPT_DIR/systemd/techdomov-firstboot.service"  "$ROOTFS/etc/systemd/system/"

systemctl --root="$ROOTFS" enable \
    nginx \
    php8.4-fpm \
    mysql \
    laravel-queue \
    laravel-scheduler.timer \
    techdomov-firstboot

# ── Step 10: First-boot setup script ─────────────────────────
_log "Step 10: Installing first-boot setup script..."

cp "$SCRIPT_DIR/first-boot.sh" "$ROOTFS/usr/local/sbin/techdomov-setup.sh"
chr chmod +x /usr/local/sbin/techdomov-setup.sh

# Nginx a laravel-queue startují až po dokončení firstboot setupu
mkdir -p "$ROOTFS/etc/systemd/system/nginx.service.d"
cat > "$ROOTFS/etc/systemd/system/nginx.service.d/after-firstboot.conf" <<'EOF'
[Unit]
After=techdomov-firstboot.service
Wants=techdomov-firstboot.service
EOF

mkdir -p "$ROOTFS/etc/systemd/system/laravel-queue.service.d"
cat > "$ROOTFS/etc/systemd/system/laravel-queue.service.d/after-firstboot.conf" <<'EOF'
[Unit]
After=techdomov-firstboot.service
Wants=techdomov-firstboot.service
EOF

# ── Step 11: Cleanup ──────────────────────────────────────────
_log "Step 11: Cleaning up..."

chr_env apt-get clean
rm -rf \
    "$ROOTFS/tmp/"* \
    "$ROOTFS/var/cache/apt/"* \
    "$ROOTFS/var/lib/apt/lists/"* \
    "$ROOTFS/var/log/"*.log \
    "$ROOTFS/var/log/apt" \
    "$ROOTFS/usr/share/doc" \
    "$ROOTFS/usr/share/man"

# Unmount (trap will also handle this)
for mp in proc sys dev/pts dev/shm dev; do
    mountpoint -q "$ROOTFS/$mp" 2>/dev/null && umount -lf "$ROOTFS/$mp" || true
done

# ── Step 12: Create tar.gz ────────────────────────────────────
_log "Step 12: Creating tar archive..."

mkdir -p "$(dirname "$OUTPUT")"
tar --numeric-owner -czf "$OUTPUT" -C "$ROOTFS" .

_log "Done! Template: $OUTPUT"
_log ""
_log "Proxmox: upload to /var/lib/vz/template/cache/"
_log "Create container, then inside run: /usr/local/sbin/techdomov-setup.sh"
