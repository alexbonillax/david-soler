<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;


class Product extends Model
{
    use SoftDeletes, HasTranslations;

    protected $table = 'products';

    protected $fillable = [
        'id',
        'code',
        'barcode',
        'name',
        'full_name',
        'description',
        'collection_id',
        'price_unit_id',
    ];
    protected $translatable = [
        'collection_name',
        'full_name',
        'name',
        'description',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'id');
    }

}
