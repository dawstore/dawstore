<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminpanelController extends Controller
{
    public function products()
    {
        $products = Product::all(); // Nos saca todos los productos de la BBDD
        return view('admin/admin-panel', @compact('products'));
    }

    public function insert(Request $request)
    {
        $productInsert = new Product;
        $productInsert->sku = $request->sku;
        $productInsert->name = $request->name;
        $productInsert->price = $request->price;
        $productInsert->description = $request->desc;
        $productInsert->stock = $request->stock;
        $productInsert->genre = $request->genre;
        if($request->hasFile("images")){

            $imagen = $request->file("images");
            $nombreimagen = Str::slug($request->nombre).".".$imagen->guessExtension();
            $ruta = public_path("img");

            //$imagen->move($ruta,$nombreimagen);
            copy($imagen->getRealPath(),$ruta.$nombreimagen);

            $productInsert->images = $nombreimagen;            
            
        }
        // $productInsert->images = $request->images;
        $productInsert->save();
        return back() -> with('mensaje', 'Nota agregada exitosamente');
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
