<?php

namespace App\Livewire\Template;

use App\Models\Product;
use App\Services\CartService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class SearchLayout extends Component
{
    #[Locked]
    public string $fulltext = '';

    public string $sort = '8_desc';

    public int $page = 1;

    public string $vendorFilter = '';

    public int $priceFrom = 0;

    public int $priceTo = 0;

    public bool $onStock = false;

    private const PER_PAGE = 25;

    /** @var array<string, array{column: string, direction: string}[]> */
    private const SORT_MAP = [
        '8_desc' => [['column' => 'IsTop', 'direction' => 'desc'], ['column' => 'EndUserPrice', 'direction' => 'desc']],
        '13_asc' => [['column' => 'EndUserPrice', 'direction' => 'asc']],
        '13_desc' => [['column' => 'EndUserPrice', 'direction' => 'desc']],
        '11_asc' => [['column' => 'IsTop', 'direction' => 'desc']],
        '14_asc' => [['column' => 'Name', 'direction' => 'asc']],
        '14_desc' => [['column' => 'Name', 'direction' => 'desc']],
        '16_asc' => [['column' => 'OnStockCount', 'direction' => 'asc']],
        '16_desc' => [['column' => 'OnStockCount', 'direction' => 'desc']],
    ];

    public function mount(string $fulltext = ''): void
    {
        $this->fulltext = $fulltext;
    }

    public function updatedSort(): void
    {
        $this->page = 1;
    }

    public function updatedVendorFilter(): void
    {
        $this->page = 1;
    }

    public function updatedOnStock(): void
    {
        $this->page = 1;
    }

    public function loadMore(): void
    {
        $this->page++;
    }

    public function setPage(int $page): void
    {
        $this->page = max(1, $page);
    }

    #[Renderless]
    public function addToCart(int $proId, int $quantity): void
    {
        $quantity = max(1, $quantity);

        $product = Product::find($proId, ['ProId', 'Name', 'EndUserPrice']);

        if (! $product) {
            return;
        }

        app(CartService::class)->addItem(
            $proId,
            $product->Name,
            (float) $product->EndUserPrice,
            $quantity
        );

        $this->dispatch('meta-add-to-cart', id: $proId, value: round((float) $product->EndUserPrice * $quantity, 2));

        $this->dispatch('cart-updated')->to('template.cart-widget');
        $this->dispatch('message', [
            'text' => 'Zboží bylo úspěšně přidáno do košíku',
            'type' => 'success',
            'status' => '200',
        ]);
    }

    public function render(): View
    {
        $orders = self::SORT_MAP[$this->sort] ?? self::SORT_MAP['8_desc'];

        $query = Product::query()
            ->with(['product_images', 'product_ext_info_codes.product_information']);

        $this->applyFilters($query);

        foreach ($orders as $order) {
            $query->orderBy($order['column'], $order['direction']);
        }

        $countQuery = Product::query();
        $this->applyFilters($countQuery);
        $total = $countQuery->count();

        $take = self::PER_PAGE * $this->page;
        $products = $query->take($take + 1)->get();
        $hasMore = $products->count() > $take;

        if ($hasMore) {
            $products = $products->take($take);
        }

        $vendors = Product::query()
            ->where(function (Builder $q): void {
                $this->applyFulltextFilter($q);
            })
            ->whereNotNull('ProducerName')
            ->where('ProducerName', '!=', '')
            ->distinct()
            ->orderBy('ProducerName')
            ->pluck('ProducerName')
            ->values();

        $paginator = new LengthAwarePaginator(
            $products,
            $total,
            self::PER_PAGE,
            $this->page,
            ['path' => request()->url()]
        );

        return view('livewire.template.search-layout', [
            'products' => $products,
            'paginator' => $paginator,
            'total' => $total,
            'hasMore' => $hasMore,
            'vendors' => $vendors,
        ]);
    }

    private function applyFilters(Builder $query): void
    {
        $query->where(function (Builder $q): void {
            $this->applyFulltextFilter($q);
        });

        if ($this->vendorFilter !== '') {
            $query->where('ProducerCode', $this->vendorFilter);
        }

        if ($this->priceFrom > 0) {
            $query->where('EndUserPrice', '>=', $this->priceFrom);
        }

        if ($this->priceTo > 0) {
            $query->where('EndUserPrice', '<=', $this->priceTo);
        }

        if ($this->onStock) {
            $query->where('OnStock', 1)->where('OnStockCount', '>=', 1);
        }
    }

    private function applyFulltextFilter(Builder $query): void
    {
        $term = $this->fulltext;

        $query->where('Name', 'like', "%{$term}%")
            ->orWhere('Code', 'like', "%{$term}%")
            ->orWhere('PartNumber', 'like', "%{$term}%");
    }
}
