@extends('layouts.app')

@section('content')
    <main class="page-content" role="main" aria-label="Hlavní obsah">
        <div class="content">
            <div class="container">

                <div class="breadcrumbs no-print" role="navigation" aria-label="Drobečková navigace">
                    <div class="breadcrumbs_in">
                        <a class="breadcrumbs_item" href="{{ url('/') }}">
                            <i class="icon-home breadcrumbs_item_icon"></i>
                            <span class="breadcrumbs_item_label">Úvodní stránka</span>
                        </a>
                    </div>
                </div>

                <article class="detail" role="main">

                    <h1>Reklamační řád {{ config('company.name') }}</h1>

                    <div align="justify">

                        <h2>{{ config('company.name') }} vyhlašuje s platností od
                            <font color="red">{{ config('company.vop_effective_date') }}</font> REKLAMAČNÍ ŘÁD
                        </h2>

                        <h3>platný pro všechny obchodní vztahy mezi {{ config('company.name') }} a obchodními partnery</h3>

                        <br><br>

                        <p>
                            Tento Reklamační řád je nedílnou součástí všech Kupních smluv, Smluv o obchodních vztazích
                            (dealerských smluv) a jiných dodavatelských smluv (dále jen „smlouva o obchodních vztazích"),
                            ve kterých společnost {{ config('company.name') }}, se sídlem {{ config('company.address') }},
                            IČO: {{ config('company.ico') }}, vystupuje v postavení prodávajícího (dále jen „prodávající"),
                            který dodává zboží svým obchodním partnerům v postavení kupujících (dále jen „kupující").
                            Reklamační řád stanovuje kupujícímu pro případ reklamace vad zboží a servisních oprav zboží
                            dodaného prodávajícím (dále jen „zboží"), následující postup:
                        </p>

                        <br>

                        <h4>I.</h4>
                        <p>
                            Kupující je povinen zboží dodané prodávajícím prohlédnout a přesvědčit se o jeho vlastnostech
                            a množství bez zbytečného odkladu po přechodu nebezpečí škody na zboží. Kupující je povinen
                            zboží prohlédnout bez zbytečného odkladu, jakmile se zboží dostane do jeho držení. Při převzetí
                            zásilky od dopravce je kupující povinen vždy okamžitě zkontrolovat, zda obsah zásilky odpovídá
                            kupní smlouvě, co do množství a druhu zboží, přičemž se vychází vždy z údajů, jež jsou zaznamenány
                            v informačním systému prodávajícího, dále také jen „IS". Pokud je při převzetí zásilky od dopravce
                            znehodnocen nebo porušen originální obal je kupující povinen při podepisování dokladu o převzetí
                            zásilky takovou skutečnost uvést na tento doklad, který podepisuje. Při řešení všech škodových
                            událostí, které nastanou v případech odeslání zboží prostřednictvím dopravce, je třeba postupovat
                            podle platných obchodních podmínek tohoto dopravce. Pokud kupující zjistí mechanické poškození
                            zboží, bez odkladu kontaktuje dopravce a sepíše (i dodatečně) zápis o škodě. Poté bez zbytečného
                            odkladu musí kupující kontaktovat reklamační oddělení prodávajícího, kde bude reklamace zboží na
                            základě zápisu o škodě dále řešena. Nedodrží-li kupující postup podle předchozí věty, jdou případné
                            škody k jeho tíži.
                        </p>

                        <h4>II.</h4>
                        <p>
                            Jestliže kupující zboží neprohlédne nebo jinak nezajistí, aby bylo zboží prohlédnuto při jeho převzetí,
                            může uplatnit nároky z vad zjistitelných při této prohlídce, jen když prokáže, že tyto vady mělo zboží
                            již v době jeho převzetí. Vady, které existovaly při převzetí zboží, avšak projevily se až později, je
                            kupující povinen reklamovat u prodávajícího bez zbytečného odkladu poté, kdy tyto vady mohly být
                            zjištěny při vynaložení odborné péče při prohlídce, kterou byl povinen uskutečnit dle bodu I.
                        </p>

                        <h4>III.</h4>
                        <p>
                            Kupující musí prodávajícímu bezodkladně po provedení prohlídky dodaného zboží oznámit všechny
                            vady zboží, které zjistil. Při zjištění rozdílu v množství nebo druhu zboží mezi údaji v IS a skutečně
                            dodaným zbožím, je nutno podat ihned zprávu o vadném plnění prodávajícímu, jinak platí, že bylo
                            zboží dodáno řádně ve stanoveném množství, druhu i kvalitě.
                        </p>

                        <h4>IV.</h4>
                        <p>
                            Výše uvedená pravidla pro reklamaci platí shodně jak pro reklamaci vad dodaného zboží, za něž
                            prodávající odpovídá ze zákona, tak pro reklamaci vad zboží, za jehož jakost prodávající převzal
                            záruku. K reklamaci je nutné ve všech případech předložit doklad o zaplacení a dodání zboží, jehož
                            vady jsou reklamovány.
                        </p>

                        <h4>V.</h4>
                        <p>
                            Práva z vadného plnění musí kupující uplatnit nejpozději do uplynutí doby stanovené v zákoně,
                            není-li v Reklamačním řádu uvedeno něco jiného. V případě reklamace vad zboží, za jehož jakost
                            převzal prodávající záruku, musí být vady reklamovány nejpozději do konce záruční lhůty.
                        </p>

                        <h4>VI.</h4>
                        <p>
                            Kupující předloží prodávajícímu v reklamačním místě (pouze při osobní reklamaci), kterým je pouze
                            reklamační oddělení prodávajícího, na adrese {{ config('company.address') }}, doklady o prodeji zboží
                            vystavené prodávajícím kupujícímu – fakturu, předávací protokol, záruční list aj.
                        </p>

                        <h4>VII.</h4>
                        <p>
                            Kupující při převzetí zboží a jeho prohlídce provádí rovněž kontrolu sériových čísel zboží (produktů)
                            a čísel vyznačených na záručním listě, a pokud zjistí rozdíl, musí kontaktovat ihned prodávajícího.
                            Při nedodržení tohoto postupu se kupující přijímá riziko, že vzhledem k rozdílu mezi sériovým číslem
                            zboží (produktu) a číslem uvedeným na záručním listě nebude jeho reklamace uznána.
                        </p>

                        <h4>VIII.</h4>
                        <p>
                            Jestliže kupující požaduje v rámci reklamace odstranění vad výměnou za jiné zboží (produkty) nebo
                            odstranění vad opravou či slevou z kupní ceny, je vždy povinen předložit prodávajícímu při reklamaci:
                            kompletní zboží v originálním obalu (při nedodržení tohoto požadavku nese kupující plnou zodpovědnost
                            za škodu vzniklou na zboží při přepravě a manipulaci při vyřizování reklamace z důvodu neoriginálního
                            obalu), neporušené originální nálepky (sériové čísla, záruční přelepky aj.), které nesmí být poškozeny
                            nebo odstraněny. Díly citlivé na elektrostatický náboj musí být opatřeny antistatickým obalem. Při
                            nedodržení některého z požadavků uvedených v tomto článku nebude zboží k reklamaci přijato a bude
                            zasláno kupujícímu zpět. Pokud nebude možno řádně uplatněnou a uznanou reklamaci vyřídit
                            z objektivních důvodů výměnou za jiné zboží, prodávající kupujícímu poskytne finanční náhradu za
                            reklamované zboží formou opravného daňového dokladu. Způsob vyřízení reklamace zboží vyplývá
                            z reklamačních podmínek zboží, jež jsou stanovena dodavatelem zboží prodávajícího. Prodávající je
                            pouze distributorem zboží a odpovídá kupujícímu za zboží pouze ve stejném rozsahu, v jakém vyhoví
                            nárokům z vad zboží dodavatel zboží prodávajícího. Prodávající neodpovídá za vady zboží a není
                            povinen vyhovět nárokům kupujícího z vad zboží, pokud těmto nárokům nevyhoví dodavatel zboží
                            prodávajícího. Kupující se tímto práv z vadného plnění, která mu vzniknou za prodávajícím, a která
                            nebudou dodavatelem prodávajícího uznány jako oprávněné, výslovně vzdává. Nároky kupujícího není
                            prodávající povinen plnit, pokud tento nárok prodávajícího ke stejnému zboží neplní dodavatel zboží
                            prodávajícího.
                        </p>

                        <h4>IX.</h4>
                        <p>
                            Kupující má možnost zboží reklamovat osobně, vždy od 9:00 do 16:30 hodin v reklamačním oddělení
                            prodávajícího na adrese: {{ config('company.address') }}. Oznámení o zjištěných vadách musí kupující
                            učinit u prodávajícího písemně a ve lhůtách uvedených v tomto Reklamačním řádu. V písemném
                            oznámení musí kupující uvést zjištěné vady, tj. musí uvést, o jaké vady se jedná a jak se projevují.
                            V písemném oznámení o vadách musí kupující uvést i nárok, který v důsledku výskytu vad uplatňuje.
                        </p>

                        <h4>X.</h4>
                        <p>
                            Kupující může uplatnit reklamaci v IS prodávajícího, e-mailem
                            (<a href="mailto:{{ config('company.claim_email') }}">{{ config('company.claim_email') }}</a>),
                            faxem nebo osobně. Nejprve musí kupující vyplnit a uplatnit žádost autorizace vracení zboží
                            (dále jen „AVZ"). Při uplatnění žádosti AVZ se kupující řídí pokyny v IS prodávajícího. Uplatňuje-li
                            kupující reklamaci prostřednictvím e-mailu nebo faxu uvede v žádosti o AVZ údaje o vadném produktu,
                            čísle faktury, kódu produktu, sériovém čísle a popisu závady.
                        </p>

                        <h4>XI.</h4>
                        <p>
                            Prodávající se zavazuje nejpozději do 24 hodin po obdržení žádosti o AVZ, mailem nebo faxem sdělit
                            kupujícímu symbol AVZ, který mu byl přidělen. Přidělené číslo AVZ kupující následně VIDITELNĚ vyznačí
                            na zasílaný balík. Pokud kupující zasílá v balíku více než jednu reklamaci, musí přiložit i seznam
                            zasílaných reklamací – SOUPISKU, v případě, že ji nepřiloží, NELZE později nárokovat rozdíly v obsahu
                            zásilky. Pokud zašle kupující k reklamaci zboží bez přiděleného AVZ čísla, je prodávající oprávněn toto
                            zboží vrátit zpět kupujícímu na jeho náklady. Po přidělení čísla AVZ zašle kupující prodávajícímu zboží
                            spediční firmou. Kupující zašle prodávajícímu reklamované zboží na své náklady. Opravené nebo
                            vyměněné zboží zašle prodávající kupujícímu na vlastní náklady. Pokud nebude na přidělené číslo AVZ
                            zasláno do 14 dní od jeho vystavení vadné zboží, je nutno zažádat o nové číslo AVZ (původní číslo AVZ
                            je po této lhůtě automaticky vyřazeno z evidence).
                        </p>

                        <h4>XII.</h4>
                        <p>
                            Prodávající poskytuje na vybrané druhy zboží (produktů) záruku za jakost v délce trvání uvedené
                            v článku XIV. Reklamačního řádu, kterou přejímá písemně závazek, že dodané zboží bude po stanovenou
                            dobu způsobilé pro použití k obvyklému účelu, či že si zachová obvyklé vlastnosti. Záruční doba začíná
                            plynout dnem převzetí zboží kupujícím od prodávajícího (při osobním nákupu) anebo dnem převzetí
                            zboží kupujícím od dopravce anebo dnem, kdy kupující měl zboží od dopravce převzít, ale z důvodů
                            ležících na jeho straně zboží nepřevzal. U zboží charakteru software se záruka za jakost vztahuje
                            výhradně na fyzickou nečitelnost médií. Okamžikem odstranění ochranných prostředků (adjustační
                            folie, pečetí aj.) se kupující stává oprávněným licenčním uživatelem produktu a zboží již nelze vrátit
                            prodávajícímu. Součástí každého zboží (produktu) je ochranný obal, který nesmí být při reklamaci
                            poškozen; v opačném případě nelze reklamaci realizovat. V těchto případech je nutná individuální
                            dohoda s prodávajícím, jehož pověření pracovníci reklamačního oddělení stanoví, zda je možno na
                            zboží poskytnout bezplatný záruční servis či nikoliv.
                        </p>

                        <h4>XIII.</h4>
                        <p>
                            Prodávající není povinen reklamovat vady zboží a/nebo nahradit újmu způsobenou provozem zboží,
                            funkčními vlastnostmi zboží ani újmu způsobenou neodborným používáním zboží, stejně jako újmu
                            způsobenou vnějšími událostmi a chybnou manipulací. Na vady tohoto původu se nevztahuje ani
                            poskytnutá záruka za jakost.
                        </p>

                        <h4>XIV.</h4>
                        <p>
                            Prodávající poskytuje záruku za jakost na zboží v délce, která je uvedena v záručním listě a která
                            vychází ze záruční doby poskytované výrobcem. Do záruční doby se nepočítá doba, která uplyne od
                            uplatnění reklamace do jejího vyřízení. Záruční doba zboží opraveného případně vyměněného
                            v reklamačním řízení dobíhá (pokračuje) podle záruční doby původního zboží. Toto se týká i případů,
                            kdy došlo v rámci reklamačního řízení k vyřízení reklamace výměnou zboží s jiným sériovým číslem.
                            Je-li předmětem kupní smlouvy zboží označené při prodeji jako zlevněné nebo použité, poskytuje se
                            záruka za jakost jen v případech výslovně uvedených.
                        </p>

                        <h4>XV.</h4>
                        <p>
                            Prodávající má vůči kupujícímu právo na náhradu skutečně vzniklých servisních a organizačních nákladů
                            spojených s manipulací a testováním zboží ve výši 500,- Kč bez DPH za jeden případ, jestliže:
                        </p>
                        <ol>
                            <li>zboží je k reklamaci zasláno bez přiděleného AVZ čísla a/nebo</li>
                            <li>při testování se neprojeví popisovaná vada a/nebo</li>
                            <li>zboží bude shledáno plně funkčním a/nebo</li>
                            <li>záruka na zboží již uplynula a/nebo</li>
                            <li>závada byla způsobena nevhodným zacházením se zbožím.</li>
                        </ol>
                        <p>
                            V případech, kdy skutečně vynaložené výdaje budou vyšší, je kupující povinen zaplatit prodávajícímu
                            skutečně vynaložené náklady.
                        </p>

                        <h4>XVI.</h4>
                        <ol>
                            <li>
                                Uplatnit nároky z práv z vadného plnění musí kupující bez zbytečného odkladu, není-li výše
                                v Reklamačním řádu uvedeno něco jiného. Toto právo se považuje za řádně uplatněné jen tehdy,
                                pokud kupující prodávajícímu podá ihned po převzetí zásilky od dopravce zprávu o vadách dodávky,
                                není-li výše v Reklamačním řádu uvedeno něco jiného. Vyměněné zboží bude v případě oprávněné
                                reklamace zasláno zákazníkovi zpět v co nejkratším možném termínu po obdržení vadného zboží
                                od zákazníka.
                            </li>
                            <li>
                                V případě, že dojde k poruše zboží v záruční době, má kupující nárok na bezplatnou opravu zboží.
                                V případě, že bude zboží neopravitelné, má právo na náhradní produkt. Délka záruční doby
                                jednotlivého zboží je uvedena v záručních listech, které jsou nedílnou součástí dodávky zboží.
                                Opravené zboží bude zasláno zákazníkovi zpět v co nejkratším možném termínu po obdržení vadného
                                zboží od zákazníka.
                            </li>
                            <li>
                                Délka záruční doby a způsob řešení reklamací jednotlivých produktů jsou specifikovány na
                                <a href="{{ config('app.url') }}">{{ config('app.url') }}</a>.
                            </li>
                            <li>
                                V případě, že zboží neobsahuje záruční list, je záruční doba určena dle specifikace záručních dob na
                                <a href="{{ config('app.url') }}">{{ config('app.url') }}</a>. Pokud součástí dodávky zboží nebyl
                                záruční list a zároveň záruční doba zboží není uvedena na
                                <a href="{{ config('app.url') }}">{{ config('app.url') }}</a>, vztahuje se na produkt záruční doba
                                v délce 6ti měsíců.
                            </li>
                            <li>
                                Náklady související s opravou zboží po záruční době, jež bylo zakoupeno u prodávajícího, je kupující
                                povinen zaplatit prodávajícímu.
                            </li>
                            <li>
                                Záruka za jakost se nevztahuje na vady zboží vzniklé:
                                <ul>
                                    <li>
                                        (i) použitím neautorizovaného software a spotřebního materiálu, počítačovými viry, používáním
                                        zboží v pracovních podmínkách, které neodpovídají svou teplotou, prašností, vlhkostí, chemickými
                                        a mechanickými vlivy pracovním podmínkám kancelářského prostředí, nadměrným zatěžováním
                                        zboží a/nebo
                                    </li>
                                    <li>
                                        (ii) používáním zboží způsobem, který je v rozporu s dokumentací či obecnými zásadami, neodbornou
                                        instalací, neodborným obsluhováním či zanedbanou péčí o zboží, zapojením do elektrické sítě
                                        neodpovídající příslušné ČSN, vyšší mocí jako jsou například meteorologické vlivy (především po
                                        zásahu blesku apod.).
                                    </li>
                                </ul>
                            </li>
                        </ol>

                        <br>

                        <h3>Závěrečná ustanovení</h3>
                        <p>
                            Tento Reklamační řád ruší všechna předchozí ustanovení o vyřizování reklamací a záruce za jakost
                            s platností od {{ config('company.vop_effective_date') }}. Prodávající si vyhrazuje právo Reklamační řád
                            jednostranně změnit při změně příslušných právních norem, jakož i obchodní politiky společnosti.
                            Tuto změnu a její účinnost prodávající vyhlásí nejméně jeden měsíc předem, a to zveřejněním na
                            elektronické adrese <a href="{{ config('app.url') }}">{{ config('app.url') }}</a> a bude-li to možné,
                            oznámí tuto změnu také prostřednictvím emailové zprávy všem známým obchodním partnerům.
                            Kupující či jiný obchodní partner má právo změnu Reklamačního řádu odmítnout a smlouvu o obchodních
                            vztazích z tohoto důvodu vypovědět nejpozději do nabytí účinnosti tohoto Reklamačního řádu, a to
                            v 15ti denní výpovědní době, která začne běžet okamžikem doručení výpovědi prodávajícímu. Nebude-li
                            do okamžiku nabytí účinnosti změněného Reklamačního řádu smlouva vypovězena, platí, že kupující se
                            změnou Reklamačního řádu souhlasí.
                        </p>

                        <br><br>

                        {{-- <a href="{{ asset('files/reklamacni_rad.pdf') }}" target="_blank">Reklamační řád v PDF</a> --}}

                    </div>

                    <br>

                </article>

            </div>
        </div>
    </main>
@endsection
