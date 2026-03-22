@if (count($items))
<div class="breadcrumbs no-print" role="navigation" aria-label="Drobečková navigace">
    <div class="breadcrumbs_in">

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

    </div>
</div>
@endif
