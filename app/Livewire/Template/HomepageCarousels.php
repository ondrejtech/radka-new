<?php

namespace App\Livewire\Template;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSuperCategory;
use App\Services\CartService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;

class HomepageCarousels extends Component
{
    private const PRODUCTS_PER_CAROUSEL = 30;

    public ?int $l1Code = null;

    public function mount(): void
    {
        $this->l1Code = $this->resolveL1Code();
    }

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

        $this->dispatch('cart-updated');
    }

    public function render(): View
    {
        $carousels = $this->l1Code ? $this->loadCarousels($this->l1Code) : [];

        return view('livewire.template.homepage-carousels', [
            'carousels' => $carousels,
        ]);
    }

    private function resolveL1Code(): ?int
    {
        if (! preg_match('/n-(\w+),(\d+),(\d+)/', request()->path(), $m)) {
            return null;
        }

        $code = (int) $m[1];

        // Only render on L1 pages — X must directly be a root code with PSC children
        if (! ProductSuperCategory::where('ParentSuperCategoryCode', $code)->exists()) {
            return null;
        }

        return $code;
    }

    private function loadCarousels(int $l1Code): array
    {
        return Cache::remember("homepage_carousels_{$l1Code}", 3600, fn (): array => $this->buildCarousels($l1Code));
    }

    private function buildCarousels(int $l1Code): array
    {
        $l2Children = ProductSuperCategory::where('ParentSuperCategoryCode', $l1Code)
            ->orderBy('SuperCategoryCode')
            ->get();

        $carousels = [];

        foreach ($l2Children as $l2) {
            $categoryCodes = $l2->categories()->pluck('CategoryCode')->toArray();

            if (empty($categoryCodes)) {
                continue;
            }

            $products = Product::whereIn('CategoryCode', $categoryCodes)
                ->orderByDesc('IsTop')
                ->orderByDesc('OnStock')
                ->limit(self::PRODUCTS_PER_CAROUSEL)
                ->get(['ProId', 'Name', 'EndUserPrice', 'OnStock', 'Status', 'DescriptionShort']);

            $productIds = $products->pluck('ProId')->toArray();

            $images = ProductImage::whereIn('ProId', $productIds)
                ->get(['ProId', 'URL'])
                ->groupBy('ProId')
                ->map(fn ($imgs) => $imgs->first()->URL);

            $products = $products
                ->map(fn (Product $p): array => [
                    'ProId' => $p->ProId,
                    'Name' => $p->Name,
                    'slug' => Str::slug($p->Name),
                    'EndUserPrice' => $p->EndUserPrice,
                    'OnStock' => (bool) $p->OnStock,
                    'Status' => $p->Status,
                    'DescriptionShort' => $p->DescriptionShort,
                    'imageUrl' => $images[$p->ProId] ?? '',
                ])
                ->toArray();

            if (empty($products)) {
                continue;
            }

            $carousels[] = [
                'title' => $l2->SuperCategoryName,
                'products' => $products,
            ];
        }

        return $carousels;
    }
}
