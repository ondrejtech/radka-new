<div class="layout_aside" role="complementary">

@if (count($navigation))
    <div id="subCategoryMenu" class="aside-nav aside-main-menu">
        <nav class="aside-nav_in" role="navigation" aria-label="Postranní navigace">
            <ul class="level-1 aside-nav_group aside-nav_group--level-1">

                @foreach ($navigation as $l1)
                    @php
                        $isCurrentL1 = (int) $l1['SuperCategoryCode'] === $activeSuperCatCode;
                    @endphp
                    <li class="aside-nav_item{{ $l1['hasCategories'] ? ' has-childs aside-nav_item--has-childs' : '' }}{{ $isCurrentL1 ? ' is-current is-open' : '' }}"
                        wire:key="snav-l1-{{ $l1['SuperCategoryCode'] }}"
                    >
                        <div class="nav-link-wrap aside-nav_link-wrap">
                            <a class="nav-link aside-nav_link{{ $l1['hasCategories'] ? ' aside-nav_link--has-childs' : '' }}{{ $isCurrentL1 ? ' aside-nav_link--is-current' : '' }}"
                                data-ga-category="1"
                                data-ga-prefix="1"
                                data-nav-id="{{ $l1['SuperCategoryCode'] }}"
                                href="{{ $l1['url'] }}"
                                onclick="if(typeof GAAction !== 'undefined') GAAction(this.dataset.gaCategory, this.dataset.gaPrefix, $(this))"
                            >
                                {{ $l1['SuperCategoryName'] }}
                            </a>

                            @if ($l1['hasCategories'])
                                <div class="btn-toggle aside-nav_btn-toggle-subgroup" onclick="$(this).closest('li').toggleClass('is-open'); return false;">
                                    <i class="icon-arrow_right aside-nav_toggle-icon"></i>
                                </div>
                            @endif
                        </div>

                        @if ($l1['hasCategories'])
                            <div class="sub-menu aside-nav_sub-menu{{ count($l1['categories']) > 15 ? ' col-size-2' : '' }}">
                                <button type="button" class="btn btn-sub-menu-close aside-nav_sub-menu_btn-close" onclick="$(this).closest('li').removeClass('is-open');">
                                    <i class="icon-arrow_left btn_icon"></i>
                                    <span class="btn_label">Zpět: {{ $l1['SuperCategoryName'] }}</span>
                                </button>

                                <ul class="level-2 aside-nav_group aside-nav_group--level-2">

                                    @foreach ($l1['categories'] as $cat)
                                        @php
                                            $isCurrentCat = (int) $cat['CategoryCode'] === $activeCategoryCode;
                                        @endphp
                                        <li class="aside-nav_item{{ $isCurrentCat ? ' is-current' : '' }}"
                                            data-menu-pnc="{{ $cat['CategoryCode'] }}"
                                            data-menu-pnsub="{{ $l1['SuperCategoryCode'] }}"
                                            wire:key="snav-cat-{{ $cat['CategoryCode'] }}"
                                        >
                                            <div class="nav-link-wrap aside-nav_link-wrap">
                                                <a class="nav-link aside-nav_link{{ $isCurrentCat ? ' aside-nav_link--is-current' : '' }}"
                                                    data-ga-category="1"
                                                    data-ga-prefix="2"
                                                    data-nav-id="{{ $cat['CategoryCode'] }}"
                                                    href="{{ $cat['url'] }}"
                                                    onclick="if(typeof GAAction !== 'undefined') GAAction(this.dataset.gaCategory, this.dataset.gaPrefix, $(this))"
                                                >
                                                    <span class="aside-nav_link-label">{{ $cat['CategoryName'] }}</span>
                                                </a>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        @endif

                    </li>
                @endforeach

            </ul>
        </nav>
    </div>
@endif
</div>
