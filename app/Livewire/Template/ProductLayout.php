<?php

namespace App\Livewire\Template;

use App\Models\Product;
use App\Services\CartService;
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

    public function addToCart(int $proId, int $quantity): void
    {
        $quantity = max(1, $quantity);

        $product = Product::find($proId, ['ProId', 'Name', 'EndUserPrice']);

        if (! $product) {
            return;
        }

        app(CartService::class)->addItem(
            $proId,
            $product->Name,
            (float) $product->EndUserPrice,
            $quantity
        );

        $this->dispatch('cart-updated');
        $this->dispatch('message', [
            'text' => 'Zboží bylo úspěšně přidáno do košíku',
            'type' => 'success',
            'status' => '200',
        ]);
    }

    public function render(): View
    {
        $products = Product::query()
            ->with(['product_images', 'product_ext_info_codes.product_information'])
            ->where('CategoryCode', $this->catCode)
            ->orderByDesc('IsTop')
            ->orderByDesc('EndUserPrice')
            ->paginate(25);

        return view('livewire.template.product-layout', [
            'products' => $products,
        ]);
    }
}
