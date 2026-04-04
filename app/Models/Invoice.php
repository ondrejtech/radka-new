<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    protected $fillable = [
        'idoklad_id',
        'constant_symbol_id',
        'currency_id',
        'partner_id',
        'payment_option_id',
        'recurring_invoice_id',
        'sales_order_id',
        'sales_pos_equipment_id',
        'vat_reverse_charge_code_id',
        'document_number',
        'document_serial_number',
        'variable_symbol',
        'order_number',
        'date_of_issue',
        'date_of_maturity',
        'date_of_payment',
        'date_of_taxing',
        'date_of_accounting_event',
        'date_of_vat_application',
        'date_of_last_reminder',
        'description',
        'note',
        'items_text_prefix',
        'items_text_suffix',
        'discount_percentage',
        'discount_type',
        'exchange_rate',
        'exchange_rate_amount',
        'payment_status',
        'exported',
        'is_sent_to_purchaser',
        'eet_responsibility',
        'report_language',
        'vat_on_pay_status',
        'vat_regime',
        'is_eet',
        'is_income_tax',
        'is_sent_to_accountant',
        'has_vat_regime_oss',
        'reminder_count',
        'my_address',
        'partner_address',
        'delivery_address',
        'prices',
    ];

    protected function casts(): array
    {
        return [
            'date_of_issue' => 'date',
            'date_of_maturity' => 'date',
            'date_of_payment' => 'date',
            'date_of_taxing' => 'date',
            'date_of_accounting_event' => 'date',
            'date_of_vat_application' => 'date',
            'date_of_last_reminder' => 'date',
            'discount_percentage' => 'decimal:4',
            'exchange_rate' => 'decimal:6',
            'exchange_rate_amount' => 'decimal:6',
            'is_eet' => 'boolean',
            'is_income_tax' => 'boolean',
            'is_sent_to_accountant' => 'boolean',
            'has_vat_regime_oss' => 'boolean',
            'my_address' => 'array',
            'partner_address' => 'array',
            'delivery_address' => 'array',
            'prices' => 'array',
        ];
    }

    public function items(): HasMany
    {
        return $this->hasMany(InvoiceItem::class);
    }

    public function isPaid(): bool
    {
        return $this->payment_status === 1;
    }

    public function isUnpaid(): bool
    {
        return $this->payment_status === 0;
    }
}
