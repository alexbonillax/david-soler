<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static whereYear(string $string, int $int)
 */
class Invoice extends Model
{
    protected $table = 'invoices';
    protected $fillable = [
        'code',
        'created_at',
        'net_amount',
        'customer_id',
    ];

}
