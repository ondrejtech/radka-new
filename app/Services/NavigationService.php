<?php

namespace App\Services;

use App\Models\ProductCategory;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class NavigationService
{
    private const CACHE_KEY = 'main_navigation';

    private const CACHE_TTL = 3600;

    /** @return array<int, array<string, mixed>> */
    public function getNavigation(): array
    {
        return Cache::remember(self::CACHE_KEY, self::CACHE_TTL, fn (): array => $this->buildNavigation());
    }

    /** @return array<int, array<string, mixed>> */
    private function buildNavigation(): array
    {
        return ProductCategory::query()
            ->orderBy('CategoryCode')
            ->get(['CategoryCode', 'CategoryName', 'SuperCategoryCode'])
            ->unique('CategoryCode')
            ->values()
            ->map(fn (ProductCategory $category): array => [
                'CategoryCode' => (int) $category->CategoryCode,
                'CategoryName' => $category->CategoryName,
                'SuperCategoryCode' => (int) $category->SuperCategoryCode,
                'url' => '/kategorie/'.Str::slug($category->CategoryName).'/n-0,'.$category->CategoryCode.',0',
            ])
            ->all();
    }
}
