<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function showCart()
    {
        $user = User::find(Auth::id());
        $total = $this->total();
        $products=$user->cart->products;
        return view('cart', @compact('products','total'));
    }

    public function addProduct(Request $request,$id){
        //TODO: Si ya existe sumarle una unidad
        
        $user = User::find(Auth::id());
        $cart=$user->cart;
        $product = Product::find($request->product_id);
        $cart->products()->attach($id);
        return back()->with('');
    }

    public function delete(Request $request,$id) {
        $user = User::find(Auth::id());
        $cart = $user->cart;
        $product = Product::find($request->product_id);
        $cart->products()->detach($id);
        notify()->success('Product removed Succesfully');
        return back();

    }

    public function amount ($id, $option) {
        $user = User::find(Auth::id());
        $products=$user->cart->products;
        foreach($products as $product){
            if ($product->id == $id) {
                $amount = $product->pivot;
                if ($option == 'add') {
                    $amount->amount++;
                } else {
                    $amount->amount--;
                }
                $amount->update();
            }
        }
        return back();
    }

    private function total(){//funcion privada por que solo se va a utilizar aca
        $user = User::find(Auth::id());
        $products=$user->cart->products;
        $totalProducto = 0;
        foreach($products as $product){
            $totalProducto += $product->price * $product->pivot->amount;
        }
        return $totalProducto;
    }

}
