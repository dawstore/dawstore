@extends('templates.template')

@section('titulo')
    Home
@endsection

@section('home')
    active
@endsection

@section('hero_section')
    <!-- HERO SECTION-->
    <div class="container" data-aos="fade-left">
        <section class="hero pb-3 bg-cover bg-center d-flex align-items-center"
            style="background: url(img/banner/banner2.gif)">
            <div class="container py-5">
                <div class="row px-4 px-lg-5">
                    <div class="col-lg-6">
                        <p class="text-muted small text-uppercase mb-2">New Inspiration 2023</p>
                        <h1 class="h2 text-uppercase mb-3">Sneakers from tello shoes break the new season</h1><a class="btn btn-warning pageButtons"
                            href="{{url('products','all products')."/9"}}">All Products</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- CATEGORIES SECTION-->
        <section class="pt-5">
            <header class="text-center" data-aos="fade-up">
                <p class="small text-muted small text-uppercase mb-1">Carefully created collections</p>
                <h2 class="h5 text-uppercase mb-4">Browse our Brands</h2>
            </header>
        </section>

        <section class="hero-section" data-aos="zoom-in">
            <div class="card-grid">
                <a class="cards" href="{{ url('products', 'Adidas') . '/5' }}">
                    <div class="card__background" style="background-image: url(img/cat-img-1.jpg)"></div>
                    <div class="card__content">

                    </div>
                </a>
                <a class="cards" href="{{ url('products', 'Nike') . '/6' }}">
                    <div class="card__background" style="background-image: url(img/cat-img-2.jpg)"></div>
                    <div class="card__content">
                    </div>
                </a>
                <a class="cards" href="{{ url('products', 'New Balance') . '/7' }}">
                    <div class="card__background" style="background-image: url(img/cat-img-3.jpg)"></div>
                    <div class="card__content">

                    </div>
                    </li>
                    <a class="cards" href="{{ url('products', 'Jordan') . '/8' }}">
                        <div class="card__background" style="background-image: url(img/cat-img-4.jpg)"></div>
                        <div class="card__content">

                        </div>
                    </a>
                    <div>
        </section>
        <!-- TRENDING PRODUCTS-->
        <section class="py-5 text-center">
            <header>
                <p class="small text-muted small text-uppercase mb-1">Made the hard way</p>
                <h2 class="h5 text-uppercase mb-4">Top trending products</h2>
            </header>
            <div class="row">
                <!-- PRODUCT-->
                @foreach ($products as $product)
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-down" data-aos-duration="1500">
                        <div class="product text-center">
                            <div class="position-relative mb-3">
                                <div class="badge text-white bg-"></div><a class="d-block"
                                    href="{{ route('detail', $product) }}/{{ $product->brand_id }}"><img
                                        class="img-fluid w-100"
                                        src="{{ URL::asset('img/products/' . $product->sku . '-files/' . $product->images[0]->image_name) }}"
                                        alt="..." loading="lazy"></a>
                                <div class="product-overlay">
                                    <ul class="mb-0 list-inline">
                                        @if (Auth::user())
                                            @if (Auth::user()->whishlist->products->contains($product->id))
                                                <li class="list-inline-item m-0 p-0">
                                                    <form action="{{ route('whishlist', $product) }}" method="POST" class="d-inline">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="bi bi-heart-fill small text-muted btn btn-sm btn-outline-dark" type="submit"></button>
                                                        </form>
                                                </li>
                                                @if (Auth::user()->cart->products->contains($product->id))
                                                <li class="list-inline-item m-0 p-0 "><a class="btn btn-sm btn-warning"
                                                        href="{{ route('cart.amount',$product) .'/add'}}">Add to cart</a>
                                                </li>
                                                @else
                                                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-warning"
                                                    href="{{ route('cart.addProduct', $product->id) }}">Add to cart</a>
                                                </li>
                                                @endif
                                            @else
                                                <li class="list-inline-item m-0 p-0">
                                                    <a class="btn btn-sm btn-outline-dark"
                                                        href="{{ route('whishlist.addProduct', $product->id) }}"><i
                                                            class="bi bi-heart"></i></a>
                                                </li>
                                                @if (Auth::user()->cart->products->contains($product->id))
                                                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-warning"
                                                        href="{{ route('cart.amount',$product) .'/add'}}">Add to cart</a>
                                                </li>
                                                @else
                                                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-warning"
                                                    href="{{ route('cart.addProduct', $product->id) }}">Add to cart</a>
                                                </li>
                                                @endif
                                            @endif
                                        @else
                                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark"
                                                    href="{{ route('login') }}"><i class="far fa-heart"></i></a></li>
                                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-warning"
                                                    href="{{ route('login') }}">Add to cart</a></li>
                                        @endif
                                        <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark"
                                                href="#productView{{ $product->id }}" data-bs-toggle="modal"><i
                                                    class="fas fa-expand"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h6> <a class="reset-anchor" href="{{ route('detail', $product) }}">{{ $product->name }}</a>
                            </h6>
                            <p class="small text-muted">${{ $product->price }}</p>
                            <br>
                        </div>

                    </div>

                    <!--  Modal -->
                    <div class="modal fade" id="productView{{ $product->id }}" tabindex="-1">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content overflow-hidden border-0">
                                <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"
                                    type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div class="modal-body p-0">
                                    <div class="row align-items-stretch">
                                        <div class="col-lg-6 p-lg-0"><a
                                                class="glightbox product-view d-block h-100 bg-cover bg-center"
                                                href="{{ URL::asset('img/products/' . $product->sku . '-files/' . $product->images[0]->image_name) }}"
                                                data-gallery="gallery1" data-glightbox="Red digital smartwatch">
                                                <img class="img-fluid w-100"
                                                    src="{{ URL::asset('img/products/' . $product->sku . '-files/' . $product->images[0]->image_name) }}"
                                                    alt="..."></a><a class="glightbox d-none"
                                                href="{{ URL::asset('img/products/' . $product->sku . '-files/' . $product->images[1]->image_name) }}"
                                                data-gallery="gallery1" data-glightbox="Red digital smartwatch">
                                                <a class="glightbox d-none"
                                                    href="{{ URL::asset('img/products/' . $product->sku . '-files/' . $product->images[2]->image_name) }}"
                                                    data-gallery="gallery1" data-glightbox="Red digital smartwatch"><a
                                                        class="glightbox d-none"
                                                        href="{{ URL::asset('img/products/' . $product->sku . '-files/' . $product->images[3]->image_name) }}"
                                                        data-gallery="gallery1"
                                                        data-glightbox="Red digital smartwatch"></a></div>
                                        <div class="col-lg-6">
                                            <div class="p-4 my-md-4">
                                                <ul class="list-inline mb-2">
                                                    <li class="list-inline-item m-0"><i
                                                            class="fas fa-star small text-warning"></i></li>
                                                    <li class="list-inline-item m-0 1"><i
                                                            class="fas fa-star small text-warning"></i></li>
                                                    <li class="list-inline-item m-0 2"><i
                                                            class="fas fa-star small text-warning"></i></li>
                                                    <li class="list-inline-item m-0 3"><i
                                                            class="fas fa-star small text-warning"></i></li>
                                                    <li class="list-inline-item m-0 4"><i
                                                            class="fas fa-star small text-warning"></i></li>
                                                </ul>
                                                <h2 class="h4">{{ $product->name }}</h2>
                                                <p class="text-muted">${{ $product->price }}</p>
                                                <p class="text-sm mb-4">{{ $product->description }}</p>
                                                <div class="row align-items-stretch mb-4 gx-0 d-flex align-items-center justify-content-center">
                                                    @if (Auth::user())
                                                    @if (Auth::user()->cart->products->contains($product->id))
                                                    <div class="col-sm-5"><a
                                                        class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0 "
                                                        href="{{ route('cart.amount',$product) .'/add'}}">Add to
                                                        cart</a></div>
                                                    </div>
                                                @else
                                                <div class="col-sm-5"><a
                                                    class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0 "
                                                    href="{{ route('cart.addProduct', $product->id) }}">Add to
                                                    cart</a></div>
                                                </div>
                                                @endif
                                                @if (Auth::user()->whishlist->products->contains($product->id))
                                                <form action="{{ route('whishlist', $product) }}" method="POST" class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="bi bi-heart-fill medium text-muted d-flex align-items-center justify-content-center" type="submit"> Remove to wish list</button>
                                                    </form>
                                                @else
                                                    <a class="btn btn-link text-dark text-decoration-none p-0 d-flex align-items-center justify-content-center"
                                                        href="{{ route('whishlist.addProduct', $product->id) }}"><i
                                                            class="bi bi-heart"></i> Add to wish list</a>
                                                @endif
                                            @else
                                                <div class="col-sm-5"><a
                                                        class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0 "
                                                        href="{{ route('login') }}">Add to cart</a></div>

                                            </div>
                                            <a class="btn btn-link text-dark text-decoration-none p-0 d-flex align-items-center justify-content-center"
                                                href="{{ route('login') }}"><i class="bi bi-heart"></i> Add
                                                to wish list</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    @endforeach
    </section>

        <!-- SERVICES-->
        <section class="py-5 bg-light" data-aos="fade-right">
            <div class="container">
                <div class="row text-center gy-3">
                    <div class="col-lg-4">
                        <div class="d-inline-block">
                            <div class="d-flex align-items-end">
                                <svg class="svg-icon svg-icon-big svg-icon-light">
                                    <use xlink:href="#delivery-time-1"> </use>
                                </svg>
                                <div class="text-start ms-3">
                                    <h6 class="text-uppercase mb-1">Free shipping</h6>
                                    <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-inline-block">
                            <div class="d-flex align-items-end">
                                <svg class="svg-icon svg-icon-big svg-icon-light">
                                    <use xlink:href="#helpline-24h-1"> </use>
                                </svg>
                                <div class="text-start ms-3">
                                    <h6 class="text-uppercase mb-1">24 x 7 service</h6>
                                    <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-inline-block">
                            <div class="d-flex align-items-end">
                                <svg class="svg-icon svg-icon-big svg-icon-light">
                                    <use xlink:href="#label-tag-1"> </use>
                                </svg>
                                <div class="text-start ms-3">
                                    <h6 class="text-uppercase mb-1">Festivaloffers</h6>
                                    <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    </div>
@endsection
