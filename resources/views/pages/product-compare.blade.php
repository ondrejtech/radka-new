@extends('layouts.app')

@section('content')
    <main class="page-content" role="main" aria-label="Hlavní obsah">
        <div class="page-content_in">
            <div class="container">
                <h1 class="page-title">Porovnání produktů</h1>

                <div id="compDataPageContainer">
                    <div id="compDataContainer">
                        <div id="containerComp">
                            <livewire:template.product-compare :catCode="$catCode" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('compare-bar')
<livewire:template.compare-bar />
@endsection
