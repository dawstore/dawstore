<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function products()
    {

        $i = 0;
        $sku = ['1', '2', '3', '4', '5'];
        $size = sizeof($sku);
        $name = ['Jordan 1', 'Air Force', 'Blazer', 'Jordan 4', 'Yeezy Adidas'];
        $price = ['100', '80', '90', '120', '230'];
        $description = ['aaaaa', 'bbbbb', 'cccccc', 'dddddd', 'eeeeee'];
        $stock = ['40', '40', '40', '40', '40'];
        $genre = ['Male', 'Female', 'Unisex', 'Unisex', 'Male'];
        $images = ['jordan-1.jpg', 'air-force.jpg', 'blazer.jpg', 'jordan-4.jpg', 'yeezy-adidas.jpg'];
        
        if (Product::count() == 0) {
            for ($i = 0; $i < $size; $i++) {
                DB::table('products')->insert([
                    'id' => '0',
                    'sku' => $sku[$i],
                    'name' => $name[$i],
                    'price' => $price[$i],
                    'description' => $description[$i],
                    'stock' => $stock[$i],
                    'genre' => $genre[$i],
                    'images' => $images[$i]
                ]);
            }
        }

        $products = Product::all(); // Nos saca todos los productos de la BBDD
        return view('index', @compact('products'));
    }
    public function productsGenre($genre)
    {
        $products = Product::where('genre', $genre)->orWhere('genre', 'unisex')->get(); // Nos saca todos los productos de mujer y unisex de la BBDD
        return view('products', @compact('products','genre'));
    }

    public function detail($id = 1)
    {
        $product = Product::findOrFail($id);
        return view('detail', @compact('product'));
    }
}

