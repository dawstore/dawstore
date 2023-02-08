<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Product Manager - Tello Store</title>

    <link rel="shortcut icon" href="{{URL::asset('img/logos/logoTello.png')}}" />
    <link href="{{URL::asset('css/app.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="{{url ('admin/admin-panel')}}">
                    <span class="align-middle">Admin Panel</span>
                </a>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url ('admin/admin-panel')}}">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url ('admin/admin-management')}}">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Add Admin</span>
                        </a>
                    </li>

                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="{{url ('admin/product-manager')}}">
                            <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Product Manager</span>
                        </a>
                    </li>
                </ul>

                <div class="sidebar-cta">
                    <div class="sidebar-cta-content">
                        <strong class="d-inline-block mb-2">Back to Store</strong>
                        <div class="mb-3 text-sm">
                            Log Out and go to Store
                        </div>
                        <div class="d-grid">
                            <a href="{{url ('/')}}" class="btn btn-primary">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator">1</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    1 New Notifications
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-danger" data-feather="alert-circle"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Update completed</div>
                                                <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                                <div class="text-muted small mt-1">30m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="user"></i> <span class="text-dark">Charles Hall</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="{{url ('admin/admin-panel')}}"><i class="align-middle me-1" data-feather="pie-chart"></i> Dashboard</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{url ('/')}}">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">

                <div class="container-fluid p-0">

                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Product Manager</h1>
                        <a class="badge bg-dark text-white ms-2" href="#">
                            Edit, create and remove items
                        </a>
                    </div>

                    <form action="{{ route('insert-product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">General Settings</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" name="sku" class="form-control" placeholder="SKU" required>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" name="desc" class="form-control" placeholder="Description" required>
                                    </div>
                                </div>
    
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Price</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" name="price" class="form-control" placeholder="Price" required>
                                    </div>
                                </div>
    
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Stock</h5>
                                    </div>
                                    <div class="card-body">
                                        <input class="form-control" type="text" name="stock" placeholder="Product Stock" required>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Genre</h5>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" value="male" name="genre">
                                                <span class="form-check-label">
                                                    Male
                                                </span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" value="female" name="genre">
                                                <span class="form-check-label">
                                                    Female
                                                </span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" value="unisex" name="genre">
                                                <span class="form-check-label">
                                                    Unisex
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Images</h5>
                                    </div>
                                    <div class="card-body">
                                        <input class="form-control form-control-sm" id="formFileSm" name="images" type="file" multiple>
                                    </div>
                                </div>
    
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Edit Products</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                        {{-- <a href="#" class="btn btn-success text-dark fw-bold" name="save-changes" role="button" data-bs-toggle="button">Save Changes</a> --}}
                                        <button class="btn btn-success text-dark fw-bold" type="submit">Save changes</button>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    @if (session('mensaje'))
                            <div class="mensaje-nota-creada">
                                {{ session('mensaje') }}
                            </div>
                    @endif
                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                            <p>Admin Panel by Ilerna Sevilla Daw Team</p>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{URL::asset('js/app.js')}}"></script>

</body>

</html>
