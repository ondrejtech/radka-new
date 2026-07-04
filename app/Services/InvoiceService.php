<?php

namespace App\Services;

use App\Models\Invoice;
use App\Models\Order;

class InvoiceService
{
    /**
     * Create an Invoice with InvoiceItems from a paid Order.
     */
    public function createFromOrder(Order $order): Invoice
    {
        // Idempotence: fakturu vytvoř jen jednou (nikdy pro nezaplacenou objednávku
        // ani duplicitně při opakovaném volání / webhooku).
        if ($existing = $order->invoice()->first()) {
            return $existing;
        }

        $order->loadMissing(['items', 'user']);

        $docNumber = now()->year.$order->id;

        $invoice = Invoice::create([
            'order_id' => $order->id,
            'currency_id' => 1,
            'partner_id' => $order->user_id,
            'recurring_invoice_id' => null,
            'sales_order_id' => null,
            'variable_symbol' => $docNumber,
            'order_number' => $docNumber,
            'date_of_issue' => $order->created_at->toDateString(),
            'date_of_maturity' => $order->created_at->toDateString(),
            'date_of_payment' => now()->toDateString(),
            'date_of_taxing' => now()->toDateString(),
            'date_of_accounting_event' => now()->toDateString(),
            'note' => $order->note,
            'payment_option_id' => 9, // PayPal
            'discount_type' => 0, // None
            'payment_status' => 1, // Paid
            'exported' => 0, // NotExported
            'report_language' => 1, // Cz
            'vat_on_pay_status' => 0, // Disabled
            'vat_regime' => 0, // NonVatRegime
            'is_income_tax' => true,
            'my_address' => $this->buildMyAddress(),
            'partner_address' => $this->buildPartnerAddress($order),
            'delivery_address' => $this->buildDeliveryAddress($order),
            'prices' => [
                'TotalWithoutVat' => (float) $order->total_without_vat,
                'TotalWithVat' => (float) $order->total_with_vat,
                'TotalVat' => round((float) $order->total_with_vat - (float) $order->total_without_vat, 2),
                'TotalPaid' => (float) $order->total_with_vat,
            ],
        ]);

        foreach ($order->items as $item) {
            $totalWithoutVat = round((float) $item->price * $item->quantity, 2);
            $totalWithVat = round($totalWithoutVat * 1.21, 2);

            $invoice->items()->create([
                'name' => $item->name,
                'code' => (string) $item->pro_id,
                'amount' => $item->quantity,
                'price_type' => 1, // WithoutVat
                'vat_rate' => 21.0,
                'vat_rate_type' => 1, // Basic
                'item_type' => 0, // Normal
                'is_tax_movement' => false,
                'prices' => [
                    'UnitPrice' => (float) $item->price,
                    'TotalWithoutVat' => $totalWithoutVat,
                    'TotalWithVat' => $totalWithVat,
                    'TotalVat' => round($totalWithVat - $totalWithoutVat, 2),
                ],
            ]);
        }

        return $invoice;
    }

    /** @return array<string, string> */
    private function buildMyAddress(): array
    {
        return [
            'NickName' => config('app.name'),
            'Email' => config('mail.from.address'),
        ];
    }

    /** @return array<string, string> */
    private function buildPartnerAddress(Order $order): array
    {
        $nameParts = explode(' ', trim($order->ship_name), 2);

        return [
            'Firstname' => $nameParts[0] ?? '',
            'Surname' => $nameParts[1] ?? '',
            'Street' => $order->ship_street,
            'City' => $order->ship_city,
            'PostalCode' => $order->ship_zip,
            'CountryName' => $order->ship_country,
            'Email' => $order->ship_email,
            'Phone' => $order->ship_phone,
        ];
    }

    /** @return array<string, string> */
    private function buildDeliveryAddress(Order $order): array
    {
        return [
            'Name' => $order->ship_name,
            'Street' => $order->ship_street,
            'City' => $order->ship_city,
            'PostalCode' => $order->ship_zip,
        ];
    }
}
