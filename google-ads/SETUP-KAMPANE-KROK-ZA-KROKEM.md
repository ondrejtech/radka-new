# Google Ads od nuly — krok za krokem (multishoping.eu)

Kompletní postup od založení účtu po zapnutí kampaní. Feed už je hotový:
`https://www.multishoping.eu/product-feed/google-merchant.xml` (79 214 položek).

Cíl: 7 dní, 150 objednávek / 300 000 Kč obrat, ~40 000 Kč/den, ROAS podružný, jen ČR.

---

## FÁZE A — Účty a měření (Den 0–1)

### Krok 1 — Google Ads účet
1. Jdi na **ads.google.com** → *Start now* / *Začít*, přihlas se firemním Google účtem.
2. Google tě natlačí do „Smart" průvodce. **Přeskoč ho** — dole klikni na
   **„Switch to Expert Mode" / „Přepnout do expertního režimu"**.
3. Když nutí vytvořit kampaň, zvol dole **„Create an account without a campaign"**.
4. Zkontroluj: **měna = CZK**, **časové pásmo = (GMT+01:00) Praha**, země = Česko.
   ⚠️ Měnu a časové pásmo už **nikdy nezměníš** — musí sedět hned napoprvé.
5. Poznamenej si **Customer ID** (10 číslic nahoře vpravo, formát 123-456-7890).

### Krok 2 — Fakturace
1. **Tools (klíč) → Billing → Settings**.
2. Vyplň fakturační údaje firmy (IČO, DIČ) a platební metodu (karta).
3. Nastav vysoký/žádný limit „platebního prahu" nespoléhej se na malý práh —
   při 40 000 Kč/den by ti Google jinak zastavil reklamy kvůli nízkému limitu.

### Krok 3 — Google Merchant Center (GMC)
1. Jdi na **merchants.google.com** → vytvoř účet, stejný firemní login.
2. **Business information** — název firmy, adresa, telefon, e-mail.
3. **Ověření a nárokování webu** (Business info → Website):
   - vlož URL `https://www.multishoping.eu`,
   - ověř přes **Google Search Console** (nejrychlejší), nebo HTML tag / DNS.
4. **Shipping (doprava)** — Tools → Shipping and returns → nastav sazby dopravy pro
   ČR. ⚠️ **Povinné** — bez dopravy Google zamítne produkty.
5. **Return policy (vrácení)** — vyplň zásady vrácení (14 dní). Bez toho hrozí
   zamítnutí / omezení.
6. **Tax/DPH** — pro ČR je cena ve feedu vč. DPH (máme), stačí potvrdit.

### Krok 4 — Nahrát feed do GMC
1. **Products → Feeds → Add primary feed**.
2. Země prodeje **Česko**, jazyk **čeština**.
3. Metoda **Scheduled fetch** (naplánované stažení):
   - URL feedu: `https://www.multishoping.eu/product-feed/google-merchant.xml`
   - frekvence: **denně**, čas např. 04:00.
4. Klikni **Fetch now**. Počkej na zpracování (minuty až hodiny).
5. **Products → Diagnostics** — zkontroluj zamítnuté položky a oprav (typicky:
   chybějící GTIN, obrázek, doprava). Část zamítnutí je normální.
   ⚠️ Schválení může trvat **1–3 dny** — to je nejdelší čekání celého projektu.

### Krok 5 — Propojit GMC ↔ Google Ads
1. V **Merchant Center → Settings → Linked accounts → Google Ads** →
   zadej Customer ID → **Link**.
2. V **Google Ads → Tools → Linked accounts → Google Merchant Center** → potvrď.

### Krok 6 — Conversion tracking (měření nákupu)
1. **Google Ads → Tools → Conversions → New conversion action → Website**.
2. Zadej doménu, zvol **Purchase / Nákup**.
3. Nastav: **Value = Use different values for each conversion** (dynamická hodnota),
   **Count = Every**, **Conversion window** 30 dní, **měna CZK**.
4. Zvol způsob **Google tag (gtag.js)**. Google ti dá:
   - **Conversion ID** ve tvaru `AW-XXXXXXXXXX`
   - **Conversion label** ve tvaru `abcдEFG...`
5. Zapni **Enhanced conversions** (rozšířené konverze) → metoda **Google tag**.
6. **Předej mi tyto hodnoty** (Conversion ID + label a GA4 `G-XXXX`, pokud chceš i GA4).
   Já je zapojím do kódu přes `config()`; ty je jen vložíš do `.env`.
   (Kód trackingu připravím tak, aby byl neaktivní, dokud ID nedoplníš.)

---

## FÁZE B — Kampaně (Den 1–2, běží souběžně se schvalováním feedu)

### Kampaň 1 — Performance Max (hlavní, 24 000 Kč/den)
1. **Campaigns → + → New campaign**.
2. Cíl **Sales / Prodej** → typ **Performance Max**.
3. **Conversion goal** = Purchase (jen ten, ať Google necílí na balast).
4. Vyber **Merchant Center účet** + země prodeje **Česko**.
5. Název kampaně: `PMax – Katalog CZ`.
6. **Bidding:** *Maximize conversion value*. **Target ROAS nech VYPNUTÝ**
   (chceme objem, ROAS je podružný). tROAS přidáš až po nasbírání dat.
7. **Budget:** 24 000 Kč/den.
8. **Locations:** Česko. **Languages:** čeština.
9. **Asset group** (`Vše – katalog`):
   - vyber **produktový feed** (celý, nebo listing group filtrem),
   - **obrázky/loga** (logo z `public/Images`), krátké i dlouhé nadpisy,
     popisy — texty vezmi z webu / nech doplnit AI,
   - videa: nech Google vygenerovat automaticky.
10. **Audience signals:** nahraj **seznam zákazníků** (first-party e-maily z DB),
    přidej **custom segment** podle hledaných výrazů (názvy kategorií, značky).
11. **Final URL expansion:** zapnuto (necháme Google spárovat vstupní stránky).
12. Publikuj (spustí se až po schválení feedu + měření).

### Kampaň 2 — Search generické (10 000 Kč/den)
1. **New campaign** → **Sales** → typ **Search**.
2. Conversion goal = Purchase. Zrušit „Search partners" a „Display network".
3. **Bidding:** *Maximize conversions* (u studeného účtu), později conversion value.
4. Budget 10 000 Kč/den. Locations Česko, jazyk čeština.
5. **Ad groups po kategoriích/značkách** (notebooky, tiskárny, servery, síťové prvky,
   POS, konkrétní značky). Klíčová slova ve **phrase** a **exact** match.
6. **Responsive Search Ads:** 15 nadpisů + 4 popisy na ad group. Přidej rozšíření:
   sitelinks, callouts, ceny, telefon.

### Kampaň 3 — Standard Shopping (pojistka, 6 000 Kč/den)
1. **New campaign** → **Sales** → **Shopping** → **Standard Shopping**
   (NE Performance Max).
2. Merchant účet + Česko. Bidding *Maximize conversion value*. Budget 6 000 Kč/den.
3. Slouží jako kontrola nad produkty a zdroj dat pro PMax.

---

## FÁZE C — Spuštění a optimalizace (Den 2–7)

- **Den 2:** jakmile je feed schválený + měření běží → zapnout všechny 3 kampaně
  naplno (studený účet → jdeme rovnou agresivně, ať se učení rozjede).
- **Den 3–5 (learning phase):** denně:
  - Search → *Search terms report* → vysypat nesmyslné výrazy jako negativa,
  - přesouvat rozpočet ke kategoriím s nejvíc konverzemi/hodnotou,
  - hlídat, že se opravdu měří `purchase` s hodnotou.
- **Den 6–7:** kampaně se stabilizují → nejlepší efektivita a nejvíc objednávek.

---

## Pořadí, na čem to stojí (kritická cesta)

1. Účet + fakturace (hodiny) →
2. Merchant Center + doprava + **feed → schválení (1–3 dny)** ← nejdelší →
3. Conversion tracking + předání ID → já zapojím do kódu →
4. Kampaně připravené → **zapnout po schválení feedu**.

**Rovná řeč:** samotné schválení feedu ukrojí velkou část ze 7 dní. Reálně tě
těch 7 dní spíš dostane do plného provozu; cíl 150/300k typicky padá ve 2. týdnu.
Pokud musí padnout dřív, jde to jen nalitím rozpočtu do PMax a smířením se
s drahým, neefektivním startem.
