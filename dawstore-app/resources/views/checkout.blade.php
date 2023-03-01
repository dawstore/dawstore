@extends('templates.template')

@section('titulo')
Checkout
@endsection

@section('checkout_section')
<div class="container">
    <!-- HERO SECTION-->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                <div class="col-lg-6">
                    <h1 class="h2 text-uppercase mb-0">Checkout</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                            <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-dark" href="cart.html">Cart</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <!-- BILLING ADDRESS-->
        <h2 class="h5 text-uppercase mb-4">Billing details</h2>
        <div class="row">
            <div class="col-lg-8">
                <form action="#">
                    <div class="row gy-3">
                        <div class="col-lg-6">
                            <label class="form-label text-sm text-uppercase" for="firstName">First name </label>
                            <input class="form-control form-control-lg" type="text" id="firstName" name="firstName" placeholder="Enter your first name" required>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label text-sm text-uppercase" for="lastName">Last name </label>
                            <input class="form-control form-control-lg" type="text" id="lastName" name="lastName" placeholder="Enter your last name" required>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label text-sm text-uppercase" for="checkout-email">Email address </label>
                            <input class="form-control form-control-lg" type="email" id="checkout-email" name="checkout-email" placeholder="e.g. Jason@example.com" required>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label text-sm text-uppercase" for="phone">Phone number </label>
                            <input class="form-control form-control-lg" type="tel" id="phone" name="phone" placeholder="e.g. +02 245354745" required>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label text-sm text-uppercase" for="country">Country </label>
                            <input class="form-control form-control-lg" type="text" id="country" name="country" placeholder="Your country name" required>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label text-sm text-uppercase" for="city">Town/City </label>
                            <input class="form-control form-control-lg" type="text" id="city" name="city" placeholder="Your town/city name"required>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label text-sm text-uppercase" for="address">Billing Address line 1 </label>
                            <input class="form-control form-control-lg" type="text" id="address" name="address" placeholder="House number and street name" required>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label text-sm text-uppercase" for="address2">Billing Address line 2 (Optional)</label>
                            <input class="form-control form-control-lg" type="text" id="address2" name="address2" placeholder="Apartment, Suite, Unit, etc (optional)">
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label text-sm text-uppercase" for="address">Order Address line 1 </label>
                            <input class="form-control form-control-lg" type="text" id="address" name="address" placeholder="House number and street name" required>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label text-sm text-uppercase" for="address2">Order Address line 2 (Optional)</label>
                            <input class="form-control form-control-lg" type="text" id="address2" name="address2" placeholder="Apartment, Suite, Unit, etc (optional)">
                        </div>
                    </div>
                </form>
            </div>
            <!-- ORDER SUMMARY-->
            <div class="col-lg-4">
                <div class="card border-0 rounded-0 p-lg-4 bg-light">
                    <div class="card-body">
                        <h5 class="text-uppercase mb-4">Your order</h5>
                        <ul class="list-unstyled mb-0">
                            @foreach ($products as $product)
                            <li class="d-flex align-items-center justify-content-between"><strong class="small fw-bold">{{$product->name}} (x{{$product->pivot->amount}})</strong><span class="text-muted small">${{$product->price}} (${{$product->price * $product->pivot->amount}})</span></li>
                            <li class="border-bottom my-2"></li>
                            @endforeach
                            <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small fw-bold">Total</strong><span>${{$total}}</span></li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="col-lg-12 form-group">
                    <!--Añadir el payment-->
                    <a href="{{ url('payment', $total) }}"><button class="btn btn-dark" type="submit">Pay with Credit or Debit Card <i class="bi bi-credit-card"></i></button></a>
                    <a href="{{ url('paypal') }}"><button class="btn  btn-warning" type="submit">Pay with Paypal <i class="bi bi-paypal"></i></button></a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection