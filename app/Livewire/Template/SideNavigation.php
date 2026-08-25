<?php

namespace App\Livewire\Template;

use App\Models\Product;
use App\Services\NavigationService;
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
        $activeCategoryCode = $this->proId !== null
            ? $this->resolveFromProduct($this->proId)
            : $this->parseUrlCodes();

        return view('livewire.template.side-navigation', [
            'navigation' => $navigationService->getNavigation(),
            'activeCategoryCode' => $activeCategoryCode,
        ]);
    }

    private function resolveFromProduct(int $proId): ?int
    {
        $product = Product::query()->where('ProId', $proId)->first(['CategoryCode']);

        return $product ? (int) $product->CategoryCode : null;
    }

    /**
     * Parse URL codes from n-{X},{Y},{Z} pattern.
     *
     * @return int|null CategoryCode (Y), or null when none selected
     */
    private function parseUrlCodes(): ?int
    {
        if (! preg_match('/n-(\w+),(\d+),(\d+)/', request()->path(), $m)) {
            return null;
        }

        return (int) $m[2] ?: null;
    }
}
