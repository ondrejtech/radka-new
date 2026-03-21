<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductProducer
 * 
 * @property string $ProducerCode
 * @property string $ProducerName
 * @property int $ProducerId
 * 
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class ProductProducer extends Model
{
	protected $table = 'ProductProducer';
	protected $primaryKey = 'ProducerCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ProducerId' => 'int'
	];

	protected $fillable = [
		'ProducerName',
		'ProducerId'
	];

	public function products()
	{
		return $this->hasMany(Product::class, 'ProducerCode');
	}
}
