<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminpanelController extends Controller
{
    public function products()
    {
        $products = Product::all(); // Nos saca todos los productos de la BBDD
        return view('admin/admin-panel', @compact('products'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin/edit-product', compact('product'));
    }

    public function update(Request $request, $id)
    {

        $productUpdate = Product::findOrFail($id);
        $productUpdate->sku = $request->sku;
        $productUpdate->name = $request->name;
        $productUpdate->price = $request->price;
        $productUpdate->description = $request->description;
        $productUpdate->stock = $request->stock;
        $productUpdate->genre = $request->genre;
        $productUpdate->save();
        return back()->with('message', 'updated product');
    }        

    public function delete($id) {
        $deleteProduct = Product::findOrFail($id);
        $deleteProduct -> delete();
        return back() -> with('message', '');
        }
}
