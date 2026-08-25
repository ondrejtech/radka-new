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
        [$items, $dropdownCategories] = $this->buildBreadcrumbs($navigationService);

        return view('livewire.template.breadcrumbs', [
            'items' => $items,
            'dropdownCategories' => $dropdownCategories,
        ]);
    }

    /**
     * @return array{
     *   0: array<int, array{label: string, url: string|null, icon: bool}>,
     *   1: array<int, array{CategoryCode: int, CategoryName: string, url: string}>
     * }
     */
    private function buildBreadcrumbs(NavigationService $navigationService): array
    {
        if ($this->proId !== null) {
            return $this->buildForProduct($this->proId, $navigationService);
        }

        return $this->buildFromUrl(request()->path(), $navigationService);
    }

    /**
     * @return array{
     *   0: array<int, array{label: string, url: string|null, icon: bool}>,
     *   1: array<int, array{CategoryCode: int, CategoryName: string, url: string}>
     * }
     */
    private function buildFromUrl(string $path, NavigationService $navigationService): array
    {
        if (! preg_match('/n-(\w+),(\d+),(\d+)/', $path, $m)) {
            return [[], []];
        }

        $catCode = (int) $m[2];
        $navigation = $navigationService->getNavigation();

        foreach ($navigation as $category) {
            if ((int) $category['CategoryCode'] !== $catCode) {
                continue;
            }

            $items = [
                ['label' => 'Domů', 'url' => url('/'), 'icon' => true],
                ['label' => $category['CategoryName'], 'url' => null, 'icon' => false],
            ];

            return [$items, $navigation];
        }

        return [[], []];
    }

    /**
     * @return array{
     *   0: array<int, array{label: string, url: string|null, icon: bool}>,
     *   1: array<int, array{CategoryCode: int, CategoryName: string, url: string}>
     * }
     */
    private function buildForProduct(int $proId, NavigationService $navigationService): array
    {
        $product = Product::query()
            ->where('ProId', $proId)
            ->first(['ProId', 'Name', 'CategoryCode']);

        if (! $product) {
            return [[], []];
        }

        $navigation = $navigationService->getNavigation();

        foreach ($navigation as $category) {
            if ((int) $category['CategoryCode'] !== (int) $product->CategoryCode) {
                continue;
            }

            $items = [
                ['label' => 'Domů', 'url' => url('/'), 'icon' => true],
                ['label' => $category['CategoryName'], 'url' => $category['url'], 'icon' => false],
                ['label' => $product->Name, 'url' => null, 'icon' => false],
            ];

            return [$items, $navigation];
        }

        return [[], []];
    }
}
