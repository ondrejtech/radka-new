<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductIndexTree1
 * 
 * @property string $IndexCode
 * @property string|null $CommodityCode
 * @property string $IndexName
 * @property string|null $IndexSort
 * @property string|null $IndexSortCode
 * @property int|null $IndexLevel
 * @property int|null $IndexOrder
 * @property string|null $IndexCodeName
 * 
 * @property ProductCommodity|null $product_commodity
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class ProductIndexTree1 extends Model
{
	protected $table = 'ProductIndexTree1';
	protected $primaryKey = 'IndexCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IndexLevel' => 'int',
		'IndexOrder' => 'int'
	];

	protected $fillable = [
		'CommodityCode',
		'IndexName',
		'IndexSort',
		'IndexSortCode',
		'IndexLevel',
		'IndexOrder',
		'IndexCodeName'
	];

	public function product_commodity()
	{
		return $this->belongsTo(ProductCommodity::class, 'CommodityCode');
	}

	public function products()
	{
		return $this->hasMany(Product::class, 'IndexCode1');
	}
}
