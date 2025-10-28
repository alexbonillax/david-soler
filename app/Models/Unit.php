<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'units';

    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class, 'price_unit_id');
    }
}
