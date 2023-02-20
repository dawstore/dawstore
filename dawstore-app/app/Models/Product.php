<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function order_detail()
    {
        return $this->belongsTo(Order_detail::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart_product')->withTimestamps();
    }
    
}
