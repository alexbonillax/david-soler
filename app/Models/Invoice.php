<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoices';
    protected $fillable = [
        'code',
        'created_at',
        'net_amount',
        'customer_id',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class, 'order_id');
    }


}
