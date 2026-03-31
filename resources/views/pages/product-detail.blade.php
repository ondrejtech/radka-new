@extends('layouts.app')

@section('content')
    <div class="page-content" role="main" aria-label="Hlavní obsah">
        <livewire:template.breadcrumbs :proId="$proId" />

        <div class="container">
            <livewire:template.product-detail :proId="$proId" />
        </div>
    </div>
@endsection

@section('compare-bar')
    <livewire:template.compare-bar />
@endsection
