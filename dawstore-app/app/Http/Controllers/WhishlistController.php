<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WhishlistController extends Controller
{
    public function showWhishlist()
    {
        $user = User::find(Auth::id());
        $products=$user->whishlist->products;
        return view('whishlist', @compact('products'));
    }


    public function addProduct(Request $request,$id){

        $user = User::find(Auth::id());
        $whishlist=$user->whishlist;
        $product = Product::find($request->product_id);
        $whishlist->products()->attach($id);
        smilify('success', 'Product added to the Wishlist!');

        return back();

    }

    public function delete(Request $request,$id) {
        $user = User::find(Auth::id());
        $whishlist = $user->whishlist;
        $product = Product::find($request->product_id);

        $whishlist->products()->detach($id);
        smilify('success', 'Product removed!');
        return back();

    }
}
