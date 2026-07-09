<div class="panel-body"
     x-data="{ view: 'img', scrollTopVisible: false }"
     x-on:scroll.window="scrollTopVisible = window.scrollY > 300">

    {{-- Search header --}}
    <div class="pro-filter-footer">
        <div class="pro-filter_row">

            {{-- Vendor filter --}}
            @if ($vendors->isNotEmpty())
            <div class="pro-filter_item">
                <div class="form-group">
                    <label for="searchVendor">Výrobce:</label>
                    <div class="ux-combo">
                        <select id="searchVendor" class="form-control ux-combo_field" wire:model.live="vendorFilter">
                            <option value="">Všichni výrobci</option>
                            @foreach ($vendors as $vendor)
                                <option value="{{ $vendor }}">{{ $vendor }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            @endif

            {{-- Sort --}}
            <div class="pro-filter_item pro-filter_sort-view">
                <div class="form-group">
                    <label for="sortParam">Řazení:</label>
                    <div class="ux-combo">
                        <select id="sortParam" class="form-control ux-combo_field" wire:model.live="sort">
                            <option value="8_desc">výhodná nabídka</option>
                            <option value="13_asc">od nejlevnějších</option>
                            <option value="13_desc">od nejdražších</option>
                            <option value="11_asc">nejprodávanější</option>
                            <option value="14_asc">název A-Z</option>
                            <option value="14_desc">název Z-A</option>
                            <option value="16_asc">skladem vzestupně</option>
                            <option value="16_desc">skladem sestupně</option>
                        </select>
                    </div>
                </div>
            </div>

            {{-- On stock filter --}}
            <div class="pro-filter_item">
                <label class="checkbox-inline">
                    <input type="checkbox" wire:model.live="onStock"> Pouze skladem
                </label>
            </div>

            <div class="pro-filter_item pro-filter_number-records">
                <span class="pro-filter_number-records_label">Počet záznamů:</span>
                <strong class="pro-filter_number-records_value" id="totalRecordCount"
                    data-defaultvalue="{{ $total }}">{{ $total }}</strong>
            </div>

            <div class="pro-filter_item pro-filter_choose-view">
                <a href="#" id="btnView_img"
                    class="pro-filter_choose-view_btn pro-filter_choose-view_btn--catalog js-tooltip"
                    :class="{ 'selected': view === 'img' }"
                    aria-label="Zobrazit katalog" data-title="tip_show_catalogue"
                    @click.prevent="view = 'img'">
                    <i class="icon-grid btn_icon"></i>
                    <span class="btn_label">Zobrazit katalog</span>
                </a>
                <a href="#" id="btnView_table"
                    class="pro-filter_choose-view_btn pro-filter_choose-view_btn--list js-tooltip"
                    :class="{ 'selected': view === 'table' }"
                    aria-label="Zobrazit seznam s obrázky" data-title="tip_show_tile"
                    @click.prevent="view = 'table'">
                    <i class="icon-list btn_icon"></i>
                    <span class="btn_label">Zobrazit seznam s obrázky</span>
                </a>
                <a href="#" id="btnView_table_img"
                    class="pro-filter_choose-view_btn pro-filter_choose-view_btn--table js-tooltip"
                    :class="{ 'selected': view === 'table_img' }"
                    aria-label="Zobrazit vlastní seznam" data-title="tip_show_tableimg"
                    @click.prevent="view = 'table_img'">
                    <i class="icon-select btn_icon"></i>
                    <span class="btn_label">Zobrazit vlastní seznam</span>
                </a>
            </div>

            @include('livewire.template.partials.pager', ['paginator' => $paginator, 'class' => 'pager pro-pager pro-pager--top'])
        </div>

        @if ($fulltext !== '')
        <div class="pro-filter_row" style="padding-top:8px;">
            <p class="pro-filter_number-records_label">
                Výsledky hledání pro: <strong>{{ $fulltext }}</strong>
            </p>
        </div>
        @endif
    </div>

    <div class="dataContainerShort" style="position:relative;">
        <div wire:loading.flex style="position:absolute;inset:0;background:rgba(255,255,255,0.6);z-index:10;align-items:center;justify-content:center;">
            <div class="preloader" style="width:100px;height:100px;">
                @for ($i = 1; $i <= 12; $i++)
                    <div class="preloader_el preloader_el-{{ $i }}"></div>
                @endfor
            </div>
        </div>

        {{-- Catalog view --}}
        <section class="products-catalog" x-show="view === 'img'">
            <div class="grid-wrapper data-product-items">
                @forelse ($products as $product)
                @php
                    $productUrl = '/' . \Illuminate\Support\Str::slug($product->Name) . '/product-' . $product->ProId;
                @endphp
                <article id="product_{{ $product->ProId }}" class="product-item pro-tile" x-data="{ qty: 1 }">
                    <div class="pro-tile_in">
                        <h2 class="pro-tile_name">
                            <a class="js-html5-storage" href="{{ $productUrl }}">{{ $product->Name }}</a>
                        </h2>
                        <figure class="pro-tile_img">
                            <a class="js-html5-storage" href="{{ $productUrl }}">
                                @if ($product->product_images->isNotEmpty())
                                    <img class="pro-img b-lazy" alt="{{ $product->Name }}"
                                        data-src="{{ $product->product_images->first()->URL }}">
                                @else
                                    <img class="pro-img" alt="{{ $product->Name }}"
                                        src="{{ config('images.fallback') }}">
                                @endif
                            </a>
                        </figure>
                        <div class="pro-tile_hover-box">
                            <div class="pro-tile_desc product-desc">
                                <div class="pro-tile_desc_in">{{ $product->DescriptionShort }}</div>
                            </div>
                            @if ($product->YourPrice)
                            <div class="pro-tile_prices">
                                <div class="pro-tile_price">
                                    <span class="pro-tile_price-text pro-tile_price-text--prepend">Vaše cena:</span>
                                    <strong class="pro-tile_price-value">{{ number_format($product->YourPrice, 0, ',', ' ') }}&nbsp;Kč</strong>
                                </div>
                            </div>
                            @endif
                        </div>
                        @if ($product->YourPrice)
                        <div class="pro-tile_prices">
                            <div class="pro-tile_price">
                                <span class="pro-tile_price-text pro-tile_price-text--prepend">Vaše cena:</span>
                                <strong class="pro-tile_price-value">{{ number_format($product->YourPrice, 0, ',', ' ') }}&nbsp;Kč</strong>
                            </div>
                        </div>
                        @endif
                        <div class="pro-tile_footer">
                            <div class="pro-tile_footer-in">
                                <div class="pro-tile_stock">
                                    <div class="pro-stock {{ $product->OnStock ? 'pro-stock--available' : 'pro-stock--unavailable' }}">
                                        <span class="pro-stock_text pro-stock_text--prepend">Dostupnost:</span>
                                        <a href="javascript:void(null)" class="pro-stock_text pro-stock_text--append"
                                            onclick="openDialogStock({{ $product->ProId }},0);">{{ $product->OnStockText }}</a>
                                    </div>
                                </div>
                                <div class="pro-tile_order-box">
                                    <div class="pro-tile_quantity">
                                        <label class="pro-tile_quantity-text pro-tile_quantity-text--prepend"
                                            for="txtQty_{{ $product->ProId }}">Množství:</label>
                                        <input id="txtQty_{{ $product->ProId }}"
                                            class="form-control form-control--qty pro-tile_quantity-inp"
                                            type="text" x-model.number="qty" value="1" maxlength="5">
                                        <span class="pro-tile_quantity-text pro-tile_quantity-text--append">ks</span>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-add-basket pro-tile_btn-add-basket"
                                            data-title="tip_add_basket" aria-label="Vložit do košíku"
                                            href="#"
                                            @click.prevent="$wire.addToCart({{ $product->ProId }}, qty)">
                                            <span class="btn_icon"></span>
                                            <span class="btn_label">Vložit do košíku</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                @empty
                <div class="pro-filter_number-records_label" style="padding:30px 0;">
                    Žádné produkty nebyly nalezeny pro hledaný výraz <strong>{{ $fulltext }}</strong>.
                </div>
                @endforelse
            </div>
        </section>

        {{-- List view --}}
        <div class="products-list data-product-items" data-fly-head="1" x-show="view === 'table'" x-cloak>
            <div class="products-list-head pro-list pro-list-heading">
                <div class="pro-list_col pro-list_col--img"></div>
                <div class="pro-list_col pro-list_col--name"><a class="pro-list_sort-link" href="#">Název</a></div>
                <div class="pro-list_col pro-list_col--attributes"></div>
                <div class="pro-list_col pro-list_col--prices"><a class="pro-list_sort-link" href="#">Cena</a></div>
                <div class="pro-list_col pro-list_col--stock"><a class="pro-list_sort-link" href="#">Dostupnost</a></div>
                <div class="pro-list_col pro-list_col--pack"></div>
                <div class="pro-list_col pro-list_col--order-box"></div>
            </div>
            @foreach ($products as $index => $product)
            @php
                $productUrl = '/' . \Illuminate\Support\Str::slug($product->Name) . '/product-' . $product->ProId;
                $rowClass = ($index % 2 === 0) ? 'licha' : 'suda';
            @endphp
            <article id="list_product_{{ $product->ProId }}" class="product-item pro-list {{ $rowClass }}" x-data="{ qty: 1 }">
                <div class="pro-list_col pro-list_col--img">
                    <figure class="pro-list_img">
                        <a href="{{ $productUrl }}">
                            @if ($product->product_images->isNotEmpty())
                                <img class="pro-img b-lazy" alt="{{ $product->Name }}"
                                    data-src="{{ $product->product_images->first()->URL }}">
                            @else
                                <img class="pro-img" alt="{{ $product->Name }}"
                                    src="{{ config('images.fallback') }}">
                            @endif
                        </a>
                    </figure>
                </div>
                <div class="pro-list_col pro-list_col--name">
                    <h2 class="pro-list_name">
                        <a class="js-html5-storage" href="{{ $productUrl }}">{{ $product->Name }}</a>
                    </h2>
                    <div class="pro-list_info">
                        @if ($product->Code)
                        <span class="pro-list_info-item">
                            <span class="pro-list_info-label">Kód:</span>
                            <span class="pro-list_info-value">{{ $product->Code }}</span>
                        </span>
                        @endif
                        @if ($product->PartNumber)
                        <span class="pro-list_info-item">
                            <span class="pro-list_info-label">P/N:</span>
                            <span class="pro-list_info-value">{{ $product->PartNumber }}</span>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="pro-list_col pro-list_col--attributes"></div>
                <div class="pro-list_col pro-list_col--prices">
                    @if ($product->YourPrice)
                    <div class="pro-list_price">
                        <span class="pro-list_price-text pro-list_price-text--prepend">Vaše cena:</span>
                        <strong class="pro-list_price-value">{{ number_format($product->YourPrice, 0, ',', ' ') }}&nbsp;Kč</strong>
                    </div>
                    @endif
                </div>
                <div class="pro-list_col pro-list_col--stock">
                    <div class="pro-stock {{ $product->OnStock ? 'pro-stock--available' : 'pro-stock--unavailable' }}">
                        <a href="javascript:void(null)" class="pro-stock_text pro-stock_text--append"
                            onclick="openDialogStock({{ $product->ProId }},0);">{{ $product->OnStockText }}</a>
                    </div>
                </div>
                <div class="pro-list_col pro-list_col--pack"></div>
                <div class="pro-list_col pro-list_col--order-box">
                    <div class="pro-list_order-box">
                        <div class="pro-list_quantity">
                            <label class="pro-list_quantity-text pro-list_quantity-text--prepend"
                                for="listQty_{{ $product->ProId }}">Množství:</label>
                            <input id="listQty_{{ $product->ProId }}"
                                class="form-control form-control--qty pro-list_quantity-inp"
                                type="text" x-model.number="qty" value="1" maxlength="5">
                            <span class="pro-list_quantity-text pro-list_quantity-text--append">ks</span>
                        </div>
                        <div class="btn-group">
                            <a class="btn btn-add-basket pro-list_btn-add-basket"
                                data-title="tip_add_basket" aria-label="Vložit do košíku"
                                href="#"
                                @click.prevent="$wire.addToCart({{ $product->ProId }}, qty)">
                                <span class="btn_icon"></span>
                                <span class="btn_label">Vložit do košíku</span>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        {{-- Table view --}}
        <div class="products-list-table products-list-table--default-view" x-show="view === 'table_img'" x-cloak>
            <div class="products-list data-product-items">
                <div class="products-list-head pro-list pro-list-heading">
                    <div class="pro-list_col pro-list_col--index">#</div>
                    <div class="pro-list_col pro-list_col--partno">P/N</div>
                    <div class="pro-list_col pro-list_col--name">Název</div>
                    <div class="pro-list_col pro-list_col--prices">Vaše cena</div>
                    <div class="pro-list_col pro-list_col--stock">Skladem</div>
                    <div class="pro-list_col pro-list_col--order-box"></div>
                </div>
                @foreach ($products as $index => $product)
                @php
                    $productUrl = '/' . \Illuminate\Support\Str::slug($product->Name) . '/product-' . $product->ProId;
                    $rowClass = ($index % 2 === 0) ? 'licha' : 'suda';
                @endphp
                <article id="table_product_{{ $product->ProId }}" class="product-item pro-list {{ $rowClass }}" x-data="{ qty: 1 }">
                    <div class="pro-list_col pro-list_col--index">{{ $index + 1 }}</div>
                    <div class="pro-list_col pro-list_col--partno">{{ $product->PartNumber }}</div>
                    <div class="pro-list_col pro-list_col--name">
                        <h2 class="pro-list_name">
                            <a class="js-html5-storage" href="{{ $productUrl }}">{{ $product->Name }}</a>
                        </h2>
                    </div>
                    <div class="pro-list_col pro-list_col--prices">
                        @if ($product->YourPrice)
                        <div class="pro-list_price">
                            <span class="pro-list_price-value">{{ number_format($product->YourPrice, 0, ',', ' ') }}&nbsp;Kč</span>
                        </div>
                        @endif
                    </div>
                    <div class="pro-list_col pro-list_col--stock">
                        <div class="pro-stock {{ $product->OnStock ? 'pro-stock--available' : 'pro-stock--unavailable' }}">
                            <a href="javascript:void(null)" class="pro-stock_text pro-stock_text--append"
                                onclick="openDialogStock({{ $product->ProId }},0);">{{ $product->OnStockText }}</a>
                        </div>
                    </div>
                    <div class="pro-list_col pro-list_col--order-box">
                        <div class="pro-list_order-box">
                            <div class="pro-list_quantity">
                                <input id="tableQty_{{ $product->ProId }}"
                                    class="form-control form-control--qty pro-list_quantity-inp"
                                    type="text" x-model.number="qty" value="1" maxlength="5">
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-add-basket pro-list_btn-add-basket"
                                    data-title="tip_add_basket" aria-label="Vložit do košíku"
                                    href="#"
                                    @click.prevent="$wire.addToCart({{ $product->ProId }}, qty)">
                                    <span class="btn_icon"></span>
                                    <span class="btn_label">Vložit do košíku</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </div>

    @if ($hasMore)
    <div id="loadMoreSentinel" style="height:1px;"></div>
    @endif
    <div wire:loading.block wire:target="loadMore" style="text-align:center;padding:20px 0;">
        <div class="preloader" style="width:50px;height:50px;display:inline-block;">
            @for ($i = 1; $i <= 12; $i++)
                <div class="preloader_el preloader_el-{{ $i }}"></div>
            @endfor
        </div>
    </div>

    <button id="btnPageScrollTop"
            class="btn btn-page-scroll-top"
            x-show="scrollTopVisible"
            x-cloak
            x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' })">
        <i class="icon-arrow_top"></i>
    </button>
</div>

@script
<script>
    let scrollObserver = null;
    let loadingMore = false;

    function initScrollObserver() {
        if (scrollObserver) {
            scrollObserver.disconnect();
            scrollObserver = null;
        }
        const sentinel = document.getElementById('loadMoreSentinel');
        if (!sentinel) return;
        scrollObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !loadingMore) {
                    loadingMore = true;
                    $wire.loadMore().then(() => { loadingMore = false; });
                }
            });
        }, { rootMargin: '200px' });
        scrollObserver.observe(sentinel);
    }

    initScrollObserver();

    Livewire.hook('commit', ({ succeed }) => {
        succeed(() => {
            queueMicrotask(() => {
                if (typeof lazyImage !== 'undefined') lazyImage('reload');
                loadingMore = false;
                initScrollObserver();
            });
        });
    });
</script>
@endscript
