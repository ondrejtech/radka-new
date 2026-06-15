<?php

namespace App\Livewire\Template;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class CompareBar extends Component
{
    public bool $isOpen = true;

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

    #[On('add-to-compare')]
    public function addProduct(int $proId, int $catCode): void
    {
        $items = $this->getItems();

        $exists = collect($items)->contains(fn ($i) => $i['proId'] === $proId);

        if (! $exists) {
            $items[] = ['proId' => $proId, 'catCode' => $catCode];
            $this->saveItems($items);
        }

        $this->activeCatCode = $catCode;
        $this->isOpen = true;
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

    public function removeSelected(): void
    {
        $activeCat = $this->activeCatCode;

        $items = collect($this->getItems())
            ->reject(fn ($i) => $i['catCode'] === $activeCat)
            ->values()
            ->all();

        $this->saveItems($items);

        $first = collect($this->getItems())->first();
        $this->activeCatCode = $first ? $first['catCode'] : 0;
    }

    #[Renderless]
    public function close(): void
    {
        $this->isOpen = false;
    }

    public function changeCategory(int $catCode): void
    {
        $this->activeCatCode = $catCode;
    }

    public function render(): View
    {
        $items = collect($this->getItems());

        /** @var Collection<int, int> $categories */
        $categories = $items->pluck('catCode')->unique()->values();

        if ($this->activeCatCode === 0 && $categories->isNotEmpty()) {
            $this->activeCatCode = $categories->first();
        }

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

        $categoryNames = $categories->isNotEmpty()
            ? ProductCategory::query()
                ->whereIn('CategoryCode', $categories)
                ->pluck('CategoryName', 'CategoryCode')
            : collect();

        return view('livewire.template.compare-bar', [
            'products' => $products,
            'categories' => $categories,
            'categoryNames' => $categoryNames,
            'totalItems' => $items->count(),
        ]);
    }
}
