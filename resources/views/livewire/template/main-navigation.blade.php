<nav class="head-nav_in" role="navigation" aria-label="Hlavní navigace">
    <ul class="head-nav_group head-nav_group--level-1 level-1" role="menu">

        @foreach ($navigation as $level1)
            @php
                $meta = $level1['meta'];
                $modifier = $meta['modifier'] ?? '';
                $icon = $meta['icon'] ?? '';
                $isCurrentL1 = request()->is(ltrim($level1['url'], '/') . '*');
            @endphp
            <li x-data="{ open: false }"
                :class="{ 'open': open }"
                class="head-nav_item head-nav_item--level-1{{ $modifier ? ' head-nav_item--' . $modifier : '' }} has-childs head-nav_item--has-childs{{ $isCurrentL1 ? ' is-current-floor is-current' : '' }}"
                wire:key="nav-l1-{{ $level1['SuperCategoryCode'] }}"
            >
                <div class="nav-link-wrap head-nav_link-wrap">
                    <a class="nav-link head-nav_link head-nav_link--level-1 head-nav_link--has-childs{{ $modifier ? ' head-nav_link--' . $modifier : '' }}{{ $isCurrentL1 ? ' head-nav_link--is-current' : '' }}"
                        data-ga-category="1"
                        data-ga-prefix="1"
                        data-nav-id="{{ $level1['SuperCategoryCode'] }}"
                        href="{{ $level1['url'] }}"
                        @click="if(typeof GAAction !== 'undefined') GAAction($el.dataset.gaCategory, $el.dataset.gaPrefix, $($el))"
                    >
                        @if ($icon)
                            <i class="icon {{ $icon }} head-nav_link-icon"></i>
                        @endif
                        <span class="head-nav_link-label">{{ $level1['SuperCategoryName'] }}</span>
                    </a>

                    <div class="btn-toggle head-nav_btn-toggle-subgroup" @click.stop="open = !open">
                        <i class="icon-arrow-right head-nav_toggle-icon"></i>
                    </div>
                </div>

                <div class="sub-menu head-nav_sub-menu head-nav_sub-menu--level-1{{ $modifier ? ' head-nav_sub-menu--' . $modifier : '' }}">
                    <button type="button" class="btn btn-sub-menu-close head-nav_sub-menu_btn-close" @click="open = false">
                        <i class="icon-arrow_left btn_icon"></i>
                        <span class="btn_label">{{ $level1['SuperCategoryName'] }}</span>
                    </button>

                    <ul class="level-2 head-nav_group head-nav_group--level-2">

                        @foreach ($level1['children'] as $level2)
                            @php
                                $isCurrentL2 = request()->is(ltrim($level2['url'], '/') . '*');
                            @endphp
                            <li x-data="{ open: false }"
                                :class="{ 'open': open }"
                                class="head-nav_item head-nav_item--level-2 has-childs head-nav_item--has-childs"
                                wire:key="nav-l2-{{ $level2['SuperCategoryCode'] }}"
                            >
                                <div class="nav-link-wrap head-nav_link-wrap">
                                    <a class="nav-link head-nav_link nav-link head-nav_link--level-2 head-nav_link--has-childs{{ $isCurrentL2 ? ' head-nav_link--is-current' : '' }}"
                                        href="{{ $level2['url'] }}"
                                    >
                                        <img class="head-nav_link-media head-nav_link-media--img" src="" alt="{{ $level2['SuperCategoryName'] }}" />
                                        <span class="head-nav_link-label">{{ $level2['SuperCategoryName'] }}</span>
                                    </a>

                                    <div class="btn-toggle head-nav_btn-toggle-subgroup" @click.stop="open = !open">
                                        <i class="icon-arrow_right head-nav_toggle-icon"></i>
                                    </div>
                                </div>

                                <div class="sub-menu head-nav_sub-menu head-nav_sub-menu--level-2">
                                    <button type="button" class="btn btn-sub-menu-close head-nav_sub-menu_btn-close" @click="open = false">
                                        <i class="icon-arrow_left btn_icon"></i>
                                        <span class="btn_label">Zpět: {{ $level2['SuperCategoryName'] }}</span>
                                    </button>

                                    <ul class="level-3 head-nav_group head-nav_group--level-3">

                                        @foreach ($level2['categories'] as $index => $category)
                                            @php
                                                $isVisible = $index < $visibleLimit;
                                                $isCurrentL3 = request()->is(ltrim($category['url'], '/') . '*');
                                            @endphp

                                            @if ($index === $visibleLimit)
                                                <li class="head-nav_item head-nav_item--level-3 head-nav_item--more-categories">
                                                    <span class="head-nav_item_separator">&nbsp;|&nbsp;</span>
                                                    <div class="nav-link-wrap head-nav_link-wrap">
                                                        <a class="nav-link head-nav_link head-nav_link--level-3 head-nav_link--more"
                                                            href="{{ $level2['url'] }}"
                                                        >
                                                            <span class="head-nav_link-label">Další kategorie</span>
                                                        </a>
                                                    </div>
                                                </li>
                                            @endif

                                            <li data-menu-pnc="{{ $category['CategoryCode'] }}"
                                                data-menu-pnsub="{{ $category['SuperCategoryCode'] }}"
                                                class="head-nav_item head-nav_item--level-3{{ ! $isVisible ? ' head-nav_item--invisible' : '' }}{{ $isCurrentL3 ? ' is-current' : '' }}"
                                                wire:key="nav-l3-{{ $category['CategoryCode'] }}"
                                            >
                                                @if ($index > 0)
                                                    <span class="head-nav_item_separator">&nbsp;|&nbsp;</span>
                                                @endif

                                                <div class="nav-link-wrap head-nav_link-wrap">
                                                    <a class="nav-link head-nav_link head-nav_link--level-3"
                                                        data-ga-category="1"
                                                        data-ga-prefix="2"
                                                        data-nav-id="{{ $category['CategoryCode'] }}"
                                                        href="{{ $category['url'] }}"
                                                        @click="if(typeof GAAction !== 'undefined') GAAction($el.dataset.gaCategory, $el.dataset.gaPrefix, $($el))"
                                                    >
                                                        <span class="head-nav_link-label">{{ $category['CategoryName'] }}</span>
                                                    </a>
                                                </div>
                                            </li>

                                        @endforeach

                                    </ul>
                                </div>

                            </li>
                        @endforeach

                    </ul>
                </div>

            </li>
        @endforeach

    </ul>
</nav>
