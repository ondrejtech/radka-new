<?php

namespace App\Livewire\Template;

use App\Models\Product;
use App\Services\CartService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class ProductLayout extends Component
{
    #[Locked]
    public int $catCode;

    public string $sort = '8_desc';

    public int $page = 1;

    /** @var array<string, mixed> */
    public array $filters = [];

    private const PER_PAGE = 25;

    /** @var array<string, array{column: string, direction: string}[]> */
    private const SORT_MAP = [
        '8_desc' => [['column' => 'IsTop',        'direction' => 'desc'], ['column' => 'EndUserPrice', 'direction' => 'desc']],
        '13_asc' => [['column' => 'EndUserPrice',  'direction' => 'asc']],
        '13_desc' => [['column' => 'EndUserPrice',  'direction' => 'desc']],
        '11_asc' => [['column' => 'IsTop',         'direction' => 'desc']],
        '12_asc' => [['column' => 'IndexOrder1',   'direction' => 'asc']],
        '14_asc' => [['column' => 'Name',          'direction' => 'asc']],
        '14_desc' => [['column' => 'Name',          'direction' => 'desc']],
        '16_asc' => [['column' => 'OnStockCount',  'direction' => 'asc']],
        '16_desc' => [['column' => 'OnStockCount',  'direction' => 'desc']],
    ];

    public function mount(int $catCode): void
    {
        $this->catCode = $catCode;
    }

    public function updatedSort(): void
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

    /** @param array<string, mixed> $filters */
    #[On('filters-updated')]
    public function applyFilters(array $filters): void
    {
        $this->filters = $filters;
        $this->page = 1;
    }

    #[Renderless]
    public function addToCompare(int $proId, int $catCode): void
    {
        $this->dispatch('add-to-compare', proId: $proId, catCode: $catCode)->to('template.compare-bar');
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
            ->with(['product_images', 'product_ext_info_codes.product_information'])
            ->where('CategoryCode', $this->catCode);

        $this->applyFiltersToQuery($query);

        foreach ($orders as $order) {
            $query->orderBy($order['column'], $order['direction']);
        }

        $countQuery = Product::query()->where('CategoryCode', $this->catCode);
        $this->applyFiltersToQuery($countQuery);
        $total = $countQuery->count();

        $take = self::PER_PAGE * $this->page;
        $products = $query->take($take + 1)->get();
        $hasMore = $products->count() > $take;

        if ($hasMore) {
            $products = $products->take($take);
        }

        $paginator = new LengthAwarePaginator(
            $products,
            $total,
            self::PER_PAGE,
            $this->page,
            ['path' => request()->url()]
        );

        return view('livewire.template.product-layout', [
            'products' => $products,
            'paginator' => $paginator,
            'total' => $total,
            'hasMore' => $hasMore,
        ]);
    }

    private function applyFiltersToQuery(Builder $query): void
    {
        $f = $this->filters;

        if (! empty($f['fulltext'])) {
            $query->where('Name', 'like', '%'.$f['fulltext'].'%');
        }

        if (! empty($f['onStock'])) {
            $qty = max(1, (int) ($f['onStockQty'] ?? 1));
            $query->where('OnStock', 1)->where('OnStockCount', '>=', $qty);
        }

        if (! empty($f['vendors'])) {
            $query->whereIn('ProducerCode', (array) $f['vendors']);
        }

        if (! empty($f['flags'])) {
            $query->whereIn('InfoCode', (array) $f['flags']);
        }

        if (! empty($f['priceFrom']) && (int) $f['priceFrom'] > 0) {
            $query->where('EndUserPrice', '>=', (int) $f['priceFrom']);
        }

        if (! empty($f['priceTo']) && (int) $f['priceTo'] > 0) {
            $query->where('EndUserPrice', '<=', (int) $f['priceTo']);
        }

        if (! empty($f['excludeSale'])) {
            $saleInfoCodes = \DB::table('ProductInformation')
                ->where('InfoName', 'like', '%Doprodej%')
                ->pluck('InfoCode');

            if ($saleInfoCodes->isNotEmpty()) {
                $query->whereNotIn('InfoCode', $saleInfoCodes);
            }
        }

        if (! empty($f['attributes'])) {
            $attrGroups = [];
            foreach ((array) $f['attributes'] as $combined) {
                [$attrCode, $valueCode] = explode('|', (string) $combined, 2);
                $attrGroups[$attrCode][] = $valueCode;
            }
            foreach ($attrGroups as $attrCode => $valueCodes) {
                $query->whereHas('product_navigator_data', function (Builder $q) use ($attrCode, $valueCodes): void {
                    $q->where('AttributeCode', $attrCode)
                        ->whereIn('ValueCode', $valueCodes);
                });
            }
        }
    }
}
