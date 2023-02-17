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
            <p class="small text-muted small text-uppercase mb-1">Whitelist</p>
            <h2 class="h5 text-uppercase mb-4">Favorites Products</h2>
        </header>
        <div class="row">
            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6" data-infinite-scroll='{ "path": ".pagination__next", "append": ".post", "history": false }'>
                <div class="product text-center">
                    <div class="position-relative mb-3">
                        <div class="badge text-white bg-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="" alt="..."></a>
                        <div class="product-overlay">
                            <ul class="mb-0 list-inline">
                                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-warning" href="{{url ('cart')}}">Add to cart</a></li>
                                <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#test" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>

                            </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="">Nombre</a></h6>
                    <p class="small text-muted">Precio</p>
                </div>
            </div>
            <!--  Modal -->
            <div class="modal fade" id="test" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content overflow-hidden border-0">
                        <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="" data-gallery="gallery1" data-glightbox="Red digital smartwatch">
                                    <img class="img-fluid w-100" src="" alt="..."></a>
                                    <a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a>
                                    <a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">
                                            <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                            <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                                            <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                                            <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                                            <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
                                        </ul>
                                        <h2 class="h4">Nombre</h2>
                                        <p class="text-muted">Precio</p>
                                        <p class="text-sm mb-4">Desc</p>
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
