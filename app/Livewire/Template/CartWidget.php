<?php

namespace App\Livewire\Template;

use App\Models\CartItem;
use App\Services\CartService;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class CartWidget extends Component
{
    public bool $isOpen = false;

    #[On('cart-updated')]
    public function refresh(): void {}

    public function toggle(): void
    {
        $this->isOpen = ! $this->isOpen;
    }

    public function removeItem(int $cartItemId): void
    {
        $cart = app(CartService::class)->resolveCart();
        $cart->items()->where('id', $cartItemId)->delete();

        $this->dispatch('message', [
            'text' => 'Zboží bylo úspěšně odebráno z košíku',
            'type' => 'success',
            'status' => '200',
        ]);
    }

    public function clearCart(): void
    {
        $cart = app(CartService::class)->resolveCart();
        $cart->items()->delete();
        $this->isOpen = false;
    }

    public function goToCart(): mixed
    {
        return $this->redirect(route('pages.basket.index'));
    }

    public function render(): View
    {
        $cart = app(CartService::class)->resolveCart();
        $items = $cart->items()->get();
        $totalPrice = $items->sum(fn (CartItem $item) => $item->price * $item->quantity);
        $totalCount = $items->sum('quantity');

        return view('livewire.template.cart-widget', [
            'items' => $items,
            'totalPrice' => $totalPrice,
            'totalCount' => $totalCount,
        ]);
    }
}
