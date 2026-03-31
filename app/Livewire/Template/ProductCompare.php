<?php

namespace App\Livewire\Template;

use App\Models\Product;
use App\Models\ProductCategoryAttribute;
use App\Models\ProductNavigatorDatum;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Component;

class ProductCompare extends Component
{
    #[Locked]
    public int $initialCatCode;

    public int $activeCatCode = 0;

    /** @return array<int, array{proId: int, catCode: int}> */
    private function getItems(): array
    {
        return session('compare_bar_items', []);
    }

    /** @param array<int, array{proId: int, catCode: int}> $items */
    private function saveItems(array $items): void
    {
        session(['compare_bar_items' => array_values($items)]);
    }

    public function mount(int $catCode): void
    {
        $this->initialCatCode = $catCode;
        $this->activeCatCode = $catCode;
    }

    public function changeCategory(int $catCode): void
    {
        $this->activeCatCode = $catCode;
    }

    public function removeProduct(int $proId): void
    {
        $items = collect($this->getItems())
            ->reject(fn ($i) => $i['proId'] === $proId)
            ->values()
            ->all();

        $this->saveItems($items);

        $remaining = collect($this->getItems())->where('catCode', $this->activeCatCode);
        if ($remaining->isEmpty()) {
            $first = collect($this->getItems())->first();
            $this->activeCatCode = $first ? $first['catCode'] : 0;
        }
    }

    public function removeCategory(int $catCode): void
    {
        $items = collect($this->getItems())
            ->reject(fn ($i) => $i['catCode'] === $catCode)
            ->values()
            ->all();

        $this->saveItems($items);

        if ($this->activeCatCode === $catCode) {
            $first = collect($this->getItems())->first();
            $this->activeCatCode = $first ? $first['catCode'] : 0;
        }
    }

    public function render(): View
    {
        $items = collect($this->getItems());

        /** @var Collection<int, int> $categories */
        $categories = $items->pluck('catCode')->unique()->values();

        if ($this->activeCatCode === 0 && $categories->isNotEmpty()) {
            $this->activeCatCode = $categories->first();
        }

        $categoryNames = $categories->isNotEmpty()
            ? DB::table('ProductCategory')
                ->whereIn('CategoryCode', $categories)
                ->pluck('CategoryName', 'CategoryCode')
            : collect();

        $categoryCounts = $items->groupBy('catCode')->map->count();

        $activeProIds = $items
            ->where('catCode', $this->activeCatCode)
            ->pluck('proId');

        $products = $activeProIds->isNotEmpty()
            ? Product::query()
                ->with('product_images')
                ->whereIn('ProId', $activeProIds)
                ->get()
                ->sortBy(fn ($p) => $activeProIds->search($p->ProId))
                ->values()
            : collect();

        /** @var Collection<int, ProductCategoryAttribute> $attributes */
        $attributes = $this->activeCatCode > 0
            ? ProductCategoryAttribute::where('CategoryCode', $this->activeCatCode)
                ->orderBy('AttributeCode')
                ->get()
            : collect();

        /** @var array<string, array<int, string>> $attributeValues [attributeCode][proId] = value */
        $attributeValues = [];
        if ($attributes->isNotEmpty() && $activeProIds->isNotEmpty()) {
            $navData = ProductNavigatorDatum::query()
                ->whereIn('ProId', $activeProIds)
                ->whereIn('AttributeCode', $attributes->pluck('AttributeCode'))
                ->with('product_category_attribute_value')
                ->get();

            foreach ($navData as $nav) {
                $attributeValues[$nav->AttributeCode][$nav->ProId] = $nav->product_category_attribute_value?->Value;
            }
        }

        return view('livewire.template.product-compare', [
            'categories' => $categories,
            'categoryNames' => $categoryNames,
            'categoryCounts' => $categoryCounts,
            'products' => $products,
            'attributes' => $attributes,
            'attributeValues' => $attributeValues,
            'totalItems' => $items->count(),
        ]);
    }
}
