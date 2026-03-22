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
        return view('livewire.template.breadcrumbs', [
            'items' => $this->buildBreadcrumbs($navigationService),
        ]);
    }

    /** @return array<int, array{label: string, url: string|null, icon: bool}> */
    private function buildBreadcrumbs(NavigationService $navigationService): array
    {
        if ($this->proId !== null) {
            return $this->buildForProduct($this->proId, $navigationService);
        }

        return $this->buildFromUrl(request()->path(), $navigationService);
    }

    /** @return array<int, array{label: string, url: string|null, icon: bool}> */
    private function buildFromUrl(string $path, NavigationService $navigationService): array
    {
        if (! preg_match('/n-(\w+),(\d+),(\d+)/', $path, $m)) {
            return [];
        }

        $superCatCode = $m[1];
        $catCode = (int) $m[2];

        $navigation = $navigationService->getNavigation();

        foreach ($navigation as $level1) {
            // Level 1 direct hit
            if ((string) $level1['SuperCategoryCode'] === $superCatCode) {
                return [
                    ['label' => $level1['SuperCategoryName'], 'url' => null, 'icon' => true],
                ];
            }

            foreach ($level1['children'] as $level2) {
                if ((string) $level2['SuperCategoryCode'] !== $superCatCode) {
                    continue;
                }

                // Level 1 is always a link when we're deeper
                $items = [
                    ['label' => $level1['SuperCategoryName'], 'url' => $level1['url'], 'icon' => true],
                ];

                if ($catCode === 0) {
                    // Current page is level 2
                    $items[] = ['label' => $level2['SuperCategoryName'], 'url' => null, 'icon' => false];
                } else {
                    // Level 2 is a link, current page is level 3
                    $items[] = ['label' => $level2['SuperCategoryName'], 'url' => $level2['url'], 'icon' => false];

                    foreach ($level2['categories'] as $category) {
                        if ((int) $category['CategoryCode'] === $catCode) {
                            $items[] = ['label' => $category['CategoryName'], 'url' => null, 'icon' => false];
                            break;
                        }
                    }
                }

                return $items;
            }
        }

        return [];
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
