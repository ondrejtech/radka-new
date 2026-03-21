<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductLogisticDatum
 * 
 * @property int $ProId
 * @property string $typ
 * @property int|null $count
 * @property float|null $weight
 * @property float|null $length
 * @property float|null $width
 * @property float|null $height
 * 
 * @property Product $product
 *
 * @package App\Models
 */
class ProductLogisticDatum extends Model
{
	protected $table = 'ProductLogisticData';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ProId' => 'int',
		'count' => 'int',
		'weight' => 'float',
		'length' => 'float',
		'width' => 'float',
		'height' => 'float'
	];

	protected $fillable = [
		'count',
		'weight',
		'length',
		'width',
		'height'
	];

	public function product()
	{
		return $this->belongsTo(Product::class, 'ProId');
	}
}
