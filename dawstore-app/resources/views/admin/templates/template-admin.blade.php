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

            <li class="sidebar-item @yield('admin-management-active') ">
                <a class="sidebar-link" href="{{url ('admin/admin-management')}}">
                    <i class="align-middle" data-feather="tool"></i> <span class="align-middle">Admin Management</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="user"></i><span class="align-middle">Admin Users</span>
                </a>
            </li>

            <li class="sidebar-item @yield('product-manager-active')">
                <a class="sidebar-link" href="{{url ('admin/product-manager')}}">
                    <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Product Manager</span>
                </a>
            </li>

            <li class="sidebar-item @yield('category-manager-active')">
                <a class="sidebar-link" href="{{url ('admin/category-manager')}}">
                    <i class="align-middle" data-feather="tag"></i> <span class="align-middle">Category Manager</span>
                </a>
            </li>

            <li class="sidebar-item @yield('brand-manager-active')">
                <a class="sidebar-link" href="{{url ('admin/brand-manager')}}">
                    <i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Brand Manager</span>
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
                    <a href="{{url ('/')}}" class="btn btn-danger">Log Out</a>
                </div>
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
                    <a class="dropdown-item" href="{{url ('admin/profile-admin')}}"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
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
