<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductCategory
 * 
 * @property int $CategoryCode
 * @property string $CategoryName
 * @property int $SuperCategoryCode
 * @property int $ParentSuperCategoryCode
 * 
 * @property Collection|Product[] $products
 * @property Collection|ProductCategoryAttribute[] $product_category_attributes
 *
 * @package App\Models
 */
class ProductCategory extends Model
{
	protected $table = 'ProductCategory';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CategoryCode' => 'int',
		'SuperCategoryCode' => 'int',
		'ParentSuperCategoryCode' => 'int'
	];

	protected $fillable = [
		'CategoryName',
		'ParentSuperCategoryCode'
	];

	public function products()
	{
		return $this->hasMany(Product::class, 'CategoryCode');
	}

	public function product_category_attributes()
	{
		return $this->hasMany(ProductCategoryAttribute::class, 'CategoryCode');
	}
}
