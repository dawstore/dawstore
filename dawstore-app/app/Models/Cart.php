<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasOne(User::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class, 'cart_product')->withPivot('product_id','amount','status');
    }
}
