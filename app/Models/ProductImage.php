<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductImage
 * 
 * @property int $ProId
 * @property string $URL
 * 
 * @property Product $product
 *
 * @package App\Models
 */
class ProductImage extends Model
{
	protected $table = 'ProductImage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ProId' => 'int'
	];

	protected $fillable = [
		'URL'
	];

	public function product()
	{
		return $this->belongsTo(Product::class, 'ProId');
	}
}
