<?php

namespace App\Livewire\Template;

use App\Models\Product;
use App\Models\ProductCategoryAttribute;
use App\Models\ProductInformation;
use App\Models\ProductProducer;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Component;

class SideProductFilter extends Component
{
    #[Locked]
    public int $catCode;

    public string $filterFulltext = '';

    public bool $filterOnStock = false;

    public int $filterOnStockQty = 1;

    /** @var string[] */
    public array $filterVendors = [];

    /** @var string[] */
    public array $filterFlags = [];

    public int $filterPriceFrom = 0;

    public int $filterPriceTo = 0;

    public bool $filterExcludeSale = false;

    /** @var string[] e.g. ['AttrCode|ValueCode', ...] */
    public array $selectedAttributes = [];

    public function mount(int $catCode): void
    {
        $this->catCode = $catCode;
    }

    public function updated(string $property): void
    {
        $this->dispatch('filters-updated', filters: $this->activeFilters());
    }

    /** @return array<string, mixed> */
    private function activeFilters(): array
    {
        return [
            'fulltext' => $this->filterFulltext,
            'onStock' => $this->filterOnStock,
            'onStockQty' => $this->filterOnStockQty,
            'vendors' => $this->filterVendors,
            'flags' => $this->filterFlags,
            'priceFrom' => $this->filterPriceFrom,
            'priceTo' => $this->filterPriceTo,
            'excludeSale' => $this->filterExcludeSale,
            'attributes' => $this->selectedAttributes,
        ];
    }

    public function render(): View
    {
        [$priceMin, $priceMax] = $this->loadPriceRange($this->catCode);

        return view('livewire.template.side-product-filter', [
            'vendors' => $this->loadVendors($this->catCode),
            'flags' => $this->loadFlags($this->catCode),
            'priceMin' => $priceMin,
            'priceMax' => $priceMax,
            'filterAttributes' => $this->loadAttributes($this->catCode),
        ]);
    }

    /**
     * @return array{0: int, 1: int}
     */
    private function loadPriceRange(int $catCode): array
    {
        $result = Product::query()
            ->where('CategoryCode', $catCode)
            ->whereNotNull('EndUserPrice')
            ->selectRaw('FLOOR(MIN(EndUserPrice)) as price_min, CEIL(MAX(EndUserPrice)) as price_max')
            ->first();

        return [(int) ($result->price_min ?? 0), (int) ($result->price_max ?? 0)];
    }

    /** @return Collection<int, ProductCategoryAttribute> */
    private function loadAttributes(int $catCode): Collection
    {
        $attributes = ProductCategoryAttribute::query()
            ->where('CategoryCode', $catCode)
            ->orderBy('AttributeCode')
            ->get();

        $valueCounts = DB::table('ProductCategoryAttributeValue')
            ->join('ProductNavigatorData', function ($join) {
                $join->on('ProductCategoryAttributeValue.AttributeCode', '=', 'ProductNavigatorData.AttributeCode')
                    ->on('ProductCategoryAttributeValue.ValueCode', '=', 'ProductNavigatorData.ValueCode');
            })
            ->join('Product', 'ProductNavigatorData.ProId', '=', 'Product.ProId')
            ->where('Product.CategoryCode', $catCode)
            ->whereIn('ProductCategoryAttributeValue.AttributeCode', $attributes->pluck('AttributeCode'))
            ->selectRaw('ProductCategoryAttributeValue.AttributeCode, ProductCategoryAttributeValue.ValueCode, ProductCategoryAttributeValue.Value, ProductCategoryAttributeValue.ValueSort, COUNT(Product.ProId) as product_count')
            ->groupBy('ProductCategoryAttributeValue.AttributeCode', 'ProductCategoryAttributeValue.ValueCode', 'ProductCategoryAttributeValue.Value', 'ProductCategoryAttributeValue.ValueSort')
            ->having('product_count', '>', 0)
            ->orderByDesc('product_count')
            ->get()
            ->groupBy('AttributeCode');

        return $attributes->each(function (ProductCategoryAttribute $attr) use ($valueCounts): void {
            $attr->values = $valueCounts->get($attr->AttributeCode, collect());
        })->filter(fn (ProductCategoryAttribute $attr) => $attr->values->isNotEmpty());
    }

    /** @return Collection<int, ProductInformation> */
    private function loadFlags(int $catCode): Collection
    {
        return ProductInformation::query()
            ->join('Product', 'ProductInformation.InfoCode', '=', 'Product.InfoCode')
            ->where('Product.CategoryCode', $catCode)
            ->where('ProductInformation.InfoCode', '!=', '0')
            ->selectRaw('ProductInformation.InfoCode, TRIM(ProductInformation.InfoName) as InfoName, COUNT(*) as product_count')
            ->groupBy('ProductInformation.InfoCode', 'ProductInformation.InfoName')
            ->orderByDesc('product_count')
            ->get();
    }

    /** @return Collection<int, ProductProducer> */
    private function loadVendors(int $catCode): Collection
    {
        return ProductProducer::query()
            ->join('Product', 'ProductProducer.ProducerCode', '=', 'Product.ProducerCode')
            ->where('Product.CategoryCode', $catCode)
            ->selectRaw('ProductProducer.ProducerCode, ProductProducer.ProducerName, ProductProducer.ProducerId, COUNT(*) as product_count')
            ->groupBy('ProductProducer.ProducerCode', 'ProductProducer.ProducerName', 'ProductProducer.ProducerId')
            ->orderByDesc('product_count')
            ->orderBy('ProductProducer.ProducerName')
            ->get();
    }
}
