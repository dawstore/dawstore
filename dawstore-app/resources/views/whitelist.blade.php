@extends('templates.template')

@section('titulo')
Whishlist
@endsection

@section('cart_section')
<!-- HERO SECTION-->
<div class="container">

<div class="container">
    <div class="card">
      <div class="imgBx">
        <img class="image" src="https://www.c-store.cz/fotky38463/fotos/_vyrp11_1910895terraultra-g-260-green-2.png">
      </div>
      <div class="contentBx">
        <h2>Nike Shoes</h2>
        <div class="size">
          <h3>Size :</h3>
          <span>7</span>
          <span>8</span>
          <span>9</span>
          <span>10</span>
        </div>
        <div class="color">
          <h3>Color :</h3>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <a href="#">Buy Now</a>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="card">
      <div class="imgBx">
        <img class="image" src="https://www.c-store.cz/fotky38463/fotos/_vyrp11_1910895terraultra-g-260-green-2.png">
      </div>
      <div class="contentBx">
        <h2>Nike Shoes</h2>
        <div class="size">
          <h3>Size :</h3>
          <span>7</span>
          <span>8</span>
          <span>9</span>
          <span>10</span>
        </div>
        <div class="color">
          <h3>Color :</h3>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <a href="#">Buy Now</a>
      </div>
    </div>
  </div>
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
