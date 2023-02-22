<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function products()
    {
        $products = Product::orderBy('stock', 'desc')->take(8)->get(); // Nos saca todos los productos de la BBDD
        return view('index', @compact('products'));
    }
    public function productsGenre($genre,$filter = 4,)
    {
        $brands = Brand::all();
        
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
            case ('5'):
                $products = Product::where('brand_id', 1)->get();
                break;
            case ('6'):
                $products = Product::where('brand_id', 2)->get();
                break;
            case ('7'):
                $products = Product::where('brand_id', 3)->get();
                break;
            case ('8'):
                $products = Product::where('brand_id', 4)->get();
                break;
        }
            
            return view('products', @compact('products','genre','brands'));
        
    }

    public function detail($id = 1,$id_brand = 1)
    {   
        $brand = Brand::findOrFail($id_brand);
        $product = Product::findOrFail($id);
        $productRelated = Product::whereNot('id',$id)->Where('brand_id', $id_brand)->take(4)->get();
        return view('detail', @compact('product','brand','productRelated'));
    }
}

