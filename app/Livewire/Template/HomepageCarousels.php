<?php

namespace App\Livewire\Template;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Services\CartService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;

class HomepageCarousels extends Component
{
    private const PRODUCTS_PER_CAROUSEL = 30;

    public function addToCart(int $proId, int $quantity): void
    {
        $quantity = max(1, $quantity);

        $product = Product::find($proId, ['ProId', 'Name', 'YourPrice']);

        if (! $product) {
            return;
        }

        app(CartService::class)->addItem(
            $proId,
            $product->Name,
            (float) $product->YourPrice,
            $quantity
        );

        $this->dispatch('meta-add-to-cart', id: $proId, value: round((float) $product->YourPrice * $quantity, 2));

        $this->dispatch('cart-updated');
        $this->dispatch('message', [
            'text' => 'Zboží bylo úspěšně přidáno do košíku',
            'type' => 'success',
            'status' => '200',
        ]);
    }

    public function render(): View
    {
        return view('livewire.template.homepage-carousels', [
            'carousels' => $this->loadCarousels(),
        ]);
    }

    private function loadCarousels(): array
    {
        return Cache::remember('homepage_carousels', 86400, fn (): array => $this->buildCarousels());
    }

    private function buildCarousels(): array
    {
        // One carousel per category — categories are a single flat level.
        $categories = ProductCategory::query()
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
                ->get(['ProId', 'Name', 'YourPrice', 'OnStock', 'Status', 'DescriptionShort']);
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
                    'YourPrice' => $p->YourPrice,
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
