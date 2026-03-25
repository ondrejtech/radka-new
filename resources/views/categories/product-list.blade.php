@extends('layouts.app')

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
                        
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
