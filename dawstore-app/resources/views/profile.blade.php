@extends('templates.template')

@section('titulo')
Profile
@endsection

@section('hero_section')

<section>
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ URL::asset('img/banner/user.png')}}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        </div>
                        <h5 class="my-3">
                            @auth
                            {{ Auth::user()->name }}
                            @endauth
                        </h5>
                        <p class="text-muted mb-3">
                            @auth
                            {{ Auth::user()->username }}
                            @endauth
                        </p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="#profile-modal" data-bs-toggle="modal">
                                <button type="button" class="btn btn-outline-primary ms-1 text-dark pageButtons ">Edit Profile</button>
                            </a>
                            <a href="#password-modal" data-bs-toggle="modal">
                                <button type="button" class="btn btn-outline-primary ms-1 text-dark pageButtons">Edit Password</button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ Auth::user()->name }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Username</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{Auth::user()->username}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{Auth::user()->email}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Phone</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    @if (Auth::user()->phone)
                                    {{Auth::user()->phone}}
                                    @else
                                        Add your phone
                                    @endif
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    @if (Auth::user()->address)
                                    {{Auth::user()->address}}
                                    @else
                                        Add your address
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                @if ($num_orders ==  0)
                                    
                                @else
                                <p class="mb-4"><span class="text-primary font-italic me-1"> {{Auth::user()->username}}'s</span> Orders</p>
                                    <p>No order placed</p>
                                    <a href="{{url('/')}}">
                                        <button type="button" class="btn btn-outline-primary ms-1 text-dark pageButtons">Shop Now</button>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection
