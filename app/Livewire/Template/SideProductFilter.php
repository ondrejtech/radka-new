<?php

namespace App\Livewire\Template;

use App\Models\Product;
use App\Models\ProductInformation;
use App\Models\ProductProducer;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;

class SideProductFilter extends Component
{
    public function render(): View
    {
        $catCode = $this->parseCategoryCode();

        [$priceMin, $priceMax] = $catCode ? $this->loadPriceRange($catCode) : [0, 0];

        return view('livewire.template.side-product-filter', [
            'vendors' => $catCode ? $this->loadVendors($catCode) : collect(),
            'flags' => $catCode ? $this->loadFlags($catCode) : collect(),
            'priceMin' => $priceMin,
            'priceMax' => $priceMax,
        ]);
    }

    private function parseCategoryCode(): ?int
    {
        if (! preg_match('/n-\w+,(\d+),\d+/', request()->path(), $m)) {
            return null;
        }

        $code = (int) $m[1];

        return $code > 0 ? $code : null;
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
