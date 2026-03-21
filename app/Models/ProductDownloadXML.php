<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductDownloadXML
 * 
 * @property int $id
 * @property string $URL
 * @property bool $Status
 * @property bool $ImageStatus
 * @property bool $NavDataStatus
 * @property bool $LogisticStatus
 *
 * @package App\Models
 */
class ProductDownloadXML extends Model
{
	protected $table = 'ProductDownloadXML';
	public $timestamps = false;

	protected $casts = [
		'Status' => 'bool',
		'ImageStatus' => 'bool',
		'NavDataStatus' => 'bool',
		'LogisticStatus' => 'bool'
	];

	protected $fillable = [
		'URL',
		'Status',
		'ImageStatus',
		'NavDataStatus',
		'LogisticStatus'
	];
}
