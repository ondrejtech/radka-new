<?php

namespace App\Livewire\Template;

use App\Models\Product;
use App\Models\ProductCategory;
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

    public ?int $pscCode = null;

    public bool $isL1 = false;

    public function mount(): void
    {
        [$this->pscCode, $this->isL1] = $this->resolveCode();
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
        $this->dispatch('message', [
            'text' => 'Zboží bylo úspěšně přidáno do košíku',
            'type' => 'success',
            'status' => '200',
        ]);
    }

    public function render(): View
    {
        $carousels = $this->pscCode ? $this->loadCarousels($this->pscCode, $this->isL1) : [];

        return view('livewire.template.homepage-carousels', [
            'carousels' => $carousels,
        ]);
    }

    /**
     * @return array{0: ?int, 1: bool}
     */
    private function resolveCode(): array
    {
        if (! preg_match('/n-(\w+),(\d+),(\d+)/', request()->path(), $m)) {
            return [null, false];
        }

        // Only render on L1/L2 pages — catCode must be 0
        if ((int) $m[2] !== 0) {
            return [null, false];
        }

        $code = (int) $m[1];
        $isL1 = ProductSuperCategory::where('ParentSuperCategoryCode', $code)->exists();

        // L2 must be a known PSC code
        if (! $isL1 && ! ProductSuperCategory::where('SuperCategoryCode', $code)->exists()) {
            return [null, false];
        }

        return [$code, $isL1];
    }

    private function loadCarousels(int $code, bool $isL1): array
    {
        $key = $isL1 ? "homepage_carousels_l1_{$code}" : "homepage_carousels_l2_{$code}";

        return Cache::remember($key, 3600, fn (): array => $isL1
            ? $this->buildL1Carousels($code)
            : $this->buildL2Carousels($code)
        );
    }

    private function buildL1Carousels(int $l1Code): array
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

            $carousel = $this->buildCarouselFromCategoryCodes($categoryCodes, $l2->SuperCategoryName);

            if ($carousel) {
                $carousels[] = $carousel;
            }
        }

        return $carousels;
    }

    private function buildL2Carousels(int $l2Code): array
    {
        $categories = ProductCategory::where('SuperCategoryCode', $l2Code)
            ->orderBy('CategoryCode')
            ->get();

        $carousels = [];

        foreach ($categories as $category) {
            $carousel = $this->buildCarouselFromCategoryCodes(
                [$category->CategoryCode],
                $category->CategoryName
            );

            if ($carousel) {
                $carousels[] = $carousel;
            }
        }

        return $carousels;
    }

    private function buildCarouselFromCategoryCodes(array $categoryCodes, string $title): ?array
    {
        $products = Product::whereIn('CategoryCode', $categoryCodes)
            ->orderByDesc('IsTop')
            ->orderByDesc('OnStock')
            ->limit(self::PRODUCTS_PER_CAROUSEL)
            ->get(['ProId', 'Name', 'EndUserPrice', 'OnStock', 'Status', 'DescriptionShort']);

        if ($products->isEmpty()) {
            return null;
        }

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

        return [
            'title' => $title,
            'products' => $products,
        ];
    }
}
