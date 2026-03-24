<?php

namespace App\Services;

use App\Models\Cart;

class CartService
{
    public function resolveCart(): Cart
    {
        if (auth()->check()) {
            return Cart::firstOrCreate(
                ['user_id' => auth()->id()],
                ['session_id' => null]
            );
        }

        return Cart::firstOrCreate(
            ['session_id' => session()->getId(), 'user_id' => null]
        );
    }

    public function addItem(int $proId, string $name, float $price, int $quantity): void
    {
        $cart = $this->resolveCart();

        $item = $cart->items()->where('pro_id', $proId)->first();

        if ($item) {
            $item->increment('quantity', $quantity);
        } else {
            $cart->items()->create([
                'pro_id' => $proId,
                'name' => $name,
                'price' => $price,
                'quantity' => $quantity,
            ]);
        }
    }
}
