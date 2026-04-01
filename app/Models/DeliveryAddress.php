<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryAddress extends Model
{
    protected $table = 'DeliveryAddress';

    protected $fillable = [
        'first_name',
        'last_name',
        'street',
        'city',
        'zip',
        'country',
        'phone',
        'email',
        'user_id',
    ];
}
