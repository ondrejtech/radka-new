<?php

namespace App\Livewire\Template;

use App\Models\ProductSuperCategory;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;

class MainNavigation extends Component
{
    private const VISIBLE_LIMIT = 5;

    private const LEVEL1_META = [
        '52' => ['icon' => 'icon-it-products', 'modifier' => 'it-products', 'slug' => 'it', 'prefix' => 'info'],
        '53' => ['icon' => 'icon-electronics', 'modifier' => 'electronics', 'slug' => 'elektronika', 'prefix' => 'info-other'],
        '54' => ['icon' => 'icon-small-appliances', 'modifier' => 'small-appliances', 'slug' => 'domacnost', 'prefix' => 'info-other'],
        '55' => ['icon' => 'icon-large-appliances', 'modifier' => 'large-appliances', 'slug' => 'velke-spotrebice', 'prefix' => 'info-other'],
        '56' => ['icon' => 'icon-sport-outdoor', 'modifier' => 'sport-outdoor', 'slug' => 'sport-a-volny-cas', 'prefix' => 'info-other'],
        '57' => ['icon' => 'icon-house-garden', 'modifier' => 'house-garden', 'slug' => 'hobby-a-zahrada', 'prefix' => 'info-other'],
        '58' => ['icon' => 'icon-body-care', 'modifier' => 'body-care', 'slug' => 'pece-o-telo', 'prefix' => 'info-other'],
    ];

    public function render(): View
    {
        $navigation = $this->loadNavigation();

        return view('livewire.template.main-navigation', [
            'navigation' => $navigation,
            'visibleLimit' => self::VISIBLE_LIMIT,
        ]);
    }

    private function loadNavigation(): array
    {
        return Cache::remember('main_navigation', 3600, function (): array {
            $items = ProductSuperCategory::query()
                ->whereNull('ParentSuperCategoryCode')
                ->with(['product_super_categories.categories'])
                ->orderBy('SuperCategoryCode')
                ->get();

            return $items->map(function (ProductSuperCategory $level1): array {
                $meta = self::LEVEL1_META[$level1->SuperCategoryCode] ?? null;
                $url = $meta
                    ? "/{$meta['prefix']}/{$meta['slug']}/n-{$level1->SuperCategoryCode},0,0"
                    : '#';

                $children = $level1->product_super_categories->map(function (ProductSuperCategory $level2): array {
                    $slugL2 = Str::slug($level2->SuperCategoryName);
                    $level2Url = "/info-other/{$slugL2}/n-{$level2->SuperCategoryCode},0,0";

                    $categories = $level2->categories->map(function ($category) use ($level2, $slugL2): array {
                        $slugL3 = Str::slug($category->CategoryName);

                        return [
                            'CategoryCode' => $category->CategoryCode,
                            'CategoryName' => $category->CategoryName,
                            'SuperCategoryCode' => $level2->SuperCategoryCode,
                            'url' => "/{$slugL2}/{$slugL3}/n-{$level2->SuperCategoryCode},{$category->CategoryCode},0",
                        ];
                    })->values()->all();

                    return [
                        'SuperCategoryCode' => $level2->SuperCategoryCode,
                        'SuperCategoryName' => $level2->SuperCategoryName,
                        'url' => $level2Url,
                        'categories' => $categories,
                    ];
                })->values()->all();

                return [
                    'SuperCategoryCode' => $level1->SuperCategoryCode,
                    'SuperCategoryName' => $level1->SuperCategoryName,
                    'meta' => $meta,
                    'url' => $url,
                    'children' => $children,
                ];
            })->values()->all();
        });
    }
}
