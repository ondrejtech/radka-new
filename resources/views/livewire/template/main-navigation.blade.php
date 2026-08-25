<nav class="head-nav_in" role="navigation" aria-label="Hlavní navigace">
    <ul class="head-nav_group head-nav_group--level-1 level-1" role="menu">

        @foreach ($navigation as $category)
            @php
                $isCurrent = request()->is(ltrim($category['url'], '/') . '*');
            @endphp
            <li class="head-nav_item head-nav_item--level-1{{ $isCurrent ? ' is-current-floor is-current' : '' }}"
                wire:key="nav-l1-{{ $category['CategoryCode'] }}"
            >
                <div class="nav-link-wrap head-nav_link-wrap">
                    <a class="nav-link head-nav_link head-nav_link--level-1{{ $isCurrent ? ' head-nav_link--is-current' : '' }}"
                        data-ga-category="1"
                        data-ga-prefix="1"
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
</nav>
