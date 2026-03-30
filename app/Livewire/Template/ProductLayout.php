<?php

namespace App\Livewire\Template;

use App\Models\Product;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Component;

class ProductLayout extends Component
{
    #[Locked]
    public int $catCode;

    public function mount(int $catCode): void
    {
        $this->catCode = $catCode;
    }

    public function render(): View
    {
        $products = Product::query()
            ->with('product_images')
            ->where('CategoryCode', $this->catCode)
            ->orderByDesc('IsTop')
            ->orderByDesc('EndUserPrice')
            ->paginate(25);

        return view('livewire.template.product-layout', [
            'products' => $products,
        ]);
    }
}
