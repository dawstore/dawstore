@extends('templates.template')

@section('titulo')
    Cart
@endsection

@section('cart_section')
    <div class="container ">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="h2 text-uppercase mb-0">Cart</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                                <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <h2 class="h5 text-uppercase">Shopping cart</h2>
            <div class="row ">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <!-- CART TABLE-->
                    <div class="table-responsive mb-4">
                        <table class="table text-nowrap">
                            <thead class="bg-light">
                                <tr>
                                    <th class="border-0 p-3" scope="col"> <strong
                                            class="text-sm text-uppercase">Product</strong></th>
                                    <th class="border-0 p-3" scope="col"> <strong
                                            class="text-sm text-uppercase">Price</strong></th>
                                    <th class="border-0 p-3" scope="col"> <strong
                                            class="text-sm text-uppercase">Quantity</strong></th>
                                    <th class="border-0 p-3" scope="col"> <strong
                                            class="text-sm text-uppercase">Total</strong></th>
                                    <th class="border-0 p-3" scope="col"> <strong
                                            class="text-sm text-uppercase"></strong></th>
                                </tr>
                            </thead>
                            <tbody class="border-0">
                                @foreach ($products as $product)
                                    <tr>
                                        <th class="ps-0 py-3 border-light" scope="row">
                                            <div class="d-flex align-items-center">
                                                <a class="reset-anchor d-block animsition-link" href="detail.html">
                                                    <img src="{{URL::asset('img/products/'.$product->sku.'-files/'. $product->images[0]->image_name)}}" alt="..." width="70" /></a>
                                                <div class="ms-3"><strong class="h6">
                                                        <a class="reset-anchor animsition-link" href="detail.html">{{$product->name}}</a></strong></div>
                                            </div>
                                        </th>
                                        <td class="p-3 align-middle border-light">
                                            <p class="mb-0 small">${{$product->price}}</p>
                                        </td>
                                        <td class="p-3 align-middle border-light">
                                            <div class="border d-flex align-items-center justify-content-between px-3"><span
                                                    class="small text-uppercase text-gray headings-font-family">Quantity</span>
                                                <div class="quantity">
                                                    <a class="dec-btn p-0" href="{{route ('cart.removeAmount', $product)}}">
                                                        <i class="fas fa-caret-left"></i></a>
                                                    <input class="form-control form-control-sm border-0 shadow-0 p-0"
                                                        type="number" value="{{$product->pivot->amount}}" />
                                                    <a class="inc-btn p-0" href="{{route ('cart.addAmount', $product)}}">
                                                        <i class="fas fa-caret-right"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3 align-middle border-light">
                                            <p class="mb-0 small">${{$totalp}}</p>
                                        </td>
                                        <td class="p-3 align-middle border-light"><a class="reset-anchor" href="#!">
                                            <form action="{{ route('cart', $product) }}" method="POST" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="fas fa-trash-alt small text-muted" type="submit"></button>
                                            </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- CART NAV-->
                    <div class="bg-light px-4 py-3">
                        <div class="row align-items-center text-center">
                            <div class="col-md-6 mb-3 mb-md-0 text-md-start"><a class="btn btn-outline-warning pageButtons text-dark btn-sm" href="{{ url('/') }}">
                                <i class="fas fa-long-arrow-alt-left ms-2"></i> Continue Shopping</a></div>

                        </div>
                    </div>
                </div>
                <!-- ORDER TOTAL-->
                <div class="col-lg-4">
                    <div class="card border-0 rounded-0 p-lg-4 bg-light">
                        <div class="card-body">
                            <h5 class="text-uppercase mb-4">Cart total</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center justify-content-between"><strong
                                        class="text-uppercase small font-weight-bold">Subtotal</strong><span
                                        class="text-muted small">${{$total - ($total * 0.21)}}</span></li>
                                <li class="border-bottom my-2"></li>
                                <li class="d-flex align-items-center justify-content-between mb-4"><strong
                                        class="text-uppercase small font-weight-bold">Total</strong><span>${{$total}}</span></li>
                                <li>
                                    <div class="input-group mb-0">
                                        @if (count(Auth::user()->cart->products) > 0) 
                                        <a class="btn btn-outline-warning pageButtons text-dark btn-sm ld ld-heartbeat" href="{{ url('checkout') }}">Procceed to
                                        checkout<i class="fas fa-long-arrow-alt-right ms-2"></i></a>
                                        @endif
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
