@extends('templates.template')

@section('titulo')
Male
@endsection

@section('male')
active
@endsection

@section('shop_section')
<section class="py-5 bg-light">
  <div class="container">
    <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
      <div class="col-lg-6">
        <h1 class="h2 text-uppercase mb-0">Shop / Male</h1>
      </div>
      <div class="col-lg-6 text-lg-end">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
            <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shop</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
@endsection

@section('product_section')
<section class="py-5">
  <div class="container p-0">
    <div class="row">
      <!-- FILTROS-->
      <div class="col-lg-3 order-2 order-lg-1">
        <h5 class="text-uppercase mb-4">Categories</h5>
        <div class="py-2 px-4 sneakers text-dark mb-3"><strong class="small text-uppercase fw-bold">Sneakers</strong></div>
        <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
          <li class="mb-2"><a class="reset-anchor" href="#!">Lifestyle</a></li>
          <li class="mb-2"><a class="reset-anchor" href="#!">Jordan</a></li>
          <li class="mb-2"><a class="reset-anchor" href="#!">Running</a></li>
          <li class="mb-2"><a class="reset-anchor" href="#!">Gym</a></li>
        </ul>


      </div>
      <!-- SHOP LISTING-->
      <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
        <div class="row mb-3 align-items-center">
          <div class="col-lg-6 mb-2 mb-lg-0">
          </div>
          <div class="col-lg-6">
            <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
              <li class="list-inline-item text-muted me-3"><a class="reset-anchor p-0" href="#!"><i class="fas fa-th-large"></i></a></li>
              <li class="list-inline-item text-muted me-3"><a class="reset-anchor p-0" href="#!"><i class="fas fa-th"></i></a></li>
              <li class="list-inline-item">
                <select class="selectpicker" data-customclass="form-control form-control-sm">
                  <option value>Sort By </option>
                  <option value="default">Default sorting </option>
                  <option value="popularity">Popularity </option>
                  <option value="desc">Price: Low to High </option>
                  <option value="asc">Price: High to Low </option>
                </select>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <!-- PRODUCT-->
          @foreach ($products as $product)
          <div class="col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="mb-3 position-relative">
                <div class="badge text-white bg-info">Sale</div><a class="d-block" href="{{ route('detail', $product) }}"><img class="img-fluid w-100" src="img/products/products({{$product->sku}}).jpg" alt="..."></a>
                <div class="product-overlay">
                  <ul class="mb-0 list-inline">
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="{{url ('cart')}}">Add to cart</a></li>
                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView{{$product->id}}" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
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
                      <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" href="img/products/products({{$product->sku}}).jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"><img class="img-fluid w-100" src="img/products/products({{$product->sku}}).jpg" alt="..."></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
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
      </div>
    </div>
  </div>
</section>
@endsection
