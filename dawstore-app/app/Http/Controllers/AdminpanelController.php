<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Image;
use App\Models\Category;
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
        $productInsert->save();

        $i = 1;
        foreach ($request->images as $image) 
        {
            $imagen = new Image();
            $imagen->product_id = $productInsert->id; 
            $imagen->image_name = $request->sku."-".$i.".".$image->extension();
            $ruta = public_path("img/products/".$request->sku."-files");
            $image->move($ruta,$imagen->image_name);
            $imagen->save();           
            $i++;
        }
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
        $deleteImg = Image::where('product_id', $id);
        $deleteImg->delete();
        $deleteProduct->delete();

        return back()->with('message', '');
    }


/* CATEGORIAS */


    public function category()
    {
        $categories = Category::all(); // Nos saca todos las categorias de la BBDD
        return view('admin/category-manager', @compact('categories'));
    }

    public function insert_category(Request $request)
    {
        $categoryInsert = new Category;
        $categoryInsert->name = $request->name;
        $categoryInsert->description = $request->desc;
        $categoryInsert->save();
        return back() -> with('mensaje', 'Categoria creada exitosamente');
    }
    public function edit_category($id)
    {
        $category = Category::findOrFail($id);
        return view('admin/edit-category', compact('category'));
    }
    public function update_category(Request $request, $id)
    {
        $categoryUpdate = Category::findOrFail($id);
        $categoryUpdate->name = $request->name;
        $categoryUpdate->description = $request->description;
        $categoryUpdate->update();
        return back()->with('mensaje', 'Producto editado exitosamente');
    }        

    public function delete_category($id) {
        $deleteCategory = Category::findOrFail($id);
        $deleteCategory->delete();
        return back()->with('message', '');
    }
}



