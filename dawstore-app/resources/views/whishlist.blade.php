@extends('templates.template')

@section('titulo')
Whishlist
@endsection

@section('cart_section')
<!-- HERO SECTION-->
<div class="container">

    <!-- WHITELIST-->
    <section class="py-5 text-center">
        <header>
            <p class="small text-muted small text-uppercase mb-1">Whishlist</p>
            <h2 class="h5 text-uppercase mb-4">Favorites Products</h2>
        </header>
        <div class="row">
            @foreach ($products as $product)
            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6" data-infinite-scroll='{ "path": ".pagination__next", "append": ".post", "history": false }'>
                <div class="product text-center">
                    <div class="position-relative mb-3">
                        <div class="badge text-white bg-"></div><a class="d-block" href="{{ route('detail', $product) }}"><img class="img-fluid w-100" src="{{URL::asset('img/products/'.$product->sku.'-files/'. $product->images[0]->image_name)}}" alt="..."></a>
                        <div class="product-overlay">
                            <ul class="mb-0 list-inline">
                                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!">
                                    <form action="{{ route('cart', $product) }}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="fas fa-trash-alt small text-muted" type="submit"><i class="bi bi-trash"></i></button>
                                    </form>
                                </li>
                                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-warning" href="{{route ('cart.addProduct',$product->id)}}">Add to cart</a></li>
                            </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="{{ route('detail', $product) }}">{{$product->name}}</a></h6>
                </div>
            </div>
            @endforeach
    </section>
    <!-- NEWSLETTER-->
    <section class="py-5">
        <div class="container p-0">
            <div class="row gy-3">
                <div class="col-lg-6">
                    <h5 class="text-uppercase">Let's be friends!</h5>
                    <p class="text-sm text-muted mb-0">Nisi nisi tempor consequat laboris nisi.</p>
                </div>
                <div class="col-lg-6">
                    <form action="#">
                        <div class="input-group">
                            <input class="form-control form-control-lg" type="email" placeholder="Enter your email address" aria-describedby="button-addon2">
                            <button class="btn btn-warning" id="button-addon2" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
