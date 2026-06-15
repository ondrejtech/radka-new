<?php

namespace App\Livewire\Template;

use App\Models\DeliveryAddress;
use App\Models\Order;
use App\Models\Product;
use App\Services\CartService;
use Illuminate\View\View;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class Basket extends Component
{
    public string $searchError = '';

    public string $reference = '';

    public string $note = '';

    public string $deliveryDate = '';

    public string $transportId = '';

    public string $shipName = '';

    public string $shipStreet = '';

    public string $shipCity = '';

    public string $shipZip = '';

    public string $shipCountry = 'Česká republika';

    public string $shipPhone = '';

    public string $shipEmail = '';

    public function mount(): void
    {
        if (auth()->check()) {
            $user = auth()->user();
            $this->shipName = trim($user->first_name.' '.$user->last_name);
            $this->shipStreet = $user->street ?? '';
            $this->shipCity = $user->city ?? '';
            $this->shipZip = $user->zip ?? '';
            $this->shipPhone = $user->phone ?? '';
            $this->shipEmail = $user->email ?? '';
        }
    }

    public function applyAddress(string $name, string $street, string $city, string $zip, string $phone, string $email): void
    {
        $this->shipName = $name;
        $this->shipStreet = $street;
        $this->shipCity = $city;
        $this->shipZip = $zip;
        $this->shipPhone = $phone;
        $this->shipEmail = $email;
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

        $validated = validator([
            'reference' => $this->reference,
            'note' => $this->note,
            'deliveryDate' => $this->deliveryDate,
            'transportId' => $this->transportId,
            'shipName' => $this->shipName,
            'shipStreet' => $this->shipStreet,
            'shipCity' => $this->shipCity,
            'shipZip' => $this->shipZip,
            'shipCountry' => $this->shipCountry,
            'shipPhone' => $this->shipPhone,
            'shipEmail' => $this->shipEmail,
        ], [
            'reference' => ['nullable', 'string', 'max:255'],
            'note' => ['nullable', 'string'],
            'deliveryDate' => ['nullable', 'date'],
            'transportId' => ['nullable', 'integer'],
            'shipName' => ['required', 'string', 'max:70'],
            'shipStreet' => ['required', 'string', 'max:35'],
            'shipCity' => ['required', 'string', 'max:35'],
            'shipZip' => ['required', 'string', 'max:10'],
            'shipCountry' => ['required', 'string', 'max:50'],
            'shipPhone' => ['required', 'string', 'max:20'],
            'shipEmail' => ['required', 'email', 'max:50'],
        ])->validate();

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

        $totalWithoutVat = $items->sum(fn ($i) => $i->price * $i->quantity);

        $order = Order::create([
            'user_id' => auth()->id(),
            'session_id' => auth()->check() ? null : session()->getId(),
            'status_order_id' => 1,
            'is_open' => $isOpen,
            'reference' => $validated['reference'],
            'note' => $validated['note'],
            'delivery_date' => $validated['deliveryDate'] ?: null,
            'transport_id' => $validated['transportId'] ?: null,
            'ship_name' => $validated['shipName'],
            'ship_street' => $validated['shipStreet'],
            'ship_city' => $validated['shipCity'],
            'ship_zip' => $validated['shipZip'],
            'ship_country' => $validated['shipCountry'],
            'ship_phone' => $validated['shipPhone'],
            'ship_email' => $validated['shipEmail'],
            'total_without_vat' => $totalWithoutVat,
            'total_with_vat' => round($totalWithoutVat * 1.21, 2),
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

        $cart->items()->delete();

        $this->dispatch('cart-updated')->to('template.cart-widget');

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

        $totalWithoutVat = $items->sum(fn ($i) => $i->price * $i->quantity);
        $totalWithVat = round($totalWithoutVat * 1.21, 2);

        return view('livewire.template.basket', [
            'cart' => $cart,
            'items' => $items,
            'currentUser' => $currentUser,
            'addressData' => $addressData,
            'totalWithoutVat' => $totalWithoutVat,
            'totalWithVat' => $totalWithVat,
        ]);
    }
}
