<div class="c-banner-slider no-print">
    @if ($isL1)
        <div class="c-banner-slider_items owl-carousel js-slider main" data-slider-type="main">

            <div class="c-banner-slider_item c-banner-slider_item--full-screen">
                <div class="c-banner-slider_item-in">
                    <a class="c-banner-slider_link"
                        href="https://edshopb2b.edsystem.cz/letni-hudebni-festival-se-samsung-memory/article-31406"
                        >
                        <div class="c-banner-slider_img-wrap">
                            <img class="c-banner-slider_img owl-lazy"
                                data-src="{{ asset('ArchiveMarketingCZ/Samsung - memory - colours B CZ_2026-01-06-14-24-47.jpg') }}"
                                src="{{ asset('ArchiveMarketingCZ/Samsung - memory - colours B CZ_2026-01-06-14-24-47.jpg') }}"
                                alt="2026.01.Samsung.Memory.Colours.CZ" />
                        </div>
                    </a>
                </div>
            </div>

            <div class="c-banner-slider_item c-banner-slider_item--full-screen">
                <div class="c-banner-slider_item-in">
                    <a class="c-banner-slider_link"
                        href="https://edshopb2b.edsystem.cz/otestujte-ai-vybavu-zdarma/article-30882"
                        >
                        <div class="c-banner-slider_img-wrap">
                            <img class="c-banner-slider_img owl-lazy"
                                data-src="{{ asset('ArchiveMarketingCZ/AMD AI PC (2)_2025-09-23-14-25-14.jpg') }}"
                                src="{{ asset('ArchiveMarketingCZ/AMD AI PC (2)_2025-09-23-14-25-14.jpg') }}"
                                alt="2025.09.AMD.Demo.CZ" />
                        </div>
                    </a>
                </div>
            </div>

            <div class="c-banner-slider_item c-banner-slider_item--full-screen">
                <div class="c-banner-slider_item-in">
                    <a class="c-banner-slider_link"
                        href="https://www.edecko.cz/magazin"
                        >
                        <div class="c-banner-slider_img-wrap">
                            <img class="c-banner-slider_img owl-lazy"
                                data-src="{{ asset('ArchiveMarketingCZ/2026_03_eDecko_jaro_banner_CZ_2026-03-12-11-28-52.jpg') }}"
                                src="{{ asset('ArchiveMarketingCZ/2026_03_eDecko_jaro_banner_CZ_2026-03-12-11-28-52.jpg') }}"
                                alt="2026_03_Magazin_eDecko_Jaro26_CZ" />
                        </div>
                    </a>
                </div>
            </div>

            <div class="c-banner-slider_item c-banner-slider_item--full-screen">
                <div class="c-banner-slider_item-in">
                    <a class="c-banner-slider_link"
                        href="https://edshopb2b.edsystem.cz/treti-dvoutydenni-jizda-s-lenovem-v-roce-2026/article-31694"
                        >
                        <div class="c-banner-slider_img-wrap">
                            <img class="c-banner-slider_img owl-lazy"
                                data-src="{{ asset('ArchiveMarketingCZ/lenovo_2026-03_2tpromo_cz_2_2026-03-20-14-13-03.jpg') }}"
                                src="{{ asset('ArchiveMarketingCZ/lenovo_2026-03_2tpromo_cz_2_2026-03-20-14-13-03.jpg') }}"
                                alt="2026.03.Lenovo.2tydnyslev.banner.CZ" />
                        </div>
                    </a>
                </div>
            </div>

        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                $('.js-slider.main').owlCarousel({
                    loop: true,
                    items: 1,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    dots: true,
                    nav: false,
                    lazyLoad: true
                });
            });
        </script>
    @endif
</div>
