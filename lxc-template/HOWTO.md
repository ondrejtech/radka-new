# Proxmox LXC Template — techdomov

Kompletní postup: sestavení šablony na lokálním PC → přenos na Proxmox → vytvoření kontejneru → spuštění aplikace.

---

## Architektura

```
Lokální PC (Linux, root)
  └─ lxc-template/build.sh
       └─ debian-13-techdomov_YYYYMMDD_amd64.tar.gz  (~375 MB)
            │
            │  scp
            ▼
         vps3 (kuber, 37.205.14.42)
            │
            │  scp
            ▼
          pve  (Proxmox VE, 192.168.122.213)
            └─ /var/lib/vz/template/cache/
                 └─ pct restore <CTID> template.tar.gz
                      └─ Nový LXC kontejner
                           └─ techdomov-firstboot.service (automaticky při prvním bootu)
                                └─ MySQL init + SQL import + laravel migrate → app běží
```

SSH přístup:
```bash
ssh vps3                 # kuber (37.205.14.42)
ssh pve                  # Proxmox VE (192.168.122.213) — z kuber
```

---

## Požadavky na lokální PC

- OS: **Linux** (Debian/Ubuntu) — macOS nepodporuje debootstrap nativně
- Přihlášen jako **root** (debootstrap a mount vyžadují root)
- Nainstalované balíčky:

```bash
sudo apt install debootstrap rsync curl wget
```

- **Node.js 22+** (pro `npm run build`):

```bash
curl -fsSL https://deb.nodesource.com/setup_22.x | sudo bash -
sudo apt install nodejs
```

> Composer není potřeba lokálně — `build.sh` spouští `composer install`
> uvnitř chrootu s PHP 8.4, takže závislosti odpovídají přesně cílovému prostředí.

---

## Krok 1 — Příprava projektu

Naklonuj repozitář a zbuilduj frontend assety:

```bash
git clone git@gitlab.com:petr9931705/eshop.git
cd eshop

# Frontend assety — musí existovat před buildem šablony
npm ci --ignore-scripts
npm run build

# Ověř výstup
ls public/build/   # musí existovat a obsahovat soubory
```

Zkontroluj, že existuje `.env.production`:

```bash
ls .env.production   # musí existovat
```

> `.env.production` se stane `.env` uvnitř kontejneru.
> `build.sh` automaticky opraví `DB_HOST=db` → `DB_HOST=127.0.0.1`.

---

## Krok 2 — Build šablony

Spusť jako **root**. Build trvá přibližně **15–25 minut** (debootstrap + stažení MySQL bundle + instalace balíčků).

```bash
sudo bash lxc-template/build.sh
```

Výchozí výstupní soubor: `/var/lib/vz/template/cache/debian-13-techdomov_YYYYMMDD_amd64.tar.gz`

Vlastní cesta:

```bash
sudo bash lxc-template/build.sh /tmp/debian-13-techdomov_amd64.tar.gz
```

### Co build.sh dělá (přehled kroků)

| Krok | Popis |
|------|-------|
| 1 | Bootstrapuje Debian 13 (trixie) do `/tmp/techdomov-rootfs` |
| 2 | Mountuje pseudo-filesystémy (proc, sysfs, izolovaný tmpfs pro /dev) |
| 3 | Konfiguruje hostname, timezone (Europe/Prague), síť (DHCP) |
| 4 | Přidává repozitáře PHP 8.4 (sury.org) a stahuje MySQL 8.0 deb bundle |
| 5 | Instaluje: Nginx, PHP 8.4-FPM, MySQL 8.0, Composer, equivs |
| 5b | Instaluje libaio1 compat stub (Debian 13 → MySQL 8.0 kompatibilita) |
| 5c | Instaluje MySQL 8.0 z lokálního deb bundle |
| 6 | Kopíruje kód projektu (bez vendor/, bez .env, bez storage dat) |
| 6b | Nasazuje `.env.production` jako `.env`, opravuje DB_HOST |
| 6c | Spouští `composer install --no-dev` uvnitř chrootu |
| 7 | Instaluje phpMyAdmin 5.2.1 |
| 8 | Kopíruje config soubory (nginx, php.ini, php-fpm) |
| 9 | Instaluje a povoluje systemd služby (nginx, php-fpm, mysql, laravel-queue, laravel-scheduler, firstboot) |
| 10 | Kopíruje first-boot.sh → `/usr/local/sbin/techdomov-setup.sh` |
| 11 | Čistí apt cache, tmp, logy, doc |
| 12 | Vytváří výsledný `.tar.gz` archiv |

### Kontrola buildu

Sleduj výstup — každý krok je ohlášen zeleně `[BUILD]`. Pokud skript selže, oprav chybu a spusť znovu (automaticky smaže předchozí rootfs).

---

## Krok 3 — Přenos šablony na Proxmox

### 3a — Nahrání na kuber (vps3)

```bash
scp /var/lib/vz/template/cache/debian-13-techdomov_$(date +%Y%m%d)_amd64.tar.gz \
    vps3:/tmp/debian-13-techdomov_amd64.tar.gz
```

> Soubor má ~375 MB, přenos trvá podle rychlosti připojení.

### 3b — Přesun z kuber na Proxmox (pve)

Přihlaš se na kuber a přesuň na pve:

```bash
ssh vps3
scp /tmp/debian-13-techdomov_amd64.tar.gz \
    pve:/var/lib/vz/template/cache/debian-13-techdomov_amd64.tar.gz
rm /tmp/debian-13-techdomov_amd64.tar.gz
```

### 3c — Ověření na pve

```bash
ssh vps3
ssh pve
ls -lh /var/lib/vz/template/cache/debian-13-techdomov_amd64.tar.gz
```

---

## Krok 4 — Vytvoření LXC kontejneru

Přihlaš se na pve a vytvoř kontejner pomocí `pct restore`:

```bash
ssh vps3
ssh pve

pct restore <CTID> /var/lib/vz/template/cache/debian-13-techdomov_amd64.tar.gz \
    --hostname multishoping.eu \
    --rootfs local-lvm:<velikost_GB> \
    --memory <RAM_MB> \
    --cores <pocet_jader> \
    --net0 name=eth0,bridge=vmbr0,tag=10,ip=10.0.0.<X>/24,gw=10.0.0.1,type=veth \
    --nameserver 8.8.8.8 \
    --features nesting=1 \
    --unprivileged 1
```

**Parametry pro produkci (CT108):**

```bash
pct restore 108 /var/lib/vz/template/cache/debian-13-techdomov_amd64.tar.gz \
    --hostname multishoping.eu \
    --rootfs local-lvm:32 \
    --memory 4096 \
    --cores 2 \
    --net0 name=eth0,bridge=vmbr0,tag=10,ip=10.0.0.19/24,gw=10.0.0.1,type=veth \
    --nameserver 8.8.8.8 \
    --features nesting=1 \
    --unprivileged 1
```

> **Poznámka:** `tag=10` = VLAN 10, IP musí být volná v rozsahu `10.0.0.0/24`.
> Zkontroluj obsazené IP: `pct list` + `grep ip /etc/pve/lxc/*.conf`

### Spuštění kontejneru

```bash
pct start 108
pct status 108   # → running
```

---

## Krok 5 — First-boot setup (automatický)

Po spuštění kontejneru **techdomov-firstboot.service** proběhne automaticky.

### Sledování průběhu

```bash
# Z pve:
pct exec 108 -- journalctl -u techdomov-firstboot -f
```

Výstup bude vypadat přibližně takto:

```
[SETUP] Reading .env...
[SETUP] Waiting for MySQL to be ready...
[SETUP] Configuring MySQL root password and application user...
[SETUP] Connected as root without password (fresh install)
[SETUP] Importing edsystem.sql (foreign key checks disabled)...
[SETUP] Import complete.
[SETUP] Running Laravel bootstrap as www-data...
   INFO  Application key set successfully.
   INFO  Configuration cached successfully.
   INFO  Routes cached successfully.
   INFO  Running migrations.
[SETUP] Starting services...
[SETUP] Setup complete!
[SETUP]   App:        http://10.0.0.19:8080
[SETUP]   phpMyAdmin: http://10.0.0.19:8081
```

### Co firstboot provede

1. Načte hodnoty z `/var/www/html/.env`
2. Počká až MySQL nastartuje (max 60 sekund)
3. Nastaví MySQL root heslo (z `DB_ROOT_PASSWORD` v .env)
4. Vytvoří databázi a aplikačního uživatele
5. Smaže a znovu vytvoří DB (idempotentní re-run)
6. Importuje `storage/app/private/mysql/edsystem.sql` (pokud existuje)
7. Spustí Laravel bootstrap jako `www-data`:
   - `php artisan key:generate --force`
   - `php artisan storage:link --force`
   - `php artisan config:cache`
   - `php artisan route:cache`
   - `php artisan migrate --force`
8. Nastartuje: nginx, php8.4-fpm, laravel-queue, laravel-scheduler.timer

> Nginx a laravel-queue čekají na dokončení firstboot přes systemd závislost.
> Setup se spustí **pouze jednou** — flag soubor `/var/lib/techdomov/.setup-done`.

### Ruční opakování setupu (v případě chyby)

```bash
pct exec 108 -- bash -c "rm -f /var/lib/techdomov/.setup-done && systemctl restart techdomov-firstboot"
pct exec 108 -- journalctl -u techdomov-firstboot -f
```

### Ruční spuštění setupu okamžitě

```bash
pct exec 108 -- bash /usr/local/sbin/techdomov-setup.sh
```

---

## Krok 6 — Ověření funkčnosti

```bash
# HTTP odpověď
curl -s -o /dev/null -w "%{http_code}" http://10.0.0.19:8080
# → 200 nebo 302

# Stav služeb
pct exec 108 -- systemctl status nginx php8.4-fpm mysql laravel-queue
```

---

## Krok 7 — Nginx Proxy Manager (SSL + reverse proxy)

NPM běží v CT100 (10.0.0.20), dostupné na `http://37.205.14.42:81`.

### Přidat proxy host

1. Přihlaš se do NPM (`http://37.205.14.42:81`)
2. **Hosts → Proxy Hosts → Add Proxy Host**
3. **Details:**
   - Domain Names: `multishoping.eu`
   - Scheme: `http`
   - Forward Hostname / IP: `10.0.0.19`
   - Forward Port: `8080`
   - Websockets Support: zapnout
4. **SSL tab:**
   - SSL Certificate: Request a new Certificate
   - Force SSL: zapnout
   - I Agree to the Let's Encrypt ToS: zaškrtnout
5. Uložit

> **Předpoklad pro Let's Encrypt:** `multishoping.eu` musí v DNS ukazovat na `37.205.14.42`.
> Ověř: `dig multishoping.eu +short` → musí vrátit `37.205.14.42`.

---

## Služby v kontejneru

| Služba | Popis | Port/Socket |
|--------|-------|-------------|
| `nginx` | Webserver | 8080 (app), 8081 (phpMyAdmin) |
| `php8.4-fpm` | PHP FastCGI | `/run/php/php8.4-fpm.sock` |
| `mysql` | MySQL 8.0 | 3306 (pouze localhost) |
| `laravel-queue` | Queue worker | — |
| `laravel-scheduler.timer` | Cron (minutely) | — |

```bash
# Správa ze hosta (pve):
pct exec 108 -- systemctl status laravel-queue
pct exec 108 -- journalctl -u laravel-queue -f

# Shell uvnitř kontejneru:
pct enter 108
```

---

## Aktualizace šablony (nový build)

Při každé změně kódu projdi celý postup od kroku 2:

```bash
# 1. Aktualizuj kód a frontend
git pull
npm run build

# 2. Spusť build (přepíše předchozí rootfs)
sudo bash lxc-template/build.sh /tmp/debian-13-techdomov_amd64.tar.gz

# 3. Přenos na Proxmox
scp /tmp/debian-13-techdomov_amd64.tar.gz vps3:/tmp/
ssh vps3 "scp /tmp/debian-13-techdomov_amd64.tar.gz pve:/var/lib/vz/template/cache/ && rm /tmp/debian-13-techdomov_amd64.tar.gz"

# 4. Vytvoř nový CT (nebo smaž starý a obnov)
ssh vps3
ssh pve
pct stop 108 && pct destroy 108
pct restore 108 /var/lib/vz/template/cache/debian-13-techdomov_amd64.tar.gz \
    --hostname multishoping.eu --rootfs local-lvm:32 --memory 4096 --cores 2 \
    --net0 name=eth0,bridge=vmbr0,tag=10,ip=10.0.0.19/24,gw=10.0.0.1,type=veth \
    --nameserver 8.8.8.8 --features nesting=1 --unprivileged 1
pct start 108
```

---

## Struktura lxc-template/

```
lxc-template/
├── build.sh                        ← sestavení rootfs (spustit jako root)
├── upload.sh                       ← nahrání na GitLab Package Registry
├── first-boot.sh                   ← setup uvnitř kontejneru
├── HOWTO.md                        ← tento dokument
├── config/
│   ├── nginx-app.conf              ← Nginx vhost port 8080 (Laravel app)
│   ├── nginx-pma.conf              ← Nginx vhost port 8081 (phpMyAdmin)
│   ├── php.ini                     ← PHP produkční nastavení
│   ├── php-fpm-www.conf            ← PHP-FPM pool konfigurace
│   └── phpmyadmin.php              ← phpMyAdmin config.inc.php
└── systemd/
    ├── techdomov-firstboot.service ← automatický setup při prvním bootu
    ├── laravel-queue.service       ← queue:work worker
    ├── laravel-scheduler.service   ← schedule:run
    └── laravel-scheduler.timer     ← minutový timer pro scheduler
```

---

## Řešení problémů

### MySQL se nespustil

```bash
pct exec 108 -- journalctl -u mysql -n 50
pct exec 108 -- cat /var/log/mysql/error.log | tail -20
```

### Firstboot selhal (Access denied)

MySQL root heslo mohlo být nastaveno při předchozím (neúspěšném) běhu:

```bash
pct exec 108 -- bash -c "
    mysqladmin -u root --socket=/var/run/mysqld/mysqld.sock ping 2>/dev/null \
        && echo 'no password' \
        || echo 'has password'
"
```

Pokud MySQL nereaguje vůbec — zkontroluj zda datadir existuje:

```bash
pct exec 108 -- ls /var/lib/mysql/
```

### Nginx vrací 502

```bash
pct exec 108 -- systemctl status php8.4-fpm
pct exec 108 -- php -v   # musí být PHP 8.4
```

### Aplikace se nenačítá (storage/views)

```bash
pct exec 108 -- su -s /bin/bash www-data -c "cd /var/www/html && php artisan view:clear && php artisan config:clear"
```
