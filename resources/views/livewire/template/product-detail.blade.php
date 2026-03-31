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
                            <img class="pro-img" src="{{ $mainImgLarge }}" alt="{{ $product->Name }}">
                        </a>
                        @else
                        <img class="pro-img" src="{{ asset('IMGCACHE/no_image/no_image_7.jpg') }}" alt="{{ $product->Name }}">
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
                                            @if ($product->YourPriceWithFees && $product->Vat)
                                            @php $vatMultiplier = 1 + ($product->Vat / 100); @endphp
                                            <div class="pro-detail_your-price">
                                                <span class="pro-detail_your-price-label">Vaše cena:</span>
                                                <strong class="pro-detail_your-price-value">
                                                    {{ number_format($product->YourPriceWithFees * $vatMultiplier, 2, ',', ' ') }}&nbsp;Kč
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
                        @if ($product->YourPrice || $product->EndUserPrice)
                        @php $vatMultiplier = $vatMultiplier ?? (1 + ($product->Vat / 100)); @endphp
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
                                        @if ($product->EndUserPrice)
                                        {{-- <li class="pro-detail_list-item">
                                            <span class="list-items_item_label">Koncová cena pro klienta:</span>
                                            <div class="list-items_item_value">
                                                {{ number_format($product->EndUserPrice * $vatMultiplier, 2, ',', ' ') }}&nbsp;Kč
                                            </div>
                                        </li> --}}
                                        @endif
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
                                        @if ($product->YourPriceWithFees && $product->Vat)
                                        <li class="pro-detail_list-item">
                                            <span class="list-items_item_label">
                                                Vaše cena vč. DPH:
                                                <i class="icon-info js-tooltip" title="Na produkt může být uplatněn Režim přenesení daňové povinnosti"></i>
                                            </span>
                                            <div class="list-items_item_value">
                                                {{ number_format($product->YourPriceWithFees * $vatMultiplier, 2, ',', ' ') }}&nbsp;Kč
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
    </article>
</div>
