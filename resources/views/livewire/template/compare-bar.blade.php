<div>
@if ($totalItems > 0 && $isOpen)
<div id="compareBar" class="compare-bar" x-data>
    <div class="container">

        @if ($categories->count() > 1)
        <div id="compareBarTabs" class="compare-bar_tabs">
            <strong class="compare-bar_tabs_label">Kategorie:</strong>
            <div class="dropdown">
                <button class="btn dropdown-toggle currentCat" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{ $categoryNames->get($activeCatCode, 'Kategorie') }}
                    <span class="dropdown-caret"></span>
                </button>
                <div class="dropdown-menu">
                    @foreach ($categories as $catCode)
                    <a class="dropdown-item" wire:click="changeCategory({{ $catCode }})" href="#">
                        <span class="dropdown-item_label">{{ $categoryNames->get($catCode, $catCode) }}</span>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        <div class="compare-bar_wrapper">
            <div class="compare-bar_products">
                <div class="grid-wrapper data-product-items">
                    @foreach ($products as $product)
                    @php
                        $productUrl = '/' . \Illuminate\Support\Str::slug($product->Name) . '/product-' . $product->ProId;
                    @endphp
                    <article id="proCompare_{{ $product->ProId }}" class="product-item compare-bar_product"
                        data-pro-id="{{ $product->ProId }}">
                        <a class="compare-bar_product_in" href="{{ $productUrl }}">
                            <div class="compare-bar_product_img-wrap">
                                <img class="pro-img compare-bar_product_img"
                                    src="{{ optional($product->product_images->first())->URL ?: config('images.fallback') }}"
                                    alt="{{ $product->Name }}">
                            </div>
                            <h2 class="compare-bar_product_name">{{ $product->Name }}</h2>
                        </a>
                        <button type="button"
                            class="compare-bar_product_btn-remove js-tooltip"
                            title="Odstranit z porovnávání"
                            wire:click="removeProduct({{ $product->ProId }})">
                            <i class="icon-cancel"></i>
                        </button>
                    </article>
                    @endforeach
                </div>
            </div>

            <div class="compare-bar_aside">
                <a href="{{ route('pages.product-compare', ['pnc_id' => $activeCatCode]) }}" class="btn btn--secondary">
                    <i class="icon-collation btn_icon"></i>
                    <span class="btn_label">Porovnat</span>
                </a>
                <button type="button" class="btn btn--outline js-tooltip"
                    title="Odstranit všechny produkty z kategorie"
                    wire:click="removeSelected">
                    <i class="icon-delete btn_icon"></i>
                    <span class="btn_label">Odstranit</span>
                </button>
            </div>
        </div>

        <button id="compareBarBtnClose" type="button"
            class="compare-bar_btn-close js-tooltip"
            title="Zavřít"
            wire:click="close">
            <i class="icon-cancel"></i>
        </button>

    </div>
</div>
@endif
</div>
