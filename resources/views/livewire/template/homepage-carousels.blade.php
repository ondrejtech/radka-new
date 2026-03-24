<div>
    @foreach ($carousels as $carousel)
        <div class="tile-banner-container">
            <div class="tile-carousel">
                <h2>{{ $carousel['title'] }}</h2>
                <div>
                    <div class="products-recommended">
                        <div class="data-product-items owl-carousel">
                            @foreach ($carousel['products'] as $product)
                                <article id="product_{{ $product['ProId'] }}" class="product-item pro-tile" x-data="{ qty: 1 }">
                                    <div class="pro-tile_in">

                                        <h2 class="pro-tile_name">
                                            <a class="js-html5-storage"
                                                href="/{{ $product['slug'] }}/product-{{ $product['ProId'] }}">
                                                {{ $product['Name'] }}
                                            </a>
                                        </h2>

                                        <figure class="pro-tile_img">
                                            <a class="js-html5-storage"
                                                href="/{{ $product['slug'] }}/product-{{ $product['ProId'] }}">
                                                <img class="pro-img b-lazy" alt="{{ $product['Name'] }}"
                                                    src="{{ $product['imageUrl'] }}"
                                                    data-src="{{ $product['imageUrl'] }}">
                                                @if (! $product['imageUrl'])
                                                    <div class="spinner"></div>
                                                @endif
                                            </a>
                                        </figure>

                                        <div class="pro-tile_hover-box">
                                            <div class="pro-tile_desc product-desc">
                                                <div class="pro-tile_desc_in">{{ $product['DescriptionShort'] }}</div>
                                            </div>
                                            <div class="pro-tile_prices">
                                                <div class="pro-tile_price">
                                                    <span
                                                        class="pro-tile_price-text pro-tile_price-text--prepend">Vaše
                                                        cena:</span>
                                                    @if ($product['EndUserPrice'])
                                                        <strong
                                                            class="pro-tile_price-value">{{ number_format($product['EndUserPrice'], 0, ',', ' ') }}&nbsp;Kč</strong>
                                                    @endif
                                                    <span class="pro-tile_price-text pro-tile_price-text--append">bez
                                                        DPH</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-tile_prices">
                                            <div class="pro-tile_price">
                                                <span class="pro-tile_price-text pro-tile_price-text--prepend">Vaše
                                                    cena:</span>
                                                @if ($product['EndUserPrice'])
                                                    <strong
                                                        class="pro-tile_price-value">{{ number_format($product['EndUserPrice'], 0, ',', ' ') }}&nbsp;Kč</strong>
                                                @endif
                                                <span class="pro-tile_price-text pro-tile_price-text--append">bez
                                                    DPH</span>
                                            </div>
                                        </div>

                                        <div class="pro-tile_footer">
                                            <div class="pro-tile_footer-in">
                                                <div class="pro-tile_stock">
                                                    <div
                                                        class="pro-stock {{ $product['OnStock'] ? 'pro-stock--available' : 'pro-stock--unavailable' }}">
                                                        <span
                                                            class="pro-stock_text pro-stock_text--prepend">Dostupnost:</span>
                                                        <span class="pro-stock_text pro-stock_text--append">
                                                            {{ $product['OnStock'] ? 'Skladem' : 'Na objednávku' }}
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="pro-tile_order-box">
                                                    <div class="pro-tile_quantity">
                                                        <label
                                                            class="pro-tile_quantity-text pro-tile_quantity-text--prepend"
                                                            for="txtQty_{{ $product['ProId'] }}">Množství:</label>
                                                        <input id="txtQty_{{ $product['ProId'] }}"
                                                            class="form-control form-control--qty pro-tile_quantity-inp"
                                                            type="text" x-model.number="qty" value="1" maxlength="5">
                                                        <span
                                                            class="pro-tile_quantity-text pro-tile_quantity-text--append">ks</span>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a class="btn btn-add-basket pro-tile_btn-add-basket"
                                                            data-title="tip_add_basket"
                                                            aria-label="Vložit do košíku"
                                                            href="#"
                                                            @click.prevent="$wire.addToCart({{ $product['ProId'] }}, qty)">
                                                            <span class="btn_icon"></span>
                                                            <span class="btn_label">Vložit do košíku</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @if (count($carousels))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                $('.data-product-items').owlCarousel({
                    loop: true,
                    margin: 20,
                    items: 4,
                    nav: true,
                    dots: false,
                    stagePadding: 50
                });
            });
        </script>
    @endif
</div>
