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

    public function productsMale()
    {
        $products = Product::all()->where('genre', 'male'); // Nos saca todos los productos de hombre de la BBDD
        return view('male', @compact('products'));
    }

    public function productsFemale()
    {
        $products = Product::all()->where('genre', 'female'); // Nos saca todos los productos de mujer de la BBDD
        return view('female', @compact('products'));
    }

    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('detail', @compact('product'));
    }
}

