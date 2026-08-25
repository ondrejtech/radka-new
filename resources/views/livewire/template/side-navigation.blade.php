<div class="layout_aside" role="complementary">

@if (count($navigation))
    <div id="subCategoryMenu" class="aside-nav aside-main-menu">
        <nav class="aside-nav_in" role="navigation" aria-label="Postranní navigace">
            <ul class="level-1 aside-nav_group aside-nav_group--level-1">

                @foreach ($navigation as $cat)
                    @php
                        $isCurrentCat = (int) $cat['CategoryCode'] === (int) $activeCategoryCode;
                    @endphp
                    <li class="aside-nav_item{{ $isCurrentCat ? ' is-current' : '' }}"
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
        </nav>
    </div>
@endif
</div>
