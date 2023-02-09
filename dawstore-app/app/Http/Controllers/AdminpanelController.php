<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

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
            $imagen = $request->images;
            $nombreimagen = Str::slug($request->name).".".$imagen->guessExtension();
            $ruta = public_path("img/products/");
            $imagen->move($ruta,$nombreimagen); 
            $productInsert->images = $nombreimagen;            
        }
        $productInsert->save();
        return back() -> with('mensaje', 'Producto creado exitosamente');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin/edit-product', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $file_path = Product::findOrFail($id);

        if (File::exists(public_path("img/products/" . $file_path->images))) {
            File::delete(public_path("img/products/" . $file_path->images));
        }

        $productUpdate = Product::findOrFail($id);
        $productUpdate->sku = $request->sku;
        $productUpdate->name = $request->name;
        $productUpdate->price = $request->price;
        $productUpdate->description = $request->description;
        $productUpdate->stock = $request->stock;
        $productUpdate->genre = $request->genre;
        if($request->hasFile("images")){
            $imagen = $request->images;
            $nombreimagen = Str::slug($request->name).".".$imagen->guessExtension();
            $ruta = public_path("img/products/");
            $imagen->move($ruta,$nombreimagen); 
            $productUpdate->images = $nombreimagen;            
        }
        $productUpdate->update();

        // $fileUpdate = Product::findOrFail($id);
        // if($request->hasFile("images")){
        //     $imagen = $request->images;
        //     $nombreimagen = Str::slug($request->name).".".$imagen->guessExtension();
        //     $ruta = public_path("img/products/");
        //     $imagen->move($ruta,$nombreimagen); 
        //     $fileUpdate->images = $nombreimagen;            
        // }
        // $fileUpdate->save();
        return back()->with('mensaje', 'Producto editado exitosamente');
    }        

    public function delete($id) {
        $deleteProduct = Product::findOrFail($id);
        $deleteProduct->delete();
        return back()->with('message', '');
    }
}
