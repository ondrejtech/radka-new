<?php

namespace App\Livewire\Template;

use App\Models\Product;
use App\Models\ProductInformation;
use App\Services\CartService;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class ProductDetail extends Component
{
    #[Locked]
    public int $proId;

    public function mount(int $proId): void
    {
        $this->proId = $proId;
    }

    #[Renderless]
    public function addToCart(int $proId, int $quantity): void
    {
        $quantity = max(1, $quantity);

        $product = Product::find($proId, ['ProId', 'Name', 'EndUserPrice']);

        if (! $product) {
            return;
        }

        app(CartService::class)->addItem(
            $proId,
            $product->Name,
            (float) $product->EndUserPrice,
            $quantity
        );

        $this->dispatch('cart-updated')->to('template.cart-widget');
        $this->dispatch('message', [
            'text' => 'Zboží bylo úspěšně přidáno do košíku',
            'type' => 'success',
            'status' => '200',
        ]);
    }

    #[Renderless]
    public function addToCompare(int $proId, int $catCode): void
    {
        $this->dispatch('add-to-compare', proId: $proId, catCode: $catCode)->to('template.compare-bar');
    }

    public function render(): View
    {
        $product = Product::query()
            ->with(['product_images', 'product_ext_info_codes.product_information'])
            ->findOrFail($this->proId);

        $infoCodes = $this->loadInfoCodes($product);

        return view('livewire.template.product-detail', [
            'product' => $product,
            'infoCodes' => $infoCodes,
        ]);
    }

    /** @return Collection<int, ProductInformation> */
    private function loadInfoCodes(Product $product): Collection
    {
        $codes = collect();

        if ($product->InfoCode && $product->InfoCode !== '0') {
            $info = ProductInformation::find($product->InfoCode, ['InfoCode', 'InfoName']);
            if ($info) {
                $codes->push($info);
            }
        }

        $product->product_ext_info_codes
            ->filter(fn ($e) => $e->product_information !== null)
            ->each(fn ($e) => $codes->push($e->product_information));

        return $codes->unique('InfoCode')->values();
    }
}
