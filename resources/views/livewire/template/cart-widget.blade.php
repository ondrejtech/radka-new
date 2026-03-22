<div id="basketInfo" class="basket-info">
    <div class="{{ $isOpen ? 'dropdown open' : 'dropdown' }}">
        <a href="#" id="basketInfo_btnToggle"
            class="btn dropdown-toggle basket-info_btn-toggle"
            wire:click.prevent="toggle"
        >
            <i id="basketInfo_preloader" class="icon-basket icon-basket-info_btn-toggle" style="display: block;"></i>
            <span id="basketInfo_price" class="basket-info_price">
                {{ number_format($totalPrice, 0, ',', ' ') }}&nbsp;Kč
            </span>
            <span class="dropdown-caret"></span>
        </a>

        <div id="basketInfo_overviewBox" class="dropdown-menu basket-info_overview-box" aria-labelledby="basketInfo">
                <div class="dropdown-header">
                    <div class="basket-info_summary">
                        <span class="text-prepand basket-info_summary-title">V košíku máte:</span>
                        <strong id="basketInfo_overviewBox_itemsCount" class="basket-info_summary-value">{{ $totalCount }}</strong>
                        <span class="basket-info_summary-unit">ks</span>
                    </div>
                </div>

                <div class="basket-info_order-items">
                    <div class="basket-info_order-items_in">
                        @foreach ($items as $item)
                            <div class="dropdown-item basket-info_order-item" wire:key="cart-item-{{ $item->id }}">
                                <a class="basket-info_order-item_name"
                                    href="#"
                                    {{-- TODO: route('products.show', $item->pro_id) --}}
                                    title="{{ $item->name }}"
                                >{{ Str::limit($item->name, 30) }}</a>

                                <span class="basket-info_order-item_price">
                                    {{ number_format($item->price * $item->quantity, 0, ',', ' ') }}&nbsp;Kč
                                </span>
                                <span class="basket-info_order-item_count">
                                    <span class="basket-info_order-item_count-value">{{ $item->quantity }}</span>
                                    <span class="basket-info_order-item_count-unut">ks</span>
                                </span>
                                <button
                                    type="button"
                                    class="btn basket-info_order-item_btn-delete"
                                    wire:click="removeItem({{ $item->id }})"
                                    title="Smazat"
                                >
                                    <i class="btn_icon icon-delete"></i>
                                    <span class="btn_label">Smazat</span>
                                </button>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="dropdown-buttons">
                    <div class="dropdown-buttons_btn-item">
                        <button
                            type="button"
                            class="btn dropdown-buttons_btn basket-info_btn basket-info_btn--empty"
                            wire:click="clearCart"
                        >
                            <span class="btn-label">Vyprázdnit košík</span>
                        </button>
                    </div>
                    <div class="dropdown-buttons_btn-item">
                        <a href="#"
                            {{-- TODO: route('cart.index') --}}
                            class="btn dropdown-buttons_btn basket-info_btn basket-info_btn--show"
                            wire:click.prevent="goToCart"
                        >
                            <span class="btn-label">Do košíku</span>
                        </a>
                    </div>
                </div>
        </div>
    </div>
</div>
