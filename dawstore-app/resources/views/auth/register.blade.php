@extends('layouts.app')

@section('titulo')
Register
@endsection

@section('content')
<div class="container" id="container">
	<div class="form-container sign-in-container">
		<form method="POST" action="{{ route('register') }}">
			<h1>Create Account</h1>
			@csrf
            <label for="name" class="col-md-4 col-form-label text-md-right"></label>
            <input id="name" type="text" placeholder="Name" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label for="name" class="col-md-4 col-form-label text-md-right"></label>
            <input id="username" type="text" placeholder="Username" class="@error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="email" class="col-md-4 col-form-label text-md-right"></label>
            <input id="email" type="email" placeholder="Email Address" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label for="password" class="col-md-4 col-form-label text-md-right"></label>
            <input id="password" type="password" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"></label>
            <input id="password-confirm" type="password" placeholder="Confirm Password" class="@error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
              
			<button type="submit" class="justify-content-center1 align-items-center d-flex ">
                {{ __('Register') }}
            </button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<a class="nav-link" href="{{url ('login')}}"><button class="ghost" id="signUp">Login</button></a>
			</div>
		</div>
	</div>
</div>
@endsection
