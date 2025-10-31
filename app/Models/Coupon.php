<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;


class Coupon extends Model
{
    use SoftDeletes, HasTranslations;

    protected $table = 'coupons';

    protected $fillable = [
        'code',
        'name',
        'is_assigned_to_customer',
    ];

    protected $translatable = [
        'name',
    ];

    protected $casts = [
        'is_assigned_to_customer' => 'boolean',
    ];

}
