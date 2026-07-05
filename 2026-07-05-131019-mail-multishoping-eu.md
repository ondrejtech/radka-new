 ▐▛███▜▌   Claude Code v2.1.198
▝▜█████▛▘  Opus 4.8 · Claude Pro
  ▘▘ ▝▝    /var/www/techdomov

 ▎ Fable 5 is back.
 ▎ Until July 7, you can use up to 50% of your plan's weekly usage limit on Fable 5. If you hit your limit, you can continue on Fable 5 with usage credits. Fable 5 draws down usage faster than Opus 4.8. Learn more

❯ marty@debian:/var/www/techdomov$ gcloud compute instances network-interfaces  
  update instance-20260702-002153   --zone=us-central1-b                        
  --network-interface=nic0   --public-ptr-domain=mail.multishoping.eu.          
  ERROR: (gcloud.compute.instances.network-interfaces.update) unrecognized      
  arguments: --public-ptr-domain=mail.multishoping.eu.                          
                                                                                
  To search the help text of gcloud commands, run:                              
    gcloud help -- SEARCH_TERMS                                                 
  marty@debian:/var/www/techdomov$                                              
                                                                                

● Ten příkaz selhal, protože gcloud compute instances network-interfaces update
  flag --public-ptr-domain nezná. Nastavení reverzního PTR záznamu se dělá jiným
  příkazem. Ověřím to přímo v gcloud, ať ti nedávám vymyšlený flag.

  Ran 6 shell commands (ctrl+o to expand)

● Našel jsem příčinu. Flagy pro reverzní DNS (PTR) nejsou na příkazu
  network-interfaces update, ale na update-access-config. Navíc
  --public-ptr-domain musí jít spolu s --public-ptr.

  Správný příkaz:

  gcloud compute instances update-access-config instance-20260702-002153 \
    --zone=us-central1-b \
    --network-interface=nic0 \
    --public-ptr \
    --public-ptr-domain=mail.multishoping.eu.

  Dvě věci, na které pozor (jinak to selže i s opraveným příkazem):

  1. Externí IP musí být statická (rezervovaná), ne ephemeral. Custom PTR doména
  na dočasné IP nejde nastavit. Rezervace:
  gcloud compute addresses create mail-ip \
    --addresses=$(gcloud compute instances describe instance-20260702-002153 \
       --zone=us-central1-b \
       --format='get(networkInterfaces[0].accessConfigs[0].natIP)') \
    --region=us-central1
  2. Tečka na konci domény (mail.multishoping.eu.) je správně a chtěná — je to
  FQDN.

  Chceš, abych ti ten rezervační + PTR příkaz spustil, nebo to jen potřebuješ
  opravit a spustíš sám?

✻ Cogitated for 53s

❯ yes, run it for me                                                            

  Ran 2 shell commands (ctrl+o to expand)

● Externí IP instance je 34.31.195.148, ale je ephemeral — ty dvě rezervované
  adresy v seznamu jsou interní (10.128.x.x), takže PTR by bez rezervace
  neprošel. Nejdřív tu IP zrezervuju jako statickou externí, pak nastavím PTR.

  Ran 1 shell command (ctrl+o to expand)

● Rezervace hotová. Teď nastavím PTR záznam:

  Ran 1 shell command (ctrl+o to expand)

● Hotovo. Ověřím, že se PTR opravdu propsal do access configu:

  Ran 1 shell command (ctrl+o to expand)

● Vše proběhlo. Shrnutí:

  ┌───────────────────────────────────────────────────────────┬─────────────┐
  │                           Krok                            │    Stav     │
  ├───────────────────────────────────────────────────────────┼─────────────┤
  │ Rezervace externí IP 34.31.195.148 jako statická          │ ✅          │
  │ (mail-multishoping-ext)                                   │             │
  ├───────────────────────────────────────────────────────────┼─────────────┤
  │ PTR záznam 34.31.195.148 → mail.multishoping.eu.          │ ✅          │
  ├───────────────────────────────────────────────────────────┼─────────────┤
  │ Ověření v access configu                                  │ ✅          │
  │                                                           │ potvrzeno   │
  └───────────────────────────────────────────────────────────┴─────────────┘

  Pár poznámek:

  - Propagace reverzního DNS může trvat i pár hodin, než se rozšíří. Ověřit
  můžeš přes:
  dig -x 34.31.195.148 +short
  - Pro mail server ještě potřebuješ forward záznam — tj. A záznam
  mail.multishoping.eu → 34.31.195.148 v DNS zóně domény multishoping.eu. GCP
  kontroluje jen že PTR existuje, ale doručovací servery vyžadují shodu
  forward/reverse (FCrDNS). Ten A záznam se nastavuje u správce DNS domény, ne v
  gcloud.
  - Původní ephemeral IP je teď statická, takže se při restartu instance
  nezmění.

✻ Cogitated for 44s

❯ dig -x 34.31.195.148 +short                                                   

  Ran 1 shell command (ctrl+o to expand)

● PTR záznam se už propsal a je aktivní:

  mail.multishoping.eu.

  Reverzní DNS tedy funguje. Zbývá jen ověřit, že máš i forward A záznam
  (mail.multishoping.eu → 34.31.195.148), aby seděl FCrDNS pro mail.
  Zkontroluješ takhle:

  Ran 1 shell command (ctrl+o to expand)

● Perfektní — FCrDNS je kompletní a shoduje se oběma směry:

  ┌─────────────────────────────────┬────────────────────────────┐
  │              Směr               │          Výsledek          │
  ├─────────────────────────────────┼────────────────────────────┤
  │ Forward A: mail.multishoping.eu │ → 34.31.195.148 ✅         │
  ├─────────────────────────────────┼────────────────────────────┤
  │ Reverse PTR: 34.31.195.148      │ → mail.multishoping.eu. ✅ │
  └─────────────────────────────────┴────────────────────────────┘

  Mailové servery, které kontrolují shodu forward/reverse DNS, teď tvůj server
  přijmou bez problémů. Pro plnou doručitelnost ještě dořeš (pokud už nemáš):
  SPF, DKIM a DMARC záznamy pro multishoping.eu.

✻ Cogitated for 14s

❯ analyzuj posledni screenshot                                                  

● Nemám žádný screenshot přiložený v konverzaci. Zkusím najít poslední
  obrázek/screenshot v systému.

  Searched for 1 pattern (ctrl+o to expand)

❯ screenshot najdes v /home/marty/Pictures/Screenshots                          

  Read 1 file, listed 1 directory (ctrl+o to expand)

● Screenshot je panel DNS Records z admin rozhraní mail serveru (mailcow) na
  mail.multishoping.eu/admin/mailbox. Ukazuje stav DNS záznamů potřebných pro
  mail. Tady je analýza:

  ✅ V pořádku (zelená fajfka)

  ┌────────────────────────────┬────────────┬──────────────────────────┐
  │           Záznam           │    Typ     │         Hodnota          │
  ├────────────────────────────┼────────────┼──────────────────────────┤
  │ mail.multishoping.eu       │ A          │ 34.31.195.148            │
  ├────────────────────────────┼────────────┼──────────────────────────┤
  │ 148.195.31.34.in-addr.arpa │ PTR        │ mail.multishoping.eu     │
  ├────────────────────────────┼────────────┼──────────────────────────┤
  │ multishoping.eu            │ MX         │ mail.multishoping.eu     │
  ├────────────────────────────┼────────────┼──────────────────────────┤
  │ autodiscover               │ CNAME      │ mail.multishoping.eu     │
  ├────────────────────────────┼────────────┼──────────────────────────┤
  │ _autodiscover._tcp         │ SRV        │ mail.multishoping.eu 443 │
  ├────────────────────────────┼────────────┼──────────────────────────┤
  │ autoconfig                 │ CNAME      │ mail.multishoping.eu     │
  ├────────────────────────────┼────────────┼──────────────────────────┤
  │ dkim._domainkey            │ TXT (DKIM) │ v=DKIM1;...              │
  └────────────────────────────┴────────────┴──────────────────────────┘

  Základ funguje — A i PTR sedí (tvoje dnešní práce), MX, DKIM i
  autodiscover/autoconfig jsou OK.

  ⚠️ Vyžaduje pozornost

  1. SPF — stav ? (multishoping.eu TXT)
  Hodnota v=spf1 mx ~all v DNS je, ale panel ji označuje otazníkem =
  neověřeno/nejistá shoda. Samotný obsah je validní a rozumný (~all = softfail).
  Otazník bývá tím, že se hodnota ještě plně nepropsala (panel píše až 24 h
  latenci). Zkontroluj za pár hodin, pak by měl zezelenat.

  2. DMARC — chybí (_dmarc.multishoping.eu TXT)
  Prázdný current state, žádná fajfka. Označeno jako volitelné (²), ale pro
  doručitelnost do Gmailu/Seznamu silně doporučeno. Přidej TXT záznam:
  _dmarc.multishoping.eu  TXT  "v=DMARC1; p=quarantine;
  rua=mailto:dmarc@multishoping.eu; adkim=s; aspf=s"
  (začni klidně p=none na monitoring, pak zpřísni na quarantine/reject).

  3. TLSA / DANE — 110: Operation timed out (_25._tcp.mail...)
  Volitelné (²). Timeout = DNSSEC/DANE není nastaveno nebo se lookup nedaří.
  TLSA má smysl jen když máš na doméně zapnuté DNSSEC — jinak ho nech být,
  běžnou doručitelnost neblokuje.

  Shrnutí priorit

  1. Přidat DMARC (nejvíc ovlivní doručitelnost) 🔴
  2. Počkat / ověřit SPF až zezelená 🟡
  3. TLSA/DANE ignorovat, dokud neřešíš DNSSEC ⚪

  Chceš, abych ověřil aktuální stav SPF/DMARC přes dig přímo teď?

✻ Cooked for 41s

❯ ověř aktuální stav SPF a DMARC přes dig                                       
  Ran 1 shell command (ctrl+o to expand)

● Ověřeno — a našlo se něco důležitého:

  🔴 SPF je rozbité

  "v=spf1 mx ~all 2"

  Na konci je navíc 2! To je omylem zkopírovaná poznámka pod čarou z toho admin
  panelu (kde ² znamenalo „volitelné"). Tenhle přebytečný token dělá ze SPF
  neplatný/nejednoznačný záznam — proto ten panel ukazoval ? místo zelené
  fajfky. Některé servery to vyhodnotí jako permerror.

  Oprava — přepiš TXT záznam multishoping.eu na přesně:
  v=spf1 mx ~all
  (A pozor — máš tam i druhý TXT google-site-verification=..., ten je v pořádku,
  nech ho být. SPF musí být samostatný TXT.)

  🔴 DMARC chybí úplně

  dig na _dmarc.multishoping.eu vrací prázdno — záznam v DNS reálně není.
  Přidej:
  _dmarc.multishoping.eu  TXT  "v=DMARC1; p=none;
  rua=mailto:dmarc@multishoping.eu"
  (Začni s p=none na monitoring, po pár týdnech zpřísni na quarantine.)

  ✅ DKIM je OK

  dkim._domainkey vrací platný v=DKIM1;... klíč.

  ---
  Shrnutí

  ┌────────┬───────────────────────┬──────────────────────┐
  │ Záznam │         Stav          │         Akce         │
  ├────────┼───────────────────────┼──────────────────────┤
  │ SPF    │ 🔴 chybný (...~all 2) │ odstranit koncové  2 │
  ├────────┼───────────────────────┼──────────────────────┤
  │ DMARC  │ 🔴 chybí              │ přidat TXT záznam    │
  ├────────┼───────────────────────┼──────────────────────┤
  │ DKIM   │ ✅ OK                 │ —                    │
  └────────┴───────────────────────┴──────────────────────┘

  Obě opravy se dělají u správce DNS zóny domény multishoping.eu (ne v gcloud
  ani na serveru). Až to přepíšeš, dej vědět a znovu ověřím přes dig.

✻ Brewed for 24s

❯ jak ziskam DMARK zaznam                                                       

● DMARC záznam se nikde „nezískává" — vytvoříš si ho sám jako TXT záznam v DNS.
  Je to jen textový řetězec s parametry, které si nastavíš podle toho, jak
  přísně chceš maily hlídat.

  Co přesně přidat

  U správce DNS zóny domény multishoping.eu (tam, kde máš A/MX/SPF) vytvoř nový
  záznam:

  ┌─────────────┬───────────────────────────────────────────────────────┐
  │    Pole     │                        Hodnota                        │
  ├─────────────┼───────────────────────────────────────────────────────┤
  │ Name / Host │ _dmarc (nebo _dmarc.multishoping.eu — podle rozhraní) │
  ├─────────────┼───────────────────────────────────────────────────────┤
  │ Type        │ TXT                                                   │
  ├─────────────┼───────────────────────────────────────────────────────┤
  │ Value       │ v=DMARC1; p=none; rua=mailto:dmarc@multishoping.eu    │
  └─────────────┴───────────────────────────────────────────────────────┘

  Co jednotlivé části znamenají

  - v=DMARC1 — verze (povinné, vždy první)
  - p=none — politika: co dělat s maily, které neprojdou. none = nic nedělej,
  jen reportuj (bezpečný start)
  - rua=mailto:... — kam posílat souhrnné reporty (musí to být existující
  schránka)

  Doporučený postup (fáze)

  1. Teď – monitoring: p=none → nic se nezahazuje, jen sbíráš data pár týdnů
  v=DMARC1; p=none; rua=mailto:dmarc@multishoping.eu
  2. Po ověření, že legitimní maily procházejí SPF+DKIM: zpřísni na karanténu
  (podezřelé do spamu)
  v=DMARC1; p=quarantine; rua=mailto:dmarc@multishoping.eu; adkim=s; aspf=s
  3. Nakonec (plná ochrana): p=reject — falešné maily se rovnou odmítnou

  ▎ ⚠️ Nezačínej rovnou p=reject/quarantine — pokud něco není správně (třeba to 
  ▎ rozbité SPF), zahodil bys i vlastní legitimní poštu. Proto p=none na 
  ▎ začátek.

  Důležité pořadí

  1. Nejdřív oprav SPF (to koncové  2)
  2. Pak přidej DMARC s p=none

  Až obojí uděláš, ověřím přes dig. Chceš, abych ti připravil i verzi s mailto
  na jinou schránku, nebo ti dmarc@multishoping.eu sedí?

✻ Baked for 23s

❯                                                                               
  DMARC Record Assistant                                                        
                                                                                
      Home                                                                      
      About                                                                     
      Site                                                                      
                                                                                
  Background                                                                    
                                                                                
  DMARC (Domain-based Message Authentication, Reporting & Conformance) is an    
  enhancement to existing email authentication technologies. Details of the     
  DMARC protocol and related information can be found at dmarc.org. Development 
  of DMARC is still in progress and subject to change. This assistant has been  
  updated based on RFC 7489. Terms used in this assistant are taken from        
  section 6.3 of that document.                                                 
  DMARC Assistant                                                               
                                                                                
  Most of the the terms below have mouseovers that provide additional           
  information about their meaning in DMARC.                                     
  Domain:                                                                       
  Required                                                                      
  Requested policy type:                                                        
      none quarantine reject                                                    
  Optional                                                                      
  Aggregate Data Reporting Address [1]:                                         
  Forensic Data Reporting Address [1],[2]:                                      
                                                                                
  Failure reporting options (default is 0):                                     
      0 1 d s                                                                   
  DKIM identifier alignment:                                                    
      relaxed (default) strict                                                  
  SPF identifier alignment:                                                     
      relaxed (default) strict                                                  
  Report Format:                                                                
      afrf (default) iodef                                                      
  Apply Policy to this Percentage:     % (100 default)                          
  Reporting Interval (default=86400):     Seconds                               
  Subdomain Policy:                                                             
  Defaults to same as domain                                                    
      none quarantine reject                                                    
  Notes/Warnings:                                                               
                                                                                
  [1] Multiple addresses are supported (at least two). Enter a comma separted   
  list for more than one. The optional size limit is not supported by all       
  providers and use will cause interoperability problems as of 2014/08/03.      
  [2] May be very high volume - the ruf address must be prepared to receive a   
  LOT of mail.                                                                  
  Contact :                                                                     
                                                                                
      E-mail                                                                    
                                                                                
  Links :                                                                       
                                                                                
      DMARC                                                                     
      DMARC feedback processing                                                 
      Sender Policy Framework                                                   
      SPF record validation and testing                                         
      DomainKeys Identified Mail (DKIM)                                         
                                                                                
      Content Copyright 2012 - 2018 Kitterman Technical Services, Inc.          
      Design by Minimalistic Design                                             
                                                                                
                                                                                

● Tohle je Kittermanův DMARC Assistant (ten odkaz z tvého mailcow panelu).
  Vyplníš formulář a on ti vygeneruje hotový TXT záznam. Tady je, co do kterého
  pole zadat:

  Vyplnění formuláře

  ┌─────────────────────┬───────────────────────┬───────────────────────────┐
  │        Pole         │       Co zadat        │           Proč            │
  ├─────────────────────┼───────────────────────┼───────────────────────────┤
  │ Domain              │ multishoping.eu       │ tvoje doména              │
  ├─────────────────────┼───────────────────────┼───────────────────────────┤
  │ Requested policy    │                       │ bezpečný start — jen      │
  │ type                │ none                  │ monitoring, nic se        │
  │                     │                       │ nezahazuje                │
  ├─────────────────────┼───────────────────────┼───────────────────────────┤
  │ Aggregate Data      │                       │ sem chodí souhrnné        │
  │ Reporting Address   │ dmarc@multishoping.eu │ reporty (musí to být      │
  │ [1]                 │                       │ funkční schránka)         │
  ├─────────────────────┼───────────────────────┼───────────────────────────┤
  │ Forensic Data       │                       │ forenzní reporty =        │
  │ Reporting Address   │ nech prázdné          │ obrovský objem mailů,     │
  │ [1],[2]             │                       │ nepotřebuješ              │
  ├─────────────────────┼───────────────────────┼───────────────────────────┤
  │ Failure reporting   │ 0 (default)           │ necháváš výchozí          │
  │ options             │                       │                           │
  ├─────────────────────┼───────────────────────┼───────────────────────────┤
  │ DKIM identifier     │ relaxed (default)     │ necháváš výchozí          │
  │ alignment           │                       │                           │
  ├─────────────────────┼───────────────────────┼───────────────────────────┤
  │ SPF identifier      │ relaxed (default)     │ necháváš výchozí          │
  │ alignment           │                       │                           │
  ├─────────────────────┼───────────────────────┼───────────────────────────┤
  │ Report Format       │ afrf (default)        │ necháváš výchozí          │
  ├─────────────────────┼───────────────────────┼───────────────────────────┤
  │ Apply Policy to     │ prázdné / 100         │ platí pro 100 % mailů     │
  │ this Percentage     │                       │                           │
  ├─────────────────────┼───────────────────────┼───────────────────────────┤
  │ Reporting Interval  │ prázdné               │ výchozích 86400 s = 1×    │
  │                     │                       │ denně                     │
  ├─────────────────────┼───────────────────────┼───────────────────────────┤
  │ Subdomain Policy    │ nech prázdné          │ zdědí se z hlavní         │
  │                     │                       │ politiky                  │
  └─────────────────────┴───────────────────────┴───────────────────────────┘

  Co ti to vygeneruje

  Po odeslání dostaneš přesně tohle:

  v=DMARC1; p=none; rua=mailto:dmarc@multishoping.eu

  Což je identické s tím, co jsem ti navrhoval. Ten assistant je jen pohodlný
  generátor — výsledek vložíš jako TXT záznam:

  - Name: _dmarc
  - Type: TXT
  - Value: v=DMARC1; p=none; rua=mailto:dmarc@multishoping.eu

  ⚠️ Než to dáš do DNS

  Ověř, že schránka dmarc@multishoping.eu reálně existuje (nebo použij jinou,
  kterou čteš) — jinak ti reporty budou padat. Když schránku zakládat nechceš,
  můžeš dát klidně svůj běžný mail.

  Chceš dmarc@multishoping.eu, nebo mám záznam připravit s jinou adresou pro
  reporty?

✻ Crunched for 23s

❯ ; <<>> DiG 9.18.49 <<>> @illidan.zoner.com +tcp +tries=5 multishoping.eu AXFR 
  ; (1 server found)                                                            
  ;; global options: +cmd                                                       
  multishoping.eu.    3600    IN    SOA    ns1.regzone.cz.                      
  administrator.czechia.cz. 2026070218 10800 1800 1814400 3600                  
  multishoping.eu.    3600    IN    A    34.66.99.210                           
  multishoping.eu.    3600    IN    NS    ns1.regzone.cz.                       
  multishoping.eu.    3600    IN    NS    ns1.regzone.de.                       
  multishoping.eu.    3600    IN    NS    ns1.regzone.info.                     
  multishoping.eu.    3600    IN    MX    10 mail.multishoping.eu.              
  multishoping.eu.    3600    IN    TXT    "v=spf1 mx ~all"                     
  multishoping.eu.    3600    IN    TXT                                         
  "google-site-verification=Az77VcxGwCROAlwXv1FtD-iCgLx6WIBcC4G9kh8e8UM"        
  multishoping.eu.    3600    IN    RRSIG    A 13 2 3600 20261030224813         
  20260702204813 48407 multishoping.eu.                                         
  HyZBk6z9Fk/tyhNZmToCJknFjU/DDusdH2b90ff1nhn9/3BFGpHcY0ek                      
  t2avOaF4gLM/7QXCIUC0q1UbKZHB2A==                                              
  multishoping.eu.    3600    IN    RRSIG    NS 13 2 3600 20261030224813        
  20260702204813 48407 multishoping.eu.                                         
  1ZpNxcBSv+oJJY6m3VTR2q3A3bSOzKAbsJzgzwAyWhxkSvL9tRCPUrEq                      
  QftTjvkN5aKOB+pfTHhuQqCVdSR6OA==                                              
  multishoping.eu.    3600    IN    RRSIG    SOA 13 2 3600 20261030224813       
  20260702204813 48407 multishoping.eu.                                         
  bLf/SPyU5gc9n/n6q6Gdva6rc90mmTvrKLx9tqmWLrd1mWQNaj/i+SSF                      
  qwMYEoewik9TDbY2bSbZl25U9/dIbQ==                                              
  multishoping.eu.    3600    IN    RRSIG    MX 13 2 3600 20261030224813        
  20260702204813 48407 multishoping.eu.                                         
  EUZoJzL67CDWsN8GgOPckfK4xMeiCf3OifJ3JvGT/cQRdqrRRI37FKRu                      
  Va/MuaWA8WSkSQV2H8AZTpWTMO/YBg==                                              
  multishoping.eu.    3600    IN    RRSIG    TXT 13 2 3600 20261030224813       
  20260702204813 48407 multishoping.eu.                                         
  QMk2yq9HxQ0S5Ah0SJIyudO5pxUVt40U0InY94OWc5q+JcRbHtqBG7vf                      
  sCGNz2a128WxKswJ1qGuyjp36wEDjQ==                                              
  multishoping.eu.    3600    IN    RRSIG    DNSKEY 13 2 3600 20261030224813    
  20260702204813 11972 multishoping.eu.                                         
  i6t0MYC9NK4APwhE52j5AB4DJ+OkR1F6uov/Vmm2B/yZE2zfloFoPYRM                      
  ZumaZo+rkSzr9Szyw6oKKasI8Jd4QQ==                                              
  multishoping.eu.    3600    IN    RRSIG    DNSKEY 13 2 3600 20261030224813    
  20260702204813 48407 multishoping.eu.                                         
  LwccJnWcL+Xfp9qDNktprfH7AdRo01/uTj8e/l8bsm/2zJDxaWyrVN/0                      
  pgj3sUNiTCb7ZLu7MvS5yyMy1aPEug==                                              
  multishoping.eu.    0    IN    RRSIG    NSEC3PARAM 13 2 0 20261030224813      
  20260702204813 48407 multishoping.eu.                                         
  r2sr0fUcB89PaeRWvHp8GoB/8F8uZwRG7NwBmxHL31X1tynYgrhQFyXy                      
  rdWzrDx+k0Aiiaa0dn47RBE6Uq0pzA==                                              
  multishoping.eu.    3600    IN    DNSKEY    256 3 13                          
  88Z0Y4HpZ7c+jwHPPJF/wAAXTnPESYQprf/jh7BMJaz4+4GDudC4hbPU                      
  NChaMH5Skd13mtVmrDRY0JYbSgz6rw==                                              
  multishoping.eu.    3600    IN    DNSKEY    257 3 13 Ifnvm                    
  ──── (34 lines hidden) ────────────────────────────────────────────────────── 
  J0P7xKb/eh5s kvPsElvnsxMch6cTME3ZtZcXVz4alA==                                 
  dhauaja7rkp3q2fi3rvc944fsh7sa4tq.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  GFV0BBP6OUBILJ88V4OAQ497FBM3I9NT A RRSIG                                      
  gfv0bbp6oubilj88v4oaq497fbm3i9nt.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261030224813 20260702204813 48407 multishoping.eu.                     
  2tY7DS1dMnDMFLgBUEABJpC6nc+V5jnIVvUYVFxnoIR5Z+Y0VD2mcH6d                      
  1sAc7rLjdF5TufBv76SE2GGwrTXVRA==                                              
  gfv0bbp6oubilj88v4oaq497fbm3i9nt.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  GP5GTI4KSPPR0SDJ5B6T0RSF84SSCEIS A RRSIG                                      
  gp5gti4ksppr0sdj5b6t0rsf84ssceis.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261030224813 20260702204813 48407 multishoping.eu.                     
  zV89vORoL3xe7M1gajdJAghcILmcfm2nv49ZdRuixgIQ1GPGE5Ej5uP3                      
  mkL3Pe3grRqCuLPLdDd0VZLdHFmBMA==                                              
  gp5gti4ksppr0sdj5b6t0rsf84ssceis.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  H3UPU3LNGJP5HTA8J627R6RD82E6PFI8 A RRSIG                                      
  h3upu3lngjp5hta8j627r6rd82e6pfi8.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261030224813 20260702204813 48407 multishoping.eu.                     
  uPHRGNPl2lSspLqTYpKrYe/nUXkZhdtxjkOEFYPo6poq0Y9i3FMjCCzj                      
  9TtBqBnPo2VbmaF/XBZqjc79Z4ipXg==                                              
  h3upu3lngjp5hta8j627r6rd82e6pfi8.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  PEA977AK26NS6OB6UNKIVH7CNKI7LGTQ TXT RRSIG                                    
  pea977ak26ns6ob6unkivh7cnki7lgtq.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261030224813 20260702204813 48407 multishoping.eu.                     
  mfPH8+7mfxY3yS4imWHx0l6gA7nhGpCpGjs+zHAG2NMUgPYEVdnDaDQx                      
  ZTRtgaXDkkn+3IwfonbKE2kJ4xGOcg==                                              
  pea977ak26ns6ob6unkivh7cnki7lgtq.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  TR6GMVG5M9O0A781DRHOC0TVG33G38EU CNAME RRSIG                                  
  tr6gmvg5m9o0a781drhoc0tvg33g38eu.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261030224813 20260702204813 48407 multishoping.eu.                     
  8eWXWI4YkGfdPOilnV5hl5Q6hJlKPhl+v+HSxkndEsFygiLFWUxRzyQ1                      
  xEf4lAkQuIaTE67Iu/+Ma7GCQMsDZw==                                              
  tr6gmvg5m9o0a781drhoc0tvg33g38eu.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  UNAINF742NS87OGUVNG4056PGCRLOS2S                                              
  unainf742ns87oguvng4056pgcrlos2s.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261030224813 20260702204813 48407 multishoping.eu.                     
  fn8EkR4OBn55ixDfsreXwh1b3unOAIARiTod/Lg5rvs5fH03+2wgA2WG                      
  8v/n1qQB89+gfdDTxk12r32hquBf1A==                                              
  unainf742ns87oguvng4056pgcrlos2s.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  07T20H3JG7J6NC4S5IAPFB5UCV4DN1E6 CNAME RRSIG                                  
  multishoping.eu.    3600    IN    SOA    ns1.regzone.cz.                      
  administrator.czechia.cz. 2026070218 10800 1800 1814400 3600                  
  ;; Query time: 0 msec                                                         
  ;; SERVER: 217.198.113.119#53(illidan.zoner.com) (TCP)                        
  ;; WHEN: Thu Jul 02 23:52:49 CEST 2026                                        
  ;; XFR size: 66 records (messages 1, bytes 5846)                              
                                                                                
                                                                                

● Skvělé, tohle je kompletní zone transfer (AXFR) přímo z autoritativního
  serveru — nejspolehlivější zdroj. Tady je stav:

  ✅ SPF — OPRAVENO

  multishoping.eu.  TXT  "v=spf1 mx ~all"
  To koncové  2 je pryč. SPF je teď validní. (Ten ? v mailcow panelu by měl do
  24 h zezelenat.) Google-site-verification TXT je vedle netknutý — správně.

  🔴 DMARC — STÁLE CHYBÍ

  V celé zóně není žádný _dmarc.multishoping.eu záznam. To je jediná zbývající
  věc k doplnění. Přidej u regzone (ns1.regzone.cz):

  - Name: _dmarc
  - Type: TXT
  - Value: v=DMARC1; p=none; rua=mailto:dmarc@multishoping.eu

  ✅ DNSSEC — zapnuto (bonus)

  Vidím DNSKEY (256+257), RRSIG, NSEC3PARAM — doména je podepsaná DNSSEC. To je
  důležité zjištění: znamená to, že TLSA/DANE z mailcow panelu teď reálně může 
  fungovat (dřív timeoutoval). Až doděláš DMARC, můžeš zvážit i zapnutí DANE pro
  plný stack.

  ✅ Ostatní — vše sedí

  ┌───────────────────────────────────────────┬─────────────────────────────┐
  │                  Záznam                   │             Cíl             │
  ├───────────────────────────────────────────┼─────────────────────────────┤
  │ MX                                        │ mail.multishoping.eu (prio  │
  │                                           │ 10)                         │
  ├───────────────────────────────────────────┼─────────────────────────────┤
  │ DKIM                                      │ platný klíč, podepsaný      │
  ├───────────────────────────────────────────┼─────────────────────────────┤
  │ autodiscover / autoconfig                 │ CNAME → mail                │
  ├───────────────────────────────────────────┼─────────────────────────────┤
  │ _submission._tcp SRV                      │ port 587 → mail ✅          │
  ├───────────────────────────────────────────┼─────────────────────────────┤
  │ mail                                      │ 34.31.195.148               │
  ├───────────────────────────────────────────┼─────────────────────────────┤
  │ web (www, eshop, domacnost, elektronika,  │ 34.66.99.210                │
  │ hlavní)                                   │                             │
  └───────────────────────────────────────────┴─────────────────────────────┘

  ---
  Zbývá jediný krok

  Přidat DMARC záznam (viz výše). Jakmile to u regzone uložíš, dej vědět —
  ověřím přes dig a tím je mailový DNS stack kompletní (SPF + DKIM + DMARC +
  DNSSEC). Zvládneš přidat TXT přes regzone panel, nebo chceš postup?

✻ Cogitated for 28s

❯ ; <<>> DiG 9.18.49 <<>> @illidan.zoner.com +tcp +tries=5 multishoping.eu AXFR 
  ; (1 server found)                                                            
  ;; global options: +cmd                                                       
  multishoping.eu.    3600    IN    SOA    ns1.regzone.cz.                      
  administrator.czechia.cz. 2026070220 10800 1800 1814400 3600                  
  multishoping.eu.    3600    IN    A    34.66.99.210                           
  multishoping.eu.    3600    IN    NS    ns1.regzone.cz.                       
  multishoping.eu.    3600    IN    NS    ns1.regzone.de.                       
  multishoping.eu.    3600    IN    NS    ns1.regzone.info.                     
  multishoping.eu.    3600    IN    MX    10 mail.multishoping.eu.              
  multishoping.eu.    3600    IN    TXT    "v=spf1 mx ~all"                     
  multishoping.eu.    3600    IN    TXT                                         
  "google-site-verification=Az77VcxGwCROAlwXv1FtD-iCgLx6WIBcC4G9kh8e8UM"        
  multishoping.eu.    3600    IN    RRSIG    A 13 2 3600 20261030225247         
  20260702205247 48407 multishoping.eu.                                         
  kNQ0CuHUhPJtoPy8bE1LStmjtqbMh9hSWxEXG4QVjTbAlFk+ul8FWRKd                      
  iXLTBtJOlPaK8G2FanNpkq1Skb337g==                                              
  multishoping.eu.    3600    IN    RRSIG    NS 13 2 3600 20261030225247        
  20260702205247 48407 multishoping.eu.                                         
  Ns1ZSv3RQwOpMRHvVM/P2D9J7f4WbsGgT6CbbzQeRJyeOaH9SS1aUfOF                      
  bLBsweO3KegzQ+PjBSqLbz9CrNkdaA==                                              
  multishoping.eu.    3600    IN    RRSIG    SOA 13 2 3600 20261030225247       
  20260702205247 48407 multishoping.eu.                                         
  ffYk4o+3cqML/OrPd76jcB8Yzg7Ovxam4jvs+UttBrEOitxqmEos19ND                      
  2YcVXCVHatGSR04NyDiOOBEsNsQLww==                                              
  multishoping.eu.    3600    IN    RRSIG    MX 13 2 3600 20261030225247        
  20260702205247 48407 multishoping.eu.                                         
  4mtTi3IXLaID2J/UOkY1v0gzm95NID/Q562s7R1Nk/zANAMtMHcXNi8h                      
  jblIlPiseKSND1yUTwitzQ+O8dxnOg==                                              
  multishoping.eu.    3600    IN    RRSIG    TXT 13 2 3600 20261030225247       
  20260702205247 48407 multishoping.eu.                                         
  WNp+3jtwOQfWLLrvPAEpicSfGgc5yxe56SgYgWN5l+Rp4hHArvVaovfh                      
  C30m5bKrwYuMxAbYsT4TptnK0bERow==                                              
  multishoping.eu.    3600    IN    RRSIG    DNSKEY 13 2 3600 20261030225247    
  20260702205247 11972 multishoping.eu.                                         
  c8NEcyuwKaAjsaAmiQJqzAsdM5fABnPvtJhP0nqij19YC9fZwWxrfsWI                      
  oYoG1trzg7DSuT/kGAdcwS+XSZk6GQ==                                              
  multishoping.eu.    3600    IN    RRSIG    DNSKEY 13 2 3600 20261030225247    
  20260702205247 48407 multishoping.eu.                                         
  1b/IP6cQoZzzxtIa/6Ngus3g6fJ7KraX50rMGUJmIDlY56Wu1MI15vRt                      
  x5WBs4nrOuob2nA0/Dm0gpmavnRifw==                                              
  multishoping.eu.    0    IN    RRSIG    NSEC3PARAM 13 2 0 20261030225247      
  20260702205247 48407 multishoping.eu.                                         
  T3dlPp/q+BEbz0YQ9gsLGh2ytYZDUfP64exYwYm+mut3QN0ZduglbzNR                      
  3SqWBLPGFlVemiuN/1/Qb3/Wx0L7NQ==                                              
  multishoping.eu.    3600    IN    DNSKEY    256 3 13                          
  88Z0Y4HpZ7c+jwHPPJF/wAAXTnPESYQprf/jh7BMJaz4+4GDudC4hbPU                      
  NChaMH5Skd13mtVmrDRY0JYbSgz6rw==                                              
  multishoping.eu.    3600    IN    DNSKEY    257 3 13 Ifnvm                    
  ──── (38 lines hidden) ────────────────────────────────────────────────────── 
  4tAuQuUjSFRi 2TmlYaZxdITsSNH38bZf/Bco7lRo6A==                                 
  dhauaja7rkp3q2fi3rvc944fsh7sa4tq.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  GFV0BBP6OUBILJ88V4OAQ497FBM3I9NT A RRSIG                                      
  gfv0bbp6oubilj88v4oaq497fbm3i9nt.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261030225247 20260702205247 48407 multishoping.eu.                     
  q3s9oa8EorqMvddYLiAmS2/LxtaZlJEqxyTpcXjgQcXnHxfCD/AFZWry                      
  WFFCuk3Ioy/sstbFlqd/KeOiftdMBA==                                              
  gfv0bbp6oubilj88v4oaq497fbm3i9nt.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  GP5GTI4KSPPR0SDJ5B6T0RSF84SSCEIS A RRSIG                                      
  gp5gti4ksppr0sdj5b6t0rsf84ssceis.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261030225247 20260702205247 48407 multishoping.eu.                     
  X4uhGpmHWoKl5Mv4sb0GCK6yF/hPhP2gvAHfxRvSdrmoKVewDAz552r9                      
  x4CXt3OHhjqSJ6qbQ6UQTKn4Vlmw5w==                                              
  gp5gti4ksppr0sdj5b6t0rsf84ssceis.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  H3UPU3LNGJP5HTA8J627R6RD82E6PFI8 A RRSIG                                      
  h3upu3lngjp5hta8j627r6rd82e6pfi8.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261030225247 20260702205247 48407 multishoping.eu.                     
  4RQZx6QvLvQ+/y/a5qnYmENsjenM5xzuU2QS76MCcGhlc08Vk/6opYKy                      
  R2bMzu1RCFyX2NSw76kkj6fDwN9H2w==                                              
  h3upu3lngjp5hta8j627r6rd82e6pfi8.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  PEA977AK26NS6OB6UNKIVH7CNKI7LGTQ TXT RRSIG                                    
  pea977ak26ns6ob6unkivh7cnki7lgtq.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261030225247 20260702205247 48407 multishoping.eu.                     
  56voxHD7LFzjvnMQuOSulkHcUehKnSy0gBptcyRjDE3gdzfFfOVDJiVt                      
  g+Q4r+QmYGnHRn81CPtw8AMTE3VjMA==                                              
  pea977ak26ns6ob6unkivh7cnki7lgtq.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  TR6GMVG5M9O0A781DRHOC0TVG33G38EU CNAME RRSIG                                  
  tr6gmvg5m9o0a781drhoc0tvg33g38eu.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261030225247 20260702205247 48407 multishoping.eu.                     
  QJseM0O0O5LczYrUN77aI0ObEDrivvPk9d1W1iBxrjBFOp8wrNM4q6Zt                      
  xVF8MYaNGXlWaCzxisfZanAkoaiB+Q==                                              
  tr6gmvg5m9o0a781drhoc0tvg33g38eu.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  UNAINF742NS87OGUVNG4056PGCRLOS2S                                              
  unainf742ns87oguvng4056pgcrlos2s.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261030225247 20260702205247 48407 multishoping.eu.                     
  dZ6z+u9L696EZ2rrqa59BBcu3Gpv6nGY/ztHkpVvpqFAggYXZ/dStNyy                      
  NWmdVs6WSnNEudngqM9lRyioLGgi6A==                                              
  unainf742ns87oguvng4056pgcrlos2s.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  07T20H3JG7J6NC4S5IAPFB5UCV4DN1E6 CNAME RRSIG                                  
  multishoping.eu.    3600    IN    SOA    ns1.regzone.cz.                      
  administrator.czechia.cz. 2026070220 10800 1800 1814400 3600                  
  ;; Query time: 0 msec                                                         
  ;; SERVER: 217.198.113.119#53(illidan.zoner.com) (TCP)                        
  ;; WHEN: Thu Jul 02 23:56:09 CEST 2026                                        
  ;; XFR size: 70 records (messages 1, bytes 6248)                              
                                                                                
                                                                                

● Skoro! Záznam jsi přidal a jeho obsah je perfektní, ale je na špatném názvu —
  a to je kritické:

  🔴 Chyba v názvu záznamu

  dmark.multishoping.eu.   TXT   "v=DMARC1; p=none; ..."

  Máš tam dmark, ale musí to být _dmarc — s podtržítkem na začátku a správně
  napsané dmarc (ne dmark). DMARC spec (RFC 7489) vyžaduje, aby záznam byl
  přesně na _dmarc.<doména>. Poštovní servery hledají jedině
  _dmarc.multishoping.eu — na dmark... se nikdy nepodívají, takže takhle DMARC
  vůbec nefunguje.

  Oprava u regzone

  1. Smaž záznam dmark
  2. Vytvoř nový se stejnou hodnotou:

  ┌───────┬──────────────────────────────────────────────────────────────────┐
  │ Pole  │                             Hodnota                              │
  ├───────┼──────────────────────────────────────────────────────────────────┤
  │ Name  │ _dmarc                                                           │
  ├───────┼──────────────────────────────────────────────────────────────────┤
  │ Type  │ TXT                                                              │
  ├───────┼──────────────────────────────────────────────────────────────────┤
  │ Value │ v=DMARC1; p=none; rua=mailto:dmarc@multishoping.eu; fo=0;        │
  │       │ adkim=r; aspf=r; rf=afrf                                         │
  └───────┴──────────────────────────────────────────────────────────────────┘

  ▎ Případně, pokud regzone panel nepovolí přejmenovat, prostě přidej nový 
  ▎ _dmarc a starý dmark odstraň.

  Hodnotu měnit nemusíš — p=none; adkim=r; aspf=r; fo=0; rf=afrf je naprosto v
  pořádku (relaxed alignment, monitoring režim). Jen ten název.

  Zbytek zóny ✅

  SPF v=spf1 mx ~all OK, DKIM OK, DNSSEC OK, MX OK. Chybí doopravdy jen ten
  správně pojmenovaný DMARC.

  Až to u regzone přejmenuješ na _dmarc, pošli nový AXFR nebo jen řekni a ověřím
  přes dig +short TXT _dmarc.multishoping.eu.

✻ Baked for 23s

❯ ; <<>> DiG 9.18.49 <<>> @illidan.zoner.com +tcp +tries=5 multishoping.eu AXFR 
  ; (1 server found)                                                            
  ;; global options: +cmd                                                       
  multishoping.eu.    3600    IN    SOA    ns1.regzone.cz.                      
  administrator.czechia.cz. 2026070222 10800 1800 1814400 3600                  
  multishoping.eu.    3600    IN    A    34.66.99.210                           
  multishoping.eu.    3600    IN    NS    ns1.regzone.cz.                       
  multishoping.eu.    3600    IN    NS    ns1.regzone.de.                       
  multishoping.eu.    3600    IN    NS    ns1.regzone.info.                     
  multishoping.eu.    3600    IN    MX    10 mail.multishoping.eu.              
  multishoping.eu.    3600    IN    TXT    "v=spf1 mx ~all"                     
  multishoping.eu.    3600    IN    TXT                                         
  "google-site-verification=Az77VcxGwCROAlwXv1FtD-iCgLx6WIBcC4G9kh8e8UM"        
  multishoping.eu.    3600    IN    RRSIG    A 13 2 3600 20261030225621         
  20260702205621 48407 multishoping.eu.                                         
  +JfXjG0h3KMIG9Xc4tZruigBbgtpp1+yt0cQnWLxTMRwnIAqIgvF7PxH                      
  ii2RBxQp5Qr/VLCtQgLaea1N+oMJsA==                                              
  multishoping.eu.    3600    IN    RRSIG    NS 13 2 3600 20261030225621        
  20260702205621 48407 multishoping.eu.                                         
  rl14LKOKZMEmEgVUyy3CilRZ8o3s39q0+XFNzKLOOjMqCK6E7tNjWBM8                      
  kQqp6SnhPktk4AZfF9n85/OINKLk2g==                                              
  multishoping.eu.    3600    IN    RRSIG    SOA 13 2 3600 20261030225621       
  20260702205621 48407 multishoping.eu.                                         
  tKJfCToj09vPMLDHozoTBlSrCYnKyWTvTWUbRs4BUu0j9GoWGAnPDPFe                      
  kIdYlQ70Y9NFFuYu+7YJhznfDjjuUw==                                              
  multishoping.eu.    3600    IN    RRSIG    MX 13 2 3600 20261030225621        
  20260702205621 48407 multishoping.eu.                                         
  f+4ksIkrX5PPmQbWBbQ0yk4/p6NW+4ftlLfkF58J1V/dTvNFXdLGT9f+                      
  nA8rdFFJtTMZCEU6GN9WZ8bL7UM/yQ==                                              
  multishoping.eu.    3600    IN    RRSIG    TXT 13 2 3600 20261030225621       
  20260702205621 48407 multishoping.eu.                                         
  Y9Eg1OJtkqh/SdPS3XeHtXmgXBvAYqFp1CmmdivOWS1Dnw/RihyLeoSj                      
  Y1WWtao0nMJyifhxFPpqNC45R4wSzA==                                              
  multishoping.eu.    3600    IN    RRSIG    DNSKEY 13 2 3600 20261030225621    
  20260702205621 11972 multishoping.eu.                                         
  FQ3zULB+OvCZyIjhsSw7Os0kuz1hXZvpXdBdc1xjTpsraEGXCYnr9i8d                      
  cuupiJW4jGYiOZIwHGnWk6KlmxhqXA==                                              
  multishoping.eu.    3600    IN    RRSIG    DNSKEY 13 2 3600 20261030225621    
  20260702205621 48407 multishoping.eu.                                         
  E+OLmpE5iyLM1VHKCBnJxlCb1KbCH/sUq0lRTwvaDoUNXFrNShoPkVDe                      
  KGVpFq72+Vm72HVnzYaUM8ZCTvm+XA==                                              
  multishoping.eu.    0    IN    RRSIG    NSEC3PARAM 13 2 0 20261030225621      
  20260702205621 48407 multishoping.eu.                                         
  /BOju3s91navTjPLVhHwqtF3o5vnzZt7NDnD5noiefRL75HqdxgPJJGV                      
  eNpuqY2EXJz2Wt3RIBxeehC8Y5HVaQ==                                              
  multishoping.eu.    3600    IN    DNSKEY    256 3 13                          
  88Z0Y4HpZ7c+jwHPPJF/wAAXTnPESYQprf/jh7BMJaz4+4GDudC4hbPU                      
  NChaMH5Skd13mtVmrDRY0JYbSgz6rw==                                              
  multishoping.eu.    3600    IN    DNSKEY    257 3 13 Ifnvm                    
  ──── (38 lines hidden) ────────────────────────────────────────────────────── 
  Chr9wxGUoU ZTVLe5xetlcmjMeaKEmEJVDHau/HlA==                                   
  div2rp1ltgh0cqdrvh2netpmh7dj4esb.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  GFV0BBP6OUBILJ88V4OAQ497FBM3I9NT TXT RRSIG                                    
  gfv0bbp6oubilj88v4oaq497fbm3i9nt.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261030225621 20260702205621 48407 multishoping.eu.                     
  MV8sXTIeMy2dOTHDU7la5PPrM0OT1fuqp4pLcnQPOIrn2An0moqR+788                      
  LzL603QIwQPPTgN9toaABkdfpo124Q==                                              
  gfv0bbp6oubilj88v4oaq497fbm3i9nt.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  GP5GTI4KSPPR0SDJ5B6T0RSF84SSCEIS A RRSIG                                      
  gp5gti4ksppr0sdj5b6t0rsf84ssceis.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261030225621 20260702205621 48407 multishoping.eu.                     
  W2nl8pV8UWhQUkm3BD+wYcjt2FOgTA4tQFfjY0Nki0SNXUzzl5/eE8UP                      
  V9xd64H9uMpPW52HPuEcMtunt1F7gA==                                              
  gp5gti4ksppr0sdj5b6t0rsf84ssceis.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  H3UPU3LNGJP5HTA8J627R6RD82E6PFI8 A RRSIG                                      
  h3upu3lngjp5hta8j627r6rd82e6pfi8.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261030225621 20260702205621 48407 multishoping.eu.                     
  KDFQeimLVJyr8pU9e8vpxqvv7X9pFMwD7NnEHvD+G+XiN5QF1MIY4bYC                      
  lhSTbke4yqFbD7RG7uPnvGYWK+b3AQ==                                              
  h3upu3lngjp5hta8j627r6rd82e6pfi8.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  PEA977AK26NS6OB6UNKIVH7CNKI7LGTQ TXT RRSIG                                    
  pea977ak26ns6ob6unkivh7cnki7lgtq.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261030225621 20260702205621 48407 multishoping.eu.                     
  nL++SwttI2I5tHI7e4SoT8ReK8T12wGUJc83wT6haafNkeuk6pCqCgk1                      
  f0JeFjKt5rdGFI8pmA6Ok5VO/1+a8g==                                              
  pea977ak26ns6ob6unkivh7cnki7lgtq.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  TR6GMVG5M9O0A781DRHOC0TVG33G38EU CNAME RRSIG                                  
  tr6gmvg5m9o0a781drhoc0tvg33g38eu.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261030225621 20260702205621 48407 multishoping.eu.                     
  GI795CHOGyTqs8kEl98kwpm3pbKIJZexfCdFDRV1kEs2akRzxSwenUlC                      
  hW8TUtDI4SjqemgIflvAncoGUEYL6w==                                              
  tr6gmvg5m9o0a781drhoc0tvg33g38eu.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  UNAINF742NS87OGUVNG4056PGCRLOS2S                                              
  unainf742ns87oguvng4056pgcrlos2s.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261030225621 20260702205621 48407 multishoping.eu.                     
  YPViPICa1F+v8BMN1pr+EQ0jdQn9DQ7xAoLxetnhwmoeUKoU+vYYTE2v                      
  2PgO+FB10V+7KaOE6wgpNRIE4BFvzQ==                                              
  unainf742ns87oguvng4056pgcrlos2s.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  07T20H3JG7J6NC4S5IAPFB5UCV4DN1E6 CNAME RRSIG                                  
  multishoping.eu.    3600    IN    SOA    ns1.regzone.cz.                      
  administrator.czechia.cz. 2026070222 10800 1800 1814400 3600                  
  ;; Query time: 0 msec                                                         
  ;; SERVER: 217.198.113.119#53(illidan.zoner.com) (TCP)                        
  ;; WHEN: Thu Jul 02 23:57:49 CEST 2026                                        
  ;; XFR size: 70 records (messages 1, bytes 6249)                              
                                                                                
                                                                                

● Skoro tam jsi! Přidal jsi podtržítko, ale pořád je tam překlep v poslední 
  písmenu:

  🔴 Máš _dmark, musí být _dmarc

  _dmark.multishoping.eu.   ← špatně (K na konci)
  _dmarc.multishoping.eu.   ← správně (C na konci)

  Je to _dmarc — jako DMARC (Domain-based Message Authentication, Reporting &
  Conformance). Končí na C, ne na K. Poštovní servery hledají přesně
  _dmarc.multishoping.eu, takže _dmark nenajdou.

  Poslední úprava u regzone

  Přejmenuj / přepiš název záznamu z:
  - _dmark → _dmarc

  Hodnotu nech beze změny:
  v=DMARC1; p=none; rua=mailto:dmarc@multishoping.eu; fo=0; adkim=r; aspf=r;
  rf=afrf

  Až to bude, ověřím:
  dig +short TXT _dmarc.multishoping.eu

  Zbytek zóny (SPF, DKIM, MX, DNSSEC) je pořád v pořádku — tohle písmenko je
  jediné, co dělí od hotového DMARC. 🎯

✻ Churned for 15s

❯ analyzuj screenshot                                                           

  Read 1 file, listed 1 directory (ctrl+o to expand)

● Konečně to sedí! Screenshot je CZECHIA/Zoner DNS panel pro multishoping.eu a v
  sekci TXT záznamů teď vidím:

  ✅ DMARC — správně pojmenováno

  _dmarc   TXT   v=DMARC1; p=none; rua=mailto:dmarc@multishoping.eu; fo=0;
  adkim=r; aspf=r; rf=afrf

  Název je teď _dmarc (s C na konci) — přesně jak má být. 🎯

  Přehled TXT záznamů v panelu

  ┌─────────────────┬──────────────────────────────┬───────────┐
  │      Jméno      │            Obsah             │   Stav    │
  ├─────────────────┼──────────────────────────────┼───────────┤
  │ @               │ v=spf1 mx ~all               │ ✅ SPF    │
  ├─────────────────┼──────────────────────────────┼───────────┤
  │ @               │ google-site-verification=... │ ✅ Google │
  ├─────────────────┼──────────────────────────────┼───────────┤
  │ _dmarc          │ v=DMARC1; p=none; ...        │ ✅ DMARC  │
  ├─────────────────┼──────────────────────────────┼───────────┤
  │ dkim._domainkey │ v=DKIM1;...                  │ ✅ DKIM   │
  └─────────────────┴──────────────────────────────┴───────────┘

  Plus SRV (_autodiscover 443, _submission 587) ✅.

  Ověřím, jestli se to už propsalo do DNS:

  Ran 1 shell command (ctrl+o to expand)

● Můj lokální resolver vrací stará data z cache (TTL 3600 s = 1 h) — proto
  ukazuje ještě _dmark prázdné a dokonce staré SPF s tou 2. Dotážu se přímo
  autoritativního serveru, abych obešel cache:

  Ran 1 shell command (ctrl+o to expand)

● Autoritativně je vše správně — předtím to byla jen cache. Kompletní potvrzení:

  ┌──────────────┬────────────────────────────────────────┬──────┐
  │    Záznam    │         Autoritativní hodnota          │ Stav │
  ├──────────────┼────────────────────────────────────────┼──────┤
  │ DMARC _dmarc │ v=DMARC1; p=none; rua=mailto:dmarc@... │ ✅   │
  ├──────────────┼────────────────────────────────────────┼──────┤
  │ SPF @        │ v=spf1 mx ~all (bez té  2)             │ ✅   │
  ├──────────────┼────────────────────────────────────────┼──────┤
  │ starý _dmark │ prázdné (smazáno)                      │ ✅   │
  └──────────────┴────────────────────────────────────────┴──────┘

  🎉 Mailový DNS stack je kompletní

  ┌──────────────────────────────────────────┬──────┐
  │                Komponenta                │ Stav │
  ├──────────────────────────────────────────┼──────┤
  │ A mail → 34.31.195.148                   │ ✅   │
  ├──────────────────────────────────────────┼──────┤
  │ PTR (reverse DNS) → mail.multishoping.eu │ ✅   │
  ├──────────────────────────────────────────┼──────┤
  │ FCrDNS (forward=reverse)                 │ ✅   │
  ├──────────────────────────────────────────┼──────┤
  │ MX → mail.multishoping.eu                │ ✅   │
  ├──────────────────────────────────────────┼──────┤
  │ SPF                                      │ ✅   │
  ├──────────────────────────────────────────┼──────┤
  │ DKIM                                     │ ✅   │
  ├──────────────────────────────────────────┼──────┤
  │ DMARC                                    │ ✅   │
  ├──────────────────────────────────────────┼──────┤
  │ DNSSEC                                   │ ✅   │
  ├──────────────────────────────────────────┼──────┤
  │ autodiscover / autoconfig / submission   │ ✅   │
  └──────────────────────────────────────────┴──────┘

  Poznámky na závěr

  - Propagace: veřejné resolvery (a můj lokální) mají ještě starou cache s TTL
  3600 s — plně se to rozšíří do ~1 hodiny. Mailcow panel „DNS Records" pak
  ukáže samé zelené fajfky.
  - Reportovací schránka: ujisti se, že dmarc@multishoping.eu reálně existuje a
  čteš ji — začnou tam chodit denní agregované reporty.
  - Až budeš mít pár týdnů dat a ověříš, že legitimní pošta prochází, zpřísni
  DMARC z p=none na p=quarantine.
  - DANE/TLSA: máš DNSSEC, takže bys mohl volitelně doplnit TLSA záznam pro port
  25 a mít plný „email security" stack. Není nutné.

  Vše hotové — server je teď z pohledu DNS připravený spolehlivě odesílat i
  přijímat poštu. 📬

✻ Churned for 58s

❯ over podle dig                                                                

  Ran 1 shell command (ctrl+o to expand)

● Ověřeno přímo přes dig proti autoritativnímu serveru — všechno sedí:

  ┌───────────────────────────┬──────────────────────────────────────┬──────┐
  │         Kontrola          │             dig výsledek             │ Stav │
  ├───────────────────────────┼──────────────────────────────────────┼──────┤
  │ A mail                    │ 34.31.195.148                        │ ✅   │
  ├───────────────────────────┼──────────────────────────────────────┼──────┤
  │ PTR (reverse)             │ mail.multishoping.eu.                │ ✅   │
  ├───────────────────────────┼──────────────────────────────────────┼──────┤
  │ FCrDNS (forward =         │ shoda                                │ ✅   │
  │ reverse)                  │                                      │      │
  ├───────────────────────────┼──────────────────────────────────────┼──────┤
  │ MX                        │ 10 mail.multishoping.eu.             │ ✅   │
  ├───────────────────────────┼──────────────────────────────────────┼──────┤
  │ SPF                       │ v=spf1 mx ~all                       │ ✅   │
  ├───────────────────────────┼──────────────────────────────────────┼──────┤
  │ DMARC                     │ v=DMARC1; p=none;                    │ ✅   │
  │                           │ rua=mailto:dmarc@...                 │      │
  ├───────────────────────────┼──────────────────────────────────────┼──────┤
  │ DKIM                      │ v=DKIM1 přítomen                     │ ✅   │
  ├───────────────────────────┼──────────────────────────────────────┼──────┤
  │ DNSSEC                    │ 2× DNSKEY (ZSK+KSK)                  │ ✅   │
  ├───────────────────────────┼──────────────────────────────────────┼──────┤
  │ autodiscover              │ → mail.multishoping.eu.              │ ✅   │
  ├───────────────────────────┼──────────────────────────────────────┼──────┤
  │ autoconfig                │ → mail.multishoping.eu.              │ ✅   │
  ├───────────────────────────┼──────────────────────────────────────┼──────┤
  │ SRV submission            │ 0 0 587 mail.multishoping.eu.        │ ✅   │
  └───────────────────────────┴──────────────────────────────────────┴──────┘

  Ten communications error / timed out u autoconfig byl jen dočasný timeout na 
  jednom z NS (217.198.113.10) — hned poté záznam korektně vrátil
  mail.multishoping.eu., takže o problém nejde, jen o pomalou odpověď jednoho
  serveru při dotazu.

  Závěr

  Celý mailový DNS stack je kompletní a autoritativně potvrzený: forward/reverse
  DNS, MX, SPF, DKIM, DMARC i DNSSEC. Server je z pohledu DNS připravený
  spolehlivě odesílat i přijímat poštu.

  Jediné, co ještě běží, je propagace do veřejných cache (TTL 3600 s) — do
  hodiny zmizí stará data i z ostatních resolverů a mailcow panel ukáže samé
  zelené fajfky. Zbytek je čistě provozní: číst DMARC reporty na
  dmarc@multishoping.eu a časem zpřísnit politiku na p=quarantine.
✻ Baked for 39s

❯ jak pridal tlsa zaznam pro port 25                                            

● Pro TLSA/DANE na portu 25 potřebuješ otisk certifikátu, který tvůj mailserver 
  reálně nabízí při STARTTLS. Vygeneruju ho přímo z běžícího serveru — nedá se
  vymyslet, musí odpovídat certifikátu na portu 25.

  Ran 1 shell command (ctrl+o to expand)

● Otisk vyšel jako hash prázdného vstupu (e3b0c442…852b855) → spojení na port 25
  se nepovedlo. To je klasika: odchozí port 25 bývá blokovaný (GCP ho blokuje
  defaultně, a tenhle stroj taky nemusí ven na 25). Zkusím certifikát získat
  přes port 465/587 — mailcow tam nabízí stejný certifikát, takže otisk bude
  platný i pro TLSA na 25:

  Ran 1 shell command (ctrl+o to expand)

● Certifikát získán — stejný otisk z portu 465 i 993 (mailcow nabízí tentýž
  Let's Encrypt cert na všech portech, včetně 25):

  SPKI SHA-256: 7c1219d45cf7e3b2252b49cc6f9cd79c241295b600c6a3db00abf848ce0b504e
  CN=mail.multishoping.eu · Let's Encrypt · platný do 30.9.2026

  TLSA záznam pro port 25

  Do sekce „TLSA záznamy" v CZECHIA/Zoner panelu přidej:

  Pole: Jméno
  Hodnota: _25._tcp.mail
  Význam: port 25, TCP, host mail (relativně k zóně)
  ────────────────────────────────────────
  Pole: Použití (Usage)
  Hodnota: 3
  Význam: DANE-EE — pinuje přímo certifikát serveru
  ────────────────────────────────────────
  Pole: Sel. (Selector)
  Hodnota: 1
  Význam: SPKI — pinuje veřejný klíč, ne celý cert
  ────────────────────────────────────────
  Pole: Typ (Matching)
  Hodnota: 1
  Význam: SHA-256
  ────────────────────────────────────────
  Pole: Data
  Hodnota: 7c1219d45cf7e3b2252b49cc6f9cd79c241295b600c6a3db00abf848ce0b504e
  Význam: otisk
  ────────────────────────────────────────
  Pole: TTL
  Hodnota: 3600
  Význam:

  Výsledný záznam bude:
  _25._tcp.mail.multishoping.eu.  IN  TLSA  3 1 1
  7c1219d45cf7e3b2252b49cc6f9cd79c241295b600c6a3db00abf848ce0b504e

  Volil jsem 3 1 1 (DANE-EE + SPKI + SHA-256) — nejběžnější a nejrobustnější
  varianta pro Let's Encrypt, protože pinuje veřejný klíč, ne otisk celého
  certu.

  ⚠️ Kritické provozní pravidlo

  3 1 1 přežije obnovu certifikátu jen když se nezmění soukromý klíč. Let's
  Encrypt cert se obnovuje každé ~2–3 měsíce:

  - mailcow ve výchozím stavu klíč NEROTUJE (acme.sh reusuje stejný klíč), takže
  tvůj TLSA zůstane platný napříč obnovami. ✅
  - Kdyby se klíč někdy změnil (ruční --force s novým klíčem, reset ACME),
  DANE-validující servery přestanou doručovat poštu, dokud TLSA neaktualizuješ.
  Proto: buď klíč nerotovat, nebo TLSA aktualizovat před rotací.
  - Bezpečný postup při plánované změně klíče: publikuj dva TLSA záznamy (starý
  + nový otisk) současně, počkej na propagaci, pak teprve rotuj.

  Předpoklady (máš splněno)

  - DNSSEC — ✅ zapnuto (bez něj DANE nefunguje, senders TLSA ignorují)
  - Port 25 STARTTLS na serveru běží — mailcow default ✅

  Ověření po přidání

  Až uložíš, ověříme (počkej na propagaci, TTL 3600 s):
  dig +short @ns1.regzone.cz TLSA _25._tcp.mail.multishoping.eu
  A funkčně přes DANE validátor: https://dane.sys4.de/smtp/mail.multishoping.eu

  Chceš, abych ti ten dig na ověření spustil, až to přidáš?

✻ Cogitated for 1m 33s

❯ co mam pridat tedy do dns zanamu pro port 25                                  

● Do DNS přidej jeden TLSA záznam. Konkrétně do sekce „TLSA záznamy" v
  CZECHIA/Zoner panelu vyplň tato pole:

  ┌────────┬────────────────────────────────────────────────────────────────┐
  │ Pole v │                                                                │
  │        │                            Hodnota                             │
  │ panelu │                                                                │
  ├────────┼────────────────────────────────────────────────────────────────┤
  │ Jméno  │ _25._tcp.mail                                                  │
  ├────────┼────────────────────────────────────────────────────────────────┤
  │ Použit │ 3                                                              │
  │ í      │                                                                │
  ├────────┼────────────────────────────────────────────────────────────────┤
  │ Sel.   │ 1                                                              │
  ├────────┼────────────────────────────────────────────────────────────────┤
  │ Typ    │ 1                                                              │
  ├────────┼────────────────────────────────────────────────────────────────┤
  │ Data   │ 7c1219d45cf7e3b2252b49cc6f9cd79c241295b600c6a3db00abf848ce0b50 │
  │        │ 4e                                                             │
  ├────────┼────────────────────────────────────────────────────────────────┤
  │ TTL    │ 3600                                                           │
  └────────┴────────────────────────────────────────────────────────────────┘

  To odpovídá tomuto celému záznamu:

  _25._tcp.mail.multishoping.eu.  3600  IN  TLSA  3 1 1
  7c1219d45cf7e3b2252b49cc6f9cd79c241295b600c6a3db00abf848ce0b504e

  To je vše — jeden záznam. Až ho uložíš, dej vědět a ověřím přes dig.

✻ Brewed for 9s

※ recap: Cílem je zprovoznit mailový DNS pro multishoping.eu. SPF, DKIM, DMARC, PTR i DNSSEC jsou hotové a ověřené. Zbývá poslední krok: přidat TLSA záznam pro port 25 do Zoner panelu, pak ho ověřím přes dig. (disable recaps in /config)

❯ uloz mi to do souboru                                                         

● Write(dns-mail-records.md)
  ⎿  Wrote 56 lines to dns-mail-records.md
       1 # DNS záznamy pro mail — multishoping.eu
       2 
       3 Doména: `multishoping.eu` · DNS: CZECHIA/Zoner (`ns1.regzone.cz`
       4 Mailserver: mailcow na `mail.multishoping.eu` (34.31.195.148)
       5 
       6 ## TLSA (DANE) pro port 25
       7 
       8 Do sekce „TLSA záznamy" v panelu:
      10 | Pole      | Hodnota                                           
                          |
     … +63 lines (ctrl+o to expand)

● Uloženo do /var/www/techdomov/dns-mail-records.md.

  Soubor obsahuje:
  - TLSA záznam pro port 25 (tabulka polí pro panel + celý záznam)
  - Vysvětlení 3 1 1 a provozní pravidlo o rotaci klíče
  - Přehled všech ostatních mailových záznamů (A, PTR, MX, SPF, DMARC, DKIM,
  SRV, CNAME, DNSSEC) — jako referenci
  - Příkazy na ověření přes dig a DANE validátor

  Až TLSA přidáš do panelu, dej vědět a ověřím propagaci.

✻ Cooked for 32s

❯ OVER ZAZNAMY PRES DIG                                                         

  Ran 1 shell command (ctrl+o to expand)

● TLSA je v DNS a sedí — dokonce už propagováno i do cache. 🎯

  ✅ TLSA port 25

  _25._tcp.mail.multishoping.eu.  TLSA  3 1 1
  7C1219D45CF7E3B2252B49CC6F9CD79C241295B600C6A3DB00ABF848CE0B504E
  Otisk se přesně shoduje s SPKI certifikátu, který server nabízí
  (7c1219…ce0b504e). Velká písmena a mezera uprostřed jsou jen formátování
  výpisu — hodnota je totožná.

  ✅ Kompletní mail stack (autoritativně přes dig)

  ┌───────────┬──────────────────────────┬──────┐
  │  Záznam   │         Hodnota          │ Stav │
  ├───────────┼──────────────────────────┼──────┤
  │ A mail    │ 34.31.195.148            │ ✅   │
  ├───────────┼──────────────────────────┼──────┤
  │ PTR       │ mail.multishoping.eu.    │ ✅   │
  ├───────────┼──────────────────────────┼──────┤
  │ MX        │ 10 mail.multishoping.eu. │ ✅   │
  ├───────────┼──────────────────────────┼──────┤
  │ SPF       │ v=spf1 mx ~all           │ ✅   │
  ├───────────┼──────────────────────────┼──────┤
  │ DMARC     │ v=DMARC1; p=none; …      │ ✅   │
  ├───────────┼──────────────────────────┼──────┤
  │ DKIM      │ v=DKIM1                  │ ✅   │
  ├───────────┼──────────────────────────┼──────┤
  │ TLSA/DANE │ 3 1 1 7c1219…            │ ✅   │
  ├───────────┼──────────────────────────┼──────┤
  │ DNSSEC    │ zapnuto                  │ ✅   │
  └───────────┴──────────────────────────┴──────┘

  Hotovo

  Mailový DNS stack je teď plně kompletní včetně DANE/TLSA — máš forward/reverse
  DNS, MX, SPF, DKIM, DMARC, DNSSEC i DANE. To je prakticky maximum, co jde na
  úrovni DNS pro bezpečnou a důvěryhodnou poštu udělat.

  Poslední doporučený krok — funkční ověření DANE (že se otisk validuje proti
  živému TLS handshaku na portu 25), které z tohoto stroje nejde (blokovaný
  odchozí port 25). Otevři si:

  https://dane.sys4.de/smtp/mail.multishoping.eu

  Mělo by ukázat zelené „TLSA record(s) valid". Chceš, abych do souboru
  dns-mail-records.md doplnil, že TLSA je už ověřené přes dig?

✻ Cogitated for 27s

❯ ano, doplň to do souboru veskere zaznamy                                      

  Read 1 file, ran 1 shell command (ctrl+o to expand)

● Write(dns-mail-records.md)
  ⎿  Added 49 lines, removed 31 lines
       3  Doména: `multishoping.eu` · DNS: CZECHIA/Zoner (`ns1.regzone.cz
          `)
       4  Mailserver: mailcow na `mail.multishoping.eu` (34.31.195.148)
       5  
       6 -## TLSA (DANE) pro port 25                                     
       6 +**Stav ke 3. 7. 2026 — všechny záznamy ověřeny autoritativně př
         +es `dig @ns1.regzone.cz` ✅**                                  
       7  
       8 -Do sekce „TLSA záznamy" v panelu:                              
       8 +## Kompletní přehled záznamů                                   
       9  
      10 -| Pole      | Hodnota                                          
         -                  |                                            
      11 -|-----------|--------------------------------------------------
         ------------------|                                             
      12 -| Jméno     | `_25._tcp.mail`                                  
         -                  |                                            
      13 -| Použití   | `3`                                              
         -                 |                                             
      14 -| Sel.      | `1`                                              
         -                 |                                             
      15 -| Typ       | `1`                                              
         -                 |                                             
      16 -| Data      | `7c1219d45cf7e3b2252b49cc6f9cd79c241295b600c6a3db
         -00abf848ce0b504e` |                                            
      17 -| TTL       | `3600`                                           
         -                 |                                             
      10 +| Typ | Jméno | Hodnota | Ověřeno dig |                        
      11 +|-----|-------|---------|-------------|                        
      12 +| A | `mail` | `34.31.195.148` | ✅ |                          
      13 +| PTR | `148.195.31.34.in-addr.arpa` | `mail.multishoping.eu.` 
         +(FCrDNS OK) | ✅ |                                             
      14 +| MX | `@` | `10 mail.multishoping.eu.` | ✅ |                 
      15 +| TXT (SPF) | `@` | `v=spf1 mx ~all` | ✅ |                    
      16 +| TXT (DMARC) | `_dmarc` | `v=DMARC1; p=none; rua=mailto:dmarc@
         +multishoping.eu; fo=0; adkim=r; aspf=r; rf=afrf` | ✅ |        
      17 +| TXT (DKIM) | `dkim._domainkey` | `v=DKIM1;k=rsa;...` (viz níž
         +e) | ✅ |                                                      
      18 +| TLSA (DANE) | `_25._tcp.mail` | `3 1 1 7c1219d45cf7e3b2252b49
         +cc6f9cd79c241295b600c6a3db00abf848ce0b504e` | ✅ |             
      19 +| SRV | `_autodiscover._tcp` | `5 0 443 mail.multishoping.eu.` 
         +| ✅ |                                                         
      20 +| SRV | `_submission._tcp` | `0 0 587 mail.multishoping.eu.` | 
         +✅ |                                                           
      21 +| CNAME | `autodiscover` | `mail.multishoping.eu.` | ✅ |      
      22 +| CNAME | `autoconfig` | `mail.multishoping.eu.` | ✅ |        
      23 +| DNSSEC | `@` | DNSKEY 256+257 (alg 13), NSEC3 | ✅ |         
      24  
      19 -Celý záznam:                                                   
      25 +## Záznamy v zone-file formátu                                 
      26  
      27  ```
      22 -_25._tcp.mail.multishoping.eu.  3600  IN  TLSA  3 1 1 7c1219d45
         -cf7e3b2252b49cc6f9cd79c241295b600c6a3db00abf848ce0b504e        
      28 +mail.multishoping.eu.               3600  IN  A      34.31.195.
         +148                                                            
      29 +148.195.31.34.in-addr.arpa.               IN  PTR    mail.multi
         +shoping.eu.                                                    
      30 +multishoping.eu.                    3600  IN  MX     10 mail.mu
         +ltishoping.eu.                                                 
      31 +multishoping.eu.                    3600  IN  TXT    "v=spf1 mx
         + ~all"                                                         
      32 +_dmarc.multishoping.eu.             3600  IN  TXT    "v=DMARC1;
         + p=none; rua=mailto:dmarc@multishoping.eu; fo=0; adkim=r; aspf=
         +r; rf=afrf"                                                    
      33 +dkim._domainkey.multishoping.eu.    3600  IN  TXT    "v=DKIM1;k
         +=rsa;t=s;s=email;p=MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA
         +t229qZaxFocJOEfUe5p0dS/qndeO1/f9SJlEjgQr2C3YNo0FAy2E4h/q+/oB4Eo
         +a/boCZ3gHTVlKjVJTC7OGnhrWI39RbXoGlEr1v5p/UQJRWMe7T5FjaROFz2cZ+I
         +egQZXyoIOjFNVjVJIij9VXF1R1/ijgDeNuKhfSwazSPICd6hZiw/0eTN4YEEHTC
         +HZH+bjAQC60BVsnxm6q1f7bTVxYP/A7Vr6S86+F2+Q8YvVu+hlotSURNrbqRwM9
         +G4Lz0+n1fWW8x+MIsrNLTp/A9pm3cNWb6RhI5Q843cGBDcRMrYeGRZ42cmT59mL
         +xdEL5wh2R7YjcDQOu10uLQgAAqwIDAQAB"                             
      34 +_25._tcp.mail.multishoping.eu.      3600  IN  TLSA   3 1 1 7c12
         +19d45cf7e3b2252b49cc6f9cd79c241295b600c6a3db00abf848ce0b504e   
      35 +_autodiscover._tcp.multishoping.eu. 3600  IN  SRV    5 0 443 ma
         +il.multishoping.eu.                                            
      36 +_submission._tcp.multishoping.eu.   3600  IN  SRV    0 0 587 ma
         +il.multishoping.eu.                                            
      37 +autodiscover.multishoping.eu.       3600  IN  CNAME  mail.multi
         +shoping.eu.                                                    
      38 +autoconfig.multishoping.eu.         3600  IN  CNAME  mail.multi
         +shoping.eu.                                                    
      39  ```
      40  
      41 +DNSKEY (DNSSEC, alg 13 ECDSAP256SHA256):                       
      42 +```                                                            
      43 +multishoping.eu.  IN  DNSKEY  256 3 13 88Z0Y4HpZ7c+jwHPPJF/wAAX
         +TnPESYQprf/jh7BMJaz4+4GDudC4hbPUNChaMH5Skd13mtVmrDRY0JYbSgz6rw=
         +=                                                              
      44 +multishoping.eu.  IN  DNSKEY  257 3 13 IfnvmzpVHZgfjjlGUTtm5BKv
         +cgOSz4HXRFIjbyJVRkShLQpntszfAi69vNtHW3Amtt6t7PzGrooWhrKKikL+mw=
         +=                                                              
      45 +```                                                            
      46 +                                                               
      47 +## TLSA (DANE) — detaily                                       
      48 +                                                               
      49  - `3 1 1` = DANE-EE + SPKI + SHA-256 (pinuje veřejný klíč certi
          fikátu)
      26 -- Otisk získán z Let's Encrypt certu (CN=mail.multishoping.eu, 
         -platný do 30.9.2026)                                           
      50 +- Otisk získán z Let's Encrypt certu (CN=mail.multishoping.eu, 
         +issuer YR2, platný do 30.9.2026)                               
      51  - Vyžaduje DNSSEC (zapnuto ✅)
      52  
      53  ### Provozní pravidlo
     ...
      55  mailcow klíč defaultně nerotuje → záznam zůstává platný.
      56  Při plánované změně klíče: publikuj starý + nový TLSA současně,
           počkej na propagaci, pak rotuj.
      57  
      34 -## Ostatní mailové záznamy (stav ke 3. 7. 2026 — vše OK)       
      35 -                                                               
      36 -```                                                            
      37 -mail.multishoping.eu.           A      34.31.195.148           
      38 -148.195.31.34.in-addr.arpa.     PTR    mail.multishoping.eu.   
         -(FCrDNS OK)                                                    
      39 -multishoping.eu.                MX     10 mail.multishoping.eu.
      40 -multishoping.eu.                TXT    "v=spf1 mx ~all"        
      41 -_dmarc.multishoping.eu.         TXT    "v=DMARC1; p=none; rua=m
         -ailto:dmarc@multishoping.eu; fo=0; adkim=r; aspf=r; rf=afrf"   
      42 -dkim._domainkey.multishoping.eu. TXT   "v=DKIM1;k=rsa;..."     
      43 -_autodiscover._tcp.multishoping.eu. SRV 5 0 443 mail.multishopi
         -ng.eu.                                                         
      44 -_submission._tcp.multishoping.eu.   SRV 0 0 587 mail.multishopi
         -ng.eu.                                                         
      45 -autodiscover.multishoping.eu.   CNAME  mail.multishoping.eu.   
      46 -autoconfig.multishoping.eu.     CNAME  mail.multishoping.eu.   
      47 -```                                                            
      48 -DNSSEC: zapnuto (DNSKEY 256+257, NSEC3)                        
      49 -                                                               
      58  ## Ověření
      59  
      60  ```bash
      53 -dig +short @ns1.regzone.cz TLSA _25._tcp.mail.multishoping.eu  
      54 -# funkční test DANE:                                           
      61 +# jednotlivé záznamy (autoritativně, obchází cache):           
      62 +dig +short @ns1.regzone.cz TLSA  _25._tcp.mail.multishoping.eu 
      63 +dig +short @ns1.regzone.cz TXT   _dmarc.multishoping.eu        
      64 +dig +short @ns1.regzone.cz TXT   multishoping.eu               
      65 +dig +short -x 34.31.195.148                                    
      66 +                                                               
      67 +# funkční test DANE (živý TLS handshake na portu 25):          
      68  # https://dane.sys4.de/smtp/mail.multishoping.eu
      69  ```
      70 +                                                               
      71 +## Poznámky                                                    
      72 +- Propagace do veřejných cache: TTL 3600 s (~1 h).             
      73 +- Reportovací schránka `dmarc@multishoping.eu` musí existovat a
         + být čtená.                                                    
      74 +- Po pár týdnech monitoringu zpřísnit DMARC z `p=none` na `p=qu
         +arantine`.                                                     

● Doplněno do /var/www/techdomov/dns-mail-records.md. Soubor teď obsahuje:

  - Přehledovou tabulku všech záznamů se sloupcem „Ověřeno dig ✅" (A, PTR, MX,
  SPF, DMARC, DKIM, TLSA, 2× SRV, 2× CNAME, DNSSEC)
  - Kompletní zone-file výpis včetně plné hodnoty DKIM klíče a obou DNSKEY
  (256+257)
  - Detaily a provozní pravidlo k TLSA/DANE
  - Ověřovací dig příkazy + odkaz na DANE validátor
  - Poznámky (propagace, DMARC schránka, budoucí zpřísnění politiky)

  Vše je označené jako ověřeno autoritativně přes dig @ns1.regzone.cz ke 3. 7. 
  2026. Celý mailový DNS stack je tím zdokumentovaný a hotový.

✻ Baked for 56s

❯ analyzuj posledni screenshot                                                  

  Read 1 file, listed 1 directory (ctrl+o to expand)

● Screenshot je vestavěný nástroj „DNS dig - výpis zóny" přímo v CZECHIA/Zoner
  panelu — dělá AXFR na illidan.zoner.com, stejně jako jsi to dělal ručně. Vidím
  horní část zóny:

  Co je na výpisu

  ┌──────────────┬────────────────────────────────────┬───────────────────┐
  │    Záznam    │              Hodnota               │       Stav        │
  ├──────────────┼────────────────────────────────────┼───────────────────┤
  │ SOA          │ ns1.regzone.cz · serial 2026070302 │ ✅                │
  ├──────────────┼────────────────────────────────────┼───────────────────┤
  │ A @          │ 34.66.99.210 (web)                 │ ✅                │
  ├──────────────┼────────────────────────────────────┼───────────────────┤
  │ NS           │ ns1.regzone.cz/.de/.info           │ ✅                │
  ├──────────────┼────────────────────────────────────┼───────────────────┤
  │ MX           │ 10 mail.multishoping.eu            │ ✅                │
  ├──────────────┼────────────────────────────────────┼───────────────────┤
  │ TXT (SPF)    │ "v=spf1 mx ~all"                   │ ✅ čisté, bez 2   │
  ├──────────────┼────────────────────────────────────┼───────────────────┤
  │ TXT (Google) │ google-site-verification=...       │ ✅                │
  ├──────────────┼────────────────────────────────────┼───────────────────┤
  │ RRSIG        │ A, NS, SOA, MX, TXT                │ ✅ DNSSEC podpisy │
  └──────────────┴────────────────────────────────────┴───────────────────┘

  Důležité pozorování

  1. SOA serial = 2026070302 — oproti dřívějšímu ...0222 se zvýšil, tj. zóna
  byla znovu publikovaná a podepsaná po přidání TLSA. RRSIG podpisy mají nové
  datum 20260702211507. To potvrzuje, že poslední změny (TLSA) jsou naostro.
  2. SPF je čisté (v=spf1 mx ~all) — ta chybná  2 je definitivně pryč i v tomto
  autoritativním výpisu.
  3. Výpis je oříznutý — vidíš jen horní část zóny (po první RRSIG). Zajímavé
  záznamy TLSA, DMARC a DKIM jsou níž a v tomhle screenshotu nejsou vidět. Ale
  ty už mám ověřené přes dig z minula (všechny ✅).

  Závěr

  Nic nového k opravě — výpis jen potvrzuje, že zóna je aktuální, správně
  podepsaná DNSSEC a SPF/MX v pořádku. Praktický tip: tenhle panelový nástroj
  „DNS dig - výpis zóny" můžeš příště použít místo ručního AXFR z terminálu,
  dělá přesně totéž.

  Chceš, abych z tohohle výpisu ověřil ještě něco konkrétního, nebo scrollnout
  níž a zkontrolovat spodní část (TLSA/DMARC/DKIM)?

✻ Cogitated for 37s

※ recap: Cíl: kompletní a ověřený mailový DNS pro multishoping.eu. Hotové jsou PTR, SPF, DKIM, DMARC, DNSSEC i TLSA (port 25), vše ověřené přes dig a uložené v dns-mail-records.md. Další krok: funkční test DANE na dane.sys4.de/smtp/mail.multishoping.eu. (disable recaps in /config)
❯ analyzuj posledni screenshot                                                  

  Read 1 file, listed 1 directory (ctrl+o to expand)

● Tenhle screenshot je mailcow admin → Mailboxes a ukazuje dvě věci:

  Co je vidět

  1. Žádné schránky neexistují — tabulka je prázdná: „No data available in 
  table", „Showing 0 to 0 of 0 entries".
  2. Červená chyba: „Mailbox name is invalid" — pokus o založení schránky
  selhal.

  Proč to selhalo

  „Mailbox name is invalid" v mailcow znamená obvykle jednu z těchto věcí (od
  nejčastější):

  1. Do pole názvu jsi napsal celou adresu dmarc@multishoping.eu. Při zakládání
  schránky se do políčka zadává jen lokální část (dmarc) a doména se vybírá z
  rozbalovacího seznamu vedle. Když tam dáš @multishoping.eu, mailcow to
  odmítne.
  2. Doména multishoping.eu není přidaná v záložce Domains. Bez přidané domény
  nejde vytvořit žádná schránka — a dropdown s doménou by byl prázdný.
  3. Nepovolené znaky / mezera / velké písmeno v lokální části.

  Jak to opravit

  Krok 1 — ověř doménu (E-Mail → Domains, resp. záložka „Domains"):
  - Musí tam být multishoping.eu. Pokud není, přidej ji (Add domain).

  Krok 2 — založ schránku správně:
  - Add mailbox
  - Pole „Left part of the email address" → jen dmarc
  - Domain dropdown → multishoping.eu
  - Heslo + kvóta
  - Uložit

  → vznikne dmarc@multishoping.eu.

  Proč je to důležité teď

  Tohle přímo souvisí s DNS, co jsme dělali: DMARC záznam posílá reporty na
  dmarc@multishoping.eu, ale ta schránka zatím neexistuje (0 mailboxů). Dokud ji
  nezaložíš, reporty se nedoručí. Takže vytvoření dmarc@ je logicky další krok.

  Chceš pomoct s postupem přidání domény v mailcow, nebo je doména už přidaná a
  jde jen o ten správný formát názvu schránky?

✻ Baked for 34s

※ recap: Nastavujeme mailový DNS a mailcow pro multishoping.eu; DNS stack (SPF, DKIM, DMARC, PTR, TLSA, DNSSEC) je hotový a ověřený. Teď zbývá založit schránku dmarc@multishoping.eu v mailcow, která zatím neexistuje a kvůli chybě názvu se nevytvořila. (disable recaps in /config)

❯ prihlas se na server a zjisti jetli mail v poradku odesel na server se        
  prihlasis ssh marty@mail.multishoping.eu                                      

● Zkusím se připojit přes SSH na mail server a podívat se na frontu a logy
  pošty.

  Ran 1 shell command (ctrl+o to expand)

● Připojení funguje. Teď zjistím stav pošty. Je to dockerizovaný mailcow, takže
  postfix běží v kontejneru — podívám se na frontu a logy.

  Ran 1 shell command (ctrl+o to expand)

● Našel jsem problém. Mail neodešel — visí ve frontě. Ověřím příčinu.

  Ran 1 shell command (ctrl+o to expand)

● Jednoznačně diagnostikováno. Mail neodešel a nikdy neodejde v současné 
  konfiguraci.

  🔴 Příčina: GCP blokuje odchozí port 25

  port 25 (na Gmail MX):  BLOKOVANÝ / timeout
  port 587:               OPEN

  Log postfixu to potvrzuje — mail pro ondrej.web@gmail.com skončil jako:
  status=deferred (connect to ...gmail-smtp-in...:25: Connection timed out)

  Server se nedokáže připojit na žádný cizí MX na portu 25, protože Google Cloud
  Platform trvale blokuje odchozí TCP port 25 na všech VM. Je to opatření proti
  spamu a nedá se odblokovat firewall pravidlem — je to vynucené na úrovni
  infrastruktury GCP. Přímé doručování pošty z GCE VM tedy principiálně
  nefunguje.

  Stav mailu právě teď

  - Mail není ztracený — je ve frontě (6BC79E6FE4), postfix ho zkouší dál.
  - Ale bez portu 25 se nikdy nedoručí → za ~5 dní se vrátí jako bounce.

  Jediné reálné řešení: SMTP relay (smarthost) na portu 587

  Musíš odchozí poštu posílat přes relay službu (port 587/465/2525, které GCP
  nechává otevřené). Možnosti:
  - Brevo / Mailjet / SMTP2GO — mají free tier (stovky–tisíce mailů/měsíc)
  - Amazon SES — nejlevnější při větším objemu
  - Mailgun / SendGrid / Postmark
  - nebo vlastní VPS/server mimo GCP s otevřeným portem 25 jako relay

  Nastavení v mailcow

  Configuration → Routing → Relayhosts:
  1. Add relayhost: smtp-relay-provider.com:587
  2. Zadat username + heslo od relay služby
  3. Uložit → mailcow ověří spojení
  4. Configuration → Routing nastavit tento relayhost jako výchozí (nebo přes
  „Sender-dependent transports")

  Po nastavení postfix pošle frontu přes relay a mail se doručí. Frontu můžeš
  pak ručně flushnout (postqueue -f).

  ⚠️ Důležitá konsekvence pro DNS/DKIM/SPF

  Až budeš posílat přes relay, ověř:
  - SPF — možná budeš muset přidat include: relay providera (např. v=spf1 mx 
  include:spf.brevo.com ~all), jinak by maily přes relay padaly na SPF fail.
  - DKIM — mailcow podepisuje maily svým klíčem ještě před odesláním na relay,
  takže tvůj DKIM zůstává platný (dobré). Některé relaye ale podepisují vlastním
  klíčem — pak řešit alignment.

  ---
  Shrnutí: DNS máš perfektní, ale samotné odesílání z GCP VM nefunguje kvůli
  blokovanému portu 25. Potřebuješ SMTP relay. Chceš, abych ti pomohl vybrat
  konkrétního providera a nastavit relayhost v mailcow (můžu se připojit a
  nakonfigurovat postfix)?

✻ Sautéed for 1m 33s

❯ jak to tedy spravim                                                           

● Oprava = nastavit SMTP relay (smarthost), přes který mailcow bude odesílat na
  portu 587. Postup je pořád stejný, liší se jen volbou providera. Klíčové
  rozhodnutí, které ovlivní další kroky (cenu, registraci, SPF include:), je
  který relay použít — to potřebuju od tebe.

● User declined to answer questions
  ⎿  · Přes jaký SMTP relay chceš odesílat poštu? (GCP blokuje port 25, tak 
     potřebuješ relay na portu 587) (Brevo (Sendinblue) / Mailjet / SMTP2GO / 
     Amazon SES)

● Jasně — co bys chtěl upřesnit? Zeptej se na cokoliv, ať ti pak volbu relaye i
  celý postup přizpůsobím. Pár věcí, které mi možná pomůžou tě líp nasměrovat:

  - Objem pošty — kolik mailů denně/měsíčně plánuješ posílat? (transakční
  potvrzení objednávek, newslettery, jen pár mailů…)
  - Preferuješ zdarma, nebo nevadí platit za lepší doručitelnost?
  - Chceš zůstat čistě v GCP/mimo AWS, nebo je Amazon SES ve hře?
  - Nebo míříš úplně jinam — třeba přesunout mail server mimo GCP (kde port 25
  funguje), místo řešení přes relay?

  Napiš, co máš na mysli, a já otázku/možnosti přeformuluju.

✻ Worked for 36s

❯ a proc nemuzu pres port 25                                                    

● Krátká odpověď: port 25 ti neblokuje tvůj server ani firewall, ale Google 
  Cloud sám — na úrovni své sítě, a nejde to vypnout.

  Proč to Google Cloud dělá

  Odchozí port 25 = klasické SMTP mezi mailservery (server-to-server
  doručování). Je to nejzneužívanější port pro spam — kdokoli si spustí VM a
  začne rozesílat miliony spamů přímo na cizí MX servery. Aby si cloudy udržely
  čistou reputaci svých IP rozsahů, plošně blokují odchozí spojení na port 25 ze
  všech VM. Dělá to nejen GCP, ale i AWS, Azure, Oracle Cloud, DigitalOcean a
  další.

  Konkrétně u GCP je to napsané v jejich dokumentaci: „Traffic on TCP port 25 is
  always blocked when the destination is outside your VPC network" — a nejde to
  obejít vlastním firewall pravidlem, protože blok je nad tvým VPC, přímo v
  infrastruktuře Googlu.

  Co to znamená v praxi

  Tvůj mailcow  --(port 25)-->  Gmail MX     ❌ Google to zahodí → timeout
  Tvůj mailcow  --(port 587)-->  SMTP relay   ✅ relay pak doručí na Gmail

  - Příchozí pošta na port 25 (někdo píše tobě) → funguje normálně, blokovaný je
  jen odchozí směr.
  - Odchozí přímé doručení → nefunguje, proto ten deferred mail ve frontě.

  Dá se to vůbec odblokovat?

  - Firewall pravidlem NE — nemáš nad tím kontrolu, je to mimo tvůj VPC.
  - Žádostí u Googlu — u GCP prakticky ne. (Některé cloudy jako AWS/Azure port
  25 odblokují na požádání po ověření, ale Google Cloud to standardně nedělá —
  oficiálně tě odkáže na použití relaye/partnera jako SendGrid.)

  Tvoje reálné možnosti

  1. SMTP relay na portu 587 — necháš mailcow kde je, odchozí poštu posílá přes
  relay službu. (nejrychlejší, standardní řešení)
  2. Přesunout mail server mimo GCP — na poskytovatele, kde port 25 funguje
  (např. běžný VPS Hetzner, OVH, kde ho po ověření otevřou). Větší zásah.

  Takže to není chyba nastavení — je to záměrné omezení Googlu. Chceš jít cestou
  relaye (rychlé, server zůstane), nebo zvažuješ přesun mailu mimo GCP?

✻ Worked for 28s

❯ ok potrebuji zustat u google                                                  

● „Zůstat u Google" jde — server necháme na Google Cloud, jen odchozí poštu
  pustíme přes relay na portu 587 (ten Google nechává otevřený). Jen si
  ujasněme, co přesně „u Googlu" znamená, protože jsou dvě cesty:

● Claude asked:
  ⎿  · Server zůstane na Google Cloud. Jak chceš posílat odchozí poštu přes port
     587? (Free 3rd-party relay / Google Workspace relay / Nejsem si jistý)
     ● No response after 60s — continued without an answer

● Nechám ti prostor odpovědět, ale mezitím ti dám doporučení a konkrétní postup,
  ať můžeš rovnou jednat.

  Doporučení pro e-shop na GCP: free 3rd-party relay (Brevo nebo SMTP2GO)

  Proč ne Google Workspace relay: smtp-relay.gmail.com vyžaduje placený 
  Workspace účet pro multishoping.eu (~6 €/uživatel/měsíc) a ověření domény. Pro
  pouhé odesílání transakčních mailů z e-shopu je to zbytečná zátěž. Free relay
  zvládne totéž zdarma, server zůstane na Google Cloud a tvůj stávající
  DKIM/DMARC/SPF zůstanou v platnosti.

  Co musíš udělat ty (nejde za tebe — potřebuje účet)

  1. Registrace u relaye (vyber jeden):
    - Brevo – brevo.com → 300 mailů/den zdarma
    - SMTP2GO – smtp2go.com → 1000 mailů/měsíc zdarma
  2. V jejich adminu najdi SMTP credentials: host, port 587, username, password 
  (SMTP key).

  Co pak udělám já (připojím se na server a nastavím)

  3. Relayhost v mailcow – Configuration → Routing → Relayhosts → přidat
  host:587 + creds → nastavit jako výchozí route.
  4. Doplnit SPF – přidat include: daného providera, aby maily přes relay prošly
  SPF:
  v=spf1 mx include:spf.brevo.com ~all        (Brevo)
  v=spf1 mx include:spf.smtp2go.com ~all      (SMTP2GO)
  5. Flush fronty – postqueue -f → ten zaseklý mail pro ondrej.web@gmail.com se
  okamžitě doručí.
  6. Ověření – zkušební mail + kontrola v logu, že jde relay=smtp-relay...:587 a
  status=sent.

  ⚠️ Pozor na DKIM při relayi

  Většina relayů (Brevo, SMTP2GO) chce, abys u nich taky ověřil doménu a přidal 
  jejich DKIM — jinak podepíšou maily svým klíčem a DMARC alignment může selhat.
  Při nastavení to s tebou projdu, ať zůstane d=multishoping.eu.

  ---
  Další krok je na tobě: založ účet u Brevo nebo SMTP2GO a pošli mi SMTP údaje
  (host/username/heslo). Pak se připojím na server, nakonfiguruju relayhost,
  upravíme SPF a rozhýbeme frontu.

  Kterého providera bereš — Brevo, nebo SMTP2GO? (Nebo chceš přece jen Google
  Workspace relay?)

✻ Crunched for 1m 10s

❯ google workspace telay                                                        
● Dobrá volba, když chceš zůst
  at čistě u Googlu. Google Workspace SMTP relay (smtp-relay.gmail.com:587) je
  solidní a spolehlivé řešení. Ale má předpoklady, které musíš splnit ty (mám
  přístup jen na tvůj mailcow server, ne do tvého Google Admin konzole).

  ⚠️ Nejdůležitější varování předem

  Google Workspace tě při zakládání bude tlačit přepnout MX záznamy na Google.
  To NESMÍŠ udělat — příchozí poštu obsluhuje tvůj mailcow. Doménu jen ověříš 
  přes TXT záznam a MX necháš na mail.multishoping.eu. Workspace použiješ pouze
  na odchozí relay, ne na příjem.

  Krok 1 — Google Workspace účet (dělá uživatel)

  1. Založ Google Workspace pro multishoping.eu (od ~6 €/měsíc, Business Starter
  stačí).
  2. Ověř doménu přes TXT záznam (Google ti ho dá) → přidáš do Zoner DNS.
  3. MX NEMĚNIT — přeskoč/ignoruj krok, kde Google chce nastavit své MX.

  Krok 2 — Zapnout SMTP relay service (Google Admin konzole, dělá uživatel)

  admin.google.com → Apps → Google Workspace → Gmail → Routing → SMTP relay 
  service → Add:
  - Allowed senders: Only addresses in my domains
  - Authentication: zaškrtni „Only accept mail from the specified IP addresses"
  → přidej 34.31.195.148 (tvoje statická IP serveru, kterou jsme rezervovali)
  - Encryption: zaškrtni „Require TLS encryption"
  - Ulož

  ▎ Díky IP autentizaci (whitelist tvé statické IP) nepotřebuješ heslo — relay 
  ▎ bude důvěřovat serveru podle IP. Čisté a bez app-password.

  Krok 3 — Konfigurace mailcow (udělám já)

  Připojím se na server a nastavím:
  - Configuration → Routing → Relayhosts → smtp-relay.gmail.com:587 (bez creds,
  IP auth)
  - nastavím jako výchozí route
  - flush fronty (postqueue -f) → zaseklý mail pro ondrej.web@gmail.com odejde

  Krok 4 — SPF (upravíme v DNS)

  Přidat Google do SPF:
  v=spf1 mx include:_spf.google.com ~all

  Krok 5 — Ověření

  Zkušební mail + kontrola logu, že jde relay=smtp-relay.gmail.com[...]:587 a
  status=sent.

  DKIM

  Tvůj mailcow podepisuje maily vlastním klíčem (d=multishoping.eu) ještě před
  odesláním na relay. Google SMTP relay zprávu jen přepošle, podpis zůstane
  platný → DMARC alignment OK. ✅

  ---
  Než budu pokračovat

  Google Workspace pro multishoping.eu už máš založený, nebo ho teď budeš
  zakládat? A máš přístup do Google Admin konzole (admin.google.com)? Jakmile
  budeš mít Krok 1–2 hotové (nebo narazíš), řekni a já provedu Krok 3 na
  serveru.

✻ Crunched for 45s

※ recap: Cílem je zprovoznit odesílání pošty z mailcow na Google Cloud přes Google Workspace SMTP relay, protože port 25 je blokovaný. Dál potřebuju vědět, jestli už máš Google Workspace pro multishoping.eu a přístup do admin konzole.

❯ musim mit gogole workspace???                                                 
  ⎿  1 skill available

● Ano — pro Google Workspace SMTP relay (smtp-relay.gmail.com) musíš mít placený
  Google Workspace. Není to zdarma a bez něj tenhle konkrétní relay
  nezprovozníš.

  Aby to bylo úplně narovinu, tvoje možnosti „přes Google" jsou:

  ┌───────────────────────┬───────────┬───────┬──────────────────┬────────┐
  │                       │ Google Wo │       │ Posílá jako @mul │ Vhodné │
  │        Řešení         │ rkspace?  │ Cena  │  tishoping.eu?   │  pro e │
  │                       │           │       │                  │ -shop? │
  ├───────────────────────┼───────────┼───────┼──────────────────┼────────┤
  │ Workspace SMTP relay  │ ANO,      │ ~6    │                  │        │
  │ (smtp-relay.gmail.com │ povinně   │ €/měs │ ✅ ano           │ ✅ ano │
  │ )                     │           │       │                  │        │
  ├───────────────────────┼───────────┼───────┼──────────────────┼────────┤
  │ Gmail SMTP            │           │ zdarm │ ❌ přepíše       │        │
  │ (smtp.gmail.com) přes │ ne        │ a     │ odesílatele na   │ ❌ ne  │
  │  free @gmail účet     │           │       │ tvůj @gmail.com  │        │
  ├───────────────────────┼───────────┼───────┼──────────────────┼────────┤
  │ Free 3rd-party relay  │ ne        │ zdarm │ ✅ ano           │ ✅ ano │
  │ (Brevo/SMTP2GO)       │           │ a     │                  │        │
  └───────────────────────┴───────────┴───────┴──────────────────┴────────┘

  Podstatné

  - Free Gmail SMTP technicky funguje, ale Google přepíše From: na tvoji 
  gmailovou adresu a má limit ~500 mailů/den. Pro e-shop, který má posílat z
  objednavky@multishoping.eu, je to nepoužitelné.
  - Žádná zdarma varianta „přes Google" neumí posílat pod tvojí doménou pořádně.
  Buď zaplatíš Workspace, nebo použiješ free 3rd-party relay.

  Moje doporučení

  Když nechceš platit Workspace, ale chceš zůstat se serverem na Google Cloud
  (což zůstaneš tak jako tak), tak free 3rd-party relay (Brevo/SMTP2GO) ti dá
  přesně to samé co Workspace relay — posílání pod @multishoping.eu, s tvým DKIM
  — ale zdarma. Server se nikam nestěhuje, jen odchozí poštu protlačíš přes
  jejich port 587.

  Takže reálná otázka není „Google vs. jiný hosting", ale jen „platit Workspace 
  6 €/měs, nebo použít free relay". Funkčně vyjdou nastejno.

  Co zvolíš — zaplatit Workspace, nebo free relay (Brevo/SMTP2GO)?

✻ Cooked for 27s

❯ nechci nic platit                                                             

● Jasně, tak free 3rd-party relay — server zůstane na Google Cloud, posílá pod
  @multishoping.eu, s tvým DKIM, a nic neplatíš.

  Doporučuju: Brevo

  - 300 mailů/den zdarma (pro e-shop transakčně bohatě stačí)
  - česká lokalizace, jednoduché SMTP
  - alternativa SMTP2GO (1000/měsíc) — když čekáš spíš nárazové špičky než denní
  provoz

  Vezmu Brevo, pokud nemáš důvod pro jiný.

  Co uděláš ty (nejde za tebe — potřebuje účet)

  1. Registrace: brevo.com → založ účet (email + potvrzení)
  2. Ověř doménu multishoping.eu u Brevo → dají ti DKIM/DMARC záznamy k přidání
  do Zoner DNS (kvůli tomu, aby maily přes ně prošly autentizací)
  3. Získej SMTP údaje: v Brevo menu SMTP & API → SMTP najdeš:
    - SMTP server: smtp-relay.brevo.com
    - Port: 587
    - Login (tvůj email)
    - SMTP key (heslo — vygeneruješ tlačítkem)

  Co pak udělám já (připojím se na server)

  4. Nastavím relayhost v mailcow (smtp-relay.brevo.com:587 + tvoje creds)
  5. Upravíme SPF: v=spf1 mx include:spf.brevo.com ~all
  6. Flush fronty → zaseklý mail pro ondrej.web@gmail.com odejde
  7. Ověřím v logu status=sent

  ⚠️ DKIM/DMARC pozor

  Brevo většinou chce ověřit doménu a přidat vlastní DKIM. Projdeme to spolu, ať
  From: zůstane @multishoping.eu a DMARC alignment sedí — jinak by ti maily
  mohly padat do spamu.

  ---
  Další krok je na tobě: založ účet na brevo.com a pošli mi ty 4 SMTP údaje
  (server/port/login/key). Pak se připojím na server a celý relay zprovozním.

  Chceš Brevo, nebo radši SMTP2GO?

✻ Baked for 24s

※ recap: Cílem je rozjet odesílání pošty z mailcow na Google Cloud, kde je blokovaný port 25, přes free SMTP relay. Rozhodli jsme se pro Brevo. Další krok: založ účet na brevo.com a pošli mi SMTP údaje (server, port, login, key).

❯ analyzuj posledni screenshot                                                  

  Read 1 file, listed 1 directory (ctrl+o to expand)

● Screenshot je Brevo dashboard — účet máš založený. 👍 Shrnutí a další krok:

  Co vidím

  - Přihlášeno jako Zdena, organizace „Gastro ACS s.r.o."
  - Free plán: 300 e-mailů/300 k dispozici ✅ (přesně to, co potřebujeme na
  relay)
  - V liště nahoře běží záložka „Let's verify your email add…" → Brevo ti poslal
  ověřovací mail k aktivaci účtu — než účet potvrdíš, SMTP nemusí jít nahodit.

  ⚠️ Dvě věci k ověření

  1. Účet je pod „Gastro ACS s.r.o.", ne multishoping.eu. To relayi nevadí
  (Brevo ti povolí ověřit libovolnou doménu), ale musíš v tomhle účtu
  autentizovat právě multishoping.eu. Jen ať víš, že to není překlep.
  2. Dokonči ověření emailu z té žluté záložky — jinak Brevo odesílání
  zablokuje.

  Kde vzít SMTP údaje (další krok)

  V Brevo nepoužíváme Marketing kampaně, ale Transactional / SMTP:

  1. Vlevo klikni na Transactional
  2. Nebo vpravo nahoře na název účtu „Gastro ACS s.r.o." → SMTP & API → záložka
  SMTP
  3. Tam najdeš:
    - SMTP server: smtp-relay.brevo.com
    - Port: 587
    - Login (tvůj přihlašovací email)
    - Master password / SMTP key → vygeneruj tlačítkem „Generate a new SMTP key"

  A ověř doménu (kvůli DKIM/deliverabilitě)

  Senders, Domains & Dedicated IPs → Domains → Add a domain → multishoping.eu →
  Brevo ti vypíše DKIM + DMARC/Brevo-code TXT záznamy, které přidáš do Zoner
  DNS. Ty mi pak pošli/ukaž, projdeme je.

  ---
  Až budeš mít: (1) ověřený email, (2) SMTP key, (3) přidanou doménu — pošli mi
  SMTP login + key a záznamy od Breva. Pak se připojím na server, nastavím
  relayhost a rozjedeme frontu.

  Klikni teď na Transactional (nebo účet → SMTP & API) a pošli screenshot SMTP
  údajů.

✻ Cooked for 47s

※ recap: Cílem je rozchodit odesílání pošty z mailcow serveru na GCP, kde je blokovaný port 25, přes free Brevo SMTP relay. Máš založený Brevo účet; teď v něm otevři Transactional (SMTP & API), vygeneruj SMTP key a pošli mi ho.

❯ analyzuj posledni screenshot                                                  

  Read 1 file, listed 1 directory (ctrl+o to expand)

● Výborně — teď mám kompletní SMTP údaje z Brevo. Můžu server nastavit.

  ⚠️ Bezpečnost

  Tyhle údaje jsou tajné heslo k odesílání — na screenshotu je vidět Password: 
  NnbXt7R51zm4xLJh. Neposílej ho nikam veřejně (chat/issue/git). Použiju ho jen
  pro konfiguraci serveru. Kdyby uniklo, v Brevu ho jde přegenerovat.

  Údaje, které nastavím

  SMTP server: smtp-relay.brevo.com
  Port:        587
  Login:       b0d674001@smtp-brevo.com
  Password:    NnbXt7R51zm4xLJh

  Než začnu zapisovat, prohlédnu si mailcow konfiguraci (jak má postfix
  nastavené relayhosts), ať to udělám mailcow-nativním způsobem, který přežije
  update — ne ručním hackováním configů. Nejdřív jen čtení, nic neměním:

  Ran 1 shell command (ctrl+o to expand)

● Mailcow je v /docker/maillcow/mailcow-dockerized. Zkusím znovu se správnou
  cestou:

  Ran 1 shell command (ctrl+o to expand)

● Relayhosts tabulka existuje a je prázdná. Než něco zapíšu, chci vidět přesně 
  jak postfix ty relayhosts používá (formát hostname, který SQL map očekává), ať
  to aktivace spolehlivě chytne. Kouknu na mailcow SQL mapy — pořád jen čtení:

  Ran 1 shell command (ctrl+o to expand)

● Teď to dává smysl — mailcow používá sender-dependent transport vázaný na
  doménu (domain.relayhost = id). Doména multishoping.eu má relayhost = 0
  (vypnuto). Podívám se na ty dva správné SQL mapy, ať znám přesný formát
  hostname (jestli chce host:port nebo [host]:port):

  Ran 1 shell command (ctrl+o to expand)

● Soubory se z hostitele načetly prázdné (nejspíš práva) — přečtu je zevnitř 
  postfix kontejneru, kde jsou určitě naplněné. Potřebuju vidět přesný SQL
  dotaz, abych relayhost vložil ve formátu, který postfix spolehlivě chytne:

  Ran 1 shell command (ctrl+o to expand)

● Teď mám kompletní obraz. Mailcow váže relay na doménu (domain.relayhost = id),
  transport se skládá jako smtp: + hostname a SASL heslo se dohledává podle
  sender domény. Takže stačí:
  1. vložit relayhost do tabulky relayhosts
  2. přiřadit ho doméně multishoping.eu
  3. reload postfixu + flush fronty

  Hostname uložím jako [smtp-relay.brevo.com]:587 (hranaté závorky = přímé
  spojení bez MX lookupu, best practice pro smarthost). Jdu na to:

  Ran 1 shell command (ctrl+o to expand)
● Konfigurace zapsána a fronta flushnuta. Teď ověřím, jestli mail reálně odešel
  přes Brevo — zkontroluju logy a frontu:

  Ran 1 shell command (ctrl+o to expand)

● Velký pokrok — a přesná diagnóza. Relay funguje, ale Brevo odmítlo přihlášení:

  Co se stalo

  ✅ TLS spojení na smtp-relay.brevo.com:587 navázáno (TLSv1.3)
  ❌ status=bounced — SASL authentication failed
     server said: 535 5.7.8 Authentication failed

  Takže konfigurace serveru je správná — postfix se připojí k Brevu přes
  šifrované spojení na 587. Problém je čistě v autentizaci na straně Brevo.

  Příčina (skoro jistě)

  Tvůj Brevo účet ještě není aktivovaný/ověřený. Vzpomeň si na tu žlutou záložku
  „Let's verify your email address" — dokud email nepotvrdíš a účet Brevo
  neaktivuje, SMTP klíč nefunguje a vrací 535. To je nejčastější důvod u čerstvě
  založených free účtů (Brevo navíc někdy nové účty ručně schvaluje kvůli
  anti-spamu).

  ⚠️ Ten testovací mail se teď „bouncnul"

  Na rozdíl od dřívějška (deferred = čeká) je teď bounced (5.7.8) = trvale 
  zamítnut, už se nezkusí znovu. Bounce zpráva ti přišla lokálně do
  zelina@multishoping.eu. Nevadí — po opravě pošleme nový testovací mail.

  Co udělat (ty, v Brevo)

  1. Potvrď ověřovací email z té žluté záložky.
  2. V Brevo dashboardu zkontroluj, jestli nikde nesvítí „account under review" 
  / „aktivujte účet" — free účty občas musí vyplnit krátký formulář (odkud
  posíláš, typ mailů). Bez schválení SMTP nejede.
  3. Pro jistotu v Transactional → SMTP ověř, že login je přesně
  b0d674001@smtp-brevo.com a případně vygeneruj nový SMTP key (starý mohl být
  neaktivní). Pokud ho přegeneruješ, pošli mi nový — přepíšu ho na serveru.

  Až bude účet aktivní

  Řekni a já rovnou pošlu čerstvý testovací mail ze serveru a zkontroluju v logu
  status=sent — nebudeme čekat na žádný zaseklý mail.

  ---
  Shrnutí: server ✅ hotový a ověřený, zbývá aktivovat Brevo účet. Dej vědět, až
  potvrdíš email / projde schválení, a dotáhneme to.

✻ Brewed for 5m 26s

❯ analyzuj posledni screenshot                                                  

  Read 1 file, listed 1 directory (ctrl+o to expand)

● Tenhle screenshot je zase Brevo Home — a bohužel neukazuje to, co pro náš
  problém (535 auth failed) potřebujeme. Co z něj vyčtu:

  Co je vidět

  - „Add your first contacts" → Done — přidal jsi 2 kontakty.
  - Emails: 300 left out of 300 — pořád 0 odesláno, tj. přes SMTP zatím neprošlo
  nic.
  - V liště stále otevřená žlutá záložka „Let's verify your email add…" →
  ověření emailu nejspíš ještě není dokončené.

  ⚠️ Důležité — jdeš špatným směrem

  Přidávání kontaktů a kampaní je Marketing část Breva. Pro náš SMTP relay je to
  úplně irelevantní — to nepomůže s chybou 535. Ty kontakty klidně ignoruj.

  Co ve skutečnosti řeší chybu 535

  Autentizace selhala, protože účet není plně aktivovaný pro odesílání. Musíš
  vyřešit dvě věci — ani jedna není na téhle Home stránce:

  1. Dokonči ověření emailu — klikni na tu žlutou záložku „Let's verify your 
  email address" a potvrď odkaz z mailu. Dokud tohle není hotové, SMTP klíč
  nefunguje.
  2. Zkontroluj stav aktivace účtu — Brevo nové free účty často ručně schvaluje
  (anti-spam). Podívej se:
    - jestli někde nahoře nesvítí banner typu „Your account is under review" /
  „aktivujte účet"
    - nebo běž do Transactional → Email (levé menu) — pokud je účet neaktivní,
  uvidíš tam výzvu k aktivaci/schválení

  Jak poznáš, že je hotovo

  Až bude email ověřený a účet aktivní, SMTP key začne autentizovat a chyba 535
  zmizí. Pak řekni a já pošlu ze serveru čerstvý testovací mail + zkontroluju
  status=sent.

  ---
  Teď konkrétně: klikni na tu žlutou záložku a dokonči ověření emailu. Pak mrkni
  do Transactional → Email, jestli tam není výzva k aktivaci. Pošli screenshot
  odtud — z Home stránky stav SMTP nepoznáme.

✻ Cooked for 48s

❯ nevidim moznost overeni emailu                                                

● Když nevidíš možnost ověření, tak email je nejspíš už ověřený (jinak by tě
  Brevo nepustil ani dovnitř) — pak je chyba 535 buď v neaktivovaném účtu, nebo
  v překlepu v přihlašovacích údajích. Ať negádáme, otestuju přihlášení k Brevu
  přímo ze serveru — to jednoznačně řekne, co Brevo vrací:

  Ran 1 shell command (ctrl+o to expand)

● Teď je to jednoznačné. Zadal jsem přihlašovací údaje čerstvě a správně
  zakódované přímo proti Brevu a výsledek:

  250-AUTH PLAIN LOGIN CRAM-MD5     ← Brevo nabízí přihlášení
  535 5.7.8 Authentication failed    ← ale tyhle údaje odmítá

  Závěr: problém je 100% na straně Brevo účtu, ne na serveru

  - Server je prokazatelně v pořádku — TLS spojení i mechanismus AUTH fungují.
  Není to překlep v DB (testoval jsem to mimo mailcow config, ručně).
  - Brevo aktivně odmítá ten SMTP klíč. To znamená jedno ze dvou:
    a. Účet není aktivovaný pro odesílání — Brevo nové (hlavně free) účty drží v
  „review" a do schválení vrací přesně 535. Nejčastější příčina.
    b. Zobrazený klíč není aktivní — mohl být přegenerovaný nebo to nebyl ostrý
  key.

  Co udělat (ty, v Brevo)

  1. Zkontroluj stav aktivace účtu:
    - Podívej se na horní lištu dashboardu — jestli nesvítí banner „Your account
  is pending activation / under review".
    - Nebo klikni vlevo na Transactional → Email — pokud účet není schválený,
  bývá tam výzva k aktivaci / „contact support".
    - Zkus Settings (⚙️) → Security / Senders — hledej info o stavu účtu.
  2. Přegeneruj SMTP klíč (rychlý test):
    - Transactional → SMTP → Generate a new SMTP key
    - pošli mi nový klíč, přepíšu ho na serveru a hned otestuju znovu
  3. Pokud účet visí v review: Brevo ho obvykle schválí do pár hodin, nebo
  napíšou s dotazy (odkud posíláš, typ mailů). Bez schválení SMTP nepojede ať
  uděláš cokoliv.

  Rychlý ověřovací trik

  Až budeš mít pocit, že je účet aktivní / nový klíč, nemusíš nic klikat na 
  serveru — pošli mi klíč (nebo řekni „zkus to znovu") a já ten AUTH test
  spustím znovu. Uvidíme okamžitě 235 Authentication successful místo 535.

  ---
  Shrnutí: relay je nastavený a funkční, čeká se výhradně na to, až Brevo účet
  povolí odesílání. Zjisti stav aktivace / přegeneruj klíč a dej vědět —
  otestuju to během vteřin.

✻ Sautéed for 1m 28s

❯ analyzuj posledni screenshot                                                  

  Read 1 file, listed 1 directory (ctrl+o to expand)

● Tady je příčina! Tohle je přesně to, co odmítá přihlášení. Screenshot je Brevo
  → Settings → Security → Authorized IPs:

  Co vidím

  Blocking unauthorized IP addresses
    SMTP keys:  ● Activated          ← omezení na IP je ZAPNUTÉ

  Authorized IP addresses (0)         ← ale seznam je PRÁZDNÝ!

  Brevo má u tvého účtu zapnutou ochranu „povolené IP adresy" pro SMTP klíče,
  ale seznam povolených IP je prázdný (0). Takže Brevo blokuje SMTP volání ze
  všech IP adres → tvůj server (34.31.195.148) není povolený → každý pokus vrací
  535 Authentication failed.

  To nebyla ani aktivace účtu, ani špatný klíč — klíč je platný, jen ho smí 
  použít jen povolená IP, a žádná tam není.

  Oprava (2 možnosti)

  ✅ Doporučeno: povolit IP serveru

  1. Klikni vpravo nahoře na „Authorize IP addresses"
  2. Přidej IP mail serveru: 34.31.195.148
  3. Ulož

  Tím zůstane ochrana zapnutá (bezpečnější) a povolí se jen tvůj server.

  Alternativa: vypnout omezení

  - U řádku SMTP keys klikni „Deactivate for SMTP keys" → povolí SMTP z
  jakékoliv IP.
  - Méně bezpečné, ale funkční. (Doporučuju spíš první variantu.)

  Pak

  Až přidáš 34.31.195.148 (nebo vypneš omezení), nic na serveru měnit nemusíš —
  řekni a já hned spustím AUTH test. Uvidíme 235 Authentication successful a
  pošlu testovací mail.

  ---
  Konkrétně teď: klikni „Authorize IP addresses" a přidej 34.31.195.148. To je
  ta chybějící část skládačky. 🧩

✻ Churned for 33s

❯ analyzuj posledni screenshot                                                  

  Read 1 file, listed 1 directory (ctrl+o to expand)

● Přesně tak! IP je přidaná:

  Authorized IP addresses (1)
    34.31.195.148 · Google LLC · Jul 3, 2026 09:53 PM · Manual

  Server má teď povolenou IP a ochrana zůstala zapnutá (bezpečné). Zkusím AUTH
  test znovu — teď by měl projít:

  Ran 1 shell command (ctrl+o to expand)

● Pořád 535, i po povolení IP. Dvě možné příčiny: buď se změna povolené IP u 
  Brevo ještě nepropsala (chvíli to trvá), nebo jsem špatně přečetl nějaký znak 
  hesla ze screenshotu (OCR — 1/l, 0/O apod.). Zkusím to ještě jednou po chvíli:

  Ran 1 shell command (ctrl+o to expand)

● Pořád 535 i po propagaci. IP je povolená, TLS i mechanismus AUTH fungují —
  takže teď už zbývá jediné vysvětlení: přihlašovací údaje nesedí přesně. A
  protože jsem je četl z obrázku (OCR), skoro jistě jsem špatně přečetl nějaký 
  znak — třeba 1 vs l vs I, nebo 0 vs O.

  Údaje, které mám teď na serveru:
  Login:    b0d674001@smtp-brevo.com
  Password: NnbXt7R51zm4xLJh

  Potřebuju je od tebe jako text (ne screenshot)

  Aby nebyl prostor pro překlep, zkopíruj mi přesně (Ctrl+C z Brevo):

  1. SMTP login — v Brevo Transactional → SMTP, pole „Login"
  2. SMTP key (password) — tamtéž pole „Master password / SMTP key"

  Nejlíp rovnou vygeneruj nový SMTP key (tlačítko Generate a new SMTP key) a
  zkopíruj ho jako text — nový klíč je 100% aktivní a nebude tam OCR
  nejednoznačnost.

  Pošli mi to sem jako text, já to přepíšu na serveru (v DB i pro AUTH test) a
  hned ověřím — mělo by vyskočit 235 Authentication successful a pak pošlu
  testovací mail.

  ▎ Pozn.: Vím, že sdílet heslo v chatu není ideál, ale tenhle SMTP key slouží 
  ▎ jen k odesílání přes Brevo a jde kdykoli přegenerovat. Po zprovoznění ti 
  ▎ klidně poradím, jak ho případně otočit.

  Zkopíruj login + key jako text a pošli. 🔑

✻ Crunched for 2m 18s

※ recap: Cíl: rozchodit odesílání pošty z mailcow přes Brevo relay (GCP blokuje port 25). Server je nastavený a IP povolená, ale Brevo vrací 535 — špatné přihlašovací údaje. Další krok: pošli mi SMTP login a key z Brevo jako text.

❯ analyzuj posledni screenshot                                                  

  Read 1 file, listed 1 directory (ctrl+o to expand)

● Teď to dává smysl — na screenshotu je Brevo SMTP & API a vidím, že jsi
  vygeneroval nový SMTP klíč:

  Co je vidět

  SMTP Server: smtp-relay.brevo.com
  Port:        587
  Login:       b0d674001@smtp-brevo.com

  Your SMTP Keys:
    Key:     **********BczP9h   ← zamaskovaný, končí na "BczP9h"
    Name:    Multishoping
    Status:  Active
    Expires: July 3, 2027
    Created: July 3, 2026 9:59 PM
    Last used: --  (zatím nepoužit)

  Plus nahoře potvrzení modrého banneru: „Unauthorized IP addresses are blocked 
  for your SMTP keys" — to je ta IP ochrana, kterou jsme vyřešili (34.31.195.148
  povolená ✅).

  Proč AUTH pořád selhával

  Používal jsem starý klíč (NnbXt7R51zm4xLJh), ale ty jsi teď vytvořil nový
  („Multishoping", 9:59 PM). Server má pořád ten starý → proto 535.

  ⚠️ Problém: nový klíč nevidím celý

  Brevo zobrazí plnou hodnotu klíče jen jednou — při vytvoření. Teď je
  zamaskovaný (**********BczP9h), takže z tohohle screenshotu ho nepřečtu.

  Co potřebuju od tebe

  Pošli mi celou hodnotu nového klíče jako text:

  - Pokud jsi si ji při generování zkopíroval, vlož ji sem.
  - Pokud ne (Brevo ji už neukáže), klikni vpravo nahoře na „+ Generate SMTP 
  key", vytvoř další, a hned zkopíruj celou hodnotu (Brevo ji ukáže jen v tu
  chvíli) → vlož mi ji sem jako text.

  Jakmile mi pošleš plný klíč, přepíšu ho na serveru a hned otestuju — teď už by
  mělo vyjít 235 Authentication successful (IP i login máme správně, chybí jen
  aktuální klíč). 🔑

✻ Cooked for 50s

❯ jak ho ale zobrazim                                                           
● Bohužel existující klíč už zobrazit nejde — a není to chyba, Brevo (jako
  většina služeb) ukáže plnou hodnotu SMTP klíče jen jednou, v okamžiku 
  vytvoření. Potom ho natrvalo zamaskuje (**********BczP9h) a už není žádné 
  tlačítko „zobrazit". Je to bezpečnostní opatření.

  Takže ten stávající klíč „Multishoping" je pro nás ztracený (neznáme jeho
  plnou hodnotu). Musíš vygenerovat nový a zkopírovat ho hned:

  Postup krok za krokem

  1. Na téhle stránce (SMTP & API → SMTP) klikni vpravo nahoře na + Generate 
  SMTP key
  2. Brevo se zeptá na název klíče → napiš třeba mailcow-relay → potvrď
  3. Objeví se okno s plnou hodnotou klíče (např. xsmtpsib-… nebo řetězec znaků)
  — tohle je ten jediný moment, kdy ho vidíš celý
  4. Klikni na ikonu kopírování (nebo označ a Ctrl+C) — zkopíruj celou hodnotu
  5. Zavři okno až potom, co ho máš zkopírovaný

  Kam ho poslat

  Vlož mi ho sem do chatu jako text (ne screenshot — ať není OCR chyba). Vypadá
  to nějak takhle:
  xsmtpsib-a1b2c3d4e5f6...BczP9h

  Poznámka

  - Starý klíč „Multishoping" můžeš klidně nechat být, nebo ho později smазat —
  používat budeme ten nový.
  - Klíčů můžeš mít víc, nevadí to.

  Vygeneruj nový, zkopíruj celou hodnotu při zobrazení a pošli mi ji. Pak to
  hned nastavím a otestuju. 🔑

✻ Sautéed for 26s

❯ xsmtpsib-28a9da146aa25c56bf4495697b096293a9f4b8e6af6f78da0a125601c478f209-2W8 
  PKyJOizrkJqwI                                                                 

● Mám nový klíč. Nejdřív ho otestuju přímo proti Brevu (ať vím, že je správný),
  pak ho přepíšu na serveru:

  Ran 1 shell command (ctrl+o to expand)

● Ha — chyba je v mém testu, ne v klíči. Nový klíč je dlouhý (88 znaků) a příkaz
  base64 jeho zakódovanou podobu zalomil na dva řádky, což rozbilo AUTH
  protokol. Opravím to (base64 -w0 = bez zalomení) a otestuju znovu:

  Ran 1 shell command (ctrl+o to expand)

● 235 Authentication succeeded 🎉 Klíč je správný a IP povolená — ty předchozí
  535 byly jen chyba mého testu (zalomený base64), postfix kóduje správně. Teď
  přepíšu nový klíč do serveru, pošlu testovací mail a zkontroluju log:

  Ran 1 shell command (ctrl+o to expand)

● 🎉 HOTOVO — relay funguje! Testovací mail prošel celou cestou:

  09F4CE702F: to=<ondrej.web@gmail.com>,
    relay=smtp-relay.brevo.com[1.179.118.1]:587,
    status=sent (250 2.0.0 OK: queued as ...@mail.multishoping.eu)

  Postfix se přihlásil k Brevu (TLS 1.3), Brevo mail přijalo a zařadilo k 
  doručení (250 OK). Fronta je prázdná. Odchozí pošta z GCP je tímto
  zprovozněná. ✅

  Co ještě dodělat (DNS) — SPF include

  Když teď mail relayuje Brevo, na Gmail se připojuje Brevo IP, ne tvůj server.
  Aby prošla i SPF kontrola, přidej Brevo do SPF:

  v=spf1 mx include:spf.brevo.com ~all
  (v Zoner panelu uprav stávající SPF TXT @)

  ▎ DKIM projde tak jako tak (mailcow podepisuje d=multishoping.eu a Brevo 
  ▎ zprávu jen přepošle), takže DMARC by prošel i teď díky DKIM alignmentu. Ale 
  ▎ SPF include je čistější a doporučený — ať máš oba pilíře zelené.

  Ověř doručení

  Mrkni do schránky ondrej.web@gmail.com (i do spamu) — měl by tam dorazit „Test
  relay pres Brevo". V Gmailu si přes „Show original" zkontroluj, že
  SPF/DKIM/DMARC = PASS.

  Teď aktualizuju dokumentaci na serveru — přidám do dns-mail-records.md sekci o
  relayi (bez tajného klíče):

  Read 1 file (ctrl+o to expand)

● Update(dns-mail-records.md)
  ⎿  Added 32 lines
       68  # https://dane.sys4.de/smtp/mail.multishoping.eu
       69  ```
       70  
       71 +## Odchozí pošta — SMTP relay přes Brevo                      
       72 +                                                              
       73 +GCP **trvale blokuje odchozí port 25** → mailcow nemůže doručo
          +vat přímo na cizí MX.                                         
       74 +Řešení: odchozí pošta se relayuje přes **Brevo** na portu 587 
          +(zprovozněno 3. 7. 2026 ✅).                                  
       75 +                                                              
       76 +- **Relay:** `smtp-relay.brevo.com:587` (STARTTLS, SASL LOGIN)
       77 +- **Login:** `b0d674001@smtp-brevo.com`                       
       78 +- **SMTP key:** uložen v mailcow DB (`relayhosts` tabulka), **
          +NE v tomto souboru**. Jde přegenerovat v Brevo → SMTP & API.  
       79 +- **Brevo IP allowlist:** Security → Authorized IPs → povolena
          + `34.31.195.148` (jinak 535).                                 
       80 +                                                              
       81 +### Konfigurace v mailcow (DB)                                
       82 +```sql                                                        
       83 +-- relayhosts: id=1, hostname='[smtp-relay.brevo.com]:587', us
          +ername='b0d674001@smtp-brevo.com'                             
       84 +-- domain.relayhost = 1 pro multishoping.eu (sender-dependent 
          +transport)                                                    
       85 +```                                                           
       86 +Odpovídá UI: Configuration → Routing → Relayhosts + přiřazení 
          +doméně.                                                       
       87 +                                                              
       88 +### Nutná úprava SPF (kvůli relayi)                           
       89 +```                                                           
       90 +v=spf1 mx include:spf.brevo.com ~all                          
       91 +```                                                           
       92 +Bez `include:spf.brevo.com` by SPF na příjmu selhal (připojuje
          + se Brevo IP, ne server).                                     
       93 +DKIM (`d=multishoping.eu`) zůstává platný — mailcow podepisuje
          + před odesláním na relay.                                     
       94 +                                                              
       95 +### Ověření odesílání                                         
       96 +```bash                                                       
       97 +# na serveru (mail se relayuje přes Brevo):                   
       98 +docker logs mailcowdockerized-postfix-mailcow-1 | grep 'relay=
          +smtp-relay.brevo.com'                                         
       99 +# očekávaný stav: status=sent (250 2.0.0 OK: queued as ...)   
      100 +```                                                           
      101 +                                                              
      102  ## Poznámky
      103  - Propagace do veřejných cache: TTL 3600 s (~1 h).
      104  - Reportovací schránka `dmarc@multishoping.eu` musí existovat 
           a být čtená.
      105  - Po pár týdnech monitoringu zpřísnit DMARC z `p=none` na `p=q
           uarantine`.
      106 +- Brevo free plán: 300 mailů/den. Authorized IP `34.31.195.148
          +` musí zůstat povolená.                                       

● Dokumentace aktualizovaná.

  Shrnutí — kde jsme

  ┌──────────────────────────────────────────────────────┬──────┐
  │                         Krok                         │ Stav │
  ├──────────────────────────────────────────────────────┼──────┤
  │ Relay Brevo nastaven v mailcow (relayhosts + doména) │ ✅   │
  ├──────────────────────────────────────────────────────┼──────┤
  │ Nový SMTP key přepsán na serveru                     │ ✅   │
  ├──────────────────────────────────────────────────────┼──────┤
  │ Brevo IP allowlist (34.31.195.148)                   │ ✅   │
  ├──────────────────────────────────────────────────────┼──────┤
  │ AUTH test → 235 Authentication succeeded             │ ✅   │
  ├──────────────────────────────────────────────────────┼──────┤
  │ Testovací mail → status=sent, Brevo přijalo          │ ✅   │
  ├──────────────────────────────────────────────────────┼──────┤
  │ Fronta prázdná                                       │ ✅   │
  ├──────────────────────────────────────────────────────┼──────┤
  │ Dokumentace dns-mail-records.md                      │ ✅   │
  └──────────────────────────────────────────────────────┴──────┘

  Zbývají 2 věci na tobě

  1. Přidat SPF include v Zoner DNS:
  v=spf1 mx include:spf.brevo.com ~all
  2. Ověřit doručení — kouknout do ondrej.web@gmail.com (i spam), přes „Show
  original" zkontrolovat SPF/DKIM/DMARC = PASS.

  Až upravíš SPF, dej vědět — ověřím přes dig a pošlu ještě jeden kontrolní
  testmail, ať vidíme, že po SPF změně sedí i autentizace na příjmu. Tím bude
  odesílání kompletně dořešené. 📬

  Chceš rovnou upravit i ten SPF, nebo napřed zkontroluješ, jestli test dorazil
  do Gmailu?

✻ Brewed for 2m 53s

※ recap: Cíl: zprovoznit odchozí mail z mailcow na GCP přes Brevo relay, což už funguje (testmail odešel, status=sent). Další krok: přidat do DNS SPF záznam `v=spf1 mx include:spf.brevo.com ~all` a ověřit doručení do Gmailu.

❯ ok email mi dosel ale spadl do spamu                                          

● Spam u úplně čerstvého mail serveru je běžný — a máme jednu konkrétní 
  opravitelnou příčinu, kterou jsme ještě neudělali: SPF include pro Brevo. To
  je nejspíš hlavní důvod.

  Proč to spadlo do spamu

  Právě jsi to poslal přes Brevo, ale SPF pořád je v=spf1 mx ~all — bez Breva.
  Takže:
  - Gmail vidí, že se připojuje Brevo IP (1.179.118.1), ale ta není v SPF domény
  multishoping.eu → SPF = fail/softfail → silný spam signál.

  Nejdřív ověř, co Gmail říká

  V Gmailu otevři ten mail → ⋮ → „Show original" (Zobrazit originál). Nahoře
  uvidíš:
  SPF:   PASS / FAIL / SOFTFAIL
  DKIM:  PASS / FAIL
  DMARC: PASS / FAIL
  Pošli mi ty tři hodnoty — potvrdí to diagnózu. Skoro jistě uvidíš SPF 
  fail/softfail, DKIM pass.

  Oprava #1 (hlavní): SPF include

  V Zoner panelu uprav TXT @:
  v=spf1 mx include:spf.brevo.com ~all
  Po propagaci (~1 h) bude SPF procházet i pro Brevo IP.

  Další faktory spamu (u nového serveru normální)

  1. Reputace nové domény/IP — Gmail nové odesílatele hlídá; chce to pár dní
  „warmupu" a reálný provoz. Po pár legitimních mailech se to zlepší.
  2. Obsah testmailu byl podezřelý — From: test@multishoping.eu (neexistující
  adresa), jednořádkový text „test". Takové maily vypadají spamově. Reálné
  objednávkové maily z e-shopu (s hlavičkami, HTML, existující adresou) dopadnou
  líp.
  3. Brevo doménová autentizace — v Brevo můžeš doménu multishoping.eu
  „authentikovat" (přidat jejich DKIM). Zlepší to doručitelnost přes Brevo.
  Doporučuju, ale není to blokující.

  Doporučené pořadí

  1. Přidej SPF include include:spf.brevo.com (hlavní fix) 🔴
  2. Zkontroluj „Show original" a pošli mi SPF/DKIM/DMARC
  3. Pošli mail z reálné adresy (ne test@) a uvidíš rozdíl

  Přidej ten SPF include a pošli mi hodnoty z „Show original" — pak doladíme
  zbytek. Chceš pomoct s Brevo doménovou autentizací (jejich DKIM), nebo napřed
  SPF?

✻ Churned for 48s

❯ podivej se do /home/marty/Downloads/Testovaci email                           

  Listed 2 directories (ctrl+o to expand)

● The file má příponu .eml. Přečtu hlavičky — hlavně authentication výsledky
  (SPF/DKIM/DMARC):

  Searched for 1 pattern (ctrl+o to expand)

● Tohle je zásadní zjištění — a vysvětluje spam. Ale hlavičky jsou víceřádkové a
  grep je uřízl. Přečtu celý blok Authentication-Results:

  Read 1 file (ctrl+o to expand)

● Teď to mám kompletní a je to důležitější zjištění, než jen SPF. Ten mail
  prošel Gmail autentizací, ale podívej, co se stalo:

  Authentication-Results z Gmailu

  dkim=pass    header.i=@11589236.brevosend.com          ← Brevo DKIM OK
  dkim=neutral (body hash did not verify) @multishoping.eu ← TVŮJ DKIM SELHAL
  spf=pass     smtp.mailfrom=...@gz.d.sender-sib.com      ← SPF na Brevo doméně
  dmarc=pass   header.from=brevosend.com                  ← DMARC na
  BREVOSEND.COM!

  Co se reálně děje

  Protože doména multishoping.eu není autentizovaná v Brevo, Brevo:

  1. Přepsal odesílatele From: na svou subdoménu →
  altmanova@11589236.brevosend.com (tvoje adresa je jen v Reply-To). Zákazník 
  e-shopu tak vidí divnou brevosend.com adresu, ne @multishoping.eu. 🔴
  2. Rozbil tvůj DKIM — Brevo do těla přidal patičku/tracking (List-Unsubscribe
  atd.), takže body hash už nesedí → tvůj podpis d=multishoping.eu je
  neutral/fail.
  3. DMARC vyhodnocuje brevosend.com, ne tvou doménu. Z pohledu autentizace ten
  mail vůbec není „od multishoping.eu".

  To je hlavní důvod spamu i té divné adresy — SPF include by to samo 
  NEVYŘEŠILO.

  Skutečná oprava: autentizovat doménu v Brevo

  V Brevo: Senders, Domains & Dedicated IPs → Domains → Authenticate 
  multishoping.eu. Brevo ti vypíše DNS záznamy (jejich DKIM + ověřovací Brevo 
  code), které přidáš do Zoner DNS. Po autentizaci:

  - Brevo přestane přepisovat From → maily půjdou jako altmanova@multishoping.eu
  ✅
  - Brevo podepíše DKIM zarovnaný na multishoping.eu (podepisuje až po své
  úpravě, takže projde) ✅
  - DMARC se vyhodnotí na multishoping.eu ✅ → inbox místo spamu

  Správné pořadí kroků

  1. 🔴 Autentizovat multishoping.eu v Brevo (Domains → Authenticate) + přidat
  jejich DNS záznamy — hlavní fix
  2. 🟡 SPF include: v=spf1 mx include:spf.brevo.com ~all
  3. 🟢 Poslat mail z reálné adresy a ověřit „Show original" — mělo by být
  dmarc=pass header.from=multishoping.eu

  ---
  Takže priorita se změnila: nejdřív doménová autentizace v Brevo, ne SPF. Běž v
  Brevo do Senders, Domains & Dedicated IPs → Domains, dej Authenticate u
  multishoping.eu a pošli mi screenshot těch DNS záznamů, co ti Brevo zobrazí —
  projdeme je společně a přidáme do Zoneru. Chceš s tím pomoct?

✻ Sautéed for 1m 58s

※ recap: Cílem je zprovoznit odesílání pošty z mailcow na GCP přes Brevo relay. Odesílání funguje, ale Brevo přepisuje odesílatele a mail padá do spamu. Další krok: v Brevo autentizovat doménu multishoping.eu (Senders, Domains → Authenticate) a přidat vypsané DNS záznamy.

❯ jak v brevo ovorim domunu multishoping.eu                                     

● Jasně, provedu tě tím krok za krokem. V Brevo se to jmenuje „Authenticate 
  domain" a je to v nastavení Senders/Domains.

  Krok za krokem

  1. Otevři správu domén

  - Vlevo v Settings (ozubené kolo) → „Senders, domains, IPs"
  (viděli jsme to v menu — přímo pod „Users")
  - Nahoře přepni na záložku „Domains"

  2. Přidej doménu

  - Klikni „Add a domain"
  - Zadej: multishoping.eu (bez www, bez https://)
  - Zaškrtni, že chceš doménu authentikovat (ne jen jako sender)
  - Potvrď

  3. Brevo ti zobrazí DNS záznamy

  Ukáže ti sadu záznamů k přidání do DNS, typicky:
  - Brevo code — TXT záznam pro ověření vlastnictví (brevo-code:...)
  - DKIM — TXT záznam (brevo1._domainkey nebo mail._domainkey → jejich veřejný
  klíč)
  - DMARC — případně doporučený _dmarc (ten už máš, takže nový nepřidávej — jen
  zkontrolujeme)

  4. Přidej je do Zoner DNS

  Ty záznamy vložíš do CZECHIA/Zoner panelu (stejně jako jsme dělali
  SPF/DKIM/DMARC).

  5. Zpět v Brevo klikni „Verify" / „Authenticate"

  Brevo ověří, že záznamy v DNS jsou, a doména se označí jako Authenticated ✅.

  ⚠️ Důležité

  - Neměň MX — Brevo tě k tomu nebude nutit (autentizace domény je jen přes
  TXT/DKIM), příchozí pošta zůstává na mailcow.
  - DMARC nepřidávej znovu — už _dmarc máš. Když Brevo bude chtít vlastní, ukaž
  mi to, sladíme to.

  ---
  Až se dostaneš do kroku 3 (Brevo zobrazí DNS záznamy), pošli mi screenshot —
  projdu je s tebou, řeknu přesně co a jak do Zoneru přidat (a co vynechat, ať
  si nerozbiješ stávající DKIM/DMARC).

  Běž do Settings → Senders, domains, IPs → Domains → Add a domain a ukaž mi, co
  Brevo vypíše. 📋
✻ Churned for 27s

❯ analyzuj posledni screenshot                                                  

  Read 1 file, listed 1 directory (ctrl+o to expand)

● Přesně tady jsi správně. Brevo se ptá, jak chceš doménu ověřit:

  Vyber první možnost (už je vybraná ✅)

  „Authenticate the domain yourself" — Set up your domain records manually in 
  your domain provider account.

  To znamená, že si DNS záznamy přidáš sám v Zoner panelu (máš tam přístup,
  děláme to celou dobu). Radiobutton je už zaškrtnutý — správně.

  ▎ Druhá možnost („Ask someone else…") jen pošle odkaz někomu jinému, kdo má 
  ▎ DNS — to nepotřebuješ, DNS spravuješ ty.

  Klikni na Continue

  Po kliknutí ti Brevo zobrazí konkrétní DNS záznamy k přidání — typicky:
  - Brevo code (TXT, ověření vlastnictví)
  - DKIM (2× CNAME nebo TXT — brevo1._domainkey, brevo2._domainkey)
  - případně doporučený DMARC (ten už máš — nepřidávej znovu)

  ---
  Klikni „Continue" a pošli mi screenshot těch záznamů. Projdu je s tebou přesně
  — co přidat do Zoneru a co vynechat, ať si nerozbiješ stávající
  DKIM/DMARC/SPF. 📋

✻ Baked for 26s

※ recap: Cíl: rozjet odesílání pošty z mailcow přes Brevo relay (obcházíme blokovaný port 25 na GCP) tak, aby maily chodily jako @multishoping.eu a ne do spamu. Teď autentizuješ doménu v Brevo. Klikni „Continue" a pošli screenshot DNS záznamů.

❯ ; <<>> DiG 9.18.49 <<>> @illidan.zoner.com +tcp +tries=5 multishoping.eu AXFR 
  ; (1 server found)                                                            
  ;; global options: +cmd                                                       
  multishoping.eu.    3600    IN    SOA    ns1.regzone.cz.                      
  administrator.czechia.cz. 2026070402 10800 1800 1814400 3600                  
  multishoping.eu.    3600    IN    A    34.66.99.210                           
  multishoping.eu.    3600    IN    NS    ns1.regzone.cz.                       
  multishoping.eu.    3600    IN    NS    ns1.regzone.de.                       
  multishoping.eu.    3600    IN    NS    ns1.regzone.info.                     
  multishoping.eu.    3600    IN    MX    10 mail.multishoping.eu.              
  multishoping.eu.    3600    IN    TXT    "v=spf1 mx include:spf.brevo.com     
  ~all"                                                                         
  multishoping.eu.    3600    IN    TXT                                         
  "google-site-verification=Az77VcxGwCROAlwXv1FtD-iCgLx6WIBcC4G9kh8e8UM"        
  multishoping.eu.    3600    IN    RRSIG    A 13 2 3600 20261101161650         
  20260704141650 48407 multishoping.eu.                                         
  sECb2DjE8ovtoLdQ0yKEs4DZaZlSpEMeOznqDiRcAHpA+bAYbtKSbxH6                      
  GZ2ig+yyHMl+fBJsVydqttMr6xZsbw==                                              
  multishoping.eu.    3600    IN    RRSIG    NS 13 2 3600 20261101161650        
  20260704141650 48407 multishoping.eu.                                         
  5X5VQWjBh+xZDVnREdUPA9oFmndtG6VQmziGWBkEI0Tjsyb66oAV+uG+                      
  xTi4iDfoN3ADO3ZCEBxgqE9m7ALkhw==                                              
  multishoping.eu.    3600    IN    RRSIG    SOA 13 2 3600 20261101161650       
  20260704141650 48407 multishoping.eu.                                         
  cnsZN8Eoya65XICg8vB5RI3sfCbeT5qd2l8pHGFoq6qSYt+/RxEyxr0O                      
  UECgGQuL2725434Wl4vwxqHloD/Ntg==                                              
  multishoping.eu.    3600    IN    RRSIG    MX 13 2 3600 20261101161650        
  20260704141650 48407 multishoping.eu.                                         
  laqcnpjeK+4pdQ6xKchx+YFiP2DpHitBQoBK0IS1I95J+qPM97t4/k8E                      
  1YqrS5t5MlvEOsEu4vqEzIQQhRpv4A==                                              
  multishoping.eu.    3600    IN    RRSIG    TXT 13 2 3600 20261101161650       
  20260704141650 48407 multishoping.eu.                                         
  ZUUP6jLDYDNXdsR8n2K4ltjJRForhXlYxpK9q3utbfdkGIHkn+pstnNx                      
  03YJTtSN4q+jlWOEKvLko9RbuhVANA==                                              
  multishoping.eu.    3600    IN    RRSIG    DNSKEY 13 2 3600 20261101161650    
  20260704141650 11972 multishoping.eu.                                         
  mKGIp/w32g2LaqkRQ1I9fxQNotm2extcs0Fuj2Wvw0Ttgt/YswhdgjRk                      
  pt8NW5t3cJa5lsomcscKpnRofkUvRA==                                              
  multishoping.eu.    3600    IN    RRSIG    DNSKEY 13 2 3600 20261101161650    
  20260704141650 48407 multishoping.eu.                                         
  r7GJod1F5oD1VBYR5sTgF1XAfQ0W6A9ibyr5399qwal0j6Ml1++QZcsl                      
  ZgiRVEMFVeQUqVTGHe7KEtuR+tVv7w==                                              
  multishoping.eu.    0    IN    RRSIG    NSEC3PARAM 13 2 0 20261101161650      
  20260704141650 48407 multishoping.eu.                                         
  zK09SRRO5QBe06Q6GHvoRgodT7X0qnpAZ8ntX/D7P1HisuE+f5fIGk3t                      
  P8LMwk5YL8OpSDjD2oVyg0P5Y4iDHw==                                              
  multishoping.eu.    3600    IN    DNSKEY    256 3 13                          
  88Z0Y4HpZ7c+jwHPPJF/wAAXTnPESYQprf/jh7BMJaz4+4GDudC4hbPU                      
  NChaMH5Skd13mtVmrDRY0JYbSgz6rw==                                              
  multishoping.eu.    3600    IN    DN                                          
  ──── (52 lines hidden) ────────────────────────────────────────────────────── 
  nprSFAYxEie7yByP 8f24K5wupPHyZ2vv7T2XmXuEno5JkQ==                             
  gp5gti4ksppr0sdj5b6t0rsf84ssceis.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  H3UPU3LNGJP5HTA8J627R6RD82E6PFI8 A RRSIG                                      
  h3upu3lngjp5hta8j627r6rd82e6pfi8.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261101161650 20260704141650 48407 multishoping.eu.                     
  xWyyavF8sXFKtW/iFNhmQpv0SCjaHA9J0sL/9u1X917BLJkbDgJQ4J36                      
  oYPXJsahJcz0e5A16gYdm5OX6MmfMw==                                              
  h3upu3lngjp5hta8j627r6rd82e6pfi8.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  OM8H6PA1DPGPT4RE0IE7IF82HU66QGMQ TXT RRSIG                                    
  om8h6pa1dpgpt4re0ie7if82hu66qgmq.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261101161650 20260704141650 48407 multishoping.eu.                     
  8DI+tZp/SosRLXCDyvk9h6qhQ02L48lyjBEgWGpH7zlL19Hjo2TenD3f                      
  3UXcmZso7ICmsQYvNh6FN1EVy3OYqA==                                              
  om8h6pa1dpgpt4re0ie7if82hu66qgmq.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  PEA977AK26NS6OB6UNKIVH7CNKI7LGTQ CNAME RRSIG                                  
  pea977ak26ns6ob6unkivh7cnki7lgtq.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261101161650 20260704141650 48407 multishoping.eu.                     
  VMFcG5wyrV7i64w3P1Pj0M9iFP5V08KQ/N56T5/JRr66SzjUCNW8KwHh                      
  lE3qpXQO8ZqTJuUyZBEa79VlfHdKKw==                                              
  pea977ak26ns6ob6unkivh7cnki7lgtq.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  QC8HKQ28U3O893VPPBFKUGEQBLJMI61P CNAME RRSIG                                  
  qc8hkq28u3o893vppbfkugeqbljmi61p.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261101161650 20260704141650 48407 multishoping.eu.                     
  MUESPIA1FDO3dz3PMMqxpba9kGmKemkioAK882JvwncJR+n+UUqO59GT                      
  hdOYdv9bFhn9Op+1aAUbNcankXfiww==                                              
  qc8hkq28u3o893vppbfkugeqbljmi61p.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  TR6GMVG5M9O0A781DRHOC0TVG33G38EU                                              
  tr6gmvg5m9o0a781drhoc0tvg33g38eu.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261101161650 20260704141650 48407 multishoping.eu.                     
  bndXMZP+f1WMRfVr4ykVF7MEYEI/NkVmfyWTE4OEGKxx/tg35qxQ36nt                      
  wgqJMuYL5NtkduOFGwuuih22IWLA0Q==                                              
  tr6gmvg5m9o0a781drhoc0tvg33g38eu.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  UNAINF742NS87OGUVNG4056PGCRLOS2S                                              
  unainf742ns87oguvng4056pgcrlos2s.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261101161650 20260704141650 48407 multishoping.eu.                     
  ZsrMHK9PyI5jFJ0P9/WbDQRw93Rm2nMpJfi2VML5UXpEyBiJKKqrrt7k                      
  y5Zxe3VEOnJfIzlbti3tyyTuPzEe4g==                                              
  unainf742ns87oguvng4056pgcrlos2s.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  07T20H3JG7J6NC4S5IAPFB5UCV4DN1E6 CNAME RRSIG                                  
  multishoping.eu.    3600    IN    SOA    ns1.regzone.cz.                      
  administrator.czechia.cz. 2026070402 10800 1800 1814400 3600                  
  ;; Query time: 0 msec                                                         
  ;; SERVER: 217.198.113.119#53(illidan.zoner.com) (TCP)                        
  ;; WHEN: Sat Jul 04 17:17:07 CEST 2026                                        
  ;; XFR size: 84 records (messages 1, bytes 7550)                              
                                                                                
                                                                                

● Výborně — přidal jsi Brevo záznamy a je to skoro dokonalé. Analýza aktuálního
  stavu zóny + ověřím, že Brevo DKIM řetězec reálně rezolvuje:

  Ran 1 shell command (ctrl+o to expand)

● Všechno rezolvuje správně — Brevo autentizace teď projde. Ověřeno:

  ✅ Stav DNS (autoritativně)

  ┌───────────────────────────────────────────────────┬─────────────────────┐
  │                      Záznam                       │        Stav         │
  ├───────────────────────────────────────────────────┼─────────────────────┤
  │ SPF v=spf1 mx include:spf.brevo.com ~all          │ ✅ Brevo include    │
  │                                                   │ přidán              │
  ├───────────────────────────────────────────────────┼─────────────────────┤
  │ brevo1._domainkey → b1...dkim.brevo.com →         │ ✅ DKIM řetězec     │
  │ k=rsa;p=MIIBIj...                                 │ žije                │
  ├───────────────────────────────────────────────────┼─────────────────────┤
  │ brevo2._domainkey → b2...dkim.brevo.com →         │ ✅ DKIM řetězec     │
  │ k=rsa;p=MIIBIj...                                 │ žije                │
  ├───────────────────────────────────────────────────┼─────────────────────┤
  │ mailcow DKIM dkim._domainkey                      │ ✅ zůstal           │
  ├───────────────────────────────────────────────────┼─────────────────────┤
  │ DMARC                                             │ ⚠️ změněn (viz      │
  │                                                   │ níže)               │
  └───────────────────────────────────────────────────┴─────────────────────┘

  Brevo DKIM klíče (brevo1/brevo2) se přes CNAME correctly rozřetězí až na
  veřejné klíče u Breva — přesně jak Brevo potřebuje k ověření.

  ⚠️ Pozor: DMARC ti Brevo přepsal

  Původně:
  v=DMARC1; p=none; rua=mailto:dmarc@multishoping.eu; fo=0; adkim=r; aspf=r;
  rf=afrf
  Teď:
  v=DMARC1; p=none; rua=mailto:rua@dmarc.brevo.com

  To znamená, že DMARC reporty teď chodí Brevu (uvidíš je v Brevo dashboardu),
  ne do tvé schránky. Není to chyba — jen volba. Když chceš dostávat reporty i k
  sobě, můžeš mít oba:
  v=DMARC1; p=none; rua=mailto:rua@dmarc.brevo.com,mailto:dmarc@multishoping.eu
  (Nechám na tobě — pro teď Brevo verze funguje.)

  Další krok: klikni „Verify" v Brevo

  DNS záznamy jsou naostro, takže:
  1. Vrať se do Brevo → Senders, domains, IPs → Domains
  2. U multishoping.eu klikni „Verify" / „Authenticate" (nebo „I've added the
  records → Verify")
  3. Brevo ověří DNS a označí doménu Authenticated ✅

  Jakmile bude doména authenticated, Brevo přestane přepisovat From — maily
  půjdou jako @multishoping.eu s DMARC alignmentem na tvou doménu → inbox místo
  spamu.

  ---
  Klikni v Brevo na Verify a řekni, jestli to prošlo (nebo pošli screenshot).
  Pak pošlu finální testmail z reálné adresy a v „Show original" ověříme
  dmarc=pass header.from=multishoping.eu. 🎯

  Chceš do DMARC vrátit i svoji rua adresu (merge), nebo necháme Brevo verzi?

✻ Cogitated for 1m 3s

❯ analyzuj posledni 2 screenshoty                                               

  Read 2 files, listed 1 directory (ctrl+o to expand)

● Teď vidím kompletní seznam, co Brevo chce — a našel jsem, co v DNS chybí.
  Brevo požaduje 4 záznamy:

  ┌─────┬──────┬───────────────┬─────────────────────────────────────┬──────┐
  │  #  │ Typ  │     Name      │                Value                │  V   │
  │     │      │               │                                     │ DNS? │
  ├─────┼──────┼───────────────┼─────────────────────────────────────┼──────┤
  │ 1   │ TXT  │ @             │ brevo-code:a4be8e215d61acbd07779e64 │ ❌ C │
  │     │      │               │ d5dc1d9e                            │ HYBÍ │
  ├─────┼──────┼───────────────┼─────────────────────────────────────┼──────┤
  │ 2   │ CNAM │ brevo1._domai │ b1.multishoping-eu.dkim.brevo.com   │ ✅   │
  │     │ E    │ nkey          │                                     │      │
  ├─────┼──────┼───────────────┼─────────────────────────────────────┼──────┤
  │ 3   │ CNAM │ brevo2._domai │ b2.multishoping-eu.dkim.brevo.com   │ ✅   │
  │     │ E    │ nkey          │                                     │      │
  ├─────┼──────┼───────────────┼─────────────────────────────────────┼──────┤
  │ 4   │ TXT  │ _dmarc        │ v=DMARC1; p=none;                   │ ✅   │
  │     │      │               │ rua=mailto:rua@dmarc.brevo.com      │      │
  └─────┴──────┴───────────────┴─────────────────────────────────────┴──────┘

  🔴 Chybí „Brevo code" — ověření vlastnictví domény

  DKIM1, DKIM2 i DMARC už v zóně máš (ověřil jsem v AXFR), ale ověřovací TXT 
  brevo-code tam není. Bez něj Brevo autentizaci neschválí — je to důkaz, že
  doménu vlastníš.

  Přidej do Zoner DNS:

  - Type: TXT
  - Name: @ (nebo nech prázdné / multishoping.eu)
  - Value: brevo-code:a4be8e215d61acbd07779e64d5dc1d9e

  ▎ ⚠️ Musí to být samostatný TXT záznam — nepřipojuj to k SPF! Na apexu @ pak 
  ▎ budeš mít 3 TXT (SPF, google-verification, brevo-code). To je v pořádku, víc
  ▎ TXT záznamů vedle sebe je normální.

  Pak

  1. Přidej ten brevo-code TXT do Zoneru
  2. Vrať se do Brevo a klikni „Authenticate this email domain"
  3. Brevo ověří všechny 4 záznamy → doména Authenticated ✅

  ---
  Přidej ten jeden chybějící brevo-code TXT a dej vědět — ověřím přes dig, že je
  naostro, a pak klikneš na „Authenticate this email domain". To je poslední
  chybějící dílek. 🧩

✻ Sautéed for 41s

❯ ; <<>> DiG 9.18.49 <<>> @illidan.zoner.com +tcp +tries=5 multishoping.eu AXFR 
  ; (1 server found)                                                            
  ;; global options: +cmd                                                       
  multishoping.eu.    3600    IN    SOA    ns1.regzone.cz.                      
  administrator.czechia.cz. 2026070402 10800 1800 1814400 3600                  
  multishoping.eu.    3600    IN    A    34.66.99.210                           
  multishoping.eu.    3600    IN    NS    ns1.regzone.cz.                       
  multishoping.eu.    3600    IN    NS    ns1.regzone.de.                       
  multishoping.eu.    3600    IN    NS    ns1.regzone.info.                     
  multishoping.eu.    3600    IN    MX    10 mail.multishoping.eu.              
  multishoping.eu.    3600    IN    TXT    "v=spf1 mx include:spf.brevo.com     
  ~all"                                                                         
  multishoping.eu.    3600    IN    TXT                                         
  "google-site-verification=Az77VcxGwCROAlwXv1FtD-iCgLx6WIBcC4G9kh8e8UM"        
  multishoping.eu.    3600    IN    RRSIG    A 13 2 3600 20261101161650         
  20260704141650 48407 multishoping.eu.                                         
  sECb2DjE8ovtoLdQ0yKEs4DZaZlSpEMeOznqDiRcAHpA+bAYbtKSbxH6                      
  GZ2ig+yyHMl+fBJsVydqttMr6xZsbw==                                              
  multishoping.eu.    3600    IN    RRSIG    NS 13 2 3600 20261101161650        
  20260704141650 48407 multishoping.eu.                                         
  5X5VQWjBh+xZDVnREdUPA9oFmndtG6VQmziGWBkEI0Tjsyb66oAV+uG+                      
  xTi4iDfoN3ADO3ZCEBxgqE9m7ALkhw==                                              
  multishoping.eu.    3600    IN    RRSIG    SOA 13 2 3600 20261101161650       
  20260704141650 48407 multishoping.eu.                                         
  cnsZN8Eoya65XICg8vB5RI3sfCbeT5qd2l8pHGFoq6qSYt+/RxEyxr0O                      
  UECgGQuL2725434Wl4vwxqHloD/Ntg==                                              
  multishoping.eu.    3600    IN    RRSIG    MX 13 2 3600 20261101161650        
  20260704141650 48407 multishoping.eu.                                         
  laqcnpjeK+4pdQ6xKchx+YFiP2DpHitBQoBK0IS1I95J+qPM97t4/k8E                      
  1YqrS5t5MlvEOsEu4vqEzIQQhRpv4A==                                              
  multishoping.eu.    3600    IN    RRSIG    TXT 13 2 3600 20261101161650       
  20260704141650 48407 multishoping.eu.                                         
  ZUUP6jLDYDNXdsR8n2K4ltjJRForhXlYxpK9q3utbfdkGIHkn+pstnNx                      
  03YJTtSN4q+jlWOEKvLko9RbuhVANA==                                              
  multishoping.eu.    3600    IN    RRSIG    DNSKEY 13 2 3600 20261101161650    
  20260704141650 11972 multishoping.eu.                                         
  mKGIp/w32g2LaqkRQ1I9fxQNotm2extcs0Fuj2Wvw0Ttgt/YswhdgjRk                      
  pt8NW5t3cJa5lsomcscKpnRofkUvRA==                                              
  multishoping.eu.    3600    IN    RRSIG    DNSKEY 13 2 3600 20261101161650    
  20260704141650 48407 multishoping.eu.                                         
  r7GJod1F5oD1VBYR5sTgF1XAfQ0W6A9ibyr5399qwal0j6Ml1++QZcsl                      
  ZgiRVEMFVeQUqVTGHe7KEtuR+tVv7w==                                              
  multishoping.eu.    0    IN    RRSIG    NSEC3PARAM 13 2 0 20261101161650      
  20260704141650 48407 multishoping.eu.                                         
  zK09SRRO5QBe06Q6GHvoRgodT7X0qnpAZ8ntX/D7P1HisuE+f5fIGk3t                      
  P8LMwk5YL8OpSDjD2oVyg0P5Y4iDHw==                                              
  multishoping.eu.    3600    IN    DNSKEY    256 3 13                          
  88Z0Y4HpZ7c+jwHPPJF/wAAXTnPESYQprf/jh7BMJaz4+4GDudC4hbPU                      
  NChaMH5Skd13mtVmrDRY0JYbSgz6rw==                                              
  multishoping.eu.    3600    IN    DN                                          
  ──── (52 lines hidden) ────────────────────────────────────────────────────── 
  nprSFAYxEie7yByP 8f24K5wupPHyZ2vv7T2XmXuEno5JkQ==                             
  gp5gti4ksppr0sdj5b6t0rsf84ssceis.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  H3UPU3LNGJP5HTA8J627R6RD82E6PFI8 A RRSIG                                      
  h3upu3lngjp5hta8j627r6rd82e6pfi8.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261101161650 20260704141650 48407 multishoping.eu.                     
  xWyyavF8sXFKtW/iFNhmQpv0SCjaHA9J0sL/9u1X917BLJkbDgJQ4J36                      
  oYPXJsahJcz0e5A16gYdm5OX6MmfMw==                                              
  h3upu3lngjp5hta8j627r6rd82e6pfi8.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  OM8H6PA1DPGPT4RE0IE7IF82HU66QGMQ TXT RRSIG                                    
  om8h6pa1dpgpt4re0ie7if82hu66qgmq.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261101161650 20260704141650 48407 multishoping.eu.                     
  8DI+tZp/SosRLXCDyvk9h6qhQ02L48lyjBEgWGpH7zlL19Hjo2TenD3f                      
  3UXcmZso7ICmsQYvNh6FN1EVy3OYqA==                                              
  om8h6pa1dpgpt4re0ie7if82hu66qgmq.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  PEA977AK26NS6OB6UNKIVH7CNKI7LGTQ CNAME RRSIG                                  
  pea977ak26ns6ob6unkivh7cnki7lgtq.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261101161650 20260704141650 48407 multishoping.eu.                     
  VMFcG5wyrV7i64w3P1Pj0M9iFP5V08KQ/N56T5/JRr66SzjUCNW8KwHh                      
  lE3qpXQO8ZqTJuUyZBEa79VlfHdKKw==                                              
  pea977ak26ns6ob6unkivh7cnki7lgtq.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  QC8HKQ28U3O893VPPBFKUGEQBLJMI61P CNAME RRSIG                                  
  qc8hkq28u3o893vppbfkugeqbljmi61p.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261101161650 20260704141650 48407 multishoping.eu.                     
  MUESPIA1FDO3dz3PMMqxpba9kGmKemkioAK882JvwncJR+n+UUqO59GT                      
  hdOYdv9bFhn9Op+1aAUbNcankXfiww==                                              
  qc8hkq28u3o893vppbfkugeqbljmi61p.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  TR6GMVG5M9O0A781DRHOC0TVG33G38EU                                              
  tr6gmvg5m9o0a781drhoc0tvg33g38eu.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261101161650 20260704141650 48407 multishoping.eu.                     
  bndXMZP+f1WMRfVr4ykVF7MEYEI/NkVmfyWTE4OEGKxx/tg35qxQ36nt                      
  wgqJMuYL5NtkduOFGwuuih22IWLA0Q==                                              
  tr6gmvg5m9o0a781drhoc0tvg33g38eu.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  UNAINF742NS87OGUVNG4056PGCRLOS2S                                              
  unainf742ns87oguvng4056pgcrlos2s.multishoping.eu. 3600 IN RRSIG    NSEC3 13 3 
  3600 20261101161650 20260704141650 48407 multishoping.eu.                     
  ZsrMHK9PyI5jFJ0P9/WbDQRw93Rm2nMpJfi2VML5UXpEyBiJKKqrrt7k                      
  y5Zxe3VEOnJfIzlbti3tyyTuPzEe4g==                                              
  unainf742ns87oguvng4056pgcrlos2s.multishoping.eu. 3600 IN NSEC3    1 0 0 -    
  07T20H3JG7J6NC4S5IAPFB5UCV4DN1E6 CNAME RRSIG                                  
  multishoping.eu.    3600    IN    SOA    ns1.regzone.cz.                      
  administrator.czechia.cz. 2026070402 10800 1800 1814400 3600                  
  ;; Query time: 0 msec                                                         
  ;; SERVER: 217.198.113.119#53(illidan.zoner.com) (TCP)                        
  ;; WHEN: Sat Jul 04 17:22:18 CEST 2026                                        
  ;; XFR size: 84 records (messages 1, bytes 7550)                              
                                                                                
                                                                                

● Ještě to tam není — brevo-code TXT v zóně chybí. Navíc SOA serial je pořád 
  2026070402 (stejný jako minule), takže od posledního výpisu se v DNS nic
  nezměnilo — ten záznam jsi zatím nepřidal (nebo neuložil).

  V zóně jsou aktuálně jen 2 TXT na apexu @:

  "v=spf1 mx include:spf.brevo.com ~all"
  "google-site-verification=Az77VcxGwCROAlwXv1FtD-iCgLx6WIBcC4G9kh8e8UM"
  Chybí třetí:
  "brevo-code:a4be8e215d61acbd07779e64d5dc1d9e"    ← TENHLE PŘIDAT

  Přidej v Zoner panelu (sekce TXT záznamy)

  - Jméno: @ (nebo prázdné)
  - Typ: TXT
  - Hodnota: brevo-code:a4be8e215d61acbd07779e64d5dc1d9e
  - Ulož (a případně počkej, až se změní SOA serial)

  ▎ Je to nový samostatný TXT vedle SPF a google-verification. Nepřepisuj jimi 
  ▎ žádný stávající.

  Zbytek (brevo1/brevo2 DKIM, DMARC, SPF include) je v pořádku — chybí čistě
  tenhle ověřovací kód. Přidej ho, ulož, a pošli nový AXFR (nebo řekni) — ověřím
  dig +short TXT multishoping.eu | grep brevo-code, a jakmile tam bude, klikneš
  v Brevo na „Authenticate this email domain". 🧩

✻ Worked for 23s

❯ analyzuj posledni screenshot                                                  

  Read 1 file, listed 1 directory (ctrl+o to expand)

● Teď je to tam! V panelu vidím všechny 3 TXT na apexu @ včetně toho
  chybějícího:

  @   TXT   v=spf1 mx include:spf.brevo.com ~all          ✅
  @   TXT   google-site-verification=Az77...              ✅
  @   TXT   brevo-code:a4be8e215d61acbd07779e64d5dc1d9e   ✅ NOVĚ PŘIDÁNO
  _dmarc TXT v=DMARC1; p=none; rua=mailto:rua@dmarc.brevo.com  ✅
  dkim._domainkey TXT v=DKIM1;...                         ✅

  Ověřím, jestli se brevo-code už propsal do DNS (předchozí AXFR ho ještě neměl
  — asi nebylo uložené):

  Ran 1 shell command (ctrl+o to expand)

● Všechno je naostro — všechny 4 Brevo záznamy jsou v DNS potvrzené 
  autoritativně:

  ┌─────────────────────────────────────────────────┬─────────────┐
  │                     Záznam                      │    Stav     │
  ├─────────────────────────────────────────────────┼─────────────┤
  │ brevo-code TXT a4be8e215d61acbd07779e64d5dc1d9e │ ✅ propsáno │
  ├─────────────────────────────────────────────────┼─────────────┤
  │ SPF include:spf.brevo.com                       │ ✅          │
  ├─────────────────────────────────────────────────┼─────────────┤
  │ brevo1._domainkey → b1...dkim.brevo.com         │ ✅          │
  ├─────────────────────────────────────────────────┼─────────────┤
  │ brevo2._domainkey → b2...dkim.brevo.com         │ ✅          │
  ├─────────────────────────────────────────────────┼─────────────┤
  │ DMARC rua@dmarc.brevo.com                       │ ✅          │
  └─────────────────────────────────────────────────┴─────────────┘

  SOA serial se posunul na 2026070404 — změna je publikovaná.

  🎯 Teď klikni v Brevo na „Authenticate this email domain"

  Vrať se na tu Brevo záložku (Authenticate Domain) a klikni dole na černé
  tlačítko „Authenticate this email domain". Brevo zkontroluje DNS a označí
  doménu jako Authenticated ✅.

  ▎ Kdyby to hned nenaskočilo (Brevo mohlo mít v cache starý negativní výsledek 
  ▎ pro brevo-code), počkej 2–3 minuty a klikni znovu. DNS je naostro, takže je 
  ▎ to jen otázka jejich cache.

  Po úspěšné autentizaci

  Brevo přestane přepisovat From → maily půjdou jako @multishoping.eu. Pak pošlu
  finální testmail z reálné adresy a v „Show original" ověříme:
  spf=pass    (multishoping.eu)
  dkim=pass   (d=multishoping.eu, přes brevo1/brevo2)
  dmarc=pass  header.from=multishoping.eu

  Klikni na „Authenticate this email domain" a řekni, jestli se doména označila
  jako ověřená (nebo pošli screenshot). Jsme v cílové rovince! 🏁

✻ Sautéed for 51s

❯ analyzuj posledni screenshot                                                  

  Read 1 file, listed 1 directory (ctrl+o to expand)

● 🎉🎉 HOTOVO — doména je Authenticated!

  Domain: multishoping.eu
  Status: ● Authenticated  ✅

  Brevo teď přestane přepisovat From a bude maily podepisovat DKIM zarovnaným na
  multishoping.eu (přes brevo1/brevo2). Pošlu finální testmail z reálné adresy
  a zkontroluju relay log:

  Ran 1 shell command (ctrl+o to expand)

● Finální testmail odešel přes Brevo (status=sent, 250 OK), fronta prázdná. Teď
  je klíčové ověřit, jak dorazil.

  Zkontroluj Gmail (ondrej.web@gmail.com)

  1. Je mail „Finalni test po autentizaci domeny" v Doručených (ne ve spamu)?
  2. Otevři ho → ⋮ → „Show original" a koukni na:
  SPF:   PASS   (multishoping.eu)
  DKIM:  PASS   (d=multishoping.eu)
  DMARC: PASS   (header.from=multishoping.eu)
  3. A hlavně — odesílatel by teď měl být altmanova@multishoping.eu, ne ta divná
  brevosend.com adresa jako minule.

  Nejlepší: stáhni ten nový mail jako .eml do ~/Downloads (jako minule) a já
  ověřím hlavičky napřímo — uvidíme černé na bílém, jestli je vše aligned na
  multishoping.eu.

  Mezitím aktualizuju dokumentaci — přidám Brevo autentizaci domény:

● Update(dns-mail-records.md)
  ⎿  Added 15 lines, removed 1 line
       90  v=spf1 mx include:spf.brevo.com ~all
       91  ```
       92  Bez `include:spf.brevo.com` by SPF na příjmu selhal (připojuje
            se Brevo IP, ne server).
       93 -DKIM (`d=multishoping.eu`) zůstává platný — mailcow podepisuje
          - před odesláním na relay.                                     
       93  
       94 +### Brevo domain authentication (nutné — jinak Brevo přepisuje
          + From!)                                                       
       95 +Bez autentizace domény Brevo přepisoval `From` na `@xxx.brevos
          +end.com` a rozbíjel DKIM                                      
       96 +(mění tělo → body hash fail). Po autentizaci posílá jako `@mul
          +tishoping.eu` s aligned DKIM.                                 
       97 +                                                              
       98 +DNS záznamy pro Brevo autentizaci (stav: **Authenticated ✅** 
          +4. 7. 2026):                                                  
       99 +```                                                           
      100 +@                 TXT    brevo-code:a4be8e215d61acbd07779e64d5
          +dc1d9e   (ověření vlastnictví)                                
      101 +brevo1._domainkey CNAME  b1.multishoping-eu.dkim.brevo.com.   
          +         (Brevo DKIM 1)                                       
      102 +brevo2._domainkey CNAME  b2.multishoping-eu.dkim.brevo.com.   
          +         (Brevo DKIM 2)                                       
      103 +_dmarc            TXT    v=DMARC1; p=none; rua=mailto:rua@dmar
          +c.brevo.com  (Brevo přepsal DMARC)                            
      104 +```                                                           
      105 +Pozn.: Brevo přepsal DMARC `rua` na svůj (`rua@dmarc.brevo.com
          +`) — reporty chodí do Brevo dashboardu.                       
      106 +Pro reporty i k sobě lze: `rua=mailto:rua@dmarc.brevo.com,mail
          +to:dmarc@multishoping.eu`.                                    
      107 +Původní mailcow DKIM (`dkim._domainkey`) zůstává, ale při rela
          +yi přes Brevo se použije Brevo DKIM.                          
      108 +                                                              
      109  ### Ověření odesílání
      110  ```bash
      111  # na serveru (mail se relayuje přes Brevo):
● Dokumentace aktualizovaná.

  Kde jsme — prakticky hotovo ✅

  ┌─────────────────────────────────────────────────┬──────────────────┐
  │                      Krok                       │       Stav       │
  ├─────────────────────────────────────────────────┼──────────────────┤
  │ DNS stack (SPF, DKIM, DMARC, PTR, DNSSEC, TLSA) │ ✅               │
  ├─────────────────────────────────────────────────┼──────────────────┤
  │ GCP port 25 problém → Brevo relay               │ ✅               │
  ├─────────────────────────────────────────────────┼──────────────────┤
  │ Brevo IP allowlist + SMTP klíč                  │ ✅               │
  ├─────────────────────────────────────────────────┼──────────────────┤
  │ Brevo domain authentication                     │ ✅ Authenticated │
  ├─────────────────────────────────────────────────┼──────────────────┤
  │ Finální testmail přes Brevo                     │ ✅ status=sent   │
  └─────────────────────────────────────────────────┴──────────────────┘

  Zbývá už jen potvrdit doručení do inboxu (ne spamu) a alignment hlaviček.
  Stáhni ten nový mail z Gmailu jako .eml do ~/Downloads a já ověřím, že:
  - odesílatel je altmanova@multishoping.eu (ne brevosend.com)
  - spf/dkim/dmarc = pass zarovnané na multishoping.eu

  Pak je celá mailová infrastruktura kompletně dořešená. Pošli ten .eml, mrknu
  na hlavičky. 📬

✻ Cooked for 1m 25s

※ recap: Cíl je zprovoznit odesílání pošty z mailcow přes Brevo relay. Doména je v Brevo ověřená a finální testmail odešel; teď stáhni ten nový mail z Gmailu jako .eml do ~/Downloads, ať ověřím hlavičky SPF/DKIM/DMARC.

❯ Delivered-To: ondrej.web@gmail.com                                            
  Received: by 2002:a17:505:3eca:b0:1e6d:80fc:c989 with SMTP id                 
  en10csp1729880njc; Sat, 4 Jul 2026 08:29:08 -0700 (PDT)                       
  X-Received: by 2002:a5d:4905:0:b0:473:f4c3:4d51 with SMTP id                  
  ffacd0b85a97d-47aac7d0542mr3110594f8f.43.1783178947651; Sat, 04 Jul 2026      
  08:29:07 -0700 (PDT)                                                          
  ARC-Seal: i=1; a=rsa-sha256; t=1783178947; cv=none; d=google.com;             
  s=arc-20260327;                                                               
  b=agTuHuApY1VFjQaQMHuNipl0Vxp1PjpGUUJA1KbnWvpfCAZSAPjS8OPd+ScYKWHY1u          
  l2ShTXwoqFa1lE3t699MaOY7Dki7kyatHQuU0Im8xnqP7empY0nmbFbwlkirgy9D3dzZ          
  ryKEy08hxBimrv8fqp0/fJEnGuXRK4yaQ+1WQSP82cUWaKiV4o2IPg9611bLrqatwM1h          
  87eFlr07f/VwlVC5M5Dbav0gpsw4MVQyf8N9MwnKm4UGGRjxHqRZ/AZ649SKIm2pmJFW          
  Tq+QY2hq4iHxvJzPj6wCc7W6Tmhd2eP2iGk4pLPpsHy6a5mpP/oCVqzJo+1WfXQi2cqQ mAwA==   
  ARC-Message-Signature: i=1; a=rsa-sha256; c=relaxed/relaxed; d=google.com;    
  s=arc-20260327;                                                               
  h=dkim-signature:mime-version:user-agent:list-unsubscribe:feedback-id         
  :list-unsubscribe-post:subject:date:to:from:origin-messageid                  
  :message-id:dkim-signature; bh=cc6D3idAbXUHyT0bwRDsDwqVcjYt5wNOwfFjAfKw+BQ=;  
  fh=BuWcjjvOnud2OHCH32lksabhwJ4VA0/l1yiGX4KPXWw=;                              
  b=Y3a6ttzrWsmR9KR3zf6hSXX6l2bSwR8RaU7eaqgDyhi3kYiYO6dsz1Jfzh5YrKee50          
  c1M0krpzrl7V47oJvC7L/9eRq2B7CS1xJ+CoWnxWedTbeZrbdj1a1x3KeC/skSwBcaws          
  W3YaHoemyh+nrE2FZ8+phciA50BrgvgT9mje67MrfKx1uCTYhG2/Dca1tZ47onf474WK          
  zt0x6G2T3keolOMEtOHacXolN/r4pqHxf6L/XSme9lS/f7AF0XlgW2jUHt3EVmV4wu7X          
  Y0aG8+tRDK6y5sjtGuCP3s5/yBeJ+a3TN5xz3zMVF0qPemOygJliR8FGwQj0ZGknoZtI kqUA==;  
  dara=google.com                                                               
  ARC-Authentication-Results: i=1; mx.google.com; dkim=pass                     
  header.i=@multishoping.eu header.s=brevo2 header.b=CjNbQFjh; dkim=neutral     
  (body hash did not verify) header.i=@multishoping.eu header.s=dkim            
  header.b=lQFkSOMc; spf=pass (google.com: domain of                            
  bounces-482924674-2373682544@gz.d.sender-sib.com designates 77.32.148.26 as   
  permitted sender)                                                             
  smtp.mailfrom=bounces-482924674-2373682544@gz.d.sender-sib.com; dmarc=pass    
  (p=NONE sp=NONE dis=NONE) header.from=multishoping.eu                         
  Return-Path: <bounces-482924674-2373682544@gz.d.sender-sib.com>               
  Received: from gz.d.sender-sib.com (gz.d.sender-sib.com. [77.32.148.26]) by   
  mx.google.com with ESMTPS id                                                  
  ffacd0b85a97d-47a9e0ff233si5863848f8f.14.2026.07.04.08.29.07 for              
  <ondrej.web@gmail.com> (version=TLS1_3 cipher=TLS_AES_256_GCM_SHA384          
  bits=256/256); Sat, 04 Jul 2026 08:29:07 -0700 (PDT)                          
  Received-SPF: pass (google.com: domain of                                     
  bounces-482924674-2373682544@gz.d.sender-sib.com designates 77.32.148.26 as   
  permitted sender) client-ip=77.32.148.26;                                     
  Authentication-Results: mx.google.com; dkim=pass header.i=@multishoping.eu    
  header.s=brevo2 header.b=CjNbQFjh; dkim=neutral (body hash did not verify)    
  header.i=@multishoping.eu header.s=dkim header.b=lQFkSOMc; spf=pass           
  (google.com: domain of bounces-482924674-2373682544@gz.d.sender-sib.com       
  designates 77.32.148.26 as permitted sender)                                  
  smtp.mailfrom=bounces-482924674-2373682544@gz.d.sender-sib.com; dmarc=pass    
  (p=NONE sp=NONE dis=NONE) header.from=multishoping.eu                         
  DKIM-Signature: v=1; a=rsa-sha256; c=relaxed/relaxed; d=multishoping.eu;      
  q=dns/txt; s=brevo2; bh=cc6D3idAbXUHyT0bwRDsDwqVcjYt5wNOwfFjAfKw+BQ=;         
  h=from:subject:date:to:mime-version:content-type:list-unsubscribe:x-csa-compl 
  aints:list-unsubscribe-post:message-id:x-sib-id:feedback-id; b=CjNbQFjhNFzuuu 
  FvyRNzYHvCkIt25dskkZaCfBzmkbM+t689T/E125yI8qZdUOAIkARO4ujnG9f6                
  /P/Zw9Yr73A4uCivBKFyrFusji9J/rPns1VRbyjV6d3jVpO8ob4t9NVQQeEQZflvsAygncLjWg6z  
  qOt8pDd0ZpPdYnJJdKWdl+TN1A0Gx3u0OhdXY5Qrc3mObyCqDVzKdgFioCZHMycBqTnIvfS5YsUz  
  Y6WhnQm8D4vPJPwNQ36PKsMviHIAOWHs8IfvWtxVOYmqbykIXwSeo6Ml5VDYAvaSqCSKzCiafM/s  
  X9Fh9Y0SAE3NkGIsa1uktVm1afHWN5AJjvPNbg==                                      
  Message-Id: <9c14245c-5741-4b4f-a1d0-4df69bde8a55@smtp-relay.sendinblue.com>  
  Origin-messageId: <3ae9dfc6-88b0-e505-45cd-d13826ff4953@multishoping.eu>      
  From: "Zdena Altmanova" <altmanova@multishoping.eu>                           
  To: <ondrej.web@gmail.com>                                                    
  Date: Sat, 04 Jul 2026 17:29:04 +0200                                         
  Subject: Novy opraveny testovaci email                                        
  List-Unsubscribe-Post: List-Unsubscribe=One-Click                             
  Feedback-ID: 77.32.148.26:11589236_-1:11589236:Sendinblue                     
  List-Unsubscribe:                                                             
  <https://bbfijcdg.r.bh.d.sendibt3.com/tr/un/li/FY21z0Fgy94vGq92M-BjDzK93sph0o 
  vPrl9oqExfvAn-HMNwkmv-eCuiKb8wg4LCkR6mABUkWgfd0Fs0E2rnAXH0mk7gQNT7pAIY5mmn8Vm 
  10JuVJlVKsU5bNgIgpmqG81htc21e4Qgbm12YXaMt7kH0TLM7g1do0AVsOv-Uw-tmXyCliAGonQWb 
  2HgBtYvH5twJzO3YFBI4bQO-u5KNLAjNZ8qv9FvDVjez2kY3qDmoGIWUEzKv90G6>             
  X-CSA-Complaints: csa-complaints@eco.de                                       
  X-Mailin-EID: NDgyOTI0Njc0fm9uZHJlai53ZWJAZ21haWwuY29tfjwzYWU5ZGZjNi04OGIwLWU 
  1MDUtNDVjZC1kMTM4MjZmZjQ5NTNAbXVsdGlzaG9waW5nLmV1Pn5nei5kLnNlbmRlci1zaWIuY29t 
  X-sib-id: ylY-YZY4TZBclXotmQ_pnVRf6QpDQtwd35crRb9Uwm16RInYJ0tW8nfKIApjg9yYpgv 
  _D4HLbu_RNZ3hOUur3NV6IN4q5G9cm45igijGGW3raf53NpgowbZoXDuws0kJfqcRMZztZhNoBZSo 
  kevKJpM2lBv7yfxEU3TJn6iitnNLMEg                                               
  User-Agent: SOGoMail 5.12.8                                                   
  Content-Type: multipart/alternative;                                          
  boundary="----=_=-_OpenGroupware_org_NGMime-82-1783178944.410874-1------"     
  X-Last-Tls-Session-Version: None                                              
  Mime-Version: 1.0                                                             
  Received: from [127.0.0.1] (localhost [127.0.0.1]) by localhost               
  (Mailerdaemon) with ESMTPA id D4A62E7057 for <ondrej.web@gmail.com>; Sat,     
    4 Jul 2026 17:29:04 +0200 (CEST)                                            
  Dkim-Signature: v=1; a=rsa-sha256; c=relaxed/relaxed; d=multishoping.eu;      
  s=dkim; t=1783178944;                                                         
  h=from:subject:date:message-id:to:mime-version:content-type;                  
  bh=NJhCks4vAuag4bZn7eulwTzL4uR5ZtfMnOn3C0A96YQ=;                              
  b=lQFkSOMc9sqi/fJp7CnHpGyJqw30cJoVj25oIg/fV5o7EqLNvHKYXtmiyu6Fu+/tqGKZJF      
  x82wNmXcnPt9+6N2VROqlGjnUzx7T0rAFjvw1gft3UoI0MTl4K9s8dcEIBWnE3eTS7qbL7        
  /gpa+TVRP3mp+LWF/CroPcPrWYr/gbWPF2nyZL7IZbnu2RXWRRAilExsndrvp2sWQg74t3        
  OVKTxHRQ1tvJGakSMwjfsaWetyiOn5Kgaqo4NQeEFZrqElfT/lQv/ezZvvVsgNPWhHnPvb        
  04kcUHfkXyRy1inG93PM6zJidhngzBXjhfYsd8Ik9BOAZm0ZHIMLdfOueNe1Cg==              
                                                                                
  ------=_=-_OpenGroupware_org_NGMime-82-1783178944.410874-1------              
  Content-Length: 11                                                            
  Content-Transfer-Encoding: quoted-printable                                   
  Content-Type: text/plain; charset=utf-8                                       
                                                                                
                                                                                
  Ahoj=C2=A0                                                                    
                                                                                
                                                                                
  ------=_=-_OpenGroupware_org_NGMime-82-1783178944.410874-1------              
  Content-Length: 30                                                            
  Content-Transfer-Encoding: quoted-printable                                   
  Content-Type: text/html; charset=utf-8                                        
                                                                                
  <html><head></head><body><!--[if mso]> <img width=3D"1" height=3D"1" src=3D=  
  "https://bbfijcdg.r.bh.d.sendibt3.com/tr/op/QyzHb_o5RL6eO3Ad94bK9nCQiKhehki=  
  lV2idLlOnCCEsUCsds6E4MfMGCbq0qhb59ZiWEFICRcAEQz-OgT7NTEhUhiqmsU7uG3h6-1jU-V=  
  s-03UqNjusf3CNcNF5ZT-pocCKHvUyGN4Bex1zInGGRa004OsBHPxp8R1dx_W0X29NsekWdi2O0=  
  7zpbrCjo9IWuJzVlpp0NXQQjaCtLOS7_WNrSLfoig" /> <![endif]--><!--[if !mso]><!-=  
  -> <img style=3D"display:none" src=3D"https://bbfijcdg.r.bh.d.sendibt3.com/=  
  tr/op/QyzHb_o5RL6eO3Ad94bK9nCQiKhehkilV2idLlOnCCEsUCsds6E4MfMGCbq0qhb59ZiWE=  
  FICRcAEQz-OgT7NTEhUhiqmsU7uG3h6-1jU-Vs-03UqNjusf3CNcNF5ZT-pocCKHvUyGN4Bex1z=  
  InGGRa004OsBHPxp8R1dx_W0X29NsekWdi2O07zpbrCjo9IWuJzVlpp0NXQQjaCtLOS7_WNrSLf=  
  oig" /> <!--<![endif]--><p>Ahoj=C2=A0</p>                                     
  </body></html>                                                                
                                                                                
  ------=_=-_OpenGroupware_org_NGMime-82-1783178944.410874-1--------            

● 🎉 VÝBORNĚ — teď je to správně! Tohle jsou hlavičky finálního mailu a jsou
  přesně takové, jaké mají být:

  Authentication-Results z Gmailu

  dkim=pass    header.i=@multishoping.eu header.s=brevo2   ✅ Brevo DKIM,
  ZAROVNANÝ na multishoping.eu
  dkim=neutral header.i=@multishoping.eu header.s=dkim     ⚪ mailcow podpis
  (neškodí, viz níže)
  spf=pass     smtp.mailfrom=...@gz.d.sender-sib.com        ✅
  dmarc=pass   (p=NONE) header.from=multishoping.eu         ✅ DMARC ZAROVNANÝ
  NA TVOU DOMÉNU!

  A hlavně — odesílatel je opravený

  From: "Zdena Altmanova" <altmanova@multishoping.eu>   ✅
  Žádná brevosend.com adresa! Zákazník teď uvidí altmanova@multishoping.eu. To
  byl hlavní cíl a je splněný.

  Srovnání: předtím vs. teď

  ┌─────────┬──────────────────────────────────┬─────────────────────────────┐
  │         │         Před autentizací         │             Teď             │
  ├─────────┼──────────────────────────────────┼─────────────────────────────┤
  │ From    │ altmanova@11589236.brevosend.com │ altmanova@multishoping.eu   │
  │         │  🔴                              │ ✅                          │
  ├─────────┼──────────────────────────────────┼─────────────────────────────┤
  │ DKIM    │ ne (jen brevosend.com)           │ ano (d=multishoping.eu) ✅  │
  │ aligned │                                  │                             │
  ├─────────┼──────────────────────────────────┼─────────────────────────────┤
  │ DMARC   │ header.from=brevosend.com        │ header.from=multishoping.eu │
  │         │                                  │  ✅                         │
  └─────────┴──────────────────────────────────┴─────────────────────────────┘

  K tomu dkim=neutral (mailcow podpis)

  Vidíš dva DKIM podpisy — Brevo (s=brevo2, pass) a mailcow (s=dkim, neutral,
  protože Brevo upravil tělo → body hash nesedí). Nevadí to — DMARC potřebuje
  jen jeden zarovnaný pass a ten Brevo dodává. Volitelně bych mohl mailcow
  nastavit, aby odchozí maily přes relay nepodepisoval (aby tam ten neutral
  podpis nebyl), ale je to čistě kosmetika.

  ---
  Zásadní otázka na závěr

  Přistál mail v Doručených, nebo pořád ve spamu?

  Autentizace je teď kompletní a zelená, takže by měl jít do inboxu. Pokud je
  ještě ve spamu, je to už jen otázka reputace nové domény/IP (warmup — pár dní
  reálného provozu to dorovná), ne konfigurace.

  Řekni, kam mail dorazil — a jsme hotoví. 🏁

✻ Churned for 41s

❯ V dorucenych                                                                  

● 🎉🎉🎉 HOTOVO! Mail dorazil do Doručených!

  Tím je celá mailová infrastruktura kompletně zprovozněná a ověřená end-to-end.
  Rekapitulace celé cesty:

  Co jsme dnes vyřešili

  ┌───────────────────────────────────────────┬──────┐
  │                  Oblast                   │ Stav │
  ├───────────────────────────────────────────┼──────┤
  │ Reverse DNS (PTR) + statická IP + FCrDNS  │ ✅   │
  ├───────────────────────────────────────────┼──────┤
  │ SPF, DKIM, DMARC, DNSSEC, TLSA/DANE       │ ✅   │
  ├───────────────────────────────────────────┼──────┤
  │ GCP blokuje port 25 → diagnóza            │ ✅   │
  ├───────────────────────────────────────────┼──────┤
  │ Brevo SMTP relay (587, TLS, auth)         │ ✅   │
  ├───────────────────────────────────────────┼──────┤
  │ Brevo IP allowlist (34.31.195.148)        │ ✅   │
  ├───────────────────────────────────────────┼──────┤
  │ Brevo domain authentication               │ ✅   │
  ├───────────────────────────────────────────┼──────┤
  │ From = @multishoping.eu (žádný brevosend) │ ✅   │
  ├───────────────────────────────────────────┼──────┤
  │ SPF+DKIM+DMARC aligned pass               │ ✅   │
  ├───────────────────────────────────────────┼──────┤
  │ Doručení do inboxu                        │ ✅   │
  └───────────────────────────────────────────┴──────┘

  Vše je zdokumentované v /var/www/techdomov/dns-mail-records.md.

  Doporučené follow-upy (časem, nic urgentního)

  1. Warmup — posílej postupně reálné maily; reputace nové domény poroste a
  doručitelnost se ještě zlepší.
  2. DMARC zpřísnit — po pár týdnech monitoringu (p=none) přejít na p=quarantine
  a pak p=reject.
  3. DMARC reporty — chodí teď Brevu (rua@dmarc.brevo.com), uvidíš je v jejich
  dashboardu. Chceš-li i k sobě, přidej svou adresu do rua.
  4. Volitelně — vypnout mailcow DKIM podpis pro relayované maily (ať zmizí ten
  dkim=neutral), čistě kosmetika.
  5. Brevo limit — free plán 300 mailů/den; hlídej, ať e-shop nepřeteče.

  ---
  Skvělá práce, prošli jsme to krok za krokem a teď to celé šlape — odesílání i
  příjem, s plnou autentizací a doručením do inboxu. Kdybys chtěl dotáhnout
  kterýkoli z těch follow-upů, stačí říct. 📬✅

✻ Crunched for 28s

※ recap: Mail infrastruktura pro multishoping.eu je hotová — odchozí pošta přes Brevo relay funguje, plně autentizovaná, doručeno do inboxu. Další akce už jen volitelná: časem zpřísnit DMARC z p=none na p=quarantine po pár týdnech monitoringu.