@extends('admin.templates.template-admin')

@section('titulo')
Profile Admin
@endsection

@section('profile-admin-section')
<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Welcome Back!</h1>
        </div>
        <div class="row">
            <div class="col-md-4 col-xl-3">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Profile Details</h5>
                    </div>
                    <div class="card-body text-center justify-content-center d-flex">
                        <img src="{{URL::asset('/img/dashboard/user-default.png')}}" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128" />
                    </div>
                    <hr class="my-0" />
                    <hr class="my-0" />
                    <div class="card-body">
                        <h5 class="h6 card-title">About</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1"><span data-feather="user" class="feather-sm me-1"></span>{{ Auth::user()->username }} <a href="#"></a></li>
                            <li class="mb-1"><span data-feather="tag" class="feather-sm me-1"></span><span class="badge bg-danger">ADMIN</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-xl-9">
                <div class="card">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Activities</h5>
                    </div>
                    <div class="card-body h-100">
                        <div class="container-fluid p-0">
                            <div class="row">
                                <div class="col-xl-6 col-xxl-5 d-flex">
                                    <div class="w-100">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col mt-0">
                                                                <h5 class="card-title">Sales</h5>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="stat text-primary">
                                                                    <i class="align-middle" data-feather="truck"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h1 class="mt-1 mb-3">2.382</h1>
                                                        <div class="mb-0">
                                                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                                                            <span class="text-muted">Since last week</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col mt-0">
                                                                <h5 class="card-title">Visitors</h5>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="stat text-primary">
                                                                    <i class="align-middle" data-feather="users"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h1 class="mt-1 mb-3">14.212</h1>
                                                        <div class="mb-0">
                                                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
                                                            <span class="text-muted">Since last week</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col mt-0">
                                                                <h5 class="card-title">Earnings</h5>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="stat text-primary">
                                                                    <i class="align-middle" data-feather="dollar-sign"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h1 class="mt-1 mb-3">$21.300</h1>
                                                        <div class="mb-0">
                                                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
                                                            <span class="text-muted">Since last week</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col mt-0">
                                                                <h5 class="card-title">Orders</h5>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="stat text-primary">
                                                                    <i class="align-middle" data-feather="shopping-cart"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h1 class="mt-1 mb-3">64</h1>
                                                        <div class="mb-0">
                                                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
                                                            <span class="text-muted">Since last week</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-xxl-7">
                                    <div class="card flex-fill w-100">
                                        <div class="card-header">

                                            <h5 class="card-title mb-0">Recent Movement</h5>
                                        </div>
                                        <div class="card-body py-3">
                                            <div class="chart chart-sm">
                                                <canvas id="chartjs-dashboard-line"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</main>
@endsection
