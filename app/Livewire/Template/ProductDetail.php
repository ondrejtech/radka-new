<?php

namespace App\Livewire\Template;

use App\Models\Product;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Component;

class ProductDetail extends Component
{
    #[Locked]
    public int $proId;

    public function mount(int $proId): void
    {
        $this->proId = $proId;
    }

    public function render(): View
    {
        $product = Product::query()
            ->with(['product_images', 'product_ext_info_codes.product_information'])
            ->findOrFail($this->proId);

        return view('livewire.template.product-detail', [
            'product' => $product,
        ]);
    }
}
