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

        return Cache::remember($key, 86400, fn (): array => $isL1
            ? $this->buildL1Carousels($code)
            : $this->buildL2Carousels($code)
        );
    }

    private function buildL1Carousels(int $l1Code): array
    {
        // 1 query: all L2 children with their categories eager-loaded
        $l2Children = ProductSuperCategory::where('ParentSuperCategoryCode', $l1Code)
            ->with('categories:SuperCategoryCode,CategoryCode,CategoryName')
            ->orderBy('SuperCategoryCode')
            ->get();

        // Build map: L2 SuperCategoryCode → [CategoryCode, ...]
        $l2CategoryMap = [];
        foreach ($l2Children as $l2) {
            $codes = $l2->categories->pluck('CategoryCode')->toArray();
            if (! empty($codes)) {
                $l2CategoryMap[$l2->SuperCategoryCode] = [
                    'title' => $l2->SuperCategoryName,
                    'categoryCodes' => $codes,
                ];
            }
        }

        return $this->buildCarouselsFromMap($l2CategoryMap);
    }

    private function buildL2Carousels(int $l2Code): array
    {
        // 1 query: all categories under this L2
        $categories = ProductCategory::where('SuperCategoryCode', $l2Code)
            ->orderBy('CategoryCode')
            ->get(['CategoryCode', 'CategoryName']);

        $map = [];
        foreach ($categories as $cat) {
            $map[$cat->CategoryCode] = [
                'title' => $cat->CategoryName,
                'categoryCodes' => [$cat->CategoryCode],
            ];
        }

        return $this->buildCarouselsFromMap($map);
    }

    /** @param array<int|string, array{title: string, categoryCodes: int[]}> $map */
    private function buildCarouselsFromMap(array $map): array
    {
        if (empty($map)) {
            return [];
        }

        // N queries (one per group, with LIMIT) — necessary for correct per-carousel limiting
        $groupProducts = [];
        foreach ($map as $key => $entry) {
            $groupProducts[$key] = Product::whereIn('CategoryCode', $entry['categoryCodes'])
                ->orderByDesc('IsTop')
                ->orderByDesc('OnStock')
                ->limit(self::PRODUCTS_PER_CAROUSEL)
                ->get(['ProId', 'Name', 'EndUserPrice', 'OnStock', 'Status', 'DescriptionShort']);
        }

        // 1 batch query: all images for all carousel products at once
        $allProIds = collect($groupProducts)->flatten()->pluck('ProId')->unique()->toArray();
        $allImages = ProductImage::whereIn('ProId', $allProIds)
            ->get(['ProId', 'URL'])
            ->groupBy('ProId')
            ->map(fn ($imgs) => $imgs->first()->URL);

        $carousels = [];

        foreach ($map as $key => $entry) {
            $products = $groupProducts[$key];

            if ($products->isEmpty()) {
                continue;
            }

            $carousels[] = [
                'title' => $entry['title'],
                'products' => $products->map(fn (Product $p): array => [
                    'ProId' => $p->ProId,
                    'Name' => $p->Name,
                    'slug' => Str::slug($p->Name),
                    'EndUserPrice' => $p->EndUserPrice,
                    'OnStock' => (bool) $p->OnStock,
                    'Status' => $p->Status,
                    'DescriptionShort' => $p->DescriptionShort,
                    'imageUrl' => $allImages[$p->ProId] ?? '',
                ])->values()->toArray(),
            ];
        }

        return $carousels;
    }
}
