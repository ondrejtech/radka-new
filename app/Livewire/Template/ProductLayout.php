<?php

namespace App\Livewire\Template;

use App\Models\Product;
use App\Services\CartService;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Renderless;
use Livewire\Component;
use Livewire\WithPagination;

class ProductLayout extends Component
{
    use WithPagination;

    #[Locked]
    public int $catCode;

    public string $sort = '8_desc';

    /** @var array<string, array{column: string, direction: string}[]> */
    private const SORT_MAP = [
        '8_desc' => [['column' => 'IsTop',        'direction' => 'desc'], ['column' => 'EndUserPrice', 'direction' => 'desc']],
        '13_asc' => [['column' => 'EndUserPrice',  'direction' => 'asc']],
        '13_desc' => [['column' => 'EndUserPrice',  'direction' => 'desc']],
        '11_asc' => [['column' => 'IsTop',         'direction' => 'desc']],
        '12_asc' => [['column' => 'IndexOrder1',   'direction' => 'asc']],
        '14_asc' => [['column' => 'Name',          'direction' => 'asc']],
        '14_desc' => [['column' => 'Name',          'direction' => 'desc']],
        '16_asc' => [['column' => 'OnStockCount',  'direction' => 'asc']],
        '16_desc' => [['column' => 'OnStockCount',  'direction' => 'desc']],
    ];

    public function updatedSort(): void
    {
        $this->resetPage();
    }

    public function mount(int $catCode): void
    {
        $this->catCode = $catCode;
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

    public function render(): View
    {
        $orders = self::SORT_MAP[$this->sort] ?? self::SORT_MAP['8_desc'];

        $query = Product::query()
            ->with(['product_images', 'product_ext_info_codes.product_information'])
            ->where('CategoryCode', $this->catCode);

        foreach ($orders as $order) {
            $query->orderBy($order['column'], $order['direction']);
        }

        $products = $query->paginate(25);

        return view('livewire.template.product-layout', [
            'products' => $products,
        ]);
    }
}
