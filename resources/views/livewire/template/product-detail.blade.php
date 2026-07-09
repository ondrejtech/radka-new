<div class="container">
    <article id="product_{{ $product->ProId }}" class="pro-detail{{ $product->product_images->count() > 1 ? ' pro-detail--has-gallery' : '' }}" x-data="{ qty: 1 }">
        <div class="grid-wrapper pro-detail_head-info-wrap">
            <h1 class="page-title pro-detail_name">
                {{ $product->Name }}
            </h1>
            <div class="pro-detail_aside">
                <div class="pro-detail_aside-in">

                    {{-- Attributes / badges --}}
                    @if ($infoCodes->isNotEmpty())
                    <div class="pro-detail_attributes">
                        @php
                            $infoAttrMap = [
                                '1' => ['class' => 'pro-attr--new',        'icon' => 'icon-prod-attr-new'],
                                '9' => ['class' => 'pro-attr--final-sale', 'icon' => 'icon-prod-attr-csale'],
                            ];
                        @endphp
                        @foreach ($infoCodes as $info)
                        @php
                            $ic = (string) $info->InfoCode;
                            $attr = $infoAttrMap[$ic] ?? ['class' => 'pro-attr--special-offer-' . $ic, 'icon' => 'icon-prod-attr-offer'];
                        @endphp
                        <strong class="pro-attr {{ $attr['class'] }} pro-attr--spo pro-detail_attr">
                            <i class="pro-attr_icon {{ $attr['icon'] }}"></i>
                            <span class="pro-attr_label">{{ trim($info->InfoName) }}</span>
                        </strong>
                        @endforeach
                    </div>
                    @endif

                    {{-- Main image --}}
                    @php $firstImage = $product->product_images->first(); @endphp
                    <figure class="pro-detail_head-img">
                        @if ($firstImage)
                        @php
                            $mainImgLarge = preg_replace('/_\d+\.jpg$/', '_9.jpg', $firstImage->URL);
                            $mainImgFull  = preg_replace('/_\d+\.jpg$/', '.jpg',   $firstImage->URL);
                            $mainImgThumb = preg_replace('/_\d+\.jpg$/', '_7.jpg', $firstImage->URL);
                        @endphp
                        <a href="{{ $mainImgFull }}"
                           title="Pro větší náhled klikněte na obrázek"
                           data-title="{{ $product->Name }}"
                           data-fancybox-group="gallery"
                           data-thumbnail="{{ $mainImgThumb }}"
                           data-itemindex="0"
                           class="fancybox fn-detail-pic">
                            <img class="pro-img" src="{{ route('product-image', ['proId' => $product->ProId]) }}" alt="{{ $product->Name }}">
                        </a>
                        @else
                        <img class="pro-img" src="{{ config('images.fallback') }}" alt="{{ $product->Name }}">
                        @endif
                    </figure>

                    {{-- Gallery carousel (images 2+) --}}
                    @if ($product->product_images->count() > 1)
                    <div class="pro-detail_gallery">
                        <div class="pro-detail_gallery_items js-carousel owl-carousel" data-slider-type="gallery">
                            @foreach ($product->product_images->skip(1) as $image)
                            @php
                                $thumbUrl = preg_replace('/_\d+\.jpg$/', '_7.jpg', $image->URL);
                                $fullUrl  = preg_replace('/_\d+\.jpg$/', '.jpg',   $image->URL);
                                $letter   = chr(98 + $loop->index);
                            @endphp
                            <div class="pro-detail_gallery_item">
                                <a href="{{ $fullUrl }}"
                                   title="Pro větší náhled klikněte na obrázek"
                                   data-title="{{ $product->Name }}"
                                   data-fancybox-group="gallery"
                                   data-thumbnail="{{ $thumbUrl }}"
                                   data-itemindex="{{ $loop->index + 1 }}"
                                   class="pro-detail_gallery_link fancybox fn-detail-pic img-{{ $letter }}">
                                    <img class="owl-lazy pro-img"
                                         src="{{ $thumbUrl }}"
                                         data-src="{{ $thumbUrl }}"
                                         alt="{{ $product->Name }}">
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <span id="slider-prev" class="pro-detail_gallery_pager pro-detail_gallery_pager--prev disabled">
                            <i class="icon-arrow-left"></i>
                        </span>
                        <span id="slider-next" class="pro-detail_gallery_pager pro-detail_gallery_pager--next">
                            <i class="icon-arrow-right"></i>
                        </span>
                    </div>
                    @endif

                </div>

            </div>
            <div class="pro-detail_head-info">

                {{-- Short description --}}
                @if ($product->DescriptionShort)
                <p class="pro-detail_desc">{{ $product->DescriptionShort }}</p>
                @endif

                <div class="pro-detail_overview">
                    <div class="pro-detail_prices-order-wrap">

                        {{-- Order box --}}
                        <div class="pro-detail_order">
                            <div class="pro-detail_prices">
                                <div class="panel-body">
                                    <div class="pro-detail_content">

                                        <div class="pro-detail_your-price-info">

                                            {{-- Main price --}}
                                            @if ($product->YourPrice)
                                            <div class="pro-detail_your-price">
                                                <span class="pro-detail_your-price-label">Vaše cena:</span>
                                                <strong class="pro-detail_your-price-value">
                                                    {{ number_format($product->YourPrice, 2, ',', ' ') }}&nbsp;Kč
                                                </strong>
                                            </div>
                                            @endif

                                            {{-- Cart --}}
                                            <div class="pro-detail_basket-info">
                                                <h3 class="pro-detail_basket-info_title">Košík:</h3>
                                                <div class="pro-detail_order-box">
                                                    <div class="pro-detail_quantity">
                                                        <div class="form-group">
                                                            <label class="pro-detail_quantity-text pro-detail_quantity-text--prepend"
                                                                for="txtQty_{{ $product->ProId }}">Množství</label>
                                                            <div class="form-control-inc">
                                                                <input id="txtQty_{{ $product->ProId }}"
                                                                    class="form-control pro-detail_quantity-inp"
                                                                    type="text" x-model.number="qty" value="1">
                                                                <button type="button" class="btn form-control-inc_btn-plus"
                                                                    @click="qty++"><i class="btn_icon"></i></button>
                                                                <button type="button" class="btn form-control-inc_btn-minus"
                                                                    @click="qty > 1 && qty--"><i class="btn_icon"></i></button>
                                                            </div>
                                                        </div>
                                                        <span class="pro-detail_quantity-text pro-detail_quantity-text--append">ks</span>
                                                    </div>
                                                    <a class="btn pro-detail_btn-add-basket btn-add-basket"
                                                        aria-label="Vložit do košíku"
                                                        href="#"
                                                        @click.prevent="$wire.addToCart({{ $product->ProId }}, qty)">
                                                        <i class="btn_icon"></i>
                                                        <span class="btn_label">Koupit</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="pro-detail_interactive-section">

                                            {{-- Stock status --}}
                                            <div class="pro-detail_stock">
                                                <div class="pro-stock {{ $product->OnStock ? 'pro-stock--available' : 'pro-stock--unavailable' }}">
                                                    <span class="pro-stock_text pro-stock_text--prepend">Dostupnost:</span>
                                                    <a href="javascript:void(null)"
                                                        onclick="openDialogStock({{ $product->ProId }},0);"
                                                        class="pro-stock_text pro-stock_text--append">{{ $product->OnStockText }}</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="pro-detail_prices-order-wrap_vertical-split"></div>

                        {{-- Price info panel --}}
                        @if ($product->YourPrice)
                        <div class="pro-detail_price-info">
                            <div class="panel-body">
                                <div class="pro-detail_price-info_wrapper">
                                    <h3 class="pro-detail_price-info_title">Informace o ceně</h3>

                                    @if ($product->YourPrice)
                                    <div class="pro-detail_SNC-price">
                                        <span class="list-items_item_label">Vaše cena bez SNC:</span>
                                        <div class="list-items_item_value">
                                            {{ number_format($product->YourPrice, 2, ',', ' ') }}&nbsp;Kč
                                        </div>
                                    </div>
                                    @endif

                                    <ul class="list-items list-items--full">
                                        @if ($product->GarbageFee)
                                        <li class="pro-detail_list-item">
                                            <span class="list-items_item_label">SNC:</span>
                                            <div class="list-items_item_value">
                                                {{ number_format($product->GarbageFee, 2, ',', ' ') }}&nbsp;Kč
                                            </div>
                                        </li>
                                        @endif
                                        @if ($product->AuthorFee)
                                        <li class="pro-detail_list-item">
                                            <span class="list-items_item_label">AO:</span>
                                            <div class="list-items_item_value">
                                                {{ number_format($product->AuthorFee, 2, ',', ' ') }}&nbsp;Kč
                                            </div>
                                        </li>
                                        @endif
                                        @if ($product->YourPrice)
                                        <li class="pro-detail_list-item">
                                            <span class="list-items_item_label">Vaše cena celkem:</span>
                                            <div class="list-items_item_value">
                                                {{ number_format($product->YourPrice, 2, ',', ' ') }}&nbsp;Kč
                                            </div>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endif

                    </div>

                    {{-- Product base params --}}
                    <button type="button" class="btn pro-detail_base-params-btn collapsed"
                        data-toggle="collapse" data-target="#proDetail_BaseParams"
                        aria-expanded="false" aria-controls="proDetail_BaseParams">
                        <i class="icon-orders btn_icon"></i>
                        <span class="btn_label">Produktové informace</span>
                    </button>
                    <div id="proDetail_BaseParams" class="panel pro-detail_base-params collapse">
                        <div class="panel-body">
                            <div class="pro-detail_code-info">
                                @if ($product->Code)
                                <div class="pro-detail_info-item">
                                    <span class="list-items_item_label pro-detail_info-label">Kód:</span>
                                    <div class="list-items_item_value">{{ $product->Code }}</div>
                                </div>
                                @endif
                                @if ($product->PartNumber)
                                <div class="pro-detail_info-item">
                                    <span class="list-items_item_label pro-detail_info-label">P/N:</span>
                                    <div class="list-items_item_value">{{ $product->PartNumber }}</div>
                                </div>
                                @endif
                                @if ($product->WarrantyTerm && $product->WarrantyUnit)
                                <div class="pro-detail_info-item">
                                    <span class="list-items_item_label pro-detail_info-label">Záruka:</span>
                                    <div class="list-items_item_value">{{ $product->WarrantyTerm }}&nbsp;{{ $product->WarrantyUnit }}</div>
                                </div>
                                @endif
                                @if ($product->ProducerName)
                                <div class="pro-detail_info-item">
                                    <span class="list-items_item_label pro-detail_info-label">Výrobce:</span>
                                    <div class="list-items_item_value">{{ $product->ProducerName }}</div>
                                </div>
                                @endif
                                <div class="pro-detail_info-item">
                                    <span class="list-items_item_label pro-detail_info-label">Zástupce v EU:</span>
                                    <div class="list-items_item_value">
                                        <a href="#" onclick="openProducerInfo({{ $product->ProId }});return false;"></a>
                                    </div>
                                </div>
                                @if ($product->EANCode)
                                <div class="pro-detail_info-item">
                                    <span class="list-items_item_label pro-detail_info-label">EAN:</span>
                                    <div class="list-items_item_value">{{ $product->EANCode }}</div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- Action buttons --}}
                    <div class="pro-detail_overview_buttons">
                        <a class="btn js-tooltip pro-detail_overview_btn"
                            onclick="openPrintProductOfferDialog({{ $product->ProId }});"
                            href="javascript:void(null);"
                            title="Vytisknout produktovou nabídku">
                            <i class="icon-print btn_icon"></i>
                            <span class="btn_label">Tisk produktové nabídky</span>
                        </a>
                        <a href="javascript:void(null);" class="btn btn-compare js-tooltip"
                            wire:click="addToCompare({{ $product->ProId }}, {{ $product->CategoryCode }})"
                            title="Porovnání produktů">
                            <i class="btn_icon icon-collation"></i>
                            <span class="btn_label">Porovnat produkt</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div id="panelTabsLinkTarget" class="panel-tabs pro-detail_more-info js-tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
            <ul class="nav nav-tabs pro-detail_tabs ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
                <li class="nav-item ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabPanel1" aria-selected="true">
                    <a class="nav-link ui-tabs-anchor nav-link--active" href="#tabPanel1" role="presentation" tabindex="-1">Parametry</a>
                </li>
                <li class="nav-item ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-selected="false">
                    <a class="nav-link ui-tabs-anchor" href="#tabPanel2" role="presentation" tabindex="-1">Ceníkové řazení</a>
                </li>
                <li class="nav-item ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-selected="false">
                    <a class="nav-link ui-tabs-anchor" href="#tabPanel3" role="presentation" tabindex="-1">Logistické informace</a>
                </li>
                <li class="nav-item ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-selected="false">
                    <a class="nav-link ui-tabs-anchor" href="#tabPanel4" role="presentation" tabindex="-1">Příslušenství</a>
                </li>
                {{-- <li class="nav-item ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-selected="false">
                    <a class="nav-link ui-tabs-anchor" href="/ajaxpages/productservicecenterlist_ajx.aspx?pro_id={{ $product->ProId }}" role="presentation" tabindex="-1">Záruční servis</a>
                </li>
                <li class="nav-item ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-selected="false">
                    <a class="nav-link ui-tabs-anchor" id="linkCampaigns" href="/ajaxpages/marketingcampaignlistdetail_ajx.aspx?pro_id={{ $product->ProId }}&prs_id=93" role="presentation" tabindex="-1">Promoakce</a>
                </li> --}}
            </ul>
            <div class="panel pro-detail_tabs-panel">
                <div class="panel-body">
                    <div id="tabPanel1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel">
                        <div class="pro-detail_more-info_wrap">
                            <div class="more-details">
                                <h2 class="box-title">Podrobnosti</h2>
                                <div class="tpl-product-detail-desc">
                                    {!! $product->Description !!}
                                </div>
                            </div>
                        </div>
                        <div class="pro-detail_more-info_aside">
                            @if ($navigatorParams->isNotEmpty())
                                <div class="panel pro-detail_params-list">
                                    <h2 class="box-title">Technické parametry</h2>
                                    <table class="table table-striped table-bordered table-sm">
                                        <tbody>
                                            @foreach ($navigatorParams as $attributeName => $values)
                                                <tr>
                                                    <th class="text-left" style="width:50%">{{ $attributeName }}</th>
                                                    <td class="text-right" style="width:50%">{{ $values->first()->Value }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div id="tabPanel2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;">
                        <div id="MainContent_ctl00_pnlNavProductIndex" class="index-list">
                            @foreach ($indexTrees as $tree)
                                <div class="pro-detail_general-information">
                                    @foreach ($tree as $node)
                                        <div class="panel">
                                            <div class="panel-body">
                                                <h3 class="panel-title">{{ $node->IndexName }}</h3>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="tabPanel3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;">
                        <table class="table table--auto documents-tbl-list">
                            <thead>
                                <tr>
                                    <th class="table-head-cell table-col_desc" data-touchtable-el="true">Typ balení</th>
                                    <th class="table-head-cell table-col_dimension">Délka (cm)</th>
                                    <th class="table-head-cell table-col_dimension">Šířka (cm)</th>
                                    <th class="table-head-cell table-col_dimension">Výška (cm)</th>
                                    <th class="table-head-cell table-col_weight">Hmotnost (kg)</th>
                                    <th class="table-head-cell table-col_quantity" data-touchtable-el="true">Počet kusů v balení</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($logisticData as $row)
                                    <tr class="{{ $loop->odd ? 'suda' : 'licha' }}">
                                        <td data-th="Typ balení" class="table-col_desc" data-touchtable-el="true">{{ $row->typ }}</td>
                                        <td data-th="Délka (cm)" class="table-col_dimension">{{ str_replace('.', ',', rtrim(rtrim((string) $row->length, '0'), '.')) }}</td>
                                        <td data-th="Šířka (cm)" class="table-col_dimension">{{ str_replace('.', ',', rtrim(rtrim((string) $row->width, '0'), '.')) }}</td>
                                        <td data-th="Výška (cm)" class="table-col_dimension">{{ str_replace('.', ',', rtrim(rtrim((string) $row->height, '0'), '.')) }}</td>
                                        <td data-th="Hmotnost (kg)" class="table-col_weight">{{ str_replace('.', ',', rtrim(rtrim((string) $row->weight, '0'), '.')) }}</td>
                                        <td data-th="Počet kusů v balení" class="table-col_quantity" data-touchtable-el="true">{{ $row->count }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="tabPanel4" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;">
                        @foreach ($relatedProducts as $typeName => $items)
                            <section class="products-list addons-list">
                                <h2 class="box-title">{{ $typeName }}</h2>
                                @foreach ($items as $index => $item)
                                    @php
                                        $itemUrl = '/' . \Illuminate\Support\Str::slug($item->Name) . '/product-' . $item->ProId;
                                        $itemRowClass = ($index % 2 === 0) ? 'licha' : 'suda';
                                    @endphp
                                    <article id="product_{{ $item->ProId }}" class="product-item pro-list {{ $itemRowClass }}" x-data="{ qty: 1 }">
                                        <div class="pro-list_col pro-list_col--img">
                                            <div class="pos-relative">
                                                <figure class="pro-list_img">
                                                    <a class="fancybox fn-detail-pic" title="{{ $item->Name }}" href="{{ $itemUrl }}">
                                                        @if ($item->product_images->isNotEmpty())
                                                            <img class="pro-img b-lazy" alt="{{ $item->Name }}" data-src="{{ $item->product_images->first()->URL }}">
                                                        @else
                                                            <img class="pro-img" alt="{{ $item->Name }}" src="{{ config('images.fallback') }}">
                                                        @endif
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="pro-list_col pro-list_col--name">
                                            <h2 class="pro-list_name">
                                                <a class="js-html5-storage" href="{{ $itemUrl }}">{{ $item->Name }}</a>
                                            </h2>
                                            <span class="pro-list_info">
                                                Kód: <strong>{{ $item->Code }}</strong>,
                                                <span class="text-nowrap">Part Number: <strong>{{ $item->PartNumber }}</strong></span>,
                                                <span class="text-nowrap">ID: <strong>{{ $item->ProId }}</strong></span>
                                                @if ($item->WarrantyTerm && $item->WarrantyUnit)
                                                    , <span class="text-nowrap">Záruka: <strong class="js-tooltip" title="{{ $item->WarrantyUnit }}">{{ $item->WarrantyTerm }}{{ Str::upper($item->WarrantyUnit[0]) }}</strong></span>
                                                @endif
                                            </span>
                                        </div>
                                        <div class="pro-list_col pro-list_col--attributes">
                                            <div class="pro-list_attributes"></div>
                                        </div>
                                        <div class="pro-list_col pro-list_col--prices">
                                            @if ($item->YourPrice)
                                                <div class="pro-list_price">
                                                    <span class="pro-list_price-text pro-list_price-text--prepend">Vaše cena:</span>
                                                    <strong class="pro-list_price-value">{{ number_format($item->YourPrice, 0, ',', ' ') }}&nbsp;Kč</strong>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="pro-list_col pro-list_col--stock">
                                            <div class="pro-list_stock">
                                                <div class="pro-stock {{ $item->OnStock ? 'pro-stock--available' : 'pro-stock--unavailable' }}">
                                                    <span class="pro-stock_text pro-stock_text--prepend">Dostupnost:</span>
                                                    <a href="javascript:void(null)" class="pro-stock_text pro-stock_text--append"
                                                        onclick="openDialogStock({{ $item->ProId }},0);">{{ $item->OnStockText }}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-list_col pro-list_col--pack">
                                            <div class="pro-list_pack"></div>
                                        </div>
                                        <div class="pro-list_col pro-list_col--order-box">
                                            <div class="pro-list_order-box">
                                                <div class="pro-list_quantity">
                                                    <label class="pro-list_quantity-text pro-list_quantity-text--prepend" for="addonQty_{{ $item->ProId }}">Množství:</label>
                                                    <input id="addonQty_{{ $item->ProId }}" class="form-control form-control--qty pro-list_quantity-inp" type="text" x-model.number="qty" value="1" maxlength="5">
                                                    <span class="pro-list_quantity-text pro-list_quantity-text--append">ks</span>
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn btn-add-basket pro-list_btn-add-basket" data-title="tip_add_basket" aria-label="Vložit do košíku"
                                                        href="#" @click.prevent="$wire.addToCart({{ $item->ProId }}, qty)">
                                                        <span class="btn_icon"></span>
                                                        <span class="btn_label">Vložit do košíku</span>
                                                    </a>
                                                    <button type="button" class="btn pro-list_dropdown-toggle dropdown-toggle dropdown-toggle--primary dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="dropdown-caret"></span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu--right">
                                                        <button type="button" class="dropdown-item" wire:click="addToCompare({{ $item->ProId }}, {{ $item->CategoryCode }})">
                                                            <i class="icon-collation dropdown-item_icon"></i>
                                                            <span class="dropdown-item_label">Porovnat</span>
                                                        </button>
                                                        <a class="dropdown-item" title="Vytisknout produktovou nabídku" onclick="openPrintProductOfferDialog({{ $item->ProId }});" href="javascript:void(null);">
                                                            <i class="icon-print dropdown-item_icon"></i>
                                                            <span class="dropdown-item_label">Tisk produktové nabídky</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            </section>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
