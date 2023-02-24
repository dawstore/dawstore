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
                                    <form action="{{ route('whishlist', $product) }}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="fas fa-trash-alt small text-muted" type="submit"></button>
                                    </form>

                                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-warning" href="{{route ('cart.addProduct',$product->id)}}">Add to cart</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
            @endforeach
    </section>
</div>
@endsection
