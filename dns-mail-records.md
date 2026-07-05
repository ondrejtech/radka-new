# DNS záznamy pro mail — multishoping.eu

Doména: `multishoping.eu` · DNS: CZECHIA/Zoner (`ns1.regzone.cz`)
Mailserver: mailcow na `mail.multishoping.eu` (34.31.195.148)

**Stav ke 3. 7. 2026 — všechny záznamy ověřeny autoritativně přes `dig @ns1.regzone.cz` ✅**

## Kompletní přehled záznamů

| Typ | Jméno | Hodnota | Ověřeno dig |
|-----|-------|---------|-------------|
| A | `mail` | `34.31.195.148` | ✅ |
| PTR | `148.195.31.34.in-addr.arpa` | `mail.multishoping.eu.` (FCrDNS OK) | ✅ |
| MX | `@` | `10 mail.multishoping.eu.` | ✅ |
| TXT (SPF) | `@` | `v=spf1 mx ~all` | ✅ |
| TXT (DMARC) | `_dmarc` | `v=DMARC1; p=none; rua=mailto:dmarc@multishoping.eu; fo=0; adkim=r; aspf=r; rf=afrf` | ✅ |
| TXT (DKIM) | `dkim._domainkey` | `v=DKIM1;k=rsa;...` (viz níže) | ✅ |
| TLSA (DANE) | `_25._tcp.mail` | `3 1 1 7c1219d45cf7e3b2252b49cc6f9cd79c241295b600c6a3db00abf848ce0b504e` | ✅ |
| SRV | `_autodiscover._tcp` | `5 0 443 mail.multishoping.eu.` | ✅ |
| SRV | `_submission._tcp` | `0 0 587 mail.multishoping.eu.` | ✅ |
| CNAME | `autodiscover` | `mail.multishoping.eu.` | ✅ |
| CNAME | `autoconfig` | `mail.multishoping.eu.` | ✅ |
| DNSSEC | `@` | DNSKEY 256+257 (alg 13), NSEC3 | ✅ |

## Záznamy v zone-file formátu

```
mail.multishoping.eu.               3600  IN  A      34.31.195.148
148.195.31.34.in-addr.arpa.               IN  PTR    mail.multishoping.eu.
multishoping.eu.                    3600  IN  MX     10 mail.multishoping.eu.
multishoping.eu.                    3600  IN  TXT    "v=spf1 mx ~all"
_dmarc.multishoping.eu.             3600  IN  TXT    "v=DMARC1; p=none; rua=mailto:dmarc@multishoping.eu; fo=0; adkim=r; aspf=r; rf=afrf"
dkim._domainkey.multishoping.eu.    3600  IN  TXT    "v=DKIM1;k=rsa;t=s;s=email;p=MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAt229qZaxFocJOEfUe5p0dS/qndeO1/f9SJlEjgQr2C3YNo0FAy2E4h/q+/oB4Eoa/boCZ3gHTVlKjVJTC7OGnhrWI39RbXoGlEr1v5p/UQJRWMe7T5FjaROFz2cZ+IegQZXyoIOjFNVjVJIij9VXF1R1/ijgDeNuKhfSwazSPICd6hZiw/0eTN4YEEHTCHZH+bjAQC60BVsnxm6q1f7bTVxYP/A7Vr6S86+F2+Q8YvVu+hlotSURNrbqRwM9G4Lz0+n1fWW8x+MIsrNLTp/A9pm3cNWb6RhI5Q843cGBDcRMrYeGRZ42cmT59mLxdEL5wh2R7YjcDQOu10uLQgAAqwIDAQAB"
_25._tcp.mail.multishoping.eu.      3600  IN  TLSA   3 1 1 7c1219d45cf7e3b2252b49cc6f9cd79c241295b600c6a3db00abf848ce0b504e
_autodiscover._tcp.multishoping.eu. 3600  IN  SRV    5 0 443 mail.multishoping.eu.
_submission._tcp.multishoping.eu.   3600  IN  SRV    0 0 587 mail.multishoping.eu.
autodiscover.multishoping.eu.       3600  IN  CNAME  mail.multishoping.eu.
autoconfig.multishoping.eu.         3600  IN  CNAME  mail.multishoping.eu.
```

DNSKEY (DNSSEC, alg 13 ECDSAP256SHA256):
```
multishoping.eu.  IN  DNSKEY  256 3 13 88Z0Y4HpZ7c+jwHPPJF/wAAXTnPESYQprf/jh7BMJaz4+4GDudC4hbPUNChaMH5Skd13mtVmrDRY0JYbSgz6rw==
multishoping.eu.  IN  DNSKEY  257 3 13 IfnvmzpVHZgfjjlGUTtm5BKvcgOSz4HXRFIjbyJVRkShLQpntszfAi69vNtHW3Amtt6t7PzGrooWhrKKikL+mw==
```

## TLSA (DANE) — detaily

- `3 1 1` = DANE-EE + SPKI + SHA-256 (pinuje veřejný klíč certifikátu)
- Otisk získán z Let's Encrypt certu (CN=mail.multishoping.eu, issuer YR2, platný do 30.9.2026)
- Vyžaduje DNSSEC (zapnuto ✅)

### Provozní pravidlo
`3 1 1` přežije obnovu certifikátu jen když se NEZMĚNÍ soukromý klíč.
mailcow klíč defaultně nerotuje → záznam zůstává platný.
Při plánované změně klíče: publikuj starý + nový TLSA současně, počkej na propagaci, pak rotuj.

## Ověření

```bash
# jednotlivé záznamy (autoritativně, obchází cache):
dig +short @ns1.regzone.cz TLSA  _25._tcp.mail.multishoping.eu
dig +short @ns1.regzone.cz TXT   _dmarc.multishoping.eu
dig +short @ns1.regzone.cz TXT   multishoping.eu
dig +short -x 34.31.195.148

# funkční test DANE (živý TLS handshake na portu 25):
# https://dane.sys4.de/smtp/mail.multishoping.eu
```

## Odchozí pošta — SMTP relay přes Brevo

GCP **trvale blokuje odchozí port 25** → mailcow nemůže doručovat přímo na cizí MX.
Řešení: odchozí pošta se relayuje přes **Brevo** na portu 587 (zprovozněno 3. 7. 2026 ✅).

- **Relay:** `smtp-relay.brevo.com:587` (STARTTLS, SASL LOGIN)
- **Login:** `b0d674001@smtp-brevo.com`
- **SMTP key:** uložen v mailcow DB (`relayhosts` tabulka), **NE v tomto souboru**. Jde přegenerovat v Brevo → SMTP & API.
- **Brevo IP allowlist:** Security → Authorized IPs → povolena `34.31.195.148` (jinak 535).

### Konfigurace v mailcow (DB)
```sql
-- relayhosts: id=1, hostname='[smtp-relay.brevo.com]:587', username='b0d674001@smtp-brevo.com'
-- domain.relayhost = 1 pro multishoping.eu (sender-dependent transport)
```
Odpovídá UI: Configuration → Routing → Relayhosts + přiřazení doméně.

### Nutná úprava SPF (kvůli relayi)
```
v=spf1 mx include:spf.brevo.com ~all
```
Bez `include:spf.brevo.com` by SPF na příjmu selhal (připojuje se Brevo IP, ne server).

### Brevo domain authentication (nutné — jinak Brevo přepisuje From!)
Bez autentizace domény Brevo přepisoval `From` na `@xxx.brevosend.com` a rozbíjel DKIM
(mění tělo → body hash fail). Po autentizaci posílá jako `@multishoping.eu` s aligned DKIM.

DNS záznamy pro Brevo autentizaci (stav: **Authenticated ✅** 4. 7. 2026):
```
@                 TXT    brevo-code:a4be8e215d61acbd07779e64d5dc1d9e   (ověření vlastnictví)
brevo1._domainkey CNAME  b1.multishoping-eu.dkim.brevo.com.            (Brevo DKIM 1)
brevo2._domainkey CNAME  b2.multishoping-eu.dkim.brevo.com.            (Brevo DKIM 2)
_dmarc            TXT    v=DMARC1; p=none; rua=mailto:rua@dmarc.brevo.com  (Brevo přepsal DMARC)
```
Pozn.: Brevo přepsal DMARC `rua` na svůj (`rua@dmarc.brevo.com`) — reporty chodí do Brevo dashboardu.
Pro reporty i k sobě lze: `rua=mailto:rua@dmarc.brevo.com,mailto:dmarc@multishoping.eu`.
Původní mailcow DKIM (`dkim._domainkey`) zůstává, ale při relayi přes Brevo se použije Brevo DKIM.

### Ověření odesílání
```bash
# na serveru (mail se relayuje přes Brevo):
docker logs mailcowdockerized-postfix-mailcow-1 | grep 'relay=smtp-relay.brevo.com'
# očekávaný stav: status=sent (250 2.0.0 OK: queued as ...)
```

## Poznámky
- Propagace do veřejných cache: TTL 3600 s (~1 h).
- Reportovací schránka `dmarc@multishoping.eu` musí existovat a být čtená.
- Po pár týdnech monitoringu zpřísnit DMARC z `p=none` na `p=quarantine`.
- Brevo free plán: 300 mailů/den. Authorized IP `34.31.195.148` musí zůstat povolená.
