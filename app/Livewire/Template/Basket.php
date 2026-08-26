<?php

namespace App\Livewire\Template;

use App\Livewire\Forms\BasketOrderForm;
use App\Models\DeliveryAddress;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transportation;
use App\Services\CartService;
use App\Services\InvoiceService;
use Illuminate\View\View;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class Basket extends Component
{
    public string $searchError = '';

    public BasketOrderForm $form;

    public function mount(): void
    {
        $items = app(CartService::class)->resolveCart()->items()->get(['pro_id', 'price', 'quantity']);

        if ($items->isNotEmpty()) {
            $this->dispatch(
                'meta-initiate-checkout',
                value: round($items->sum(fn ($item) => $item->price * $item->quantity), 2),
                ids: $items->pluck('pro_id')->map(fn ($id) => (string) $id)->all(),
            );
        }
    }

    public function applyAddress(string $name, string $street, string $city, string $zip, string $phone, string $email): void
    {
        $this->form->shipName = $name;
        $this->form->shipStreet = $street;
        $this->form->shipCity = $city;
        $this->form->shipZip = $zip;
        $this->form->shipPhone = $phone;
        $this->form->shipEmail = $email;
    }

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

    #[Renderless]
    public function saveDeliveryAddress(string $name, string $street, string $city, string $zip, string $phone, string $email): void
    {
        if (! auth()->check()) {
            return;
        }

        $validated = validator(compact('name', 'street', 'city', 'zip', 'phone', 'email'), [
            'name' => ['required', 'string', 'max:35'],
            'street' => ['required', 'string', 'max:35'],
            'city' => ['required', 'string', 'max:35'],
            'zip' => ['required', 'string', 'max:6'],
            'phone' => ['required', 'string', 'max:20'],
            'email' => ['required', 'email', 'max:50'],
        ])->validate();

        $parts = explode(' ', trim($validated['name']), 2);

        $address = DeliveryAddress::create([
            'first_name' => $parts[0],
            'last_name' => $parts[1] ?? '',
            'street' => $validated['street'],
            'city' => $validated['city'],
            'zip' => $validated['zip'],
            'country' => 'Česká republika',
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'user_id' => auth()->id(),
        ]);

        $this->dispatch('address-saved',
            id: $address->id,
            label: $address->first_name.' '.$address->last_name.', '.$address->street.', '.$address->city.', '.$address->zip,
            name: $address->first_name.' '.$address->last_name,
            street: $address->street,
            city: $address->city,
            zip: $address->zip,
            phone: $address->phone,
            email: $address->email,
        );

        $this->dispatch('message', [
            'text' => 'Doručovací adresa byla úspěšně uložena',
            'type' => 'success',
            'status' => '200',
        ]);
    }

    private function shippingPrice(): float
    {
        if (! $this->form->transportId) {
            return 0.0;
        }

        $this->dispatch('message', [
            'text' => 'Doprava byla úspěšně vybrána',
            'type' => 'success',
            'status' => '200',
        ]);

        return (float) (Transportation::where('Code', (int) $this->form->transportId)->value('Price') ?? 0);
    }

    public function placeOrder(bool $isOpen): void
    {
        if ($isOpen && ! auth()->check()) {
            $this->dispatch('message', [
                'text' => 'Otevřenou objednávku může vytvořit pouze přihlášený uživatel.',
                'type' => 'error',
                'status' => '403',
            ]);

            return;
        }

        if (! $this->form->transportId) {
            $this->dispatch('message', [
                'text' => 'Prosím vyberte způsob dopravy',
                'type' => 'error',
                'status' => '400',
            ]);

            return;
        }

        $cart = app(CartService::class)->resolveCart();
        $items = $cart->items()->orderBy('position')->get();

        if ($items->isEmpty()) {
            $this->dispatch('message', [
                'text' => 'Košík je prázdný.',
                'type' => 'error',
                'status' => '400',
            ]);

            return;
        }

        $requiredAddressFields = [
            'shipName' => 'Název firmy/kontaktní osoba',
            'shipStreet' => 'Ulice',
            'shipCity' => 'Město',
            'shipZip' => 'PSČ',
            'shipCountry' => 'Stát',
            'shipPhone' => 'Telefon osoby přebírající zásilku',
            'shipEmail' => 'E-mail osoby přebírající zásilku',
        ];

        foreach ($requiredAddressFields as $field => $label) {
            if (trim((string) $this->form->{$field}) === '') {
                $this->dispatch('message', [
                    'text' => 'Pole '.$label.' je povinné',
                    'type' => 'error',
                    'status' => '400',
                ]);

                return;
            }
        }

        $this->form->validate();

        $shippingPrice = $this->shippingPrice();
        $totalWithoutVat = $items->sum(fn ($i) => $i->price * $i->quantity) + $shippingPrice;

        $order = Order::create([
            'user_id' => auth()->id(),
            'session_id' => auth()->check() ? null : session()->getId(),
            'status_order_id' => 1,
            'is_open' => $isOpen,
            'reference' => $this->form->reference ?: null,
            'note' => $this->form->note,
            'delivery_date' => $this->form->deliveryDate ?: null,
            'transport_id' => $this->form->transportId ? (int) $this->form->transportId : null,
            'ship_name' => $this->form->shipName,
            'ship_street' => $this->form->shipStreet,
            'ship_city' => $this->form->shipCity,
            'ship_zip' => $this->form->shipZip,
            'ship_country' => $this->form->shipCountry,
            'ship_phone' => $this->form->shipPhone,
            'ship_email' => $this->form->shipEmail,
            'total_without_vat' => $totalWithoutVat,
            'total_with_vat' => $totalWithoutVat,
            'shipping_price' => $shippingPrice,
            'payment_method' => 'cod',
        ]);

        foreach ($items as $item) {
            $order->items()->create([
                'pro_id' => $item->pro_id,
                'name' => $item->name,
                'price' => $item->price,
                'quantity' => $item->quantity,
                'position' => $item->position,
            ]);
        }

        app(InvoiceService::class)->createFromOrder($order);

        app(CartService::class)->clear();

        session()->flash('meta_purchase', $order->id);

        $this->redirectRoute('pages.documents.order', ['orderId' => $order->id]);
    }

    public function render(): View
    {
        $cart = app(CartService::class)->resolveCart();
        $items = $cart->items()->with('product')->orderBy('position')->get();

        $addressData = collect();
        $currentUser = null;

        if (auth()->check()) {
            $currentUser = auth()->user()->load('deliveryAddresses');
            $addressData = collect([
                (string) $currentUser->id => [
                    'name' => $currentUser->first_name.' '.$currentUser->last_name,
                    'street' => $currentUser->street ?? '',
                    'city' => $currentUser->city ?? '',
                    'zip' => $currentUser->zip ?? '',
                    'phone' => $currentUser->phone ?? '',
                    'email' => $currentUser->email ?? '',
                ],
            ])->merge(
                $currentUser->deliveryAddresses->mapWithKeys(fn ($a) => [
                    (string) $a->id => [
                        'name' => $a->first_name.' '.$a->last_name,
                        'street' => $a->street ?? '',
                        'city' => $a->city ?? '',
                        'zip' => $a->zip ?? '',
                        'phone' => $a->phone ?? '',
                        'email' => $a->email ?? '',
                    ],
                ])
            );
        }

        $shippingPrice = $this->shippingPrice();
        $totalWithoutVat = $items->sum(fn ($i) => $i->price * $i->quantity) + $shippingPrice;
        $totalWithVat = $totalWithoutVat;

        return view('livewire.template.basket', [
            'cart' => $cart,
            'items' => $items,
            'currentUser' => $currentUser,
            'addressData' => $addressData,
            'totalWithoutVat' => $totalWithoutVat,
            'totalWithVat' => $totalWithVat,
            'shippingPrice' => $shippingPrice,
            'transports' => Transportation::where('Active', 1)->orderBy('SortOrder')->get(['Code', 'Name', 'Price']),
        ]);
    }
}
