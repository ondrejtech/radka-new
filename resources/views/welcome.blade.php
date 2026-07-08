@extends('layouts.app')

@section('title', config('app.name') . ' – internetový obchod se širokým sortimentem')
@section('meta-description', config('app.name') . ' – nakupujte online snadno a výhodně. Široká nabídka zboží, rychlé dodání a spolehlivý zákaznický servis.')

@section('content')
    <div class="page-content" role="main" aria-label="Hlavní obsah">
        <div class="contend">
            <div class="container layout--aside layout--aside-left" role="main">
                {{-- Breadcrumbs --}}
                <livewire:template.breadcrumbs />

                <div class="layout_wrap">
                    {{-- Postranní navigace --}}
                    <livewire:template.side-navigation />

                    {{-- Hlavní obsah --}}
                    <div class="layout_main" role="main">
                        {{-- Banner slider --}}
                        <livewire:template.banner-slider />

                        <div class="promo-news-hp">
                            <div class="box-tabs full-tab promo-tabs js-tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
                                {{-- Karusely produktů --}}
                                <livewire:template.homepage-carousels />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
