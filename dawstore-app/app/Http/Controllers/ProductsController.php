<?php

namespace App\Http\Controllers;
use App\Models\Product;

class ProductsController extends Controller
{
    public function products()
    {
        $products = Product::all(); // Nos saca todos los productos de la BBDD
        return view('index', @compact('products'));
    }

    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('detail', @compact('product'));
    }
}
