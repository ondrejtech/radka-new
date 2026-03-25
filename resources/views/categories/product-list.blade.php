@extends('layouts.app')

@push('scripts')
    <script src="{{ asset('assets/bundles/js/productlist.js') }}"></script>
@endpush

@section('content')
    <div class="page-contend" role="main" aria-label="Hlavní obsah">
        <form  id="ctl00" action="" method="post">
            {{-- Breadcrumbs --}}
            <livewire:template.breadcrumbs />

            <div class="page-content_in pro-list-page">
                {{-- Side navigation (revealed by #subCategoryMenuBtnToggle on mobile) --}}
                <div class="container sub-category-menu-wrap">
                    <livewire:template.side-navigation />
                </div>
            </div>
            <div class="container layout--aside layout--aside-left">
                <div class="layout_wrap">
                    <div class="layout_aside" role="complementary">
                        <livewire:template.side-product-filter :catCode="$catCode" />
                    </div>

                    <div class="layout_main" role="main">
                        <div id="dataContainer">
                            <div id="filterSettingsContainer" class="panel pro-filter pro-filter-settings-view">
                                <livewire:template.product-layout />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
