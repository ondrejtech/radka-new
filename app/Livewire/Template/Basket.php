<?php

namespace App\Livewire\Template;

use App\Models\Product;
use App\Services\CartService;
use Illuminate\View\View;
use Livewire\Component;

class Basket extends Component
{
    public string $searchError = '';

    public function handleSort(int $id, int $position): void
    {
        $cart = app(CartService::class)->resolveCart();
        $items = $cart->items()->orderBy('position')->pluck('id')->toArray();

        $items = array_values(array_filter($items, fn ($i) => $i !== $id));
        array_splice($items, $position, 0, [$id]);

        foreach ($items as $index => $itemId) {
            $cart->items()->where('id', $itemId)->update(['position' => $index]);
        }
    }

    public function updateQuantity(int $itemId, int $quantity): void
    {
        $quantity = max(1, $quantity);

        $cart = app(CartService::class)->resolveCart();
        $cart->items()->where('id', $itemId)->update(['quantity' => $quantity]);

        $this->dispatch('cart-updated')->to('template.cart-widget');
    }

    public function removeItem(int $itemId): void
    {
        $cart = app(CartService::class)->resolveCart();
        $cart->items()->where('id', $itemId)->delete();

        $this->dispatch('cart-updated')->to('template.cart-widget');
    }

    public function searchAndAddProduct(string $query): void
    {
        $this->searchError = '';
        $query = trim($query);

        if ($query === '') {
            return;
        }

        $product = Product::query()
            ->where('Code', $query)
            ->orWhere('PartNumber', $query)
            ->first();

        if (! $product) {
            $this->searchError = 'Produkt "'.$query.'" nebyl nalezen.';

            return;
        }

        app(CartService::class)->addItem(
            proId: $product->ProId,
            name: $product->Name,
            price: (float) ($product->YourPrice ?? 0),
            quantity: 1,
        );

        $this->dispatch('cart-updated')->to('template.cart-widget');
    }

    public function render(): View
    {
        $cart = app(CartService::class)->resolveCart();
        $items = $cart->items()->with('product')->orderBy('position')->get();

        return view('livewire.template.basket', [
            'cart' => $cart,
            'items' => $items,
        ]);
    }
}
