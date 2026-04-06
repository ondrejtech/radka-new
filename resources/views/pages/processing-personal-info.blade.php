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

                    <h1>GDPR:</h1>
                    <h1>Souhlas s marketingovým účelem zpracování osobních údajů</h1>

                    <p>
                        Uživatel souhlasí, že ho může provozovatel kontaktovat za účelem marketingu produktů a služeb,
                        zejména zasíláním obchodních sdělení e-mailem, telefonicky a/nebo poštou, kdy může uživatel
                        obdržet různé informace o službách a produktech provozovatele a s ním spolupracujících osob
                        v závislosti na preferencích a projeveném zájmu uživatele o různá témata a akce. Uživatel může
                        svoje preference upravit v rámci uživatelského účtu nebo zasláním e-mailu na adresu
                        <a href="mailto:{{ config('company.gdpr_email') }}">{{ config('company.gdpr_email') }}</a>.
                    </p>

                    <p>
                        Za tímto účelem zaškrtnutím souhlasu vyjadřuje uživatel souhlas se zpracováním svých osobních
                        údajů v rozsahu kontaktních informací jméno, příjmení, adresa, e-mail, telefon za výše uvedeným
                        účelem zasílání marketingových sdělení o produktech provozovatele a s ním spolupracujících osob
                        e-mailem, telefonicky nebo poštou a dále uživatel souhlasí, že jsou pomocí měřící technologie
                        zpracovávána data o jeho pohybu a užívání webových stránek provozovatele.
                    </p>

                    <a name="zasady"></a>
                    <p>
                        Tento souhlas může uživatel kdykoliv odvolat zasláním e-mailu na adresu
                        <a href="mailto:{{ config('company.gdpr_email') }}">{{ config('company.gdpr_email') }}</a>.
                    </p>

                    <h1>Zásady ochrany a zpracování osobních údajů</h1>

                    <p>
                        Uživatel potvrzuje, že provozovatel je oprávněn shromažďovat, uchovávat a zpracovávat osobní
                        údaje uživatele v nezbytném rozsahu jméno, příjmení, adresa bydliště, e-mail, telefon, IP adresa
                        a údaje o pohybu na webových stránkách provozovatele a to formou jak je definováno poskytovatelem
                        měřící technologie
                        <a href="{{ url('https://help.smartlook.com/cs/articles/3388936-nahravani-citlivych-dat')}}">zde</a>
                        včetně citlivých a jiných osobních údajů průběžně zpřístupněných uživatelem (dále jen „osobní údaje"),
                        a to pro účely:
                    </p>

                    <ul>
                        <li>(i) plnění povinností vyplývajících ze žádosti, či smlouvy uzavírané s uživatelem,</li>
                        <li>(ii) zasílání obchodních sdělení a dalších informací o podnikání provozovatele elektronickou cestou v souladu s příslušnými předpisy a zlepšování kvality služeb provozovatele,</li>
                        <li>(iii) plnění navazujících smluv, zejména smluv s dalšími dodavateli plnění pro provozovatele,</li>
                        <li>(iv) plnění dalších zákonných povinností navazující na žádost uživatele nebo smlouvu uzavřenou s provozovatelem a její plnění a/nebo</li>
                        <li>(v) k ochraně oprávněných zájmů provozovatele před soudním, správním, či jiným řízením.</li>
                    </ul>

                    <p>
                        Tyto osobní údaje bude provozovatel dostatečně chránit, zpracovávat výhradně pro tyto účely
                        a uchovávat po nezbytnou dobu trvání účelu.
                    </p>

                    <p>Provozovatel tímto řádně poučuje nositele údajů o jeho právech požadovat:</p>

                    <ul>
                        <li>(i) přístup k jeho osobním údajům a jejich opravu,</li>
                        <li>(ii) výmaz a/nebo přenositelnost,</li>
                        <li>(iii) právu vznést námitku proti zpracování,</li>
                    </ul>

                    <p>
                        to vše na e-mail provozovatele
                        <strong><a href="mailto:{{ config('company.gdpr_email') }}">{{ config('company.gdpr_email') }}</a></strong>
                        se lhůtou na vyřízení bezodkladně, ale nejpozději do 30 dnů dle čl. 15 až 23 Nařízení (EU) 2016/679.
                        Uživatel má právo podat stížnost u dozorového úřadu (Úřad pro ochranu osobních údajů, se sídlem
                        Pplk. Sochora 27, 170 00 Praha 7).
                    </p>

                    <p>
                        Provozovatel je oprávněn v případě opakovaných nebo nedůvodných žádostí účtovat přiměřený
                        poplatek za náklady spojené s vyřízením žádosti.
                    </p>

                </article>

            </div>
        </div>
    </main>
@endsection
