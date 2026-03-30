<div class="panel-body">
    <div class="pro-filter-footer">
        <div class="pro-filter_row">
            <div class="pro-filter_item pro-filter_sort-view">
                <div class="form-group">
                    <label for="sortParam">Řazení:</label>
                    <div class="ux-combo">
                        <select id="sortParam" class="form-control ux-combo_field" data-label="Řadit dle"
                            onchange="GAAction(9,0,$(this));">
                            <option value="8_desc">výhodná nabídka</option>
                            <option value="13_asc">od nejlevnějších</option>
                            <option value="13_desc">od nejdražších</option>
                            <option value="11_asc">nejprodávanější</option>
                            <option value="12_asc">ceníkové řazení</option>
                            <option value="14_asc">název A-Z</option>
                            <option value="14_desc">název Z-A</option>
                            <option value="16_asc">skladem vzestupně</option>
                            <option value="16_desc">skladem sestupně</option>

                        </select>
                    </div>
                </div>
            </div>
            <div class="pro-filter_item pro-filter_number-records">
                <span class="pro-filter_number-records_label">Počet záznamů:</span>
                <strong class="pro-filter_number-records_value" id="totalRecordCount"
                    data-defaultvalue="{{ $products->total() }}">{{ $products->total() }}</strong>
            </div>
            <div class="pro-filter_item pro-filter_choose-view">
                <a href="#" onclick="GAAction(9,0,$(this));" id="btnView_img"
                    class="pro-filter_choose-view_btn pro-filter_choose-view_btn--catalog js-tooltip selected"
                    aria-label="Zobrazit katalog" data-title="tip_show_catalogue">
                    <i class="icon-grid btn_icon"></i>
                    <span class="btn_label">Zobrazit katalog</span>
                </a>
                <a href="#" onclick="GAAction(9,0,$(this));" id="btnView_table"
                    class="pro-filter_choose-view_btn pro-filter_choose-view_btn--list js-tooltip"
                    aria-label="Zobrazit seznam s obrázky" data-title="tip_show_tile">
                    <i class="icon-list btn_icon"></i>
                    <span class="btn_label">Zobrazit seznam s obrázky</span>
                </a>
                <a href="#" onclick="GAAction(9,0,$(this));" id="btnView_table_img"
                    class="pro-filter_choose-view_btn pro-filter_choose-view_btn--table js-tooltip"
                    aria-label="Zobrazit vlastní seznam" data-title="tip_show_tableimg">
                    <i class="icon-select btn_icon"></i>
                    <span class="btn_label">Zobrazit vlastní seznam</span>
                </a>
                <a id="tableViewConfig" href="/pages/administration/productlistadmin.aspx"
                    class="btn btn-table-view-config js-tooltip hide-i" data-title="tip_product_list_config"
                    data-tltp-pos=".products-list-head">
                    <i class="icon-settings btn_icon"></i>

                </a>
            </div>


            <div id="pagingTop" class="pager pro-pager pro-pager--top">
                <div class="pager_in">



                    <span class="pager_item pager_item--current first">
                        1
                    </span>

                </div>
            </div>

        </div>


        <div class="o-base-tiles c-products-sup-cat">


        </div>
    </div>
    <div class="dataContainerShort">
        <section class="products-catalog">
            <div class="grid-wrapper data-product-items">
                @foreach ($products as $product)
                @php
                    $productUrl = '/' . \Illuminate\Support\Str::slug($product->Name) . '/product-' . $product->ProId;
                @endphp
                <article id="product_{{ $product->ProId }}" class="product-item pro-tile" x-data="{ qty: 1 }">
                    <div class="pro-tile_in">

                        <h2 class="pro-tile_name">
                            <a class="js-html5-storage" href="{{ $productUrl }}">
                                {{ $product->Name }}
                            </a>
                        </h2>

                        <figure class="pro-tile_img">
                            <a class="js-html5-storage" href="{{ $productUrl }}">
                                @if ($product->product_images->isNotEmpty())
                                <img class="pro-img b-lazy"
                                    alt="{{ $product->Name }}"
                                    data-src="{{ $product->product_images->first()->URL }}">
                                @else
                                <img class="pro-img"
                                    alt="{{ $product->Name }}"
                                    src="{{ asset('IMGCACHE/no_image/no_image_7.jpg') }}">
                                @endif

                            </a>
                        </figure>


                        <div class="pro-tile_hover-box">
                            <div class="pro-tile_desc product-desc">
                                <div class="pro-tile_desc_in">
                                    {{ $product->DescriptionShort }}
                                </div>
                            </div>
                            @if ($product->EndUserPrice)
                            <div class="pro-tile_prices">
                                <div class="pro-tile_price">

                                    <span class="pro-tile_price-text pro-tile_price-text--prepend">Vaše cena:</span>
                                    <strong class="pro-tile_price-value">{{ number_format($product->EndUserPrice, 0, ',', ' ') }}&nbsp;Kč</strong>
                                    <span class="pro-tile_price-text pro-tile_price-text--append">bez DPH</span>

                                </div>
                            </div>
                            @endif
                        </div>

                        <div class="pro-tile_attributes">
                        </div>

                        @if ($product->EndUserPrice)
                        <div class="pro-tile_prices">
                            <div class="pro-tile_price">

                                <span class="pro-tile_price-text pro-tile_price-text--prepend">Vaše cena:</span>
                                <strong class="pro-tile_price-value">{{ number_format($product->EndUserPrice, 0, ',', ' ') }}&nbsp;Kč</strong>
                                <span class="pro-tile_price-text pro-tile_price-text--append">bez DPH</span>

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
                                            @click.prevent="$wire.addToCart({{ $product->ProId }}, qty)"><span
                                                class="btn_icon"></span><span class="btn_label">Vložit do
                                                košíku</span></a>
                                        <button type="button"
                                            class="btn pro-tile_dropdown-toggle dropdown-toggle dropdown-toggle--primary dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="dropdown-caret"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu--right dropdown-menu--dropup">
                                            <button type="button" class="dropdown-item"
                                                onclick="compareBar.addToCompare({{ $product->ProId }}, {{ $catCode }});">
                                                <i class="icon-collation dropdown-item_icon"></i>
                                                <span class="dropdown-item_label">Porovnat</span>
                                            </button>
                                            <a class="dropdown-item" title="Vytisknout produktovou nabídku"
                                                onclick="openPrintProductOfferDialog({{ $product->ProId }});"
                                                href="javascript:void(null);">
                                                <i class="icon-print dropdown-item_icon"></i>
                                                <span class="dropdown-item_label">Tisk produktové nabídky</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </article>
                @endforeach
            </div>
        </section>
    </div>
</div>
