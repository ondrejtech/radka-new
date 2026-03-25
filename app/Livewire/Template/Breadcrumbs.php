<?php

namespace App\Livewire\Template;

use App\Models\Product;
use App\Services\NavigationService;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Breadcrumbs extends Component
{
    /** Set when on a product detail page */
    #[Locked]
    public ?int $proId = null;

    public function render(NavigationService $navigationService): View
    {
        [$items, $dropdownCategories, $dropdownPscCode] = $this->buildBreadcrumbs($navigationService);

        return view('livewire.template.breadcrumbs', [
            'items' => $items,
            'dropdownCategories' => $dropdownCategories,
            'dropdownPscCode' => $dropdownPscCode,
        ]);
    }

    /**
     * @return array{
     *   0: array<int, array{label: string, url: string|null, icon: bool}>,
     *   1: array<int, array{CategoryCode: int, CategoryName: string, url: string}>,
     *   2: int|null
     * }
     */
    private function buildBreadcrumbs(NavigationService $navigationService): array
    {
        if ($this->proId !== null) {
            return [$this->buildForProduct($this->proId, $navigationService), [], null];
        }

        return $this->buildFromUrl(request()->path(), $navigationService);
    }

    /**
     * @return array{
     *   0: array<int, array{label: string, url: string|null, icon: bool}>,
     *   1: array<int, array{CategoryCode: int, CategoryName: string, url: string}>,
     *   2: int|null
     * }
     */
    private function buildFromUrl(string $path, NavigationService $navigationService): array
    {
        if (! preg_match('/n-(\w+),(\d+),(\d+)/', $path, $m)) {
            return [[], [], null];
        }

        $superCatCode = $m[1];
        $catCode = (int) $m[2];

        $navigation = $navigationService->getNavigation();

        foreach ($navigation as $level1) {
            // Level 1 direct hit
            if ((string) $level1['SuperCategoryCode'] === $superCatCode) {
                return [
                    [['label' => $level1['SuperCategoryName'], 'url' => null, 'icon' => true]],
                    [],
                    null,
                ];
            }

            foreach ($level1['children'] as $level2) {
                if ((string) $level2['SuperCategoryCode'] !== $superCatCode) {
                    continue;
                }

                $items = [
                    ['label' => $level1['SuperCategoryName'], 'url' => $level1['url'], 'icon' => true],
                ];

                if ($catCode === 0) {
                    $items[] = ['label' => $level2['SuperCategoryName'], 'url' => null, 'icon' => false];

                    return [$items, [], null];
                }

                // L3: add L2 link + current category, return sibling dropdown
                $items[] = ['label' => $level2['SuperCategoryName'], 'url' => $level2['url'], 'icon' => false];

                foreach ($level2['categories'] as $category) {
                    if ((int) $category['CategoryCode'] === $catCode) {
                        $items[] = ['label' => $category['CategoryName'], 'url' => null, 'icon' => false];
                        break;
                    }
                }

                return [$items, $level2['categories'], (int) $level2['SuperCategoryCode']];
            }
        }

        return [[], [], null];
    }

    /** @return array<int, array{label: string, url: string|null, icon: bool}> */
    private function buildForProduct(int $proId, NavigationService $navigationService): array
    {
        $product = Product::query()
            ->where('ProId', $proId)
            ->first(['ProId', 'Name', 'CategoryCode']);

        if (! $product) {
            return [];
        }

        $navigation = $navigationService->getNavigation();

        foreach ($navigation as $level1) {
            foreach ($level1['children'] as $level2) {
                foreach ($level2['categories'] as $category) {
                    if ((int) $category['CategoryCode'] !== (int) $product->CategoryCode) {
                        continue;
                    }

                    return [
                        ['label' => $level1['SuperCategoryName'], 'url' => $level1['url'], 'icon' => true],
                        ['label' => $level2['SuperCategoryName'], 'url' => $level2['url'], 'icon' => false],
                        ['label' => $category['CategoryName'], 'url' => $category['url'], 'icon' => false],
                        ['label' => $product->Name, 'url' => null, 'icon' => false],
                    ];
                }
            }
        }

        return [];
    }
}
