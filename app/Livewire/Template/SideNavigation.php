<?php

namespace App\Livewire\Template;

use App\Models\ProductSuperCategory;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;

class SideNavigation extends Component
{
    public function render(): View
    {
        return view('livewire.template.side-navigation', [
            'navigation' => $this->buildNavigation(),
        ]);
    }

    /** @return array<int, array<string, mixed>> */
    private function buildNavigation(): array
    {
        $parentCode = $this->parseParentCode();

        if ($parentCode === null) {
            return [];
        }

        return Cache::remember("side_navigation_{$parentCode}", 3600, fn (): array => $this->loadItems($parentCode));
    }

    private function parseParentCode(): ?int
    {
        if (! preg_match('/n-(\w+),(\d+),(\d+)/', request()->path(), $m)) {
            return null;
        }

        $code = (int) $m[1];

        // If this code has direct children, use it as parent
        if (ProductSuperCategory::where('ParentSuperCategoryCode', $code)->exists()) {
            return $code;
        }

        // Otherwise walk up one level to find the root that has children
        $item = ProductSuperCategory::find($code);

        return $item?->ParentSuperCategoryCode ?? null;
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
