<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductNavigatorDatum
 * 
 * @property int $ProId
 * @property string $AttributeCode
 * @property string $ValueCode
 * 
 * @property ProductCategoryAttribute $product_category_attribute
 * @property Product $product
 * @property ProductCategoryAttributeValue $product_category_attribute_value
 *
 * @package App\Models
 */
class ProductNavigatorDatum extends Model
{
	protected $table = 'ProductNavigatorData';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ProId' => 'int'
	];

	public function product_category_attribute()
	{
		return $this->belongsTo(ProductCategoryAttribute::class, 'AttributeCode');
	}

	public function product()
	{
		return $this->belongsTo(Product::class, 'ProId');
	}

	public function product_category_attribute_value()
	{
		return $this->belongsTo(ProductCategoryAttributeValue::class, 'ValueCode');
	}
}
