<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function products()
    {

        $i = 0;
        $sku = ['1', '2', '3', '4', '5','6', '7', '8', '9', '10','11', '12', '13', '14', '15'];
        $name = ['Jordan 1', 'Air Force', 'Blazer', 'Jordan 4', 'Yeezy Adidas','Jordan 1', 'Air Force', 'Blazer', 'Jordan 4', 'Yeezy Adidas','Jordan 1', 'Air Force', 'Blazer', 'Jordan 4', 'Yeezy Adidas'];
        $price = ['100', '80', '90', '120', '230','100', '80', '90', '120', '230','100', '80', '90', '120', '230'];
        $description = ['aaaaa', 'bbbbb', 'cccccc', 'dddddd', 'eeeeee','aaaaa', 'bbbbb', 'cccccc', 'dddddd', 'eeeeee','aaaaa', 'bbbbb', 'cccccc', 'dddddd', 'eeeeee'];
        $stock = ['40', '40', '40', '40', '40','40', '40', '40', '40', '40','40', '40', '40', '40', '40'];
        $genre = ['Male', 'Female', 'Unisex', 'Unisex', 'Male','Male', 'Female', 'Unisex', 'Unisex', 'Male','Male', 'Female', 'Unisex', 'Unisex', 'Male'];
        $images = ['jordan-1.jpg', 'air-force.jpg', 'blazer.jpg', 'jordan-4.jpg', 'yeezy-adidas.jpg','jordan-1.jpg', 'air-force.jpg', 'blazer.jpg', 'jordan-4.jpg', 'yeezy-adidas.jpg','jordan-1.jpg', 'air-force.jpg', 'blazer.jpg', 'jordan-4.jpg', 'yeezy-adidas.jpg'];
        
        $size = sizeof($sku);
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
    public function productsGenre($genre,$filter = 4)
    {
        switch ($filter) {
            case ('0'):
                $products = Product::where('genre', $genre)->orWhere('genre', 'unisex')->orderBy('name','desc')->get();
                break;
            case ('1'):
                $products = Product::where('genre', $genre)->orWhere('genre', 'unisex')->orderBy('name','asc')->get();
                break;
            case ('2'):
                $products = Product::where('genre', $genre)->orWhere('genre', 'unisex')->orderBy('price','asc')->get();
                break;
            case ('3'):
                $products = Product::where('genre', $genre)->orWhere('genre', 'unisex')->orderBy('price','desc')->get();
                break;
            case ('4'):
                $products = Product::where('genre', $genre)->orWhere('genre', 'unisex')->get();
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

