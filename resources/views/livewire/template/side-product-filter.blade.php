{{-- Product filter sidebar — shown on L3 (category) pages --}}
<div id="proFilter" class="pro-filter-aside">
    <div id="proFilterContent" class="pro-filter-aside_content collapse in">
        <div class="pro-filter-aside_in">
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
                                    <input type="search" value="" name="fulltext" id="fulltextadd_inp"
                                        class="form-control" placeholder="Hledaný výraz"
                                        data-msg-required="Zadejte prosím nejméně 2 znaky."
                                        data-msg-minlength="Zadejte prosím nejméně 2 znaky." data-rule-minlength="2"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="form-base_item">

                                <button onclick="GAAction(8,0,$(this));" type="button" class="btn"
                                    title="Dofiltrovat výsledky" aria-label="Hledat" id="fulltextadd">
                                    <i class="btn_icon icon-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fltStockList" class="panel pro-filter-aside_panel  pro-filter-aside_panel--onstock"
                data-is-collapsed="false" x-data="{ open: true }">
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
                                                onclick="GAAction(9, 0, $(this));">
                                            <label for="chb_Stock">
                                                <span
                                                    class="value_label pro-filter-aside_value_label">Skladem</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div id="minStockValuePanel_Stock" class="form-base_item hide-i">
                                        <div class="form-group form-group--inline">
                                            <label for="onstockqty">od:</label>
                                            <input id="onstockqty" type="number" class="form-control"
                                                value="1"
                                                onkeypress="ProFilter.sendOnStockMinValue(event, this)"
                                                placeholder="ks" max="99">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
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
                        <li class="pro-filter-aside_values-item"
                            @if ($index >= 5) x-show="showAll" x-cloak @endif>
                            <div class="checkbox pro-filter-aside_value pro-filter-aside_value_cbx">
                                <input type="checkbox" id="chkVendor_{{ $vendor->ProducerId }}" data-pnp="{{ $vendor->ProducerId }}" value="{{ $vendor->ProducerId }}" onclick="startLoading(event)">
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
        </div>
    </div>
</div>
