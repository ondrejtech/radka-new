@extends('layouts.app')

@section('content')
    <div class="page-content" role="main" aria-label="Hlavní obsah">
        <div class="content">
            <div class="container">
                <article class="detail" role="main">

                    <h1>Jak a kde reklamovat</h1>
                    <h2>Jak a kde reklamovat</h2>

                    <p>
                        <strong>Přidělení čísla AVZ (autorizace vadného zboží) je prvním krokem úspěšné
                            reklamace</strong><br>
                        Před odesláním reklamace je nutné zjistit, zda pro Váš vadný produkt existuje autorizovaný servis.
                        <a href="#">Seznam autorizovaných servisů
                            naleznete zde</a>,
                        případně si tuto informaci můžete ověřit z originálního záručního listu výrobku.
                        Pokud výrobek nemá autorizovaný servis nebo je neopravitelný, tak reklamaci řešte se
                        {{ config('company..name') }} přes webový formulář nebo na email:
                        <a href="mailto:{{ config('company..claim_email') }}">{{ config('company..claim_email') }}</a>.
                        Každé zboží určené na reklamaci musí mít vytvořeno AVZ číslo.
                    </p>

                    <h2>Možnosti vytvoření AVZ</h2>
                    <p>Online vytvoření AVZ</p>
                    <p>
                        Při zadání reklamace máte možnost si sami vytvořit číslo AVZ přes
                        <a href="#"><strong>"Chci reklamovat"</strong></a>
                    </p>

                    <h2>Jak správně zabalit a co zaslat společně s reklamací</h2>
                    <ul>
                        <li>Viditelně označit balík přiděleným AVZ číslem.</li>
                        <li>Pokud je v balíku více než jeden vadný produkt, musí být zásilka označena soupiskou
                            reklamovaného zboží,
                            tzn. na zásilku prosím napište seznam čísel reklamací AVZ. V případě, že tento seznam nebude
                            uveden, nelze
                            nárokovat rozdíly v obsahu zásilky.</li>
                        <li>Reklamované zboží prosím zašlete v kompletním balení. Výjimku tvoří produkty – základní desky,
                            grafické
                            karty, ty prosím zasílejte bez příslušenství.</li>
                        <li>V případě opakované reklamace prosím předložte i doklady o předchozích záručních opravách
                            provedených v
                            servisních střediscích.</li>
                        <li>Reklamované zboží musí obsahovat originální nálepky (sériové čísla, záruční přelepky aj.), které
                            nesmí být
                            poškozeny nebo odstraněny.</li>
                    </ul>

                    <h2>Možnosti zasílání reklamace</h2>
                    <ul>
                        <li>
                            <strong>Vyzvednutí reklamace naším smluvním přepravcem DPD</strong><br>
                            Nově Vám přinášíme možnost odvozu reklamace z Vaší společnosti, a to v hodnotě 70,- Kč za jeden
                            balík.
                            Svoz je prováděn přepravní společností DPD, která nabízí nejkvalitnější služby v oboru dopravy v
                            ČR.
                            Pokud Vás tato nabídka oslovila, neváhejte při vytvoření reklamace tuto možnost zvolit.
                        </li>
                    </ul>

                    <p><strong>Podmínky služby:</strong></p>
                    <ul>
                        <li>Reklamace pro zboží bez servisního partnera v ČR</li>
                        <li>Maximální hmotnost 31,5 kg</li>
                        <li>Volba dodací adresy totožná s adresou pro vyzvednutí reklamace</li>
                    </ul>

                    <p>
                        Po vytvoření reklamačního čísla AVZ je svoz automaticky vytvořen a bude následující den svezen pod
                        číslem daného
                        AVZ.
                    </p>

                    <ul>
                        <li>Zaslaní reklamace smluvními přepravci DPD, PPL, GEIS, Gebrüder Weiss, UPS</li>
                    </ul>

                    <p><strong>Reklamaci prosím zašlete na centrálu:</strong></p>
                    <ul>
                        <li>{{ config('company..name') }} - reklamace AVZ "číslo"</li>
                        <li>{{ config('company..address') }}</li>
                    </ul>

                    <h2>Vysvětlivky</h2>

                    <p><strong>Co znamená "číslo AVZ"</strong></p>
                    <p>
                        Číslo AVZ (autorizace vrácení zboží) je přiděleno každé reklamaci produktu, který je dále pod tímto
                        číslem veden
                        v IS {{ config('company..name') }}. Při vytvoření reklamace si číslo AVZ uschovejte – snadněji je
                        reklamace
                        dohledávána a kontrolována.
                    </p>

                    <p><strong>DOA reklamace</strong></p>
                    <p>
                        {{ config('company..name') }} Vám nabízí u produktů využívat tzv. DOA reklamaci. Jedná se o možnost ve
                        vybraném
                        časovém
                        horizontu získat automaticky nový kus nebo opravný daňový doklad. U většiny produktů nabízíme
                        uplatnit DOA
                        reklamaci
                        do 3 dnů. Vybrané IT značky mají tuto dobu prodlouženou – viz tabulka níže.
                    </p>
                    <ul>
                        <li>Reklamaci je třeba neprodleně po zavedení reklamace odeslat {{ config('company..name') }}
                            {{ config('company..address') }}, v jiném případě nebude nárok na DOA reklamaci uznán.</li>
                        <li>DOA reklamace zasílejte kompletní, mechanicky nepoškozené v původním a neznehodnoceném obalu.
                        </li>
                        <li>DOA reklamace se nevztahuje na spotřební materiál uvedených značek.</li>
                    </ul>

                    <h2>Dotaz k reklamaci</h2>
                    <p>Přes tento formulář kontaktujete reklamační oddělení:</p>

                    <form method="POST">
                        @csrf

                        <input type="hidden" name="TO" value="{{ config('company..claim_email') }}">
                        <input type="hidden" name="SUBJECT" value="AVZ Dotaz">

                        <div class="panel">
                            <div class="panel-table">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="form-base">
                                            <div class="form-base_item">
                                                <div class="form-group">
                                                    <label for="txtFullName">Jméno a příjmení</label>
                                                    <input type="text" name="full_name" id="txtFullName" maxlength="32"
                                                        class="form-control" required>
                                                    @error('full_name')
                                                        <span class="alert-error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-base_row">
                                                <div class="form-base_item">
                                                    <div class="form-group">
                                                        <label for="FROM">E-mail</label>
                                                        <input type="email" name="email" id="FROM" maxlength="50"
                                                            class="form-control" required>
                                                        @error('email')
                                                            <span class="alert-error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-base_item">
                                                    <div class="form-group">
                                                        <label for="txtPhone">Telefon</label>
                                                        <input type="text" name="phone" id="txtPhone" maxlength="32"
                                                            class="form-control" required>
                                                        @error('phone')
                                                            <span class="alert-error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="form-base">
                                            <div class="form-base_item">
                                                <div class="form-group">
                                                    <label for="txtBody">Zpráva</label>
                                                    <textarea name="message" id="txtBody" rows="4" cols="40" class="form-control" required></textarea>
                                                    @error('message')
                                                        <span class="alert-error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="buttons-area">
                            <button type="submit" class="btn btn--submit" style="width:160px;">Odeslat</button>
                        </div>

                    </form>

                    <h2>Podmínky DOA reklamace</h2>
                    <table class="list">
                        <tbody>
                            <tr>
                                <th align="left" width="300">Firma</th>
                                <th align="left" width="300">Popis</th>
                            </tr>
                            <tr class="licha">
                                <td>ACER</td>
                                <td>7 dní (5 pracovních) od data prodeje</td>
                            </tr>
                            <tr class="suda">
                                <td>Asus MB, VGA</td>
                                <td>7 dní (5 pracovních) od data prodeje koncovému zákazníkovi. Jako DOA bude vyřešeno po
                                    vyjádření
                                    servisu.</td>
                            </tr>
                            <tr class="licha">
                                <td>ASUS Notebook</td>
                                <td>30 dní od prodeje</td>
                            </tr>
                            <tr class="suda">
                                <td>Epson</td>
                                <td>30 dní od prodeje koncovému zákazníkovi</td>
                            </tr>
                            <tr class="licha">
                                <td>Fujitsu</td>
                                <td>14 dní od prodeje koncovému zákazníkovi</td>
                            </tr>
                            <tr class="suda">
                                <td>Fujitsu-Siemens</td>
                                <td>7 dní od data nákupu</td>
                            </tr>
                            <tr class="licha">
                                <td>GSM</td>
                                <td>3 dny od prodeje koncovému zákazníkovi</td>
                            </tr>
                            <tr class="licha">
                                <td>GSM</td>
                                <td>DOA – zařízení nesmí být používáno více než 10 min.</td>
                            </tr>
                            <tr class="suda">
                                <td>HP (tiskárny, LCD, Notebooky, PC, příslušenství pro notebooky a PC)</td>
                                <td>
                                    SWISS, Pavlovická 272/18, Olomouc, 77900. DOA reklamace v České republice = HW vady do
                                    30 dní od
                                    prodeje.
                                    Označte viditelně zásilku do servisního střediska červeným nápisem DOA. Zásilka musí pro
                                    uznání DOA
                                    reklamace obsahovat
                                    – kompletní balení, doklad o prodeji (nebo nákupní doklad), Vaše kontaktní údaje (tel. +
                                    mailový
                                    kontakt),
                                    přesný popis vady a název Vašeho distributora a způsob řešení, který požadujete.
                                    Na základě diagnostiky vady Vám bude vystaven protokol, kterým uplatníte výměnu za nový
                                    kus /
                                    vrácení peněz u svého distributora.
                                    V případě dotazů nás prosím kontaktujte na
                                    <a href="mailto:{{ config('company..claim_email') }}">{{ config('company..claim_email') }}</a>
                                </td>
                            </tr>
                            <tr class="licha">
                                <td>INTEL základní desky</td>
                                <td>30 dní od data prodeje</td>
                            </tr>
                            <tr class="suda">
                                <td>Konica Minolta</td>
                                <td>Nárok vyhodnotí servisní středisko Dileris v Brně <a
                                        href="http://www.dileris.cz/pobocky?kraj=jihomoravsky">Dileris</a></td>
                            </tr>
                            <tr class="licha">
                                <td>Lenovo</td>
                                <td>Registrace do 14 dnů od prodeje na koncového zákazníka <a
                                        href="http://www.lenovoservices.cz/servis-a-sluzby/nahlaseni-a-sledovani-zavady/stav-zakazky">servis</a>
                                </td>
                            </tr>
                            <tr class="suda">
                                <td>OKI</td>
                                <td>Nárok vyhodnotí servisní středisko Daruma <a
                                        href="http://www.edaruma.cz/kontakt/">servis</a></td>
                            </tr>
                            <tr class="licha">
                                <td>Packard Bell</td>
                                <td>7 dní (5 pracovních) od data prodeje</td>
                            </tr>
                            <tr class="suda">
                                <td>Samsung (kromě spotřební elektroniky)</td>
                                <td>3 dny od prodeje koncovému zákazníkovi, nebo 2 měsíce od nákupu (neoražený ZL)</td>
                            </tr>
                            <tr class="licha">
                                <td>Sony Vaio</td>
                                <td>10 dní od data prodeje koncovému zákazníkovi (je nutné vždy doložit doklad o prodeji
                                    koncovému
                                    zákazníkovi)</td>
                            </tr>
                            <tr class="suda">
                                <td>Tom Tom</td>
                                <td>14 dní od data prodeje koncovému zákazníkovi (je nutné vždy doložit doklad o prodeji
                                    koncovému
                                    zákazníkovi)</td>
                            </tr>
                            <tr class="licha">
                                <td>Toshiba</td>
                                <td>7 dní od prodeje koncovému zákazníkovi. Nárok nejprve vyhodnotí servisní středisko Český
                                    servis Brno
                                    a Praha: <a href="http://www.ceskyservis.cz/">www.ceskyservis.cz</a>, kde Vám bude
                                    přiděleno
                                    "Commercial Return"</td>
                            </tr>
                            <tr class="suda">
                                <td>Xerox (kromě spotřebního materiálu)</td>
                                <td>7 dní od prodeje koncovému zákazníkovi. Nárok nejprve vyhodnotí servisní středisko
                                    S&amp;T <a href="http://www.sntcz.cz">www.sntcz.cz</a></td>
                            </tr>
                        </tbody>
                    </table>

                    <p>
                        * HP: na některé produkty HP se vztahuje servis na místě přímo u zákazníka (onsite servis). Týká se
                        převážně
                        serverů, plotrů a některých stolních PC. Více informací u reklamačního pracovníka nebo produkt
                        managera.<br>
                        * Repair: reklamované zboží musí být zakoupené jako nové, tedy ne opravované (Repair), nebo jako
                        náhrada za
                        zboží již jednou reklamované.<br>
                        * Dárek: reklamované zboží nesmí být dárek/promo, aby byla uznána DOA reklamace.
                    </p>

                </article>
            </div>
        </div>
    </div>
@endSection
