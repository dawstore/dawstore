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
        $products = Product::where('genre', 'male')->orWhere('genre', 'unisex')->get(); // Nos saca todos los productos de hombre y unisex de la BBDD
        return view('male', @compact('products'));
    }

    public function productsFemale()
    {
        $products = Product::where('genre', 'female')->orWhere('genre', 'unisex')->get(); // Nos saca todos los productos de mujer y unisex de la BBDD
        return view('female', @compact('products'));
    }

    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('detail', @compact('product'));
    }
}

