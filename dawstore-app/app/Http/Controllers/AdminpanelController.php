<?php

namespace App\Http\Controllers;
use App\Models\Product;

class AdminpanelController extends Controller
{
    public function products()
    {
        $products = Product::all(); // Nos saca todos los productos de la BBDD
        return view('admin/admin-panel', @compact('products'));
    }
}
