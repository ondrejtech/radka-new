<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductCategoryAttributeValue
 * 
 * @property string $ValueCode
 * @property string $AttributeCode
 * @property string $Value
 * @property string|null $ValueSort
 * 
 * @property ProductCategoryAttribute $product_category_attribute
 * @property Collection|ProductNavigatorDatum[] $product_navigator_data
 *
 * @package App\Models
 */
class ProductCategoryAttributeValue extends Model
{
	protected $table = 'ProductCategoryAttributeValue';
	protected $primaryKey = 'ValueCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'AttributeCode',
		'Value',
		'ValueSort'
	];

	public function product_category_attribute()
	{
		return $this->belongsTo(ProductCategoryAttribute::class, 'AttributeCode');
	}

	public function product_navigator_data()
	{
		return $this->hasMany(ProductNavigatorDatum::class, 'ValueCode');
	}
}
