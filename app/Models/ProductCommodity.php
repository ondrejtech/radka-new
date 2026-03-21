<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductCommodity
 * 
 * @property string $CommodityCode
 * @property string $CommodityName
 * @property string|null $CommodityParentCode
 * 
 * @property ProductCommodity|null $product_commodity
 * @property Collection|Product[] $products
 * @property Collection|ProductCommodity[] $product_commodities
 * @property Collection|ProductIndexTree1[] $product_index_tree1s
 * @property Collection|ProductIndexTree2[] $product_index_tree2s
 *
 * @package App\Models
 */
class ProductCommodity extends Model
{
	protected $table = 'ProductCommodity';
	protected $primaryKey = 'CommodityCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'CommodityName',
		'CommodityParentCode'
	];

	public function product_commodity()
	{
		return $this->belongsTo(ProductCommodity::class, 'CommodityParentCode');
	}

	public function products()
	{
		return $this->hasMany(Product::class, 'CommodityCode');
	}

	public function product_commodities()
	{
		return $this->hasMany(ProductCommodity::class, 'CommodityParentCode');
	}

	public function product_index_tree1s()
	{
		return $this->hasMany(ProductIndexTree1::class, 'CommodityCode');
	}

	public function product_index_tree2s()
	{
		return $this->hasMany(ProductIndexTree2::class, 'CommodityCode');
	}
}
