<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // protected $casts = [
    //     'attribute' => 'array'
    // ];

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }

    protected static function booted()
    {
        static::saving(function($product) {
            $product->attribute = json_encode(request('attribute'));
        });
    }

    
}
