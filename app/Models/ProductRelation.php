<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductRelation
 * 
 * @property int $ParentProId
 * @property int $ChildProId
 * @property string|null $ChildCode
 * @property int|null $Qty
 * @property int|null $RelTypeId
 * @property string|null $RelTypeName
 * 
 * @property Product $product
 *
 * @package App\Models
 */
class ProductRelation extends Model
{
	protected $table = 'ProductRelation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ParentProId' => 'int',
		'ChildProId' => 'int',
		'Qty' => 'int',
		'RelTypeId' => 'int'
	];

	protected $fillable = [
		'ChildCode',
		'Qty',
		'RelTypeId',
		'RelTypeName'
	];

	public function product()
	{
		return $this->belongsTo(Product::class, 'ParentProId');
	}
}
