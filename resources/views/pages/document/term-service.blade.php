@extends('layouts.app')

@section('content')
    <div class="page-content" role="main" aria-label="Hlavní obsah">
        <div class="contend">
            <div class="container">
                <h1 style="width: 80% !important; margin: auto; text-align: center; margin-top: 1%" class="page-title">{{ config('company.name') }}, vyhlašuje ke dni {{ config('company.vop_effective_date') }} všeobecné obchodní
                            podmínky závazné pro obchodní vztahy mezi {{ config('company.name') }}, a
                            obchodními partnery</h1>
                <!-- ====== I. ZÁKLADNÍ USTANOVENÍ ====== -->
                <div class="panel-bar">
                    <div class="panel-bar_body">
                        <h2 style="text-align: center" class="panel-bar_title">I. ZÁKLADNÍ USTANOVENÍ</h2>
                    </div>
                </div>

                <div class="">
                    <ul class="level-1 aside-nav_group aside-nav_group--level-1">
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            1. Tyto všeobecné obchodní podmínky (dále jen „VOP") upravují práva a povinnosti smluvních stran při prodeji zboží či produktů (dále jen „zboží") mezi společností {{ config('company.name') }}, se sídlem: {{ config('company.address') }}, IČ: {{ config('company.ico') }}, v postavení prodávajícího či dodavatele (dále jen „prodávající") a jejími obchodními partnery v postavení kupujících (dále jen „kupující").
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            2. VOP platí v tom rozsahu, v jakém si smluvní strany neupraví svá práva a povinnosti v kupní smlouvě či obdobné smlouvě (dále jen „KS") odchylně od těchto VOP.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            3. VOP se použijí výhradně pro vztahy v rámci podnikání, kdy prodávající i kupující vystupují jako podnikatelé v souvislosti s vlastní obchodní, výrobní nebo obdobnou činností či při samostatném výkonu svého povolání nebo pro vztahy s veřejnoprávními korporacemi, popřípadě právnickými osobami těmito korporacemi založenými.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            4. VOP musí být vykládány v souladu s obchodními zvyklostmi v daném odvětví, které jsou kupujícímu známé a pokud nikoliv, tak mu mohou být prodávajícím na základě písemné výzvy sděleny. V případě rozporu VOP a obchodních zvyklostí mají přednost VOP.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            5. VOP jsou nedílnou součástí veškerých nabídek na uzavření smlouvy, jejich akceptací a ostatních závazných právních jednání prodávajícího, která předchází samotnému uzavření KS a jsou rovněž nedílnou a závaznou součástí každé KS uzavřené mezi prodávajícím a kupujícím, a to vždy v platném a účinném znění. Prodávající nemá zájem být právně vázán za jiných podmínek, než jsou uvedeny ve VOP, není-li písemně dohodnuto něco jiného.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            6. Kupující při zahájení obchodních vztahů s prodávajícím musí prodávajícímu předložit informace o svém podnikatelském oprávnění a o své právní osobnosti (výpis z obchodního rejstříku, kopie živnostenského listu a číslo občanského průkazu u fyzických osob, osvědčení o registraci plátce daně apod.) a je povinen tyto údaje průběžně aktualizovat, dojde-li k jejich změně. V případě, že změna údajů nebude prodávajícímu bez zbytečného odkladu oznámena, je prodávající oprávněn požadovat náhradu způsobené újmy po kupujícím.
                        </li>
                    </ul>
                </div>

                <!-- ====== II. OCHRANA PRŮMYSLOVÝCH A AUTORSKÝCH PRÁV ====== -->
                <div class="panel-bar">
                    <div class="panel-bar_body">
                        <h2 style="text-align: center" class="panel-bar_title">II. OCHRANA PRŮMYSLOVÝCH A AUTORSKÝCH PRÁV</h2>
                    </div>
                </div>

                <div class="">
                    <ul class="level-1 aside-nav_group aside-nav_group--level-1">
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            1. Kupujícímu nevznikají žádná práva na používání registrovaných značek, obchodních názvů, firemních log a patentů prodávajícího či dalších firem, jejichž produkty se vyskytují v obchodní nabídce prodávajícího, pokud zvláštní písemnou smlouvou není stanoveno jinak.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            2. Kupujícímu nevznikají autorská práva k softwarovým produktům a není oprávněn do nich nijak zasahovat, kopírovat je anebo jinak je přetvářet.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            3. U softwarového zboží se za den dodání považuje den expedice zboží ze skladu prodávajícího prvnímu dopravci a tímto dnem je současně převedeno právo k užívání software na kupujícího.
                        </li>
                    </ul>
                </div>

                <!-- ====== III. OBCHODNÍ DISPOZICE ====== -->
                <div class="panel-bar">
                    <div class="panel-bar_body">
                        <h2 style="text-align: center" class="panel-bar_title">III. OBCHODNÍ DISPOZICE</h2>
                    </div>
                </div>

                <div class="">
                    <ul class="level-1 aside-nav_group aside-nav_group--level-1">
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            1. Jednotlivé KS se uzavírají na základě objednávek kupujícího. Objednávka může být uskutečněna písemně nebo emailem nebo telefonicky nebo osobně, anebo přímým zadáním objednávky kupujícím v informačním systému prodávajícího (dále jen „IS"), a to buď jednorázovým přihlášením kupujícího nebo prostřednictvím uživatelského účtu kupujícího. Každá objednávka musí obsahovat:
                            <ul class="level-2 aside-nav_group aside-nav_group--level-2" style="margin-top: 0.5rem;">
                                <li class="aside-nav_item">identifikaci kupujícího</li>
                                <li class="aside-nav_item">obchodní firmu (jméno či název), sídlo kupujícího (místo podnikání) IČ a DIČ</li>
                                <li class="aside-nav_item">kód zboží, který jednoznačně určuje předmět objednávky (číselné označení produktu podle druhu, uváděné v ceníku prodávajícího)</li>
                                <li class="aside-nav_item">množství požadovaných kusů zboží</li>
                                <li class="aside-nav_item">místo dodání zboží</li>
                            </ul>
                            <p style="margin-top: 0.5rem;">Pro zvýšení ochrany kupujícího se prodávající a kupující výslovně dohodli takto: Kupující má povinnost bez zbytečného odkladu po učinění objednávky zkontrolovat její správnost v IS, kde jsou všechny objednávky kupujícího (kupní smlouvy) zaznamenány, i když byly učiněny jinou formou (telefon, mail apod.). Kupující v případě, že shledá rozpor mezi skutečným stavem a stavem v IS, má povinnost kontaktovat písemně prodávajícího za účelem učinění nápravy do 24 hodin, jinak se má zato, že stav v IS odpovídá objednávce kupujícího.</p>
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            2. Prodávající si vyhrazuje právo odmítnout dodání zboží v případě, že výrobce či dodavatel prodávajícího přestanou zboží vyrábět či dodávat, nebo bude na trh uvedena nová verze produktu. V takovém případě je KS uzavřena pouze v rozsahu zboží, jehož dodání nebylo odmítnuto, není-li mezi stranami sjednáno něco jiného.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            3. Konečná výše kupní ceny bude vypočtena podle ceníku prodávajícího platného v den vystavení faktury za dodané zboží prodávajícím. Cena se může do dne vystavení faktury změnit v závislosti na změnách podmínek výrobce či dodavatele zboží nebo kurzových rozdílech.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            4. Kupující se zavazuje uhradit prodávajícímu kupní cenu nebo její zálohu v požadované výši ještě před dodáním zboží, nedohodnou-li se smluvní strany jinak.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            5. Prodávající vyzve kupujícího k zaplacení kupní ceny nebo zálohy na kupní cenu vystavením proforma faktury, která je mezi stranami KS považována za výzvu k zaplacení. Proforma faktura je splatná ve lhůtě splatnosti na účet prodávajícího, pokud není dohodnuto jinak.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            6. Objednané zboží je rezervováno pro kupujícího k dodání do dne splatnosti proforma faktury. V případě prodlení s placením proforma faktury není prodávající povinen dodat kupujícímu objednané zboží.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            7. Jestliže kupující neuhradí prodávajícímu částku uvedenou na proforma faktuře ani ve lhůtě 14 dní ode dne její splatnosti, je prodávající oprávněn považovat KS za zrušenou a objednávku kupujícího odmítnout. V tomto případě je kupující povinen zaplatit prodávajícímu za porušení jeho smluvní povinnosti uhradit řádně a včas částku vyplývající z KS smluvní pokutu (stornovací poplatek) ve výši 10 % z ceny objednaného a neodebraného zboží, která je uvedena na potvrzení objednávky. Toto ujednání o smluvní pokutě nemá vliv na právo prodávajícího na náhradu způsobené újmy.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            8. Za den úhrady je považován den, kdy je příslušná peněžní částka připsána na bankovní účet prodávajícího. Prodávající vystaví za dodávané zboží kupujícímu fakturu – daňový doklad, dodací list zašle kupujícímu, zpravidla elektronicky. Na této faktuře bude uvedena dlužná částka, kterou je kupující povinen za dodání zboží prodávajícímu uhradit. Místo dodání zboží je určeno kupujícím. V případě, že bude místem dodání sídlo třetího subjektu, který si zboží prostřednictvím kupujícího objednal, není tím dotčena povinnost kupujícího zaplatit prodávajícímu kupní cenu za zboží.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            9. Kupující případně odpovědná osoba v místě dodání zboží je povinna řádně dodávané zboží převzít. Pokud si kupující dodávané zboží nepřevezme od přepravce nebo přepravci zboží řádně nezaplatí nebo zboží se specifikací „osobní odběr" nepřevezme od prodávajícího, je prodávající oprávněn od KS odstoupit. V případě porušení povinnosti kupujícího řádně dodávané zboží převzít nebo jej zaplatit přepravci, je kupující povinen zaplatit prodávajícímu smluvní pokutu ve výši 10 % z ceny zboží, které nebylo kupujícím převzato či zaplaceno. Odstoupení od KS se provádí a nastává okamžikem zaslání vystaveného dobropisu prodávajícího k předmětnému zboží na uváděnou adresu kupujícího dle článku I. odst. 6 VOP. Vystavení dobropisu je považováno za odstoupení prodávajícího od KS ve smyslu tohoto odstavce VOP.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            10. Prodávající si k dodávanému zboží vyhrazuje vlastnické právo do okamžiku řádného uhrazení celé kupní ceny za toto zboží.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            11. Pokud kupující vystaví objednávku na zboží, které není běžně prodáváno nebo na výjimečně velké množství zboží, může být o tomto obchodním případu sjednána zvláštní dohoda.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            12. Práva a povinnosti ve smyslu článku III. VOP platí přiměřeně také při účtování a placení služeb při dodání zboží a nákladů s nimi spojených (např. dopravné, bankovní poplatky, atp.). Jejich úhradu provede kupující na základě faktury – daňového dokladu vystavené prodávajícím.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            13. Náklady na dopravu zboží ze skladu prodávajícího hradí kupující, není-li dohodnuto jinak.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            14. Kupující je povinen zboží dodané prodávajícím prohlédnout bez zbytečného odkladu po přechodu nebezpečí škody na zboží na kupujícího, to je při převzetí zboží od prodávajícího a v případě odeslání zboží, po jeho předání dopravcem na dohodnutém místě a není-li místo určeno, po předání zboží dopravci kupujícího. Kupující je povinen zboží prohlédnout bez zbytečného odkladu, jakmile se zboží dostane do jeho držení. V případě dodání zboží kupujícímu prostřednictvím dopravce, je kupující povinen při převzetí zboží před podpisem soupisu dodávaného zboží zkontrolovat údaje uvedené na přepravním listu. Pokud údaje nesouhlasí se skutečností, je porušen či jinak znehodnocen originální obal (kartonová krabice u balíkových zásilek, strečová fólie u paletových zásilek) nebo originální jedinečná páska nebo u paletových zásilek nesouhlasí počet balíků na paletě, je kupující povinen tuto skutečnost uvést na přepravní list dopravce a sepsat s ním zápis o škodě, případně zboží odmítnout jako celek. O této skutečnosti je kupující povinen informovat ihned prodávajícího.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            15. Kupující je povinen zkontrolovat věcný obsah zásilky dodávaného zboží dle přiloženého dodacího listu. Pokud obsah zásilky dodávaného zboží neodpovídá dodacímu listu, je kupující povinen dané rozdíly uvést na přepravním listu a nechat si tuto skutečnost potvrdit dopravcem. Pokud dopravce odmítne umožnit kontrolu obsahu zásilky dodávaného zboží, je kupující povinen dodávku odmítnout jako celek. Podpisem dokladu o doručení kupující potvrzuje řádné dodání objednaného zboží a jeho převzetí.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            16. Prohlášení o splnění podmínek uvedení obalu na trh je v souladu se zákonem č. 477/2001 Sb., o obalech, ve znění pozdějších předpisů a je k dispozici k nahlédnutí kupujícímu na elektronické adrese prodávajícího <a href="{{ config('company.url') }}">{{ config('company.url') }}</a>. Prodávající prohlašuje, že při uvádění zboží na trh plní povinnosti zákona č. 22/1997 Sb., o technických požadavcích na výrobky, ve znění pozdějších předpisů, přičemž prohlášení o shodě ve smyslu ust. § 13 tohoto zákona je k nahlédnutí k dispozici kupujícímu na elektronické adrese prodávajícího <a href="{{ config('company.url') }}">{{ config('company.url') }}</a>.
                        </li>
                    </ul>
                </div>

                <!-- ====== IV. ELEKTRONICKÁ FORMA OBJEDNÁVEK ====== -->
                <div class="panel-bar">
                    <div class="panel-bar_body">
                        <h2 style="text-align: center" class="panel-bar_title">IV. ELEKTRONICKÁ FORMA OBJEDNÁVEK, ELEKTRONICKÝ PODPIS</h2>
                    </div>
                </div>

                <div class="">
                    <ul class="level-1 aside-nav_group aside-nav_group--level-1">
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            1. Při vyhotovení elektronické objednávky prostřednictvím svého uživatelského účtu (defaultního účtu) v IS je kupující povinen přihlásit se do IS zadáním svého jména a hesla, které mu na jeho žádost přidělí prodávající, nebo si heslo zvolí kupující sám při registraci v IS, přičemž jméno a heslo slouží k ověření identity kupujícího. Kupující je oprávněn zřídit sám anebo prostřednictvím prodávajícího dalším osobám k defaultnímu účtu podúčty, kterými se tyto osoby za kupujícího přihlašují do IS a za kupujícího zadávají v IS objednávky. Objednávky učiněné v IS prostřednictvím defaultního účtu nebo prostřednictvím podúčtů jsou pro kupujícího závazné.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            2. Kupující si v souvislosti s přihlašováním do IS může aktivovat více faktorové přihlášení jak k defaultnímu účtu tak i k podúčtům kupujícího, prostřednictvím kterého vyhotovuje elektronické objednávky (MFA přihlášení). K MFA přihlášení se používá email, mobilní telefonní číslo anebo jiné přihlašovací údaje nebo prostředky kupujícího (dále jen „přihlašovací údaje kupujícího"), které si kupující zvolí dle Podmínek pro přihlašování MFA k uživatelskému účtu v IS, které stanoví ostatní podmínky pro MFA přihlášení. Souhlasem s aktivací MFA přihlášení kupující stvrzuje, že se s těmito podmínkami seznámil a že jsou pro kupujícího závazné.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            3. Kupující je povinen řádně zabezpečit utajení jména, hesla, emailu, čísla mobilního telefonu a ostatních přihlašovacích údajů kupujícího, které používá při přihlašování do IS a odpovídá za jejich stav a zneužití. Změnu emailu, čísla mobilního telefonu a/nebo ostatních přihlašovacích údajů kupujícího, jako přihlašovacích údajů k defaultnímu účtu do IS, provádí prodávající na základě písemného pokynu kupujícího zaslaného prodávajícímu prostřednictvím datové schránky, pokud se prodávající s kupujícím nedohodnou jinak. Změnu přihlašovacích údajů k podúčtům provádí kupující sám anebo prostřednictvím prodávajícího na základě pokynu kupujícího.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            4. Prostřednictvím elektronického objednávkového systému se objednávka automaticky zanese do IS. IS pro příjem objednávek v elektronické podobě je v nepřetržitém provozu. Kupující odpovídá za stav objednávek v IS, včetně objednávek vytvořených prostřednictvím osob, kterým kupující poskytl přihlašovací údaje kupujícího nebo zřídil podúčty k defaultnímu účtu, anebo v případě, že kupující (uživatelé podúčtů kupujícího) přihlašovací údaje řádně nezabezpečil.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            5. Pro účely KS a těchto VOP je elektronická forma objednávky považována za písemnou formu právního jednání a mají pro obě strany tutéž závaznost.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            6. Kupující prohlašuje, že zadáním elektronické objednávky je svou objednávkou vázán. Kupující má možnost změnit nebo stornovat elektronickou objednávku pouze dohodou stran, a to pouze v případě, že zboží nebylo prodávajícím vyfakturováno.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            7. Za podmínek stanovených obecně závaznými právními předpisy, mohou smluvní strany při uzavírání obchodních případů a uplatňování vzájemných práv a povinností používat elektronický podpis.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            8. Kupující souhlasí ve smyslu zákona č. 480/2004 Sb., o některých službách informačních společností, s využitím svého elektronického kontaktu pro potřeby šíření obchodních sdělení prodávajícího. Tento souhlas může kupující odmítnout oznámením o odmítnutí souhlasu adresovaným prodávajícímu na jeho elektronickou adresu.
                        </li>
                    </ul>
                </div>

                <!-- ====== V. SPOLEČNÁ UJEDNÁNÍ ====== -->
                <div class="panel-bar">
                    <div class="panel-bar_body">
                        <h2 style="text-align: center" class="panel-bar_title">V. SPOLEČNÁ UJEDNÁNÍ</h2>
                    </div>
                </div>

                <div class="">
                    <ul class="level-1 aside-nav_group aside-nav_group--level-1">
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            1. Veškerá právní jednání, pro která jsou závazná tyto VOP, jakožto i práva a povinnosti vyplývající z VOP a KS či s nimi související, se řídí zákonem č. 89/2012 Sb., občanský zákoník.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            2. Veškeré právní spory týkající se práv a povinností vyplývajících či jinak souvisejících s KS a těmito VOP budou řešeny před věcně a místně příslušnými soudy dle sídla prodávajícího, nebude-li mezi stranami písemně dohodnuto něco jiného.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            3. K prominutí dluhu mezi smluvními stranami nedojde v případě, že jedna ze smluvních stran vydá druhé smluvní straně kvitanci nebo mu vrátí dlužní úpis, aniž by došlo ke splnění dluhu. V případě, že je kvitance vydána na jistinu pohledávky, nevztahuje se na příslušenství pohledávky.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            4. Smluvní strany na sebe přebírají nebezpečí změny podstatných okolností po uzavření smlouvy ve smyslu ust. § 1765 odst. 2 občanského zákoníku.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            5. Kupující nesmí postoupit na třetí osobu jakékoliv pohledávky, které mu na základě KS či v souvislosti s ní vzniknou.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            6. Žádný projev smluvních stran učiněný při jednání o smlouvě ani projev učiněný po uzavření smlouvy nesmí být vykládán v rozporu s výslovnými ujednáními těchto VOP a uzavřené smlouvy a nezakládá žádný závazek žádné smluvní strany.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            7. Prodávající je oprávněn od uzavřené KS odstoupit v případě, že:
                            <ul class="level-2 aside-nav_group aside-nav_group--level-2" style="margin-top: 0.5rem;">
                                <li class="aside-nav_item">a) kupující vstoupil do likvidace</li>
                                <li class="aside-nav_item">b) proti kupujícímu bylo zahájeno insolvenční řízení</li>
                            </ul>
                            <p style="margin-top: 0.5rem;">Ve všech případech, kdy je prodávající v souladu se zákonem, KS a těmito VOP oprávněn od smlouvy odstoupit, je prodávající oprávněn od této smlouvy odstoupit bez časového omezení ve vztahu k okamžiku, kdy k důvodu, pro který prodávající může od smlouvy odstoupit, došlo.</p>
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            8. Smluvní strany tímto v souladu s ust. § 630 občanského zákoníku sjednávají obecnou promlčecí lhůtu pro práva vyplývající z KS či z jejího porušení v délce trvání čtyř (4) let.
                        </li>
                    </ul>
                </div>

                <!-- ====== VI. ZÁVĚREČNÁ USTANOVENÍ ====== -->
                <div class="panel-bar">
                    <div class="panel-bar_body">
                        <h2 style="text-align: center" class="panel-bar_title">VI. ZÁVĚREČNÁ USTANOVENÍ</h2>
                    </div>
                </div>

                <div style="margin-bottom: 1%" class="">
                    <ul class="level-1 aside-nav_group aside-nav_group--level-1">
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            1. Tyto VOP jsou závazné pro smluvní vztahy uzavírané společností {{ config('company.name') }}, ode dne jejich vyhlášení. {{ config('company.name') }} si vyhrazuje právo VOP jednostranně změnit při změně příslušných právních norem, jakož i obchodní politiky společnosti. Tuto změnu a její účinnost společnost vyhlásí nejméně jeden měsíc předem, a to zveřejněním na elektronické adrese <a href="{{ config('company.url') }}">{{ config('company.url') }}</a> a bude-li to možné, oznámí tuto změnu také prostřednictvím e-mailové zprávy všem známým obchodním partnerům. Kupující či jiný obchodní partner má právo změnu VOP odmítnout a KS z tohoto důvodu vypovědět nejpozději do nabytí účinnosti těchto změněných VOP, a to s tříměsíční výpovědní dobou, která začne plynout od prvního dne měsíce následujícího po doručení výpovědi prodávajícímu. Nebude-li do okamžiku nabytí účinnosti změněných VOP KS vypovězena, platí, že kupující se změnou VOP souhlasí.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            2. Bude-li jedno nebo více výše uvedených ustanovení VOP neplatné, zdánlivé, neúčinné nebo jinak neproveditelné a/nebo se takovými v průběhu trvání KS stanou, nebude tím dotčena platnost, účinnost či proveditelnost ostatních ujednání VOP. Smluvní strany tímto sjednávají, že neplatné, zdánlivé, neúčinné či jinak neproveditelné ustanovení VOP nahradí jinou platnou, účinnou nebo proveditelnou úpravou, která se nejvíce blíží hospodářskému účelu neplatného, zdánlivého, neúčinného či jinak neproveditelného ustanovení.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            3. Kupující prohlašuje, že se pečlivě seznámil s obsahem KS a těchto VOP, obsah KS s ním byl projednán, prohlašuje, že měl možnost provést změny návrhu smlouvy předložené prodávajícím a pokud takové vznesl, došlo o nich k dohodě, jsou věrně a výstižně zachyceny v konečné verzi KS podepsané smluvními stranami. Ve vztahu k formulacím a ujednáním KS včetně těchto VOP a všech nedílných součástí (příloh) pak prohlašuje, že těmto rozumí, chápe jejich význam, neobsahují pro kupujícího překvapivá ujednání a je si vědom všech práv a povinností, jež z KS a/nebo VOP, případně z porušení smlouvy a/nebo VOP stranám vyplývají.
                        </li>
                        <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                            4. Tyto VOP jsou platné a účinné od {{ config('company.vop_effective_date') }}.
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
@endsection

