# Proxmox LXC Template — techdomov

Tento dokument popisuje celý proces: sestavení template na lokálním PC,
nahrání na GitLab a stažení do Proxmox VE 9.1.

---

## Přehled

```
Lokální PC
  └─ build.sh        → debian-12-techdomov_amd64.tar.gz
  └─ upload.sh       → GitLab Package Registry (gitlab.ozelina.eu)
                              ↓
                       Proxmox VE 9.1
                         CT Templates → Download from URL
                              ↓
                       Nový LXC kontejner
                         /usr/local/sbin/techdomov-setup.sh
```

---

## Požadavky

### Lokální PC (Linux — Debian / Ubuntu)
| Balíček | Instalace |
|---|---|
| debootstrap | `sudo apt install debootstrap` |
| rsync | `sudo apt install rsync` |
| curl | `sudo apt install curl` |
| Node.js 22+ | https://nodejs.org |

> **Composer není potřeba lokálně** — `build.sh` spouští `composer install`
> přímo uvnitř chrootu, takže závislosti odpovídají přesně PHP 8.4 v kontejneru.

Skript musí běžet jako **root** (kvůli `debootstrap` a mountování pseudo-fs).

### GitLab (gitlab.ozelina.eu)
- Personal Access Token se scopem **`api`**
  - GitLab → User Settings → Access Tokens → Create

### Proxmox VE 9.1
- Storage `local` musí mít povolený typ **CT Templates**
  - Datacenter → Storage → local → Edit → Content → zaškrtnout `CT Templates`
- Přístup do sítě `192.168.192.0/18` (GitLab je na `192.168.201.109`)

---

## Krok 1 — Příprava projektu

Na lokálním PC naklonuj repozitář a připrav frontend assety:

```bash
git clone git@gitlab.ozelina.eu:proxmox/lxc/techdomov.git
cd techdomov

# Frontend assety (jediný krok potřebný lokálně)
npm ci --ignore-scripts
npm run build
```

Zkontroluj, že adresář existuje:
```bash
ls public/build/ # musí existovat
```

> `vendor/` nepotřebuješ připravovat lokálně — `build.sh` spustí
> `composer install` přímo uvnitř chrootu.

---

## Krok 2 — Build template

Spusť jako root. Build trvá přibližně **10–20 minut** (debootstrap + instalace balíčků).

```bash
sudo bash lxc-template/build.sh /tmp/debian-12-techdomov_amd64.tar.gz
```

Co skript dělá:
1. Vytvoří čistý Debian 12 rootfs pomocí `debootstrap`
2. Přidá repozitáře PHP 8.4 (sury.org) a MySQL 8.0
3. Nainstaluje: Nginx, PHP 8.4-FPM, MySQL 8.0, phpMyAdmin 5.2.1
4. Zkopíruje kód projektu (bez `vendor/`, bez `storage/` dat)
5. Zkopíruje `.env.production` jako `.env` a opraví `DB_HOST=db` → `DB_HOST=127.0.0.1`
6. Spustí `composer install --no-dev` uvnitř chrootu
7. Nainstaluje systemd služby (queue worker, scheduler)
8. Zabalí vše do `.tar.gz`

Výsledek: `/tmp/debian-12-techdomov_amd64.tar.gz`

---

## Krok 3 — Upload na GitLab

```bash
GITLAB_TOKEN=glpat-xxxx \
  bash lxc-template/upload.sh /tmp/debian-12-techdomov_amd64.tar.gz
```

Skript nahraje soubor do GitLab Package Registry pod fixním názvem `latest`.
**URL se nikdy nemění** — každý nový upload přepíše předchozí verzi.

Po dokončení skript vypíše hotovou URL pro Proxmox:
```
https://oauth2:glpat-xxxx@gitlab.ozelina.eu/api/v4/projects/proxmox%2Flxc%2Ftechdomov/packages/generic/lxc-template/latest/debian-12-techdomov_amd64.tar.gz
```

---

## Krok 4 — Stažení v Proxmox VE 9.1

1. Přihlaš se do Proxmox webového rozhraní
2. Navigace: **Datacenter → `<tvůj node>` → local → CT Templates**
3. Klikni na **Download from URL**
4. Vyplň:

| Pole | Hodnota |
|---|---|
| URL | viz výstup `upload.sh` (s tokenem v URL) |
| File name | `debian-12-techdomov_amd64.tar.gz` |
| Checksum algorithm | (nechej prázdné) |

5. Klikni **Download** — soubor se uloží do `/var/lib/vz/template/cache/`

> **Poznámka k SSL:** Pokud Proxmox hlásí chybu certifikátu (self-signed CA),
> zaškrtni v dialogu **"Skip TLS Verification"** nebo importuj CA certifikát
> GitLab instance do Proxmox hostu:
> ```bash
> # Na Proxmox hostu:
> openssl s_client -connect gitlab.ozelina.eu:443 </dev/null 2>/dev/null \
>   | openssl x509 -outform PEM \
>   > /usr/local/share/ca-certificates/gitlab-ozelina.crt
> update-ca-certificates
> ```

---

## Krok 5 — Vytvoření kontejneru z template

1. Proxmox → **Create CT**
2. **General:**
   - CT ID: (libovolné, např. `200`)
   - Hostname: `techdomov`
   - Password: nastav root heslo (potřebuješ ho pro první přihlášení)
3. **Template:** vyber `debian-12-techdomov_amd64.tar.gz`
4. **Disk:** doporučeno min. **20 GB**
5. **CPU:** min. 2 jádra
6. **Memory:** min. 1024 MB (doporučeno 2048 MB)
7. **Network:** přiřaď IP ze sítě `192.168.192.0/18`
8. Dokončit → **Start**

---

## Krok 6 — First-boot setup

`.env` je v kontejneru předpřipravený z `.env.production` — není potřeba nic konfigurovat ručně.

Přihlaš se (SSH nebo Proxmox console) a spusť setup skript:

```bash
/usr/local/sbin/techdomov-setup.sh
```

Co setup skript provede:
1. Nastaví MySQL root heslo a vytvoří DB + uživatele (hodnoty bere z `.env`)
2. Importuje `edsystem.sql` (pokud existuje v `storage/app/private/mysql/`)
3. Vygeneruje nový `APP_KEY` (unikátní pro tento kontejner)
4. Spustí `php artisan storage:link`, `config:cache`, `route:cache`, `migrate`
5. Restartuje Nginx, PHP-FPM a queue worker
6. Vypíše URL aplikace a phpMyAdmin

---

## Služby v kontejneru

| Služba | Popis | Port |
|---|---|---|
| `nginx` | Webserver | 8080 (app), 8081 (phpMyAdmin) |
| `php8.4-fpm` | PHP FastCGI | unix socket |
| `mysql` | MySQL 8.0 | 3306 (pouze localhost) |
| `laravel-queue` | Queue worker | — |
| `laravel-scheduler.timer` | Cron (minutely) | — |

```bash
# Správa služeb
systemctl status laravel-queue
systemctl status laravel-scheduler.timer
journalctl -u laravel-queue -f
```

---

## Aktualizace template

Při každé změně projektu:

```bash
# 1. Na lokálním PC — build
sudo bash lxc-template/build.sh /tmp/debian-12-techdomov_amd64.tar.gz

# 2. Upload (přepíše předchozí verzi, URL zůstává stejná)
GITLAB_TOKEN=glpat-xxxx \
  bash lxc-template/upload.sh /tmp/debian-12-techdomov_amd64.tar.gz

# 3. Proxmox — znovu stáhnout přes stejnou URL (přepíše soubor v cache)
```

---

## Struktura lxc-template/

```
lxc-template/
├── build.sh                  ← sestavení rootfs (spustit jako root)
├── upload.sh                 ← nahrání na GitLab Package Registry
├── first-boot.sh             ← setup uvnitř kontejneru (→ /usr/local/sbin/)
├── HOWTO.md                  ← tento dokument
├── config/
│   ├── nginx-app.conf        ← Nginx vhost port 8080
│   ├── nginx-pma.conf        ← Nginx vhost port 8081 (phpMyAdmin)
│   ├── php.ini               ← PHP produkční nastavení
│   ├── php-fpm-www.conf      ← PHP-FPM pool
│   └── phpmyadmin.php        ← phpMyAdmin konfigurace
└── systemd/
    ├── laravel-queue.service
    ├── laravel-scheduler.service
    └── laravel-scheduler.timer
```
