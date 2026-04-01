<?php

namespace App\Livewire\Template;

use App\Models\DeliveryAddress;
use App\Models\Product;
use App\Models\User;
use App\Services\CartService;
use Illuminate\View\View;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class Basket extends Component
{
    public string $searchError = '';

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

        $this->dispatch('message',[
            'text' => 'Doručovací adresa byla úspěšně uložena',
            'type' => 'success',
            'status' => '200',
        ]);
    }

    public function render(): View
    {
        $cart = app(CartService::class)->resolveCart();
        $items = $cart->items()->with('product')->orderBy('position')->get();
        $users = User::with('deliveryAddresses')->get();

        return view('livewire.template.basket', [
            'cart' => $cart,
            'items' => $items,
            'users' => $users,
        ]);
    }
}
