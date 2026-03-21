<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transportation
 * 
 * @property int $Code
 * @property string $Name
 * @property int $TypeCode
 *
 * @package App\Models
 */
class Transportation extends Model
{
	protected $table = 'Transportation';
	protected $primaryKey = 'Code';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Code' => 'int',
		'TypeCode' => 'int'
	];

	protected $fillable = [
		'Name',
		'TypeCode'
	];
}
