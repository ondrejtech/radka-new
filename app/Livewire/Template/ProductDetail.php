<?php

namespace App\Livewire\Template;

use App\Models\Product;
use App\Models\ProductInformation;
use App\Services\CartService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
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
        $navigatorParams = $this->loadNavigatorParams($this->proId);
        $indexTrees = $this->loadIndexTrees($product);
        $logisticData = $this->loadLogisticData($this->proId);
        $relatedProducts = $this->loadRelatedProducts($this->proId);

        return view('livewire.template.product-detail', [
            'product' => $product,
            'infoCodes' => $infoCodes,
            'navigatorParams' => $navigatorParams,
            'indexTrees' => $indexTrees,
            'logisticData' => $logisticData,
            'relatedProducts' => $relatedProducts,
        ]);
    }

    /**
     * @return Collection<string, Collection<int, Product>>
     */
    private function loadRelatedProducts(int $proId): Collection
    {
        $relations = DB::table('ProductRelation')
            ->where('ParentProId', $proId)
            ->orderBy('RelTypeId')
            ->select('ChildProId', 'RelTypeName')
            ->get();

        $childProducts = Product::query()
            ->with(['product_images'])
            ->whereIn('ProId', $relations->pluck('ChildProId'))
            ->get()
            ->keyBy('ProId');

        return $relations
            ->groupBy('RelTypeName')
            ->map(fn ($group) => $group->map(fn ($r) => $childProducts->get($r->ChildProId))->filter()->values());
    }

    /** @return Collection<int, object{typ: string, count: int, weight: string, length: string, width: string, height: string}> */
    private function loadLogisticData(int $proId): Collection
    {
        return DB::table('ProductLogisticData')
            ->where('ProId', $proId)
            ->select('typ', 'count', 'weight', 'length', 'width', 'height')
            ->get();
    }

    /**
     * @return array<int, Collection<int, object{IndexCode: string, IndexName: string, IndexLevel: int, IndexOrder: int}>>
     */
    private function loadIndexTrees(Product $product): array
    {
        $trees = [];

        if ($product->IndexCode1) {
            $trees[] = DB::table('ProductIndexTree1')
                ->whereRaw('? LIKE CONCAT(IndexCode, \'%\')', [$product->IndexCode1])
                ->orderBy('IndexLevel')
                ->select('IndexCode', 'IndexName', 'IndexLevel', 'IndexOrder')
                ->get();
        }

        if ($product->IndexCode2) {
            $trees[] = DB::table('ProductIndexTree2')
                ->whereRaw('? LIKE CONCAT(IndexCode, \'%\')', [$product->IndexCode2])
                ->orderBy('IndexLevel')
                ->select('IndexCode', 'IndexName', 'IndexLevel', 'IndexOrder')
                ->get();
        }

        return $trees;
    }

    /**
     * @return Collection<string, Collection<int, object{AttributeName: string, Value: string, AttributeCode: string, ValueCode: string}>>
     */
    private function loadNavigatorParams(int $proId): Collection
    {
        return DB::table('ProductNavigatorData')
            ->join('ProductCategoryAttribute', 'ProductNavigatorData.AttributeCode', '=', 'ProductCategoryAttribute.AttributeCode')
            ->join('ProductCategoryAttributeValue', 'ProductNavigatorData.ValueCode', '=', 'ProductCategoryAttributeValue.ValueCode')
            ->where('ProductNavigatorData.ProId', $proId)
            ->select(
                'ProductCategoryAttribute.AttributeName',
                'ProductCategoryAttribute.AttributeCode',
                'ProductCategoryAttributeValue.Value',
                'ProductCategoryAttributeValue.ValueCode',
            )
            ->orderBy('ProductCategoryAttribute.AttributeCode')
            ->get()
            ->groupBy('AttributeName');
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
