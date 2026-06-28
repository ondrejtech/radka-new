<?php

namespace App\Livewire\Template;

use App\Models\Product;
use App\Models\ProductSuperCategory;
use App\Services\NavigationService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Component;

class SideNavigation extends Component
{
    /** Set when rendered on a product detail page */
    #[Locked]
    public ?int $proId = null;

    public function render(NavigationService $navigationService): View
    {
        if ($this->proId !== null) {
            [$parentCode, $activeSuperCatCode, $activeCategoryCode] = $this->resolveFromProduct($this->proId, $navigationService);
        } else {
            [$parentCode, $activeSuperCatCode, $activeCategoryCode] = $this->parseUrlCodes();
        }

        return view('livewire.template.side-navigation', [
            'navigation' => $parentCode ? $this->loadNavigation($parentCode) : [],
            'activeSuperCatCode' => $activeSuperCatCode,
            'activeCategoryCode' => $activeCategoryCode,
        ]);
    }

    /**
     * Resolve navigation codes from a product's category via NavigationService.
     *
     * @return array{0: int|null, 1: int|null, 2: int|null}
     */
    private function resolveFromProduct(int $proId, NavigationService $navigationService): array
    {
        $product = Product::query()->where('ProId', $proId)->first(['CategoryCode']);

        if (! $product) {
            return [null, null, null];
        }

        $catCode = (int) $product->CategoryCode;

        foreach ($navigationService->getNavigation() as $level2) {
            foreach ($level2['categories'] as $category) {
                if ((int) $category['CategoryCode'] === $catCode) {
                    return [
                        $this->resolveParentCode((int) $level2['SuperCategoryCode']),
                        (int) $level2['SuperCategoryCode'],
                        $catCode,
                    ];
                }
            }
        }

        return [null, null, null];
    }

    /**
     * Parse URL codes from n-{X},{Y},{Z} pattern.
     *
     * @return array{0: int|null, 1: int|null, 2: int|null}
     */
    private function parseUrlCodes(): array
    {
        if (! preg_match('/n-(\w+),(\d+),(\d+)/', request()->path(), $m)) {
            return [null, null, null];
        }

        $superCatCode = (int) $m[1];  // X — SuperCategoryCode of L1 item
        $categoryCode = (int) $m[2];  // Y — CategoryCode (0 = none selected)

        $parentCode = $this->resolveParentCode($superCatCode);

        return [$parentCode, $superCatCode, $categoryCode ?: null];
    }

    private function resolveParentCode(int $code): ?int
    {
        if (ProductSuperCategory::where('ParentSuperCategoryCode', $code)->exists()) {
            return $code;
        }

        $item = ProductSuperCategory::find($code);

        return $item?->ParentSuperCategoryCode ?? null;
    }

    /** @return array<int, array<string, mixed>> */
    private function loadNavigation(int $parentCode): array
    {
        return Cache::remember("side_navigation_{$parentCode}", 3600, fn (): array => $this->loadItems($parentCode));
    }

    /** @return array<int, array<string, mixed>> */
    private function loadItems(int $parentCode): array
    {
        $items = ProductSuperCategory::query()
            ->where('ParentSuperCategoryCode', $parentCode)
            ->with(['categories'])
            ->orderBy('SuperCategoryCode')
            ->get();

        return $items->map(function (ProductSuperCategory $l1): array {
            $slugL1 = Str::slug($l1->SuperCategoryName);
            $l1Url = "/info-other/{$slugL1}/n-{$l1->SuperCategoryCode},0,0";

            $categories = $l1->categories->map(function ($cat) use ($slugL1): array {
                $slugCat = Str::slug($cat->CategoryName);

                return [
                    'CategoryCode' => $cat->CategoryCode,
                    'CategoryName' => $cat->CategoryName,
                    'url' => "/{$slugL1}/{$slugCat}/n-{$cat->SuperCategoryCode},{$cat->CategoryCode},0",
                ];
            })->values()->all();

            return [
                'SuperCategoryCode' => $l1->SuperCategoryCode,
                'SuperCategoryName' => $l1->SuperCategoryName,
                'url' => $l1Url,
                'categories' => $categories,
                'hasCategories' => count($categories) > 0,
            ];
        })->values()->all();
    }
}
