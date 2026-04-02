<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'pro_id',
        'name',
        'price',
        'quantity',
        'position',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
