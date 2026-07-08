@extends('layouts.app')

@section('meta-robots', 'noindex, nofollow')

@push('scripts')
    <script src="{{ asset('assets/bundles/js/productlist.js') }}"></script>
@endpush

@section('content')
    <div class="page-contend" role="main" aria-label="Hlavní obsah">
        <form id="ctl00" action="" method="post">
            <livewire:template.breadcrumbs />

            <div class="container layout--aside layout--aside-left">
                <div class="layout_wrap">
                    <div class="layout_main" role="main">
                        <div id="dataContainer">
                            <div id="filterSettingsContainer" class="panel pro-filter pro-filter-settings-view">
                                <livewire:template.search-layout :fulltext="$fulltext" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('compare-bar')
<livewire:template.compare-bar />
@endsection
