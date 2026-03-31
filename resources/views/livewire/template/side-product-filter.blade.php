{{-- Product filter sidebar — shown on L3 (category) pages --}}
<div id="proFilter" class="pro-filter-aside">
    <div id="proFilterContent" class="pro-filter-aside_content collapse in">
        <div class="pro-filter-aside_in">

            {{-- Fulltext --}}
            <div id="fltFulltextAdd" class="panel pro-filter-aside_panel pro-filter-aside_panel--fulltext"
                data-is-collapsed="false" x-data="{ open: true }">
                <div class="panel-heading">
                    <button type="button" class="panel-title js-collapse" data-target="#panelCollapse_fulltext"
                        @click="open = !open" :class="{ 'collapsed': !open }">Vyhledat v kategorii</button>
                </div>
                <div id="panelCollapse_fulltext" class="panel-body collapse in" x-show="open" x-transition>
                    <div class="form-base">
                        <div class="form-base_row">
                            <div class="form-base_item">
                                <div class="form-group">
                                    <input type="search" wire:model.live.debounce.400ms="filterFulltext"
                                        name="fulltext" id="fulltextadd_inp"
                                        class="form-control" placeholder="Hledaný výraz"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="form-base_item">
                                <button type="button" class="btn" title="Dofiltrovat výsledky"
                                    aria-label="Hledat" id="fulltextadd">
                                    <i class="btn_icon icon-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Sklad --}}
            <div id="fltStockList" class="panel pro-filter-aside_panel pro-filter-aside_panel--onstock"
                data-is-collapsed="false" x-data="{ open: true, showQty: @entangle('filterOnStock') }">
                <div class="panel-heading">
                    <button type="button" class="panel-title js-collapse"
                        data-target="#panelCollapse_stock" @click="open = !open" :class="{ 'collapsed': !open }">Sklad</button>
                </div>
                <div id="panelCollapse_stock" class="panel-body collapse in no-padding-bottom" x-show="open" x-transition>
                    <ul class="pro-filter-aside_values-groups">
                        <li class="pro-filter-aside_values-item">
                            <div class="form-base">
                                <div class="form-base_row">
                                    <div class="form-base_item form-base_item-onstock">
                                        <div class="checkbox pro-filter-aside_value pro-filter-aside_value_cbx">
                                            <input type="checkbox" id="chb_Stock"
                                                wire:model.live="filterOnStock"
                                                x-on:change="showQty = $event.target.checked">
                                            <label for="chb_Stock">
                                                <span class="value_label pro-filter-aside_value_label">Skladem</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div id="minStockValuePanel_Stock" class="form-base_item" x-show="showQty" x-cloak>
                                        <div class="form-group form-group--inline">
                                            <label for="onstockqty">od:</label>
                                            <input id="onstockqty" type="number" class="form-control"
                                                wire:model.live.debounce.400ms="filterOnStockQty"
                                                placeholder="ks" min="1" max="99">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Značka --}}
            @if ($vendors->isNotEmpty())
            <div id="fltVendorList" class="panel pro-filter-aside_panel" data-is-collapsed="false" x-data="{ open: true, showAll: false }">
                <div class="panel-heading">
                    <button type="button" class="panel-title js-collapse" data-target="#panelCollapse_vendor"
                        @click="open = !open" :class="{ 'collapsed': !open }">
                        Značka
                    </button>
                </div>
                <div id="panelCollapse_vendor" class="panel-body collapse in" x-show="open" x-transition>
                    <ul class="pro-filter-aside_values-groups">
                        @foreach ($vendors as $index => $vendor)
                        <li wire:key="vendor-{{ $vendor->ProducerCode }}" class="pro-filter-aside_values-item"
                            @if ($index >= 5) x-show="showAll" x-cloak @endif>
                            <div class="checkbox pro-filter-aside_value pro-filter-aside_value_cbx">
                                <input type="checkbox"
                                    id="chkVendor_{{ $vendor->ProducerId }}"
                                    wire:model.live="filterVendors"
                                    value="{{ $vendor->ProducerCode }}">
                                <label for="chkVendor_{{ $vendor->ProducerId }}">
                                    <span class="value_label pro-filter-aside_value_label">{{ $vendor->ProducerName }}<span class="value_counter pro-filter-aside_value_counter">({{ $vendor->product_count }})</span></span>
                                </label>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    @if ($vendors->count() > 5)
                    <button type="button" class="btn btn--link pro-filter-aside_values-btn-toggle"
                        :class="{ 'collapsed': !showAll }"
                        @click="showAll = !showAll">
                        <span class="btn_label" x-text="showAll ? 'skrýt další' : 'zobrazit další'"></span>
                    </button>
                    @endif
                </div>
            </div>
            @endif

            {{-- Výhodná nabídka --}}
            @if ($flags->isNotEmpty())
            <div id="fltFlagList" class="panel pro-filter-aside_panel" data-is-collapsed="false" x-data="{ open: true, showAll: false }">
                <div class="panel-heading">
                    <button type="button" class="panel-title js-collapse" data-target="#panelCollapse_flags"
                        @click="open = !open" :class="{ 'collapsed': !open }">
                        Výhodná nabídka
                    </button>
                </div>
                <div id="panelCollapse_flags" class="panel-body collapse in" x-show="open" x-transition>
                    <ul class="pro-filter-aside_values-groups" id="filterIncludeFlags">
                        @foreach ($flags as $index => $flag)
                        <li wire:key="flag-{{ $flag->InfoCode }}" class="pro-filter-aside_values-item"
                            @if ($index >= 5) x-show="showAll" x-cloak @endif>
                            <div class="checkbox pro-filter-aside_value pro-filter-aside_value_cbx">
                                <input type="checkbox"
                                    id="chb_info_{{ $flag->InfoCode }}"
                                    wire:model.live="filterFlags"
                                    value="{{ $flag->InfoCode }}">
                                <label for="chb_info_{{ $flag->InfoCode }}">
                                    <span class="value_label pro-filter-aside_value_label">{{ $flag->InfoName }}<span class="value_counter pro-filter-aside_value_counter">({{ $flag->product_count }})</span></span>
                                </label>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    @if ($flags->count() > 5)
                    <button type="button" class="btn btn--link pro-filter-aside_values-btn-toggle"
                        :class="{ 'collapsed': !showAll }"
                        @click="showAll = !showAll">
                        <span class="btn_label" x-text="showAll ? 'skrýt další' : 'zobrazit další'"></span>
                    </button>
                    @endif
                </div>
            </div>
            @endif

            {{-- Cena --}}
            <div class="panel pro-filter-aside_panel pro-filter-aside_panel--price" data-is-collapsed="false" x-data="{ open: true }">
                <div class="panel-heading">
                    <button type="button" class="panel-title js-collapse" data-target="#panelCollapse_price" @click="open = !open" :class="{ 'collapsed': !open }">Cena</button>
                </div>
                <div id="panelCollapse_price" class="panel-body collapse in" x-show="open" x-transition>
                    <div class="range-price pro-filter-aside_item pro-filter-aside_range-price">
                        <input type="hidden" id="priceRange"
                            value="{{ $priceMin }};{{ $priceMax }}"
                            data-min="{{ $priceMin }}" data-max="{{ $priceMax }}"
                            data-from="{{ $priceMin }}" data-to="{{ $priceMax }}"
                            data-step="50" class="irs-hidden-input" readonly="">

                        <div class="form-base form-base--range">
                            <div class="form-base_row">
                                <div class="form-base_item">
                                    <div class="pro-filter-aside_range-price_inp pro-filter-aside_range-price_inp--min">
                                        <input type="text" class="form-control" id="minP" name="minP"
                                            value="{{ $priceMin }}"
                                            wire:model.live.debounce.600ms="filterPriceFrom"
                                            data-rule-myrange="[{{ $priceMin }},{{ $priceMax }}]">
                                    </div>
                                </div>
                                <div class="form-base_item">-</div>
                                <div class="form-base_item">
                                    <div class="pro-filter-aside_range-price_inp pro-filter-aside_range-price_inp--max">
                                        <input type="text" class="form-control" id="maxP" name="maxP"
                                            value="{{ $priceMax }}"
                                            wire:model.live.debounce.600ms="filterPriceTo"
                                            data-rule-myrange="[{{ $priceMin }},{{ $priceMax }}]">
                                    </div>
                                </div>
                                <div class="form-base_item">Kč</div>
                            </div>
                        </div>

                        <input id="tmpMinP" type="hidden" value="{{ $priceMin }}">
                        <input id="tmpMaxP" type="hidden" value="{{ $priceMax }}">
                        <input id="tmpMinPf" type="hidden" value="{{ $priceMin }}">
                        <input id="tmpMaxPf" type="hidden" value="{{ $priceMax }}">
                        <input id="tmpGuid" type="hidden" value="">
                    </div>
                </div>
            </div>

            {{-- Vyloučit Doprodej --}}
            <div id="fltExcludeFlagsList" class="panel pro-filter-aside_panel" x-data="{ open: true }">
                <div class="panel-heading">
                    <button type="button" class="panel-title js-collapse" data-target="#panelCollapse_excludeFlags" @click="open = !open" :class="{ 'collapsed': !open }">Vyloučit položky ze seznamu</button>
                </div>
                <div id="panelCollapse_excludeFlags" class="panel-body collapse in" x-show="open" x-transition>
                    <ul class="pro-filter-aside_values-groups" id="filterExcludeFlags">
                        <li class="pro-filter-aside_values-item">
                            <div class="checkbox pro-filter-aside_value pro-filter-aside_value_cbx">
                                <input type="checkbox" id="chb_without_sale"
                                    wire:model.live="filterExcludeSale">
                                <label for="chb_without_sale">
                                    <span class="value_label pro-filter-aside_value_label">Doprodej</span>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Atributy --}}
            @if ($filterAttributes->isNotEmpty())
            <div id="fltAttr" class="pro-filter-aside_panel-group">
                @foreach ($filterAttributes as $attr)
                <div wire:key="attr-panel-{{ $attr->AttributeCode }}" id="NavAtrFrm_{{ $attr->AttributeCode }}" class="panel pro-filter-aside_panel"
                    data-panel-title="{{ $attr->AttributeName }}"
                    data-pna="{{ $attr->AttributeCode }}"
                    data-ui-input-style="4"
                    x-data="{ open: false }">
                    <div class="panel-heading">
                        <button type="button" class="panel-title js-collapse"
                            data-target="#panelCollapse_attr_{{ $attr->AttributeCode }}"
                            @click="open = !open" :class="{ 'collapsed': !open }">
                            {{ $attr->AttributeName }}
                        </button>
                    </div>
                    <div id="panelCollapse_attr_{{ $attr->AttributeCode }}" class="panel-body collapse in" x-show="open" x-transition>
                        <ul class="pro-filter-aside_values-groups">
                            @foreach ($attr->values as $value)
                            <li wire:key="attr-{{ $attr->AttributeCode }}-{{ $value->ValueCode }}" class="pro-filter-aside_values-item">
                                <div class="checkbox pro-filter-aside_value pro-filter-aside_value_cbx">
                                    <input type="checkbox"
                                        id="flt_pnati_{{ $attr->AttributeCode }}_{{ $value->ValueCode }}"
                                        wire:model.live="selectedAttributes"
                                        value="{{ $attr->AttributeCode }}|{{ $value->ValueCode }}">
                                    <label for="flt_pnati_{{ $attr->AttributeCode }}_{{ $value->ValueCode }}">
                                        <span class="value_label pro-filter-aside_value_label">{{ $value->Value }}<span class="value_counter pro-filter-aside_value_counter">({{ $value->product_count }})</span></span>
                                    </label>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
            @endif

        </div>
    </div>
</div>
