# Google Ads — multishoping.eu

Pracovní složka pro spuštění konverzních Google kampaní eshopu.

**Cíl:** za 7 dní 150 objednávek **nebo** hrubý obrat 300 000 Kč.
**Rozpočet:** ~40 000 Kč/den (flexibilní nahoru).
**Priorita:** maximum obratu, ROAS podružný (klidně na hraně ziskovosti).
**Kanály:** pouze Google (Performance Max + Search + Standard Shopping). Sklik, Meta, Heureka a Google Ads API mimo rozsah.

---

## Reálný stav a rizika (číst první)

- Účet **studený**, bez konverzní historie → smart bidding má learning phase (~15–30 konverzí).
- **Žádný tracking ani feed** nebyl nasazený → první 2–3 dny = infrastruktura, ne reklama.
- Merchant Center feed potřebuje schválení (1–3 dny), teprve pak jede Shopping/PMax.
- **Verdikt:** přesně za 7 dní je cíl agresivní/nejistý. Reálně 7 dní = rozjezd; cíl typicky padá ve 2. týdnu. Pokud musí padnout v den 7, jde to jen „hrubou silou" (nalít rozpočet do PMax, smířit se s drahým startem).

---

## Kritická cesta (2 technické blokery — řeší se v kódu Laravelu)

### 1. Produktový feed pro Google Merchant Center — ✅ HOTOVO
- **Zdroj:** tabulka `Product` (model `App\Models\Product`), logika v `App\Services\GoogleMerchantFeedService`.
- **Route:** `GET /product-feed/google-merchant.xml` (`product-feed.google-merchant`).
- **Formát:** RSS 2.0, namespace `xmlns:g="http://base.google.com/ns/1.0"`, streamované XML.
- **Rozsah:** pouze `ParentSuperCategoryCode = 52` (katalog multishoping), skladem, `EndUserPrice > 0`, s obrázkem.
- **Ověřeno:** **79 214 položek**, validní well-formed XML (44 MB).
- **Obrázek:** z `ProductImage.URL`, plná velikost (odstraněn size-suffix `_\d+.jpg`).
- **Mapování polí:**

| Google atribut | Zdroj v DB | Poznámka |
|---|---|---|
| `g:id` | `ProId` | |
| `title` | `NameB2C ?? Name` | |
| `description` | `DescriptionShort ?? Name` | strip HTML |
| `g:link` | `route('product.detail', ['slug' => Str::slug(Name), 'proId' => ProId])` | absolutní URL |
| `g:image_link` | `ImageUrl` | musí být absolutní |
| `g:price` | `EndUserPrice` + ` CZK` | cena vč. DPH (stejná jako na webu) |
| `g:availability` | `OnStock` | `in_stock` / `out_of_stock` |
| `g:brand` | `ProducerName` | |
| `g:gtin` | `EANCode` | jen validní 8–14 číslic |
| `g:condition` | konstanta `new` | |
| `g:identifier_exists` | odvozeno | `false`, když chybí gtin i brand |

- **Filtr položek (návrh, k potvrzení):** `EndUserPrice > 0` **a** vyplněný `ImageUrl`. Availability se mapuje z `OnStock` (out-of-stock ve feedu zůstává, jen se označí).

### 2. Conversion tracking (gtag.js — bez API) — ✅ HOTOVO (čeká na ID)
- Napojeno na **stejné Livewire eventy jako Meta pixel** (`meta-add-to-cart`, `meta-initiate-checkout`, `meta-purchase`) → žádná úprava Livewire komponent kromě přidání `transactionId` do purchase dispatche.
- **Base tag:** `resources/views/partials/google-tag.blade.php` (GA4 + Google Ads), v `layouts/app` i `layouts/guest`.
- **Eventy:** `resources/views/partials/google-events.blade.php`
  - `view_item` — detail produktu (`product-detail.blade.php`)
  - `add_to_cart`, `begin_checkout` — z existujících dispatchů
  - `purchase` (GA4) + **`conversion`** (Google Ads) — potvrzení objednávky, `value` = `total_with_vat`, `currency` = CZK, `transaction_id` = ID objednávky
- **Vše config-gated** — dokud nejsou ID v `.env`, tracking se nevykresluje (ověřeno).
- **Chybí doplnit do `.env`** (přes tebe, needituju ho):
  ```
  GOOGLE_GA4_ID=G-XXXXXXXXXX
  GOOGLE_ADS_CONVERSION_ID=AW-XXXXXXXXXX
  GOOGLE_ADS_PURCHASE_LABEL=xxxxxxxxxxxxxxx
  ```
- **Enhanced conversions:** zapnout v Google Ads UI (metoda Google tag) — hashovaný e-mail dořeším při napojení ID.

---

## Manuální kroky na tvé straně (účet zatím nemáš)

1. **Google Ads účet** — založit na ads.google.com (a přeskočit průvodce „Smart" kampaní → přepnout do Expert mode).
2. **Google Merchant Center** — založit, ověřit a nárokovat web `multishoping.eu`.
3. **Propojit** Merchant Center ↔ Google Ads.
4. **Google Tag / GA4** — vytvořit měřicí ID (`G-XXXX`) + Google Ads conversion ID (`AW-XXXX`) a conversion label; předat mi je do `.env` (přes tebe, nikdy je needituju sám).
5. **Fakturace** — nastavit platební metodu a denní rozpočet.
6. Po nasazení feedu: v Merchant Center zadat URL feedu a nechat projít diagnostiku.

---

## Struktura kampaní

| Priorita | Kampaň | Bidding | Rozpočet/den |
|---|---|---|---|
| 1 | Performance Max (feed + audience signals) | Max hodnota konverzí | 24 000 Kč |
| 2 | Search — generické (bestsellery / vysoká marže, notebooky, servery) | Max hodnota konverzí | 10 000 Kč |
| 3 | Standard Shopping (pojistka + data pro PMax) | Max hodnota konverzí | 6 000 Kč |

Geo: ČR. Audience signals: seznam zákazníků (first-party), high-intent segmenty. Brand kampaň nemá u nového eshopu smysl.

---

## 7denní timeline

- **Den 0–1:** nasadit feed + tracking (kód), vytvořit účty, ověřit web, nahrát feed do Merchant Center.
- **Den 1–2:** feed prochází schválením; připravit PMax asset groups + Search kampaně.
- **Den 2:** spustit PMax + Search na plný rozpočet (studený účet → rovnou agresivně).
- **Den 3–5:** learning phase; denně čistit search terms, přesouvat rozpočet k top kategoriím.
- **Den 6–7:** stabilizace, nejlepší efektivita a nejvíc objednávek.

---

## Stav implementace

- [x] Feed controller + route + service (79 214 položek, ověřeno, živé na produkci)
- [x] Conversion tracking nasazený a AKTIVNÍ na produkci
  - Conversion ID: `AW-18249247091` (base tag na všech stránkách)
  - Purchase label: `gMusCN_j4cscEPPS9f1D` (nákup s hodnotou + CZK + transaction_id)
  - ID i label jsou jako default v `config/services.php` (lze přebít env proměnnými)
- [x] Google Ads účet (Gastro ACS, CZK) + PMax kampaň vytvořena (ve schvalování)
- [x] Merchant Center (ID 5820411636) + feed napojený + doprava nastavena
- [x] Image proxy `/product-image/{proId}.jpg` — obrázky z crawlovatelné domény (edsystem robots.txt blokoval Googlebot-Image); feed i detail používají proxy
- [ ] Re-fetch feedu v Merchant Center + počkat na re-crawl obrázků (schválení produktů)
- [ ] Search + Standard Shopping kampaně
- [ ] Navýšit PMax rozpočet na 24 000 Kč po kontrole trackingu + feedu
