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
        // if($value ==  ""  &&  $value2 == ""){
        //     $products = Product::where('genre', 'male')->orWhere('genre', 'unisex')->get(); // Nos saca todos los productos de hombre y unisex de la BBDD
        // return view('male', @compact('products'));
        // }else if($value !=  ""  &&  $value2 != ""){
        //     $products = Product::where('genre', 'male')->orWhere('genre', 'unisex')->orderBy($value,$value2)->get();
        //     return view('male', @compact('products'));
        // }

        $products = Product::where('genre', 'male')->orWhere('genre', 'unisex')->get(); // Nos saca todos los productos de mujer y unisex de la BBDD
        return view('male', @compact('products'));
    }

    public function productsFemale()
    {
        $products = Product::where('genre', 'female')->orWhere('genre', 'unisex')->get(); // Nos saca todos los productos de mujer y unisex de la BBDD
        return view('female', @compact('products'));
    }

    // public function productsGenre($genre)
    // {
    //     $products = Product::where('genre', $genre)->orWhere('genre', 'unisex')->get(); // Nos saca todos los productos de mujer y unisex de la BBDD
    //     return view($genre, @compact('products'));
    // }

    public function detail($id = 1)
    {
        $product = Product::findOrFail($id);
        return view('detail', @compact('product'));
    }
}

