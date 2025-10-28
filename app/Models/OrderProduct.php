<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class OrderProduct extends Model
{
    protected $table = 'order_product';
    public function product()
{
    return $this->belongsTo(Product::class, 'product_id');
}

    public function unit()
{
    return $this->belongsTo(Unit::class, 'price_unit_id');
}
}

