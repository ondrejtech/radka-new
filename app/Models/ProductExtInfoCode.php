<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductExtInfoCode
 * 
 * @property int $ProId
 * @property string $InfoCode
 * 
 * @property ProductInformation $product_information
 * @property Product $product
 *
 * @package App\Models
 */
class ProductExtInfoCode extends Model
{
	protected $table = 'ProductExtInfoCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ProId' => 'int'
	];

	public function product_information()
	{
		return $this->belongsTo(ProductInformation::class, 'InfoCode');
	}

	public function product()
	{
		return $this->belongsTo(Product::class, 'ProId');
	}
}
