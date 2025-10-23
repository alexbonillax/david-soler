<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'order_id',
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
