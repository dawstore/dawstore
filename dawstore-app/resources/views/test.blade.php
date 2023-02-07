<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boutique | Ecommerce bootstrap template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- gLightbox gallery-->
    <link rel="stylesheet" href="vendor/glightbox/css/glightbox.min.css">
    <!-- Range slider-->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
  </head>
  <body>
    <div class="page-holder">
      <!-- navbar-->
      <header class="header bg-white">
        <div class="container px-lg-3">
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.html"><span class="fw-bold text-uppercase text-dark">Boutique</span></a>
            <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="shop.html">Shop</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="detail.html">Product detail</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                  <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="index.html">Homepage</a><a class="dropdown-item border-0 transition-link" href="shop.html">Category</a><a class="dropdown-item border-0 transition-link" href="detail.html">Product detail</a><a class="dropdown-item border-0 transition-link" href="cart.html">Shopping cart</a><a class="dropdown-item border-0 transition-link" href="checkout.html">Checkout</a></div>
                </li>
              </ul>
              <ul class="navbar-nav ms-auto">               
                <li class="nav-item"><a class="nav-link" href="cart.html"> <i class="fas fa-dolly-flatbed me-1 text-gray"></i>Cart<small class="text-gray fw-normal">(2)</small></a></li>
                <li class="nav-item"><a class="nav-link" href="#!"> <i class="far fa-heart me-1"></i><small class="text-gray fw-normal"> (0)</small></a></li>
                <li class="nav-item"><a class="nav-link" href="#!"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Login</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </header>
      <!--  Modal -->
      <div class="modal fade" id="productView" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content overflow-hidden border-0">
            <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" style="background: url(img/product-5.jpg)" href="img/product-5.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
                <div class="col-lg-6">
                  <div class="p-4 my-md-4">
                    <ul class="list-inline mb-2">
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
                    </ul>
                    <h2 class="h4">Red digital smartwatch</h2>
                    <p class="text-muted">$250</p>
                    <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
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
      <div class="container py-5">
        <h1>Bootstrap(ious) 5 Boilerplate</h1>
        <p>This is a sample content.</p>
        <div class="jumbotron">
          <h1>Kitchen Sink</h1>
          <p>A quick preview of everything Bootstrap has to offer.</p>
          <p><a class="btn btn-primary btn-large" href="#!">Learn more »</a> <a class="btn btn-outline-primary btn-large" href="#!">Learn more »</a></p>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="card mb-4" id="headings">
              <div class="card-header">Headings</div>
              <div class="card-body">
                <h1>This is an h1 heading</h1>
                <h2>This is an h2 heading</h2>
                <h3>This is an h3 heading</h3>
                <h4>This is an h4 heading</h4>
                <h5>This is an h5 heading</h5>
                <h6>This is an h6 heading</h6>
              </div>
            </div>
            <div class="card mb-4">
              <div class="card-header">Icons</div>
              <div class="card-body">
                <svg class="svg-icon">
                  <use xlink:href="#speed-1"> </use>
                </svg>
                <svg class="svg-icon text-primary">
                  <use xlink:href="#muffin-1"> </use>
                </svg>
                <svg class="svg-icon text-muted">
                  <use xlink:href="#first-aid-kit-1"> </use>
                </svg><br>
                <svg class="svg-icon svg-icon-big svg-icon-light">
                  <use xlink:href="#sedan-1"> </use>
                </svg>
              </div>
            </div>
            <div class="card mb-4" id="tables">
              <div class="card-header">Tables</div>
              <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Tables</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Michael</td>
                      <td>Are formatted like this</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Lucille</td>
                      <td>Do you like them?</td>
                    </tr>
                    <tr class="table-success">
                      <td>3</td>
                      <td>Success</td>
                      <td></td>
                    </tr>
                    <tr class="table-danger">
                      <td>4</td>
                      <td>Danger</td>
                      <td></td>
                    </tr>
                    <tr class="table-warning">
                      <td>5</td>
                      <td>Warning</td>
                      <td></td>
                    </tr>
                    <tr class="table-active">
                      <td>6</td>
                      <td>Active</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Tables</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table-active">
                      <td>1</td>
                      <td>Michael</td>
                      <td>This one is bordered and condensed</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Lucille</td>
                      <td>Do you still like it?</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card mb-4" id="content-formatting">
              <div class="card-header">Content Formatting</div>
              <div class="card-body">
                <p class="lead">This is a lead paragraph.</p>
                <p>This is an <b>ordinary paragraph</b> that is <i>long enough</i> to wrap to 
                  <u>multiple lines</u> so that you can see how the line spacing looks.
                </p>
                <p class="text-muted">Muted color paragraph.</p>
                <p class="text-warning">Warning color paragraph.</p>
                <p class="text-danger">Danger color paragraph.</p>
                <p class="text-info">Info color paragraph.</p>
                <p class="text-primary">Primary color paragraph.</p>
                <nav aria-label="...">
                  <ul class="pagination">
                    <li class="page-item disabled"><span class="page-link">Previous</span></li>
                    <li class="page-item"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item active"><span class="page-link">2<span class="visually-hidden">(current)</span></span></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                  </ul>
                </nav>
                <p><small>This is text in a <code>small</code> wrapper. <abbr title="No Big Deal">NBD</abbr>, right?</small></p>
                <hr>
                <address><strong>Twitter, Inc.</strong><br> 795 Folsom Ave, Suite 600<br> San Francisco, CA 94107<br><abbr title="Phone">P:</abbr> (123) 456-7890</address>
                <address class="col-6"><strong>Full Name</strong><br><a href="mailto:#">first.last@example.com</a></address>
                <hr>
                <blockquote>Here's what a blockquote looks like in Bootstrap.<small>Use <code>small</code> to identify the source.</small></blockquote>
                <hr>
                <div class="row">
                  <div class="col-xs-6">
                    <ul>
                      <li>Normal Unordered List</li>
                      <li>Can Also Work
                        <ul>
                          <li>With Nested Children</li>
                        </ul>
                      </li>
                      <li>Adds Bullets to Page</li>
                    </ul>
                  </div>
                  <div class="col-xs-6">
                    <ol>
                      <li>Normal Ordered List</li>
                      <li>Can Also Work
                        <ol>
                          <li>With Nested Children</li>
                        </ol>
                      </li>
                      <li>Adds Bullets to Page</li>
                    </ol>
                  </div>
                </div>
                <hr>
                <pre>\nfunction preFormatting() {  // looks like this;  var something = somethingElse;  return true;}                        </pre>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-4" id="forms">
          <div class="card-header">Forms</div>
          <div class="card-body">
            <form>
              <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1">Email address</label>
                <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp">
                <div class="form-text" id="emailHelp">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password">
              </div>
              <div class="mb-3 form-check">
                <input class="form-check-input" id="exampleCheck1" type="checkbox">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button class="btn btn-primary" type="submit">Submit</button>
            </form>
            <hr class="my-5">
            <h4 class="mb-5">Horizontal form</h4>
            <form class="row row-cols-lg-auto g-3 align-items-center">
              <div class="col-12">
                <input class="form-control" type="text" placeholder="Email">
                <label class="visually-hidden" for="inlineFormInputGroupUsername2">Username</label>
              </div>
              <div class="col-12">
                <div class="input-group"><span class="input-group-text">@</span>
                  <input class="form-control" id="inlineFormInputGroupUsername2" type="text">
                </div>
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" id="inlineFormCheck" type="checkbox">
                  <label class="form-check-label" for="inlineFormCheck">Remember me</label>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
              </div>
            </form>
            <hr class="my-5">
            <h4 class="mb-5">Horizontal form</h4>
            <form>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="inputEmail3">Email</label>
                <div class="col-sm-10">
                  <input class="form-control" id="inputEmail3" type="email">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="inputPassword3">Password</label>
                <div class="col-sm-10">
                  <input class="form-control" id="inputPassword3" type="password">
                </div>
              </div>
              <fieldset>
                <div class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" id="gridRadios1" type="radio" name="gridRadios" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        First radio
                        
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" id="gridRadios2" type="radio" name="gridRadios" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Second radio
                        
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <input class="form-check-input" id="gridRadios3" type="radio" name="gridRadios" value="option3" disabled>
                      <label class="form-check-label" for="gridRadios3">
                        Third disabled radio
                        
                      </label>
                    </div>
                  </div>
                </div>
              </fieldset>
              <div class="row mb-3">
                <div class="col-form-label col-sm-2 pt-0">Checkbox</div>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" id="gridCheck1" type="checkbox">
                    <label class="form-check-label" for="gridCheck1">
                      Example checkbox
                      
                    </label>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Sign in</button>
            </form>
          </div>
        </div>
        <div class="card mb-4" id="buttons">
          <div class="card-header">Buttons</div>
          <div class="card-body">
            <p>
              <button class="btn btn-lg btn-secondary" type="button">Default Lg</button>
              <button class="btn btn-lg btn-primary" type="button">Primary</button>
              <button class="btn btn-lg btn-success" type="button">Success</button>
              <button class="btn btn-lg btn-info" type="button">Info</button>
              <button class="btn btn-lg btn-warning" type="button">Warning</button>
              <button class="btn btn-lg btn-danger" type="button">Danger</button>
              <button class="btn btn-lg btn-link" type="button">Link</button>
            </p>
            <p>
              <button class="btn btn-secondary" type="button">Default </button>
              <button class="btn btn-primary" type="button">Primary</button>
              <button class="btn btn-success" type="button">Success</button>
              <button class="btn btn-info" type="button">Info</button>
              <button class="btn btn-warning" type="button">Warning</button>
              <button class="btn btn-danger" type="button">Danger</button>
              <button class="btn btn-link" type="button">Link</button>
            </p>
            <p>
              <button class="btn btn-sm btn-secondary" type="button">Default Sm</button>
              <button class="btn btn-sm btn-primary" type="button">Primary</button>
              <button class="btn btn-sm btn-success" type="button">Success</button>
              <button class="btn btn-sm btn-info" type="button">Info</button>
              <button class="btn btn-sm btn-warning" type="button">Warning</button>
              <button class="btn btn-sm btn-danger" type="button">Danger</button>
              <button class="btn btn-sm btn-link" type="button">Link</button>
            </p>
          </div>
        </div>
        <div class="card">
          <div class="card-header">Button dropdown</div>
          <div class="card-body">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown button</button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#!">Action</a><a class="dropdown-item" href="#!">Another action</a><a class="dropdown-item" href="#!">Something else here</a></div>
            </div>
          </div>
        </div>
      </div>
      <footer class="bg-dark text-white">
        <div class="container py-4">
          <div class="row py-5">
            <div class="col-md-4 mb-3 mb-md-0">
              <h6 class="text-uppercase mb-3">Customer services</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#!">Help &amp; Contact Us</a></li>
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
                <!-- If you want to remove the backlink, please purchase the Attribution-Free License. See details in readme.txt or license.txt. Thanks!-->
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- JavaScript files-->
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/glightbox/js/glightbox.min.js"></script>
      <script src="vendor/nouislider/nouislider.min.js"></script>
      <script src="vendor/swiper/swiper-bundle.min.js"></script>
      <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
      <script src="js/front.js"></script>
      <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {
        
            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
        
      </script>
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </div>
  </body>
</html>