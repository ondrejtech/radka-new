<div style="width: 100%" id="searchForm_wrap" class="page-header_item search-form-wrap"
    x-data
    @keydown.escape.window="$wire.closeAutocomplete()"
    @click.away="$wire.closeAutocomplete()"
>
    <form id="searchForm" class="search-form validate" role="search" aria-label="Vyhledávání" wire:submit.prevent="search" novalidate>
        <div class="search-form_in">
            <div class="input-group">
                <input
                    type="search"
                    wire:model.live.debounce.300ms="query"
                    name="fulltext"
                    id="quick_search_fulltext"
                    class="form-control search-form_field"
                    placeholder="Hledaný výraz nebo kód produktu"
                    autocomplete="off"
                    aria-required="true"
                />
                <input type="hidden" value="15" name="sortpar" />
                <div class="input-group-btn">
                    <button class="btn search-form_btn" type="submit" title="Vyhledat" aria-label="Vyhledat">
                        <i class="btn_icon icon-search"></i>
                        <span class="btn_label">Hledat</span>
                    </button>
                </div>
            </div>

            @if ($showAutocomplete && (count($results['producers']) || count($results['categories']) || count($results['products'])))
                <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all whisperer"
                    id="ui-id-1" tabindex="0"
                    style="display: block; z-index: 100; max-height: 590px; top: 40px; left: 0;"
                >
                    {{-- Výrobce --}}
                    @if (count($results['producers']))
                        <li class="ui-autocomplete-category whisperer_item whisperer_header">Výrobce</li>
                        @foreach ($results['producers'] as $producer)
                            <li class="whisperer_item ui-menu-item" role="presentation" wire:key="producer-{{ $producer['ProducerId'] }}">
                                <a class="whisperer_name whisperer_name--vendor item-vendor ui-corner-all"
                                    data-vendor-id="{{ $producer['ProducerId'] }}"
                                    href="{{ $producer['url'] }}"
                                >{!! $this->highlightTerm($producer['ProducerName'], $query) !!}</a>
                            </li>
                        @endforeach
                    @endif

                    {{-- Kategorie --}}
                    @if (count($results['categories']))
                        <li class="ui-autocomplete-category whisperer_item whisperer_header">Kategorie</li>
                        @foreach ($results['categories'] as $category)
                            <li class="whisperer_item ui-menu-item" role="presentation" wire:key="category-{{ $category['CategoryCode'] }}">
                                <a class="whisperer_name whisperer_name--category item-category ui-corner-all"
                                    href="{{ $category['url'] }}"
                                >{!! $this->highlightTerm($category['CategoryName'], $query) !!}</a>
                            </li>
                        @endforeach
                    @endif

                    {{-- Produkt --}}
                    @if (count($results['products']))
                        <li class="ui-autocomplete-category whisperer_item whisperer_header">Produkt</li>
                        @foreach ($results['products'] as $product)
                            <li class="whisperer_item ui-menu-item" role="presentation" wire:key="product-{{ $product['ProId'] }}">
                                @if (!empty($product['ImageUrl']))
                                    <a href="{{ $product['url'] }}" class="whisperer_box-img ui-corner-all" tabindex="-1">
                                        <img class="pro-img" src="{{ $product['ImageUrl'] }}" alt="" />
                                    </a>
                                @endif
                                <a class="whisperer_name ui-corner-all"
                                    href="{{ $product['url'] }}"
                                    tabindex="-1"
                                >
                                    {!! $this->highlightTerm($product['Name'], $query) !!}
                                    @if (!empty($product['Status']))
                                        @php
                                            $statusLabel = match($product['Status']) {
                                                'Novinka'       => 'novinka',
                                                'Bazar'         => 'bazar',
                                                'Výprodej'      => 'výprodej',
                                                'Doprodej'      => 'doprodej',
                                                'Snížená cena'  => 'sleva',
                                                default         => null,
                                            };
                                        @endphp
                                        @if ($statusLabel)
                                            <span class="status">({{ $statusLabel }})</span>
                                        @endif
                                    @endif
                                </a>
                                <div class="whisperer_action">
                                    <input type="hidden" id="txtQty_{{ $product['ProId'] }}" value="1" />
                                    <button
                                        type="button"
                                        class="btn btn-add-basket whisperer_btn-add-basket"
                                        title="Vložit do košíku"
                                        aria-label="Vložit do košíku"
                                        data-product-id="{{ $product['ProId'] }}"
                                        data-type="basket"
                                    ><i class="icon-basket btn_icon"></i></button>
                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul>
            @endif
        </div>
        <span class="search-form_info-icon js-tooltip" title="Zadaný výraz hledá přes kód produktu, id produktu, název produktu, výrobce, kategorii"><i class="icon-info"></i></span>
    </form>
</div>
