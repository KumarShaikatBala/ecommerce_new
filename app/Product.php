<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'brand_id',
        'tittle',
        'description',
        'slug',
        'quantity',
        'price',
//        'status',
        'offer_price',
//        'admin_id',
    ];
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
