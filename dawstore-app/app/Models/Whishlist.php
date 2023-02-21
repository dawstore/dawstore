<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whishlist extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasOne(User::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class, 'whishlist_product')->withTimestamps();
    }
}
