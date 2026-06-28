<?php

namespace App\Services;

use App\Models\ProductSuperCategory;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class NavigationService
{
    private const CACHE_KEY = 'main_navigation';

    private const CACHE_TTL = 3600;

    private const ROOT_SUPER_CATEGORY_CODE = 52;

    /** @return array<int, array<string, mixed>> */
    public function getNavigation(): array
    {
        return Cache::remember(self::CACHE_KEY, self::CACHE_TTL, fn (): array => $this->buildNavigation());
    }

    /** @return array<int, array<string, mixed>> */
    private function buildNavigation(): array
    {
        $items = ProductSuperCategory::query()
            ->where('ParentSuperCategoryCode', self::ROOT_SUPER_CATEGORY_CODE)
            ->with(['categories'])
            ->orderBy('SuperCategoryCode')
            ->get();

        return $items->map(function (ProductSuperCategory $level2): array {
            $slugL2 = Str::slug($level2->SuperCategoryName);
            $level2Url = "/info-other/{$slugL2}/n-{$level2->SuperCategoryCode},0,0";

            $categories = $level2->categories->map(function ($category) use ($slugL2): array {
                $slugL3 = Str::slug($category->CategoryName);

                return [
                    'CategoryCode' => $category->CategoryCode,
                    'CategoryName' => $category->CategoryName,
                    'SuperCategoryCode' => $category->SuperCategoryCode,
                    'url' => "/{$slugL2}/{$slugL3}/n-{$category->SuperCategoryCode},{$category->CategoryCode},0",
                ];
            })->values()->all();

            return [
                'SuperCategoryCode' => $level2->SuperCategoryCode,
                'SuperCategoryName' => $level2->SuperCategoryName,
                'url' => $level2Url,
                'categories' => $categories,
            ];
        })->values()->all();
    }
}
