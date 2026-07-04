# Kompletní návod: kampaň na Facebooku přes Marketing API

Tenhle skill má dvě části: **manuální setup** (co Meta nedovolí zautomatizovat) a **automatizační engine** (co už jede z CLI). Projdeme to od nuly až po běžící kampaň.

---

## Fáze 0 — Instalace skillu (jednou)

```bash
cd ~/.claude/skills/meta-ads/scripts
python3 -m venv .venv && . .venv/bin/activate
pip install -r requirements.txt

cp ../config/env.example ../config/.env
```

Do `config/.env` postupně doplníš hodnoty z fáze 1.

---

## Fáze 1 — Manuální setup v prohlížeči

Tohle **musíš udělat ručně** — jsou to bezpečnostní brány Meta, nejdou obejít z CLI.

**A1. Účty**
- Založ **Business Manager** na `business.facebook.com`
- Vytvoř/napoj **reklamní účet** → časové pásmo `Europe/Prague`, měna `CZK` (jde nastavit jen jednou!)

**A2. Meta App**
- `developers.facebook.com` → **Create App → typ Business**
- Zapiš `App ID` a `App Secret` → do `.env`

**A3. System User + token** (srdce integrace)
- Business Settings → **Users → System Users → Add** (role **Admin**)
- **Add Assets** → přiřaď tomuto uživateli: reklamní účet, katalog, stránku
- **Generate Token** → vyber svoji App → zaškrtni oprávnění:
  `ads_management`, `ads_read`, `business_management`, `catalog_management`
- Token → do `.env` jako `META_ACCESS_TOKEN` (System User token nevyprší)

**A4. Schvalování od Meta** (jen pokud jedeš ostře / s daty klientů)
- **Business Verification** (IČO, výpis z OR)
- **App Review + Advanced Access** — trvá dny až týdny

---

## Fáze 2 — Validace (než cokoli vytvoříš)

```bash
python check_setup.py
```

Ověří token, oprávnění a přístup k reklamnímu účtu i katalogu. **Červeně** označí, co chybí. Dokud tohle neprojde zeleně, ostatní skripty selžou.

---

## Fáze 3 — Vytvoření kampaně

Máš dvě cesty podle typu kampaně:

### Cesta A — Klasické kampaně podle kategorií (z YAML)

Vytvoří 1 kampaň + ad set + reklamu na každou kategorii nabídky.

```bash
# 1) NÁHLED — nic nevytvoří, jen vypíše co by udělal:
python bulk_campaigns.py --config ../config/campaigns.example.yaml --dry-run

# 2) OSTRÉ vytvoření — objekty vzniknou ve stavu PAUSED:
python bulk_campaigns.py --config ../config/campaigns.example.yaml
```

Config (`campaigns.example.yaml`) drží sdílené defaulty + seznam kategorií; každá kategorie přebíjí rozpočet, cílení, kreativu a cílovou URL.

### Cesta B — Dynamické reklamy z katalogu (Advantage+ Catalog Ads)

Ideální pro e-shop — reklamy se generují z produktového feedu.

```bash
# 1) nahraj produktový feed do katalogu:
python catalog_ads.py upload-feed --csv ../config/products.example.csv

# 2) vytvoř product sety podle kategorií:
python catalog_ads.py make-sets

# 3) vytvoř Advantage+ katalogovou kampaň:
python catalog_ads.py create-ads --product-set "<set_id>" --daily-budget 200
```

---

## Fáze 4 — Kontrola a spuštění

⚠️ **Klíčové:** všechny skripty vytvářejí objekty ve stavu `PAUSED`. **Nic neutrácí rozpočet**, dokud kampaň ručně nezkontroluješ a nezapneš v Ads Manageru (nebo nepřidáš `--activate`).

Pořadí je vždy:
1. `check_setup.py`
2. `--dry-run`
3. ostré spuštění (PAUSED)
4. zapnutí necháš na sobě v Ads Manageru → reálný spend

---

## Fáze 5 — Reporting

```bash
python insights.py --level campaign --since 2026-06-01 --until 2026-06-30 \
    --fields spend,impressions,clicks,ctr,cpc,actions --out ./report.csv
```

---

### Časté chyby

| Chyba | Řešení |
|-------|--------|
| `(#190) Invalid OAuth token` | nový System User token (A3) |
| `(#200) Permissions error` | doplň scope tokenu + App Review |
| `Ad account not accessible` | přiřaď účet System Userovi (A3) |
| `User request limit reached` | sniž tempo / batch / zkus později |
