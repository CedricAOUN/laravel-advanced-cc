<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    protected $fillable = [
        'name',
        'price',
    ];

    function orderable()
    {
        return $this->morphOne(Order::class, 'orderable');
    }
}
