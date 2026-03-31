<div>
@if ($totalItems === 0 || $activeCatCode === 0)
    <p>Nemáte vybrány žádné produkty k porovnání.</p>
@else
    <p>Porovnání produktů z kategorie <strong class="pro-compare_cat-name">{{ $categoryNames->get($activeCatCode, '') }}</strong>.</p>

    <div class="panel-tabs">
        <ul class="nav nav-tabs">
            @foreach ($categories as $catCode)
            <li class="nav-item">
                <a class="nav-link {{ $catCode == $activeCatCode ? 'nav-link--active' : '' }}"
                   wire:click.prevent="changeCategory({{ $catCode }})"
                   href="#">
                    <span class="nav-link_label">{{ $categoryNames->get($catCode, $catCode) }} ({{ $categoryCounts->get($catCode, 0) }})</span>
                </a>
                <button type="button" class="btn btn--icon btn-cat-remove js-tooltip"
                        title="Odstranit všechny produkty z kategorie"
                        wire:click="removeCategory({{ $catCode }})">
                    <i class="icon-cancel"></i>
                </button>
            </li>
            @endforeach

            <li class="nav-item visible-touch">
                <div class="dropdown">
                    <button id="selectedCategory" data-cat-id="{{ $activeCatCode }}"
                            class="btn dropdown-toggle" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Další kategorie
                        <span class="dropdown-caret"></span>
                    </button>
                    <div id="catList" class="dropdown-menu">
                        @foreach ($categories as $catCode)
                        <button class="dropdown-item visible-touch" type="button"
                                wire:click="changeCategory({{ $catCode }})">
                            {{ $categoryNames->get($catCode, $catCode) }} ({{ $categoryCounts->get($catCode, 0) }})
                        </button>
                        @endforeach
                    </div>
                </div>
            </li>
        </ul>

        <div class="panel">
            <div id="proCompare" class="pro-compare">
                <div class="pro-compare_in">

                    {{-- Product header --}}
                    <div id="proCompare_Header" class="pro-compare-header">
                        <div class="pro-compare-header_in">
                            @foreach ($products as $product)
                            @php
                                $productUrl = '/' . \Illuminate\Support\Str::slug($product->Name) . '/product-' . $product->ProId;
                            @endphp
                            <div id="product_{{ $product->ProId }}" class="pro-compare-header_value pro-compare_value">
                                <button type="button" class="pro-compare_btn-remove js-tooltip"
                                        title="Odstranit z porovnávání"
                                        wire:click="removeProduct({{ $product->ProId }})">
                                    <i class="icon-cancel"></i>
                                </button>
                                <div class="pro-compare_value_row">
                                    <div class="pro-compare_value_item">
                                        <a class="pro-compare_img-wrap" href="{{ $productUrl }}">
                                            @if ($product->product_images->isNotEmpty())
                                            <img class="pro-img pro-compare_img"
                                                 src="{{ $product->product_images->first()->URL }}"
                                                 alt="{{ $product->Name }}">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="pro-compare_value_item">
                                        <h2 class="pro-compare_name">
                                            <a class="js-tooltip" title="{{ $product->Name }}" href="{{ $productUrl }}">
                                                {{ $product->Name }}
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="pro-compare_size-correction pro-compare-header_size-correction"></div>
                        </div>
                    </div>

                    {{-- Attributes table --}}
                    <table id="proCompare_Body" class="pro-compare-tbl">
                        <tbody>
                            {{-- Dynamic attributes --}}
                            @foreach ($attributes as $attr)
                            <tr>
                                <td class="pro-compare_attr">{{ $attr->AttributeName }}</td>
                                @foreach ($products as $product)
                                <td class="pro-compare_value">
                                    {{ $attributeValues[$attr->AttributeCode][$product->ProId] ?? '--' }}
                                </td>
                                @endforeach
                                <td class="pro-compare_size-correction"></td>
                            </tr>
                            @endforeach

                            {{-- Fixed rows --}}
                            <tr>
                                <td class="pro-compare_attr">Kód</td>
                                @foreach ($products as $product)
                                <td class="pro-compare_value">{{ $product->Code }}</td>
                                @endforeach
                                <td class="pro-compare_size-correction"></td>
                            </tr>

                            <tr>
                                <td class="pro-compare_attr">P/N</td>
                                @foreach ($products as $product)
                                <td class="pro-compare_value">{{ $product->PartNumber ?? '--' }}</td>
                                @endforeach
                                <td class="pro-compare_size-correction"></td>
                            </tr>

                            <tr>
                                <td class="pro-compare_attr pro-compare_cell--highlight">Cena</td>
                                @foreach ($products as $product)
                                <td class="pro-compare_value pro-compare_cell--highlight">
                                    {{ $product->EndUserPrice ? number_format($product->EndUserPrice, 0, ',', '&nbsp;') . '&nbsp;Kč' : '--' }}
                                </td>
                                @endforeach
                                <td class="pro-compare_size-correction pro-compare_cell--highlight"></td>
                            </tr>

                            <tr>
                                <td class="pro-compare_attr">Výrobce</td>
                                @foreach ($products as $product)
                                <td class="pro-compare_value">{{ $product->ProducerName ?? '--' }}</td>
                                @endforeach
                                <td class="pro-compare_size-correction"></td>
                            </tr>

                            <tr>
                                <td class="pro-compare_attr">Dostupnost</td>
                                @foreach ($products as $product)
                                <td class="pro-compare_value">
                                    @if ($product->OnStock)
                                    <div class="pro-stock pro-stock--available">
                                        <span class="pro-stock_text">Skladem</span>
                                    </div>
                                    @else
                                    <div class="pro-stock pro-stock--unavailable">
                                        <span class="pro-stock_text pro-stock_text--prepend">Dostupnost:</span>
                                        <span class="pro-stock_text pro-stock_text--append">{{ $product->OnStockText ?? 'Na dotaz' }}</span>
                                    </div>
                                    @endif
                                </td>
                                @endforeach
                                <td class="pro-compare_size-correction"></td>
                            </tr>

                            <tr class="table-row--action">
                                <td class="pro-compare_attr">Akce</td>
                                @foreach ($products as $product)
                                <td class="pro-compare_value">
                                    <div class="buttons-area" style="text-align: center;">
                                        <a class="btn btn-add-basket" aria-label="Vložit do košíku"
                                           href="/pages/basket.aspx?import={{ $product->Code }};1">
                                            <i class="btn_icon"></i>
                                            <span class="btn_label">Koupit</span>
                                        </a>
                                        <button type="button" class="btn btn--delete js-tooltip"
                                                title="Odstranit z porovnávání"
                                                wire:click="removeProduct({{ $product->ProId }})">
                                            <i class="icon-delete"></i>
                                        </button>
                                    </div>
                                </td>
                                @endforeach
                                <td class="pro-compare_size-correction"></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endif
</div>
