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

                    <h1>Smazání osobních údajů uživatele</h1>

                    <p>
                        Tato stránka popisuje, jak můžete požádat o smazání osobních údajů, které o vás
                        zpracovává provozovatel webu {{ config('company.name') }} v souvislosti s provozem
                        internetového obchodu a marketingovými nástroji (včetně reklamních a měřících nástrojů
                        společnosti Meta Platforms, Inc. – Facebook a Instagram).
                    </p>

                    <h1>Jaké údaje zpracováváme</h1>

                    <p>
                        V rozsahu nezbytném pro provoz obchodu a marketing zpracováváme zejména kontaktní údaje
                        (jméno, příjmení, adresa, e-mail, telefon), údaje o objednávkách a údaje o chování na
                        webových stránkách (IP adresa a data z měřících technologií). Podrobnosti najdete
                        v dokumentu
                        <a href="{{ route('pages.processing-personal-info') }}">Zásady ochrany a zpracování osobních údajů</a>.
                    </p>

                    <h1>Jak požádat o smazání údajů</h1>

                    <p>
                        O smazání svých osobních údajů můžete kdykoliv požádat zasláním e-mailu na adresu
                        <strong><a href="mailto:{{ config('company.gdpr_email') }}">{{ config('company.gdpr_email') }}</a></strong>
                        s předmětem <strong>„Žádost o výmaz osobních údajů"</strong>. Do zprávy prosím uveďte:
                    </p>

                    <ul>
                        <li>(i) jméno a příjmení, případně e-mail, pod kterým evidujeme vaše údaje,</li>
                        <li>(ii) informaci, že žádáte o výmaz osobních údajů.</li>
                    </ul>

                    <p>
                        Vaši žádost vyřídíme bezodkladně, nejpozději však do 30 dnů v souladu s čl. 17 Nařízení
                        (EU) 2016/679 (GDPR). Údaje, které jsme povinni uchovávat ze zákonných důvodů
                        (např. účetní a daňové doklady), budou smazány až po uplynutí zákonné lhůty.
                    </p>

                    <h1>Odstranění dat z reklamních nástrojů Meta</h1>

                    <p>
                        Pokud jste s naším webem interagovali prostřednictvím účtu na Facebooku nebo Instagramu,
                        můžete správu a odstranění svých dat provést také přímo v nastavení svého účtu Meta
                        (Nastavení → Vaše informace na Facebooku). O smazání dat, která zpracováváme my jako
                        provozovatel, nás kontaktujte na výše uvedené e-mailové adrese.
                    </p>

                    <p>
                        Máte rovněž právo podat stížnost u dozorového úřadu (Úřad pro ochranu osobních údajů,
                        se sídlem Pplk. Sochora 27, 170 00 Praha 7).
                    </p>

                </article>

            </div>
        </div>
    </main>
@endsection
