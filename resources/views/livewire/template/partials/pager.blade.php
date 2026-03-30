@php
    $current  = $paginator->currentPage();
    $last     = $paginator->lastPage();
    $window   = 2; // pages around current

    // Build page list with gaps
    $pages = collect();
    for ($i = 1; $i <= $last; $i++) {
        if (
            $i === 1 ||
            $i === $last ||
            abs($i - $current) <= $window
        ) {
            $pages->push($i);
        }
    }
    $pages = $pages->unique()->sort()->values();
@endphp

<div class="{{ $class ?? 'pager pro-pager' }}">
    <div class="pager_in">

        @php $prev = null; @endphp
        @foreach ($pages as $page)
            @if ($prev !== null && $page - $prev > 1)
                <span class="pager_item pager_split">...</span>
            @endif

            @if ($page === $current)
                <span class="pager_item pager_item--current {{ $loop->first ? 'first' : '' }} {{ $loop->last ? 'last' : '' }}">
                    {{ $page }}
                </span>
            @else
                <a href="#"
                   class="pager_item {{ $loop->last ? 'last' : '' }}"
                   wire:click.prevent="setPage({{ $page }})">
                    {{ $page }}
                </a>
            @endif

            @php $prev = $page; @endphp
        @endforeach

        @if ($paginator->hasMorePages())
            <span class="pager_item pager_separate"></span>
            <a href="#" class="pager_item pager_next"
               wire:click.prevent="setPage({{ $current + 1 }})">
                <span class="pager_item_label">Další</span>
                <span class="pager_item_icon"><i class="icon-arrow-right"></i></span>
            </a>
        @endif

    </div>
</div>
