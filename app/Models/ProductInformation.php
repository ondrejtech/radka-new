<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductInformation
 * 
 * @property string $InfoCode
 * @property string $InfoName
 * 
 * @property Collection|ProductExtInfoCode[] $product_ext_info_codes
 *
 * @package App\Models
 */
class ProductInformation extends Model
{
	protected $table = 'ProductInformation';
	protected $primaryKey = 'InfoCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'InfoName'
	];

	public function product_ext_info_codes()
	{
		return $this->hasMany(ProductExtInfoCode::class, 'InfoCode');
	}
}
