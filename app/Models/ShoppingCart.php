<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $fillable = [
        'uid',
        'product_id',
        'product_name',
        'product_type',
        'product_price',
        'product_qty',
        'product_cover',
        'is_ordered'
    ];

    public function products()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
