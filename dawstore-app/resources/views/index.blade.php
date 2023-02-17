@extends('templates.template')

@section('titulo')
Home
@endsection

@section('home')
active
@endsection



@section('hero_section')
<!-- HERO SECTION-->
<div class="container">
    <section class="hero pb-3 bg-cover bg-center d-flex align-items-center" style="background: url(img/banner/banner2.gif)">
        <div class="container py-5">
            <div class="row px-4 px-lg-5">
                <div class="col-lg-6">
                    <p class="text-muted small text-uppercase mb-2">New Inspiration 2020</p>
                    <h1 class="h2 text-uppercase mb-3">20% off on new season</h1><a class="btn btn-warning" href="shop.html">Browse collections</a>
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
            <a class="cards" href="#">
                <div class="card__background" style="background-image: url(img/cat-img-1.jpg)"></div>
                <div class="card__content">

                </div>
            </a>
            <a class="cards" href="#">
                <div class="card__background" style="background-image: url(img/cat-img-2.jpg)"></div>
                <div class="card__content">
                </div>
            </a>
            <a class="cards" href="#">
                <div class="card__background" style="background-image: url(img/cat-img-3.jpg)"></div>
                <div class="card__content">

                </div>
                </li>
                <a class="cards" href="#">
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
                        <div class="badge text-white bg-"></div><a class="d-block" href="{{ route('detail', $product) }}/{{$product->brand_id}}"><img class="img-fluid w-100" src="{{URL::asset('img/products/'.$product->sku.'-files/'. $product->images[0]->image_name)}}" alt="..." loading="lazy"></a>
                        <div class="product-overlay">
                            <ul class="mb-0 list-inline">
                                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-warning" href="{{url ('cart')}}">Add to cart</a></li>
                                <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView{{$product->id}}" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="{{ route('detail', $product) }}">{{ $product->name }}</a></h6>
                    <p class="small text-muted">${{ $product->price }}</p>
                </div>

            </div>

            <!--  Modal -->
            <div class="modal fade" id="productView{{$product->id}}" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content overflow-hidden border-0">
                        <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="{{URL::asset('img/products/'.$product->sku.'-files/'. $product->images[1]->image_name)}}" data-gallery="gallery1" data-glightbox="Red digital smartwatch">
                                        <img class="img-fluid w-100" src="{{URL::asset('img/products/'.$product->sku.'-files/'. $product->images[0]->image_name)}}" alt="..."></a><a class="glightbox d-none" href="{{URL::asset('img/products/'.$product->sku.'-files/'. $product->images[1]->image_name)}}" data-gallery="gallery1" data-glightbox="Red digital smartwatch">
                                        <a class="glightbox d-none" href="{{URL::asset('img/products/'.$product->sku.'-files/'. $product->images[2]->image_name)}}" data-gallery="gallery1" data-glightbox="Red digital smartwatch"><a class="glightbox d-none" href="{{URL::asset('img/products/'.$product->sku.'-files/'. $product->images[3]->image_name)}}" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">
                                            <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                            <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                                            <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                                            <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                                            <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
                                        </ul>
                                        <h2 class="h4">{{ $product->name }}</h2>
                                        <p class="text-muted">${{ $product->price }}</p>
                                        <p class="text-sm mb-4">{{ $product->description }}</p>
                                        <div class="row align-items-stretch mb-4 gx-0">
                                            <div class="col-sm-7">
                                                <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                                                    <div class="quantity">
                                                        <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                                        <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                                        <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="cart.html">Add to cart</a></div>
                                        </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i class="far fa-heart me-2"></i>Add to wish list</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </section>

    <!-- CATEGORIES SECTION-->
    <section class="pt-5" data-aos="zoom-in">
        <header class="text-center" data-aos="fade-up">
            <p class="small text-muted small text-uppercase mb-1">Month Top Product</p>
            <h2 class="h5 text-uppercase mb-4">Trending Products</h2>
        </header>

        <div class="rounded-background-box">
            <div class="left-rounded-column">
                <div class="products">
                    <img class="tablet float" src="https://preview.ibb.co/cRRaiy/nike.png" "/>
                 </div>
            </div>
         <div class=" right-rounded-column">
                <div class="products-info text-center">
                    <h3>Men's shoe</h3>
                    <h1> Nike Air Max 270 </h1>
                    <p class="pt-5 text-center">The Nike Air Max 270 G offers a legendary look.<br>
                        This shoe is a stitch-for-stitch reconstruction of the original Air icon, incorporating breathable mesh and innovative traction for maximum performance.</p>
                    <button class="btn btn-warning">Shop Now</button>
                    </div>
                    <div class="feature-price">

                    </div>
                </div>
            </div>
    </section>

    <!-- SERVICES-->
    <section class="py-5 bg-light">
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
</div>
@endsection
