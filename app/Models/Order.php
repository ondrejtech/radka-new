<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'session_id',
        'status_order_id',
        'is_open',
        'reference',
        'note',
        'delivery_date',
        'transport_id',
        'ship_name',
        'ship_street',
        'ship_city',
        'ship_zip',
        'ship_country',
        'ship_phone',
        'ship_email',
        'total_without_vat',
        'total_with_vat',
        'paypal_order_id',
        'paypal_capture_id',
        'payment_status',
    ];

    protected function casts(): array
    {
        return [
            'is_open' => 'boolean',
            'delivery_date' => 'date',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function statusOrder(): BelongsTo
    {
        return $this->belongsTo(StatusOrder::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function invoice(): HasOne
    {
        return $this->hasOne(Invoice::class);
    }

    public function transportation(): BelongsTo
    {
        return $this->belongsTo(Transportation::class, 'transport_id', 'Code');
    }
}
