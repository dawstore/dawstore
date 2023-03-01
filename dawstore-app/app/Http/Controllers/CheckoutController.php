<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_detail;
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

    public function createOrder(Request $request)
    {

        $createOrder = new Order;
        $createOrder->user_id = User::find(Auth::id())->id;
        if ($request->firstName != null && $request->lastName != null && $request->checkout_email != null && $request->phone != null &&
        $request->country != null && $request->city != null && $request->b_address != null && $request->o_address != null) {
            $createOrder->first_name = $request->firstName;
            $createOrder->last_name = $request->lastName;
            $createOrder->order_email = $request->checkout_email;
            $createOrder->order_phone = $request->phone;
            $createOrder->country = $request->country;
            $createOrder->city = $request->city;
            $createOrder->billing_address = $request->b_address;
            if ($request->b_address2 != null) {
                $createOrder->billing_address_optional = $request->b_address2;
            }
            $createOrder->order_address = $request->o_address;
            if ($request->o_address2 != null) {
                $createOrder->order_address_optional = $request->o_address2;
            }
            $createOrder->ammount = $this->total();
            $createOrder->save();

            $user = User::find(Auth::id());
            $products=$user->cart->products;
            foreach($products as $product){
                $createOrderDetails = new Order_detail;
                $createOrderDetails->order_id = $createOrder->id;
                $createOrderDetails->product_id = $product->id;
                $createOrderDetails->price_quantity = $product->price * $product->pivot->amount;
                $createOrderDetails->quantity = $product->pivot->amount;
                $createOrderDetails->save();
                $product->stock = $product->stock - $product->pivot->amount;
                $product->update();
                $cart = $user->cart;
                $cart->products()->detach($product->id);
            }

            smilify('success', 'Order placed successfully!');
            return view('profile');
        } else {
            $this->showCheck();
        }
    }
        
}


