<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $ProId
 * @property string $Code
 * @property string $Name
 * @property string|null $PartNumber
 * @property string|null $PartNumber2
 * @property string|null $EANCode
 * @property float|null $YourPrice
 * @property float|null $YourPriceWithFees
 * @property float|null $GarbageFee
 * @property float|null $AuthorFee
 * @property float|null $ValuePack
 * @property int|null $ValuePackQty
 * @property float|null $DealerPrice
 * @property float|null $DealerPrice1
 * @property float|null $EndUserPrice
 * @property float|null $Vat
 * @property bool|null $OnStock
 * @property int|null $OnStockCount
 * @property string|null $OnStockText
 * @property Carbon|null $DateAvailible
 * @property string|null $Unit
 * @property int|null $MultipleQuantity
 * @property string|null $PriceCurrency
 * @property string|null $ProducerCode
 * @property string|null $ProducerName
 * @property string|null $CommodityCode
 * @property string|null $CommodityName
 * @property int|null $CategoryCode
 * @property string|null $IndexCode1
 * @property string|null $IndexSort1
 * @property int|null $IndexOrder1
 * @property bool|null $IndexImplicit1
 * @property string|null $IndexCode2
 * @property string|null $IndexSort2
 * @property int|null $IndexOrder2
 * @property bool|null $IndexImplicit2
 * @property string|null $Warranty
 * @property int|null $WarrantyTerm
 * @property string|null $WarrantyUnit
 * @property string|null $Description
 * @property string|null $DescriptionShort
 * @property string|null $NameB2C
 * @property string|null $ImageUrl
 * @property int|null $ImgCount
 * @property Carbon|null $ImgLastChanged
 * @property bool|null $B2C
 * @property bool|null $IsPremium
 * @property bool|null $IsTop
 * @property string|null $Status
 * @property string|null $InfoCode
 * @property string|null $RateOfDutyCode
 * @property string|null $RCStatus
 * @property string|null $RCCode
 * 
 * @property ProductCategory|null $product_category
 * @property ProductCommodity|null $product_commodity
 * @property ProductIndexTree1|null $product_index_tree1
 * @property ProductIndexTree2|null $product_index_tree2
 * @property ProductProducer|null $product_producer
 * @property Collection|ProductExtInfoCode[] $product_ext_info_codes
 * @property Collection|ProductImage[] $product_images
 * @property Collection|ProductLogisticDatum[] $product_logistic_data
 * @property Collection|ProductNavigatorDatum[] $product_navigator_data
 * @property Collection|ProductRelation[] $product_relations
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'Product';
	protected $primaryKey = 'ProId';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ProId' => 'int',
		'YourPrice' => 'float',
		'YourPriceWithFees' => 'float',
		'GarbageFee' => 'float',
		'AuthorFee' => 'float',
		'ValuePack' => 'float',
		'ValuePackQty' => 'int',
		'DealerPrice' => 'float',
		'DealerPrice1' => 'float',
		'EndUserPrice' => 'float',
		'Vat' => 'float',
		'OnStock' => 'bool',
		'OnStockCount' => 'int',
		'DateAvailible' => 'datetime',
		'MultipleQuantity' => 'int',
		'CategoryCode' => 'int',
		'IndexOrder1' => 'int',
		'IndexImplicit1' => 'bool',
		'IndexOrder2' => 'int',
		'IndexImplicit2' => 'bool',
		'WarrantyTerm' => 'int',
		'ImgCount' => 'int',
		'ImgLastChanged' => 'datetime',
		'B2C' => 'bool',
		'IsPremium' => 'bool',
		'IsTop' => 'bool'
	];

	protected $fillable = [
		'Code',
		'Name',
		'PartNumber',
		'PartNumber2',
		'EANCode',
		'YourPrice',
		'YourPriceWithFees',
		'GarbageFee',
		'AuthorFee',
		'ValuePack',
		'ValuePackQty',
		'DealerPrice',
		'DealerPrice1',
		'EndUserPrice',
		'Vat',
		'OnStock',
		'OnStockCount',
		'OnStockText',
		'DateAvailible',
		'Unit',
		'MultipleQuantity',
		'PriceCurrency',
		'ProducerCode',
		'ProducerName',
		'CommodityCode',
		'CommodityName',
		'CategoryCode',
		'IndexCode1',
		'IndexSort1',
		'IndexOrder1',
		'IndexImplicit1',
		'IndexCode2',
		'IndexSort2',
		'IndexOrder2',
		'IndexImplicit2',
		'Warranty',
		'WarrantyTerm',
		'WarrantyUnit',
		'Description',
		'DescriptionShort',
		'NameB2C',
		'ImageUrl',
		'ImgCount',
		'ImgLastChanged',
		'B2C',
		'IsPremium',
		'IsTop',
		'Status',
		'InfoCode',
		'RateOfDutyCode',
		'RCStatus',
		'RCCode'
	];

	public function product_category()
	{
		return $this->belongsTo(ProductCategory::class, 'CategoryCode');
	}

	public function product_commodity()
	{
		return $this->belongsTo(ProductCommodity::class, 'CommodityCode');
	}

	public function product_index_tree1()
	{
		return $this->belongsTo(ProductIndexTree1::class, 'IndexCode1');
	}

	public function product_index_tree2()
	{
		return $this->belongsTo(ProductIndexTree2::class, 'IndexCode2');
	}

	public function product_producer()
	{
		return $this->belongsTo(ProductProducer::class, 'ProducerCode');
	}

	public function product_ext_info_codes()
	{
		return $this->hasMany(ProductExtInfoCode::class, 'ProId');
	}

	public function product_images()
	{
		return $this->hasMany(ProductImage::class, 'ProId');
	}

	public function product_logistic_data()
	{
		return $this->hasMany(ProductLogisticDatum::class, 'ProId');
	}

	public function product_navigator_data()
	{
		return $this->hasMany(ProductNavigatorDatum::class, 'ProId');
	}

	public function product_relations()
	{
		return $this->hasMany(ProductRelation::class, 'ParentProId');
	}
}
