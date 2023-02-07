@extends('templates.general')

@section('navbar')
    <!-- navbar-->
    <header class="header bg-white">
        <div class="container px-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href=" {{url ('/')}} ">
            <span class="fw-bold text-uppercase text-dark">Tello <span class="fw-bold text-uppercase text-warning">Store</span></span></a>

            <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="{{url ('/')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Female</a>
                    <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item border-0 transition-link" href="{{url ('female')}}">Products</a>
                        <a class="dropdown-item border-0 transition-link" href="#">Feature Products</a>
                        <a class="dropdown-item border-0 transition-link" href="#">Outlet</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Male</a>
                    <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item border-0 transition-link" href="{{url ('male')}}">Products</a>
                        <a class="dropdown-item border-0 transition-link" href="#">Feature Products</a>
                        <a class="dropdown-item border-0 transition-link" href="#">Outlet</a>
                    </div>
                  </li>
                <li class="nav-item">
                 <a class="nav-link" href="#">Contact Us</a>
                </li>

              </ul>
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="cart.html">
                    <i class="fas fa-dolly-flatbed me-1 text-gray"></i>Cart<small class="text-gray fw-normal">(2)</small></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!">
                    <i class="far fa-heart me-1"></i><small class="text-gray fw-normal">(0)</small></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!">
                    <i class="fas fa-user me-1 text-gray fw-normal"></i>Account</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </header>
@endsection

@section('footer')
<footer class="text-dark footer">
    <div class="container py-4">
      <div class="row py-5">
        <div class="col-md-4 mb-3 mb-md-0">
          <h6 class="text-uppercase mb-3">Customer services</h6>
          <ul class="list-unstyled mb-0">
            <li><a class="footer-link " href="#!">Help &amp; Contact Us</a></li>
            <li><a class="footer-link" href="#!">Returns &amp; Refunds</a></li>
            <li><a class="footer-link" href="#!">Online Stores</a></li>
            <li><a class="footer-link" href="#!">Terms &amp; Conditions</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <h6 class="text-uppercase mb-3">Company</h6>
          <ul class="list-unstyled mb-0">
            <li><a class="footer-link" href="#!">What We Do</a></li>
            <li><a class="footer-link" href="#!">Available Services</a></li>
            <li><a class="footer-link" href="#!">Latest Posts</a></li>
            <li><a class="footer-link" href="#!">FAQs</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h6 class="text-uppercase mb-3">Social media</h6>
          <ul class="list-unstyled mb-0">
            <li><a class="footer-link" href="#!">Twitter</a></li>
            <li><a class="footer-link" href="#!">Instagram</a></li>
            <li><a class="footer-link" href="#!">Tumblr</a></li>
            <li><a class="footer-link" href="#!">Pinterest</a></li>
          </ul>
        </div>
      </div>
      <div class="border-top pt-4" style="border-color: #1d1d1d !important">
        <div class="row">
          <div class="col-md-6 text-center text-md-start">
            <p class="small text-muted mb-0">&copy; 2021 All rights reserved.</p>
          </div>
          <div class="col-md-6 text-center text-md-end">
            <p class="small text-muted mb-0">Template designed by <a class="text-white reset-anchor" href="https://bootstrapious.com/p/boutique-bootstrap-e-commerce-template">Bootstrapious</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
@endsection

