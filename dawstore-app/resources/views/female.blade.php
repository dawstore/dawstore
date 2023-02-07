@extends('templates.template')

@section('titulo')
Female
@endsection

@section('female')
active
@endsection

@section('shop_section')
<section class="py-5 bg-light">
  <div class="container">
    <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
      <div class="col-lg-6">
        <h1 class="h2 text-uppercase mb-0">Shop</h1>
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
            <p class="text-sm text-muted mb-0">Showing 1–12 of 53 results</p>
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
                  <option value="low-high">Price: Low to High </option>
                  <option value="high-low">Price: High to Low </option>
                </select>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <!-- PRODUCT-->
          <div class="col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="mb-3 position-relative">
                <div class="badge text-white bg-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/product-1.jpg" alt="..."></a>
                <div class="product-overlay">
                  <ul class="mb-0 list-inline">
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                  </ul>
                </div>
              </div>
              <h6> <a class="reset-anchor" href="detail.html">Kui Ye Chen’s AirPods</a></h6>
              <p class="small text-muted">$250</p>
            </div>
          </div>
          <!-- PRODUCT-->
          <div class="col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="mb-3 position-relative">
                <div class="badge text-white bg-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/product-2.jpg" alt="..."></a>
                <div class="product-overlay">
                  <ul class="mb-0 list-inline">
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                  </ul>
                </div>
              </div>
              <h6> <a class="reset-anchor" href="detail.html">Air Jordan 12 gym red</a></h6>
              <p class="small text-muted">$300</p>
            </div>
          </div>
          <!-- PRODUCT-->
          <div class="col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="mb-3 position-relative">
                <div class="badge text-white bg-primary">New</div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/product-3.jpg" alt="..."></a>
                <div class="product-overlay">
                  <ul class="mb-0 list-inline">
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                  </ul>
                </div>
              </div>
              <h6> <a class="reset-anchor" href="detail.html">Cyan cotton t-shirt</a></h6>
              <p class="small text-muted">$25</p>
            </div>
          </div>
          <!-- PRODUCT-->
          <div class="col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="mb-3 position-relative">
                <div class="badge text-white bg-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/product-4.jpg" alt="..."></a>
                <div class="product-overlay">
                  <ul class="mb-0 list-inline">
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                  </ul>
                </div>
              </div>
              <h6> <a class="reset-anchor" href="detail.html">Timex Unisex Originals</a></h6>
              <p class="small text-muted">$351</p>
            </div>
          </div>
          <!-- PRODUCT-->
          <div class="col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="mb-3 position-relative">
                <div class="badge text-white bg-info">Sale</div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/product-5.jpg" alt="..."></a>
                <div class="product-overlay">
                  <ul class="mb-0 list-inline">
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                  </ul>
                </div>
              </div>
              <h6> <a class="reset-anchor" href="detail.html">Red digital smartwatch</a></h6>
              <p class="small text-muted">$250</p>
            </div>
          </div>
          <!-- PRODUCT-->
          <div class="col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="mb-3 position-relative">
                <div class="badge text-white bg-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/product-6.jpg" alt="..."></a>
                <div class="product-overlay">
                  <ul class="mb-0 list-inline">
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                  </ul>
                </div>
              </div>
              <h6> <a class="reset-anchor" href="detail.html">Nike air max 95</a></h6>
              <p class="small text-muted">$300</p>
            </div>
          </div>
          <!-- PRODUCT-->
          <div class="col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="mb-3 position-relative">
                <div class="badge text-white bg-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/product-7.jpg" alt="..."></a>
                <div class="product-overlay">
                  <ul class="mb-0 list-inline">
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                  </ul>
                </div>
              </div>
              <h6> <a class="reset-anchor" href="detail.html">Joemalone Women prefume</a></h6>
              <p class="small text-muted">$25</p>
            </div>
          </div>
          <!-- PRODUCT-->
          <div class="col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="mb-3 position-relative">
                <div class="badge text-white bg-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/product-8.jpg" alt="..."></a>
                <div class="product-overlay">
                  <ul class="mb-0 list-inline">
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                  </ul>
                </div>
              </div>
              <h6> <a class="reset-anchor" href="detail.html">Apple Watch</a></h6>
              <p class="small text-muted">$351</p>
            </div>
          </div>
          <!-- PRODUCT-->
          <div class="col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="mb-3 position-relative">
                <div class="badge text-white bg-danger">Sold</div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/product-9.jpg" alt="..."></a>
                <div class="product-overlay">
                  <ul class="mb-0 list-inline">
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                  </ul>
                </div>
              </div>
              <h6> <a class="reset-anchor" href="detail.html">Men silver Byron Watch</a></h6>
              <p class="small text-muted">$351</p>
            </div>
          </div>
          <!-- PRODUCT-->
          <div class="col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="mb-3 position-relative">
                <div class="badge text-white bg-primary">New</div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/product-10.jpg" alt="..."></a>
                <div class="product-overlay">
                  <ul class="mb-0 list-inline">
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                  </ul>
                </div>
              </div>
              <h6> <a class="reset-anchor" href="detail.html">Ploaroid one step camera</a></h6>
              <p class="small text-muted">$351</p>
            </div>
          </div>
          <!-- PRODUCT-->
          <div class="col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="mb-3 position-relative">
                <div class="badge text-white bg-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/product-11.jpg" alt="..."></a>
                <div class="product-overlay">
                  <ul class="mb-0 list-inline">
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                  </ul>
                </div>
              </div>
              <h6> <a class="reset-anchor" href="detail.html">Gray Nike running shoes</a></h6>
              <p class="small text-muted">$351</p>
            </div>
          </div>
          <!-- PRODUCT-->
          <div class="col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="mb-3 position-relative">
                <div class="badge text-white bg-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/product-12.jpg" alt="..."></a>
                <div class="product-overlay">
                  <ul class="mb-0 list-inline">
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                  </ul>
                </div>
              </div>
              <h6> <a class="reset-anchor" href="detail.html">Black DSLR lense</a></h6>
              <p class="small text-muted">$351</p>
            </div>
          </div>
        </div>
        <!-- PAGINATION-->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center justify-content-lg-end">
            <li class="page-item mx-1"><a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
            <li class="page-item mx-1 active"><a class="page-link" href="#!">1</a></li>
            <li class="page-item mx-1"><a class="page-link" href="#!">2</a></li>
            <li class="page-item mx-1"><a class="page-link" href="#!">3</a></li>
            <li class="page-item ms-1"><a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">»</span></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>
@endsection