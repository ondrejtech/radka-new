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

                    <h1>{{ config('app.name') }} SHOP</h1>
                    <h2>Inovativní partnerský portál respektující nejnovější trendy.</h2>
                    <br>

                    <p>
                        Základ komfortní spolupráce a účelné komunikace mezi partnery.<br>
                        Online katalog produktů, nástroj pro vkládání objednávek, tvorbu nabídek a sledování.<br>
                        Perfektní zdroj všech obchodně kritických informací.
                    </p>

                    <h2>Čím je {{ config('app.name') }} SHOP tak výjimečný?</h2>
                    <br>

                    <ul>
                        <li>Perfektní prezentací produktů</li>
                        <li>Nepřehlédnutelnou nabídkou zvýhodněných produktů a doprovodných služeb</li>
                        <li>Inteligentním vyhledáváním</li>
                        <li>Podporou tabletů a mobilních telefonů</li>
                        <li>Rozsahem funkcí a poskytovaných informací</li>
                    </ul>

                </article>

            </div>
        </div>
    </main>
@endsection
