<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function showCheck()
    {
        $user = User::find(Auth::id());
        $total = $this->total();
        $products=$user->cart->products;
        return view('checkout', @compact('products','total'));
    }

    public function showPay($total)
    {
        return view('payment', @compact('total'));
    }

    private function total() {
        $user = User::find(Auth::id());
        $products=$user->cart->products;
        $totalProducto = 0;
        foreach($products as $product){
            $totalProducto += $product->price * $product->pivot->amount;
        }
        return $totalProducto;
    }
}
