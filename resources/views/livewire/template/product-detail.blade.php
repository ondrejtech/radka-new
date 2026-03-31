<div class="container">
    <article id="product_{{ $product->ProId }}" class="pro-detail{{ $product->product_images->count() > 1 ? ' pro-detail--has-gallery' : '' }}">
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
        </div>
    </article>
</div>
