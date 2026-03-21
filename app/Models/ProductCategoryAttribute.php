<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductCategoryAttribute
 * 
 * @property string $AttributeCode
 * @property string $AttributeName
 * @property int $CategoryCode
 * @property bool|null $IsPrimary
 * @property string|null $FilterOperator
 * 
 * @property ProductCategory $product_category
 * @property Collection|ProductCategoryAttributeValue[] $product_category_attribute_values
 * @property Collection|ProductNavigatorDatum[] $product_navigator_data
 *
 * @package App\Models
 */
class ProductCategoryAttribute extends Model
{
	protected $table = 'ProductCategoryAttribute';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CategoryCode' => 'int',
		'IsPrimary' => 'bool'
	];

	protected $fillable = [
		'AttributeName',
		'IsPrimary',
		'FilterOperator'
	];

	public function product_category()
	{
		return $this->belongsTo(ProductCategory::class, 'CategoryCode');
	}

	public function product_category_attribute_values()
	{
		return $this->hasMany(ProductCategoryAttributeValue::class, 'AttributeCode');
	}

	public function product_navigator_data()
	{
		return $this->hasMany(ProductNavigatorDatum::class, 'AttributeCode');
	}
}
