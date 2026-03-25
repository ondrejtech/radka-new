<div>
@if (count($items))
<div class="breadcrumbs no-print" role="navigation" aria-label="Drobečková navigace">
    <div class="breadcrumbs_in">

        @if (count($dropdownCategories))
        <button id="subCategoryMenuBtnToggle" onclick="subCategoryMenu.toggle()" type="button"
            class="btn btn--link breadcrumbs_item breadcrumbs_item--vMenu-control">
            <i class="icon-menu breadcrumbs_item_icon"></i>
            <span class="breadcrumbs_item_label">Zobrazit menu</span>
        </button>
        @endif

        @foreach ($items as $item)
            @php $isLast = $loop->last; $isFirst = $loop->first; @endphp

            @unless ($loop->first)
                <i class="f-icon breadcrumbs_separate"></i>
            @endunless

            @if ($isLast)
                <strong class="breadcrumbs_item{{ $isFirst ? ' breadcrumbs_item--sup-cat' : '' }} breadcrumbs_item--curent">
                    @if ($item['icon'])
                        <i class="icon-home breadcrumbs_item_icon"></i>
                    @endif
                    <span class="breadcrumbs_item_label">{{ $item['label'] }}</span>
                </strong>
            @else
                <a href="{{ $item['url'] }}" class="breadcrumbs_item{{ $isFirst ? ' breadcrumbs_item--sup-cat' : '' }}">
                    @if ($item['icon'])
                        <i class="icon-home breadcrumbs_item_icon"></i>
                    @endif
                    <span class="breadcrumbs_item_label">{{ $item['label'] }}</span>
                </a>
            @endif

        @endforeach

        
        @if (count($dropdownCategories))
            <div class="dropdown">
                <button class="btn dropdown-toggle js-tooltip" type="button"
                    onclick="showBreadCrumbsSelect(this,{{ $dropdownPscCode }},0,0);"
                    data-title="tip_show_categories"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="dropdown-caret"></i>
                </button>
                <ul class="dropdown-menu">
                    @foreach ($dropdownCategories as $cat)
                        <li class="dropdown-item-wrap">
                            <a class="dropdown-item" href="{{ $cat['url'] }}">
                                {{ $cat['CategoryName'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
</div>
@endif
</div>
