<?php

namespace App\Livewire\Template;

use App\Models\Product;
use App\Models\ProductInformation;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Component;

class ProductDetail extends Component
{
    #[Locked]
    public int $proId;

    public function mount(int $proId): void
    {
        $this->proId = $proId;
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
