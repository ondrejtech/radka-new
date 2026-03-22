<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'session_id',
    ];

    public function items(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }

    public function getTotalPriceAttribute(): float
    {
        return $this->items->sum(fn (CartItem $item) => $item->price * $item->quantity);
    }

    public function getTotalCountAttribute(): int
    {
        return $this->items->sum('quantity');
    }
}
