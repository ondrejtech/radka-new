@extends('layouts.app')

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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
