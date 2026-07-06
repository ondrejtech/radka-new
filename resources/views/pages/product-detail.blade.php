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

@if (config('services.meta.pixel_id'))
    @push('scripts')
        <script>
            window.fbq && fbq('track', 'ViewContent', {
                content_type: 'product',
                content_ids: ['{{ $proId }}'],
            });
        </script>
    @endpush
@endif

@if (config('services.google_tag.ga4_id'))
    @push('scripts')
        <script>
            window.gtag && gtag('event', 'view_item', {
                currency: 'CZK',
                items: [{ item_id: '{{ $proId }}' }],
            });
        </script>
    @endpush
@endif
