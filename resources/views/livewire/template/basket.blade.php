<form method="post" action="./basket.aspx" id="ctl00" autocomplete="off" x-data="{ switchOfferModal: false }">
    <div class="page-content_in page-basket_content" role="main">
        <div class="container">
            <div class="panel-bar">
                <div class="panel-bar_body">
                    <span class="panel-bar_label">1</span>
                    <h2 class="panel-bar_title"><i class="icon-basket"></i> Košík</h2>
                    @if (auth()->check() && auth()->user()->id === config('app.admin_id'))
                        <div class="panel-bar_actions">
                            <button type="button" class="btn" @click="switchOfferModal = true"><span
                                    class="btn_label">Přepnout do nabídky</span></button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="container">
            <div class="panel panel--has-table cart-content">
                <div class="panel-body">
                    <h3 class="panel-title">Obsah košíku</h3>
                    @if (auth()->check() && auth()->id() === config('app.admin_id'))
                        <div class="ux-combo cart-choose">
                            <select class="form-control ux-combo_field">
                                <option value="" selected="selected">Hlavní košík</option>
                            </select>
                        </div>
                        <button type="button" class="btn cart-btn-show-current-info js-tooltip"
                            data-title="tip_current-basket_info">
                            <i class="icon-basket-settings btn_icon"></i>
                        </button>
                        <div class="panel-tools">
                            <div class="panel-tools_item cart_choose-view">
                                <button type="button" id="basketView_table"
                                    class="btn cart_choose-view_btn cart_choose-view_btn--list js-tooltip selected"
                                    aria-label="Zobrazit seznam" data-title="tip_show_list">
                                    <i class="icon-list btn_icon"></i>
                                    <span class="btn_label">Zobrazit seznam</span>
                                </button>
                                <button type="button" id="basketView_table_ext"
                                    class="btn cart_choose-view_btn cart_choose-view_btn--list js-tooltip"
                                    aria-label="Zobrazit vlastní seznam" data-title="tip_show_tableimg">
                                    <i class="icon-select btn_icon"></i>
                                    <span class="btn_label">Zobrazit vlastní seznam</span>
                                </button>
                            </div>
                            <div class="panel-tools_item dropdown cart-options">
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Možnosti
                                    <span class="dropdown-caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu--right">
                                    <li class="dropdown-item-wrap visible-touch">
                                        <button type="button" class="dropdown-item">
                                            <i class="icon-basket-settings dropdown-item_icon"></i>
                                            <span class="dropdown-item_label">Zobrazit informace o košíku</span>
                                        </button>
                                    </li>
                                    <li class="dropdown-item-wrap">
                                        <button type="button" class="dropdown-item">
                                            <i class="icon-drawar dropdown-item_icon"></i>
                                            <span class="dropdown-item_label">Nastavit jako šablonu</span>
                                        </button>
                                    </li>
                                    <li class="dropdown-item-wrap">
                                        <button type="button" class="dropdown-item">
                                            <i class="icon-folder dropdown-item_icon"></i>
                                            <span class="dropdown-item_label">Archivovat</span>
                                        </button>
                                    </li>
                                    <li class="dropdown-item-wrap">
                                        <button type="button" class="dropdown-item">
                                            <i class="icon-link dropdown-item_icon"></i>
                                            <span class="dropdown-item_label">Importovat produkty</span>
                                        </button>
                                    </li>
                                    <li class="dropdown-item-wrap">
                                        <a class="dropdown-item dropdown-item--has-submenu">
                                            <i class="icon-wallet dropdown-item_icon"></i>
                                            <span class="dropdown-item_label">Změna měn v košíku</span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-submenu">
                                            <li class="dropdown-item-wrap">
                                                <button class="dropdown-item dropdown-item--selected" type="button">
                                                    <span class="dropdown-item_label">CZK - Kč</span>
                                                </button>
                                            </li>
                                            <li class="dropdown-item-wrap">
                                                <button class="dropdown-item" type="button">
                                                    <span class="dropdown-item_label">EUR - €</span>
                                                </button>
                                            </li>
                                            <li class="dropdown-item-wrap">
                                                <button class="dropdown-item" type="button">
                                                    <span class="dropdown-item_label">USD - $</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-item-wrap">
                                        <button type="button" class="dropdown-item">
                                            <i class="icon-export-csv dropdown-item_icon"></i>
                                            <span class="dropdown-item_label">Export do CSV</span>
                                        </button>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-item-wrap">
                                        <button type="button" class="dropdown-item">
                                            <i class="icon-share dropdown-item_icon"></i>
                                            <span class="dropdown-item_label">Sdílet s eD</span>
                                        </button>
                                    </li>
                                    <li class="dropdown-item-wrap">
                                        <a class="dropdown-item" href="#">
                                            <i class="icon-print"></i>
                                            <span class="dropdown-item_label">Tisk</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
                <table class="table cart-tbl cart-tbl-items tbl-sorting" wire:sort="handleSort">
                    <thead>
                        <tr>
                            <th class="table-head-cell table-col_control table-col_control--prepend">
                                <div class="checkbox cbx-select-row">
                                    <input id="chkAction" type="checkbox" class="toggle-cbx" name="chkAction"
                                        data-title="tip_select" onclick="toggleCheckCbx(this, 'toggle-cbx')">
                                    <label for="chkAction"></label>
                                </div>
                                <div class="dropdown cart-tbl-items_bulk-editing">
                                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="dropdown-caret"></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item">
                                            <i class="icon-close dropdown-item_icon"></i>
                                            <span class="dropdown-item_label">Smazat vybrané položky</span>
                                        </button>
                                        <button type="button" class="dropdown-item">
                                            <i class="icon-docs dropdown-item_icon"></i>
                                            <span class="dropdown-item_label">Kopírovat položky</span>
                                        </button>
                                    </div>
                                </div>
                            </th>
                            <th class="table-head-cell table-col_code-partno">Kód<br>PartNo</th>
                            <th class="table-head-cell table-col_name col-name">Název</th>
                            <th class="table-head-cell table-col_availability">Dostupnost</th>
                            <th class="table-head-cell table-col_quantity">Množství</th>
                            <th class="table-head-cell table-col_empty"></th>
                            <th class="table-head-cell table-col_price table-col_vc-snc">Cena</th>
                            <th class="table-head-cell table-col_price table-col_total-sum">Celkem</th>
                            <th class="table-head-cell table-col_control table-col_control--append"></th>
                        </tr>
                    </thead>
                    @foreach ($items as $index => $item)
                        @php
                            $product = $item->product;
                            $rowClass = $index % 2 === 0 ? 'licha' : 'suda';
                            $productUrl = $product
                                ? '/' . \Illuminate\Support\Str::slug($product->Name) . '/product-' . $product->ProId
                                : '#';
                            $total = $item->price * $item->quantity;
                        @endphp
                        <tbody class="ui-sortable" x-data="{ qty: {{ $item->quantity }}, showInfo: false }"
                            @basket-recalculate-all.window="$wire.updateQuantity({{ $item->id }}, qty)"
                            wire:key="{{ $item->id }}" wire:sort:item="{{ $item->id }}">
                            <tr id="pro_{{ $item->pro_id }}"
                                class="cart-tbl-items_item cart-tbl-items_item-Product item-{{ $index * 100 }} cart-tbl-items_item-group {{ $rowClass }}"
                                data-proid="{{ $item->pro_id }}" data-parentid="0" data-baiid="{{ $item->id }}">
                                <td class="table-col_control table-col_control--prepend">
                                    <div class="table-cell_in">
                                        <div class="checkbox cbx-select-row" wire:sort:ignore>
                                            <input id="chkAction_{{ $item->pro_id }}_{{ $item->id }}"
                                                type="checkbox" class="toggle-cbx" name="chkAction"
                                                data-title="tip_select" value="{{ $item->id }}">
                                            <label for="chkAction_{{ $item->pro_id }}_{{ $item->id }}"></label>
                                        </div>
                                        <button type="button"
                                            class="table-row_handle-el cart-tbl-items_handle-el js-tooltip el-handle"
                                            data-title="msg_change_order" wire:sort:handle>
                                            <i class="icon-move btn_icon"></i>
                                        </button>
                                    </div>
                                </td>
                                <td class="table-col_code-partno">
                                    <div class="table-cell_in">
                                        @if ($product?->Code)
                                            <div class="table-cell_value">
                                                <span class="table-cell_value-label">Kód:</span>
                                                <span class="input-disable">{{ $product->Code }}</span>
                                            </div>
                                        @endif
                                        @if ($product?->PartNumber)
                                            <div class="table-cell_value">
                                                <span class="table-cell_value-label">PartNo:</span>
                                                <span class="input-disable">{{ $product->PartNumber }}</span>
                                            </div>
                                        @endif
                                    </div>
                                </td>
                                <td class="table-col_name col-name">
                                    <div class="table-cell_in">
                                        <div class="table-cell_value table-cell_value_pro-name">
                                            <a class="cart-tbl-items_pro-name"
                                                href="{{ $productUrl }}">{{ $item->name }}</a>
                                            <div class="cart-tbl-items_attributes"></div>
                                        </div>
                                        <div class="cart-tbl-items_pro-info">
                                            @if ($product?->Code)
                                                <div class="table-cell_value">
                                                    <span class="table-cell_value-label">Kód:</span>
                                                    <span>{{ $product->Code }}</span>
                                                </div>
                                            @endif
                                            @if ($product?->PartNumber)
                                                <div class="table-cell_value">
                                                    <span class="table-cell_value-label">PartNo:</span>
                                                    <span>{{ $product->PartNumber }}</span>
                                                </div>
                                            @endif
                                            @if ($product)
                                                <div class="table-cell_value table-cell_value_availability">
                                                    <span class="table-cell_value-label">Dostupnost:</span>
                                                    <div
                                                        class="pro-stock {{ $product->OnStock ? 'pro-stock--available' : 'pro-stock--unavailable' }}">
                                                        <a href="javascript:void(null)"
                                                            class="pro-stock_text pro-stock_text--append"
                                                            onclick="openDialogStock({{ $product->ProId }},0);">{{ $product->OnStockText }}</a>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td class="table-col_availability">
                                    <div class="table-cell_in">
                                        <div class="table-cell_value">
                                            <span class="table-cell_value-label">Dostupnost:</span>
                                            @if ($product)
                                                <div
                                                    class="pro-stock {{ $product->OnStock ? 'pro-stock--available' : 'pro-stock--unavailable' }}">
                                                    <a href="javascript:void(null)"
                                                        class="pro-stock_text pro-stock_text--append"
                                                        onclick="openDialogStock({{ $product->ProId }},0);">{{ $product->OnStockText }}</a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td class="table-col_quantity">
                                    <div class="table-cell_in">
                                        <div class="table-cell_value cart-tbl-items_pro-quantity">
                                            <span class="table-cell_value-label">Množství:</span>
                                            <div class="form-group">
                                                <div class="form-control-inc cart-tbl-items_pro-quantity_inc">
                                                    <input type="text" x-model.number="qty" maxlength="5"
                                                        class="form-control form-control--qty">
                                                    <button type="button" class="btn form-control-inc_btn-plus"
                                                        @click="qty = Math.max(1, qty + 1)"><i
                                                            class="btn_icon"></i></button>
                                                    <button type="button" class="btn form-control-inc_btn-minus"
                                                        @click="qty = Math.max(1, qty - 1)"><i
                                                            class="btn_icon"></i></button>
                                                </div>
                                            </div>
                                            <button type="button"
                                                class="btn btn-recaculate cart-btn-recalculate js-tooltip"
                                                title="Přepočítat"
                                                @click="$wire.updateQuantity({{ $item->id }}, qty)">
                                                <i class="icon-repeat btn_icon"></i>
                                                <span class="btn_label">Přepočítat</span>
                                            </button>
                                            <span
                                                class="cart-tbl-items_pro-quantity-text cart-tbl-items_pro-quantity-text--append">ks</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-col_empty"></td>
                                <td class="table-col_price table-col_vc-snc">
                                    <div class="table-cell_in">
                                        <div class="table-cell_value">
                                            <span class="table-cell_value-label">Cena:</span>
                                            <span
                                                class="price">{{ number_format($item->price, 2, ',', ' ') }}&nbsp;Kč</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-col_price table-col_total-sum">
                                    <div class="table-cell_in">
                                        <div class="table-cell_value">
                                            <span class="table-cell_value-label">Celkem:</span>
                                            <span
                                                class="price">{{ number_format($total, 2, ',', ' ') }}&nbsp;Kč</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-col_control table-col_control--append">
                                    <div class="table-cell_in">
                                        <div class="table-cell_value">
                                            <button type="button"
                                                class="btn btn--icon cart-tbl-items_btn-more_info js-tooltip"
                                                data-title="tip_basket_more-info" @click="showInfo = !showInfo"
                                                :class="{ 'active': showInfo }">
                                                <i class="icon-arrow-down btn_icon"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn--icon btn-icon--delete cart-tbl-items_btn-delete js-tooltip"
                                                wire:click="removeItem({{ $item->id }})"
                                                data-title="tip_delete_item">
                                                <i class="icon-delete btn_icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr id="{{ $item->pro_id }}_0_{{ $item->id }}" data-parentid="{{ $item->pro_id }}"
                                class="table-row table-row--more-info" x-show="showInfo" style="display:none;">
                                <td class="cart-custom-text" colspan="9">
                                    @if ($product?->DescriptionShort)
                                        <h2>Popis</h2>
                                        <p>{{ $product->DescriptionShort }}</p>
                                    @endif
                                    <div class="panel-bottom-tools">
                                        <div class="info-bar">
                                            @if ($product?->WarrantyTerm && $product?->WarrantyUnit)
                                                <div class="info-bar_item">
                                                    <span class="info-bar_item_label">Záruka:</span>
                                                    <strong
                                                        class="info-bar_item_value">{{ $product->WarrantyTerm }}&nbsp;{{ $product->WarrantyUnit }}</strong>
                                                </div>
                                            @endif
                                            <div class="info-bar_item">
                                                <span class="info-bar_item_label">Vložil:</span>
                                                <strong
                                                    class="info-bar_item_value">{{ auth()->user()?->name }}</strong>
                                            </div>
                                        </div>
                                        @if (auth()->check() && auth()->user()->id === config('app.admin_id'))
                                            <div class="buttons-area">
                                                <button type="button" class="btn btn--outline"
                                                    data-title="tip_note_add">
                                                    <i class="btn_icon icon-invoice"></i>
                                                    <span class="badge badge--primary">0</span>
                                                    <span class="btn_label">Poznámky</span>
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                    <tbody>
                        <tr id="pro_0"
                            class="cart-tbl-items_item cart-tbl-items_item-Empty cart-tbl-items_item-custom {{ $items->count() % 2 === 0 ? 'licha' : 'suda' }}"
                            data-proid="0" data-parentid="0" data-baiid="0" x-data="{ searchQuery: '' }">
                            <td class="table-col_control table-col_control--prepend">
                                <div class="table-cell_in">
                                    <div class="checkbox cbx-select-row hide-i">
                                        <input type="hidden" class="toggle-cbx" name="chkAction" value="0">
                                        <label></label>
                                    </div>
                                </div>
                            </td>
                            <td class="table-col_code-partno">
                                <div class="table-cell_in">
                                    <input type="text" class="form-control" placeholder="Zadejte kód nebo P/N"
                                        x-model="searchQuery"
                                        @keydown.enter.prevent="$wire.searchAndAddProduct(searchQuery).then(() => { searchQuery = '' })">
                                </div>
                            </td>
                            <td class="table-col_name col-name">
                                <div class="table-cell_in">
                                    <div class="table-cell_value table-cell_value_pro-name">
                                        <span class="cart-tbl-items_pro-name">
                                            @if ($searchError)
                                                <span
                                                    style="color:#c0392b; font-size:13px;">{{ $searchError }}</span>
                                            @endif
                                        </span>
                                        <div class="cart-tbl-items_attributes"></div>
                                    </div>
                                    <div class="cart-tbl-items_pro-info"></div>
                                </div>
                            </td>
                            <td class="table-col_availability">
                                <div class="table-cell_in">
                                    <div class="table-cell_value">
                                        <span class="table-cell_value-label">Dostupnost:</span>
                                    </div>
                                </div>
                            </td>
                            <td class="table-col_quantity">
                                <div class="table-cell_in">
                                    <div class="table-cell_value cart-tbl-items_pro-quantity"></div>
                                </div>
                            </td>
                            <td class="table-col_empty"></td>
                            <td class="table-col_price table-col_vc-snc">
                                <div class="table-cell_in">
                                    <div class="table-cell_value">
                                        <span class="table-cell_value-label">Cena:</span>
                                    </div>
                                </div>
                            </td>
                            <td class="table-col_price table-col_total-sum">
                                <div class="table-cell_in">
                                    <div class="table-cell_value">
                                        <span class="table-cell_value-label">Celkem:</span>
                                    </div>
                                </div>
                            </td>
                            <td class="table-col_control table-col_control--append">
                                <div class="table-cell_in">
                                    <div class="table-cell_value"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                @php
                    $totalPrice = $items->sum(fn($item) => $item->price * $item->quantity) + ($shippingPrice ?? 0);
                @endphp
                <table class="table cart-tbl cart-tbl-items cart-tbl-sum">
                    <tfoot>
                        @if (($shippingPrice ?? 0) > 0)
                            <tr class="table-foot-row table-row--full-width">
                                <td class="table-foot-cell cart-tbl-sum_row" colspan="9">
                                    <span class="cart-tbl-sum_label">Doprava</span>
                                    <span class="cart-tbl-sum_price">{{ number_format($shippingPrice, 2, ',', ' ') }}&nbsp;Kč</span>
                                </td>
                            </tr>
                        @endif
                        <tr class="table-foot-row table-row--full-width">
                            <td class="table-foot-cell cart-tbl-sum_row" colspan="9">
                                <span class="cart-tbl-sum_label">Cena celkem</span>
                                <span class="cart-tbl-sum_price">{{ number_format($totalPrice, 2, ',', ' ') }}&nbsp;Kč</span>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="container">
            <div class="panel-bottom-tools">
                <div class="info-bar"></div>
                <div class="buttons-area">
                    <button type="button" class="btn btn-recaculate cart-btn-recalculate"
                        @click="$dispatch('basket-recalculate-all')">
                        <span class="btn_label">Přepočítat</span>
                    </button>
                </div>
            </div>
            <div class="panel-bar">
                <div class="panel-bar_body">
                    <span class="panel-bar_label">2</span>
                    <h2 class="panel-bar_title">Objednávka</h2>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="panel cart-order-form">
                <div class="panel-body">
                    <div class="panel-table">

                        <div class="panel">
                            <div class="panel-body">
                                <h3 class="panel-title">Způsob dopravy</h3>

                                <div class="form-base">
                                    <div class="form-base_item">

                                        <div class="form-group">
                                            <div x-data="{ selectedName: 'Zvolte dopravu', selectedId: '' }"
                                                wire:ignore
                                                class="dropdown dropdown-multi cart-transport-choose">
                                                <button class="btn dropdown-toggle" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <span class="dropdown-multi_toggle_in">
                                                        <span class="dropdown-multi_toggle_text" x-text="selectedName"></span>
                                                    </span>
                                                    <span class="dropdown-caret"></span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu--scroll">

                                                    @foreach ($transports as $t)
                                                        <button type="button" class="dropdown-item"
                                                            :class="{ 'active': selectedId === '{{ $t->Code }}' }"
                                                            @click="selectedId = '{{ $t->Code }}'; selectedName = '{{ $t->Name }}'; $wire.set('form.transportId', '{{ $t->Code }}')">
                                                            <span class="dropdown-item_in">
                                                                <span class="dropdown-item_label">
                                                                    <strong class="cart-transport-choose_name">{{ $t->Name }}</strong>
                                                                </span>
                                                                <strong class="cart-transport-choose_price">{{ number_format($t->Price, 0, ',', ' ') }}&nbsp;Kč</strong>
                                                            </span>
                                                        </button>
                                                    @endforeach

                                                </div>
                                            </div>
                                            @error('form.transportId') <span class="field-error">{{ $message }}</span> @enderror
                                        </div>

                                        <div>

                                        </div>
                                    </div>
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="txtBahExtNo">Vaše označení objednávky</label>
                                            <input name="ctl00$MainContent$txtBahExtNo" type="text" maxlength="36"
                                                wire:model="form.reference"
                                                id="txtBahExtNo" class="form-control">
                                        </div>
                                    </div>



                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="txtBahNote">Poznámka</label>
                                            <textarea name="ctl00$MainContent$txtBahNote" rows="5" cols="20"
                                                wire:model="form.note"
                                                id="txtBahNote" class="form-control"></textarea>
                                        </div>
                                    </div>



                                    <div class="form-base_row">

                                        <div class="form-base_item">
                                            <div
                                                class="form-group form-group--auto-width form-group--with-tooltip-help">
                                                <label for="txtDelivDate">Termín dodání</label>
                                                <input name="ctl00$MainContent$txtDelivDate" type="text"
                                                    maxlength="20"
                                                    wire:model="form.deliveryDate"
                                                    id="txtDelivDate" class="form-control js-datepicker hasDatepicker"
                                                    data-datepicker-validdays="['2026-04-02','2026-04-03','2026-04-06']">
                                                <i class="icon-question js-tooltip form-control_tooltip-help"
                                                    title="Termín dodání slouží pro vyjádření přání zákazníka, kdy nejdříve má být objednávka dodána, je-li zboží skladem."></i>
                                            </div>
                                        </div>

                                        <div class="form-base_item">
                                            <div class="form-group">
                                                <span class="checkbox"><input id="chkOrderComp" type="checkbox"
                                                        name="ctl00$MainContent$chkOrderComp"><label
                                                        for="chkOrderComp">Expedovat pouze kompletní
                                                        objednávku</label></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-body">
                                <h3 class="panel-title">Dodací adresa </h3>
                                <div class="form-base">
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="txtShipAddrName">Název firmy/kontaktní osoba</label>
                                            <input type="text" wire:model="form.shipName" maxlength="35"
                                                id="txtShipAddrName" class="form-control is-required"><span class="form-control-validate-info"></span>
                                        </div>
                                    </div>
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="txtShipAddrName2">Dovětek názvu</label>
                                            <input type="text" maxlength="50" id="txtShipAddrName2" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-base_row">
                                        <div class="form-base_item">
                                            <div class="form-group">
                                                <label for="txtShipAddrStreet">Ulice</label>
                                                <input type="text" wire:model="form.shipStreet" maxlength="35"
                                                    id="txtShipAddrStreet" class="form-control is-required"><span class="form-control-validate-info"></span>
                                            </div>
                                        </div>
                                        <div class="form-base_item">
                                            <div class="form-group">
                                                <label for="txtShipAddrCity">Město</label>
                                                <input type="text" wire:model="form.shipCity" maxlength="35"
                                                    id="txtShipAddrCity" class="form-control is-required"><span class="form-control-validate-info"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-base_row">
                                        <div class="form-base_item">
                                            <div class="form-group">
                                                <label for="txtShipAddrZIP">PSČ</label>
                                                <input type="text" wire:model="form.shipZip" maxlength="10"
                                                    id="txtShipAddrZIP" class="form-control is-required"><span class="form-control-validate-info"></span>
                                            </div>
                                        </div>
                                        <div class="form-base_item">
                                            <div class="form-group">
                                                <label for="txtShipCountry">Stát</label>
                                                <input type="text" wire:model="form.shipCountry" maxlength="50"
                                                    id="txtShipCountry" class="form-control is-required"><span class="form-control-validate-info"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-base_row">
                                        <div class="form-base_item">
                                            <div class="form-group">
                                                <label for="txtShipPhone">Telefon osoby přebírající zásilku</label>
                                                <input type="text" wire:model="form.shipPhone" maxlength="20"
                                                    id="txtShipPhone" class="form-control is-required"><span class="form-control-validate-info"></span>
                                            </div>
                                        </div>
                                        <div class="form-base_item">
                                            <div class="form-group">
                                                <label for="txtShipEmail">E-mail osoby přebírající zásilku</label>
                                                <input type="text" wire:model="form.shipEmail" maxlength="50"
                                                    id="txtShipEmail" class="form-control is-required @error('form.shipEmail') error @enderror"><span class="form-control-validate-info"></span>
                                                @error('form.shipEmail') <span class="field-error">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="alert alert-info">
                <p><strong>Způsob platby: platba na dobírku.</strong> Objednávku uhradíte v hotovosti nebo platební kartou
                    při převzetí zásilky.</p>
            </div>
            <div class="alert alert-info">
                
                <p><strong>Pokud do poznámky v košíku nedoplníte speciální přání / požadavek (například: jen kompletní
                        dodávka), budou blokované produkty v objednávce ihned předány k expedici.</strong> Díky tomu
                    budeme schopni vaši objednávku doručit ještě rychleji, než doposud. Při využití poznámky musí
                    objednávku před expedicí ručně potvrdit náš obchodník.
                </p>
                <p>V určitých případech může být expedice odložena i bez uvedení poznámky, například z důvodu potřeby
                    interního schválení u specifických produktů.
                </p>
            </div>
            <div class="buttons-area cart-send-area">
                @if(auth()->check())
                <button wire:click="placeOrder(true)" wire:loading.attr="disabled" class="btn" type="button">
                    <span class="btn_label">Vytvořit otevřenou objednávku</span>
                </button>
                @endif
                <button wire:click="placeOrder(false)" wire:loading.attr="disabled" id="send_order" class="btn btn--primary" type="button">
                    <span class="btn_label">Odeslat objednávku</span>
                </button>
            </div>
        </div>



        <div x-show="switchOfferModal" x-transition
            style="display:none; position:fixed; inset:0; z-index:9999; background:rgba(0,0,0,.5);"
            @click.self="switchOfferModal = false">
            <div
                style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); background:#fff; border-radius:4px; padding:30px 40px; min-width:320px; text-align:center;">
                <button type="button" @click="switchOfferModal = false"
                    style="position:absolute; top:10px; right:14px; background:none; border:none; font-size:18px; cursor:pointer; line-height:1;"
                    aria-label="Zavřít">
                    <i class="icon-close"></i>
                </button>
                <p style="margin:1%,0,0,0; font-size:15px;">Tato možnost není dostupná ve vaší zemi.</p>
            </div>
        </div>
    </div>
</form>

