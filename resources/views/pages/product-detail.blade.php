@extends('layouts.app')

@section('content')
    <div class="page-contend" role="main" aria-label="Hlavní obsah">
        <livewire:template.breadcrumbs :proId="$proId" />

        <div class="page-content_in pro-list-page">
            <div class="container sub-category-menu-wrap">
                <livewire:template.side-navigation :proId="$proId" />
            </div>
        </div>

        <div class="page-content_in" ></div>

        <div class="container">
            <livewire:template.product-detail :proId="$proId" />
        </div>
    </div>
@endsection

@section('compare-bar')
    <livewire:template.compare-bar />
@endsection
