<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InvoiceItem extends Model
{
    protected $fillable = [
        'idoklad_id',
        'invoice_id',
        'name',
        'code',
        'unit',
        'price_list_item_id',
        'invoice_proforma_id',
        'vat_code_id',
        'amount',
        'price_type',
        'vat_rate',
        'vat_rate_type',
        'discount_percentage',
        'discount_name',
        'item_type',
        'is_tax_movement',
        'prices',
    ];

    protected function casts(): array
    {
        return [
            'amount' => 'decimal:4',
            'vat_rate' => 'decimal:4',
            'discount_percentage' => 'decimal:4',
            'is_tax_movement' => 'boolean',
            'prices' => 'array',
        ];
    }

    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }
}
