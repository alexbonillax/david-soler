<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;


class Product extends Model
{
    use HasTranslations;
    protected $table = 'products';

    protected $translatable = [
        'collection_name',
        'full_name'
    ];
}
