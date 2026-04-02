<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StatusOrder extends Model
{
    public $timestamps = false;

    protected $fillable = ['id', 'name'];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
