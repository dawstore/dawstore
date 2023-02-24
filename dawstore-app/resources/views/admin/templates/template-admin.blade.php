@extends('admin.templates.general-admin')

@section('navbar-admin')

<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar" data-aos="fade-right" data-aos-duration="1500">
        <a class="sidebar-brand" href="{{url ('admin/admin-panel')}}">
            <span class="align-middle">Admin Panel</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-item @yield('admin-panel-active')">
                <a class="sidebar-link" href="{{url ('admin/admin-panel')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item @yield('product-manager-active')">
                <a class="sidebar-link" href="{{url ('admin/product-manager')}}">
                    <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Product Manager</span>
                </a>
            </li>

            <li class="sidebar-item @yield('brand-manager-active')">
                <a class="sidebar-link" href="{{url ('admin/brand-manager')}}">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Add Brand</span>
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
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger">{{ __('Logout') }}</a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</nav>
@endsection

@section('navbar2-admin')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="user"></i> <span class="text-dark">{{ Auth::user()->username }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{url ('admin/profile-admin')}}"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                    <a class="dropdown-item" href="{{url ('admin/admin-panel')}}"><i class="align-middle me-1" data-feather="pie-chart"></i> Dashboard</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
@endsection

@section('footer-admin')
<footer class="footer">
    <div class="container-fluid">
        <div class="row text-muted">
            <div class="col-6 text-start">
                <p>Admin Panel by Tello Store</p>
            </div>
        </div>
    </div>
</footer>

 @notifyJs
@endsection
