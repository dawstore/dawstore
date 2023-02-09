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
    public function productsGenre($genre,$option = 4)
    {
        switch ($option) {
            case ('0'):
                $products = Product::where('genre', $genre)->orWhere('genre', 'unisex')->orderBy('name','desc')->get();
                break;
            case ('1'):
                $products = Product::where('genre', $genre)->orWhere('genre', 'unisex')->orderBy('name','asc')->get();
                break;
            case ('2'):
                $products = Product::where('genre', $genre)->orWhere('genre', 'unisex')->orderBy('price','desc')->get();
                break;
            case ('3'):
                $products = Product::where('genre', $genre)->orWhere('genre', 'unisex')->orderBy('price','asc')->get();
                break;
            case ('4'):
                $products = Product::where('genre', $genre)->orWhere('genre', 'unisex')->orderBy('price','desc')->get();
                break;
        }

            return view('products', @compact('products','genre'));
        
    }

    public function detail($id = 1)
    {
        $product = Product::findOrFail($id);
        return view('detail', @compact('product'));
    }
}

