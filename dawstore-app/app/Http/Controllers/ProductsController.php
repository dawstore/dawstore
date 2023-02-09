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
    public function productsGenre($genre)
    {
        $products = Product::where('genre', $genre)->orWhere('genre', 'unisex')->get(); // Nos saca todos los productos de mujer y unisex de la BBDD
        return view('products', @compact('products'));
    }


    public function productsGenre($genre)
    {
        $products = Product::where('genre', $genre)->orWhere('genre', 'unisex')->get(); // Nos saca todos los productos de mujer y unisex de la BBDD
        return view($genre, @compact('products'));
    }

    public function detail($id = 1)
    {
        $product = Product::findOrFail($id);
        return view('detail', @compact('product'));
    }
}

