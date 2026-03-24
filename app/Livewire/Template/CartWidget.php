<?php

namespace App\Livewire\Template;

use App\Models\Cart;
use App\Models\CartItem;
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
        $cart = $this->resolveCart();

        if ($cart) {
            $cart->items()->where('id', $cartItemId)->delete();
        }

        $this->dispatch('message', [
            'text' => 'Zboží bylo úspěšně odebráno z košíku',
            'type' => 'success',
            'status' => '200',
        ]);
    }

    public function clearCart(): void
    {
        $cart = $this->resolveCart();

        if ($cart) {
            $cart->items()->delete();
        }

        $this->isOpen = false;
    }

    public function goToCart(): mixed
    {
        return $this->redirect(route('cart.index'));
    }

    public function render(): View
    {
        $cart = $this->resolveCart();
        $items = $cart ? $cart->items()->get() : collect();
        $totalPrice = $items->sum(fn (CartItem $item) => $item->price * $item->quantity);
        $totalCount = $items->sum('quantity');

        return view('livewire.template.cart-widget', [
            'items' => $items,
            'totalPrice' => $totalPrice,
            'totalCount' => $totalCount,
        ]);
    }

    private function resolveCart(): ?Cart
    {
        if (auth()->check()) {
            return Cart::firstOrCreate(
                ['user_id' => auth()->id()],
                ['session_id' => null]
            );
        }

        $sessionId = session()->getId();

        return Cart::firstOrCreate(
            ['session_id' => $sessionId, 'user_id' => null]
        );
    }

    private function formatPrice(float $price): string
    {
        return number_format($price, 0, ',', ' ').' Kč';
    }
}
