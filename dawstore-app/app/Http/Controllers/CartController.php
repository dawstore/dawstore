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
        $products=$user->cart->products;
        return view('cart', @compact('products'));
    }

    public function addProduct(Request $request,$id){
       
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
        notify()->success('');
        return back();

    }

}
