@extends('layouts.app')
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- Wrapper Area -->
<div class="wrapper__area" id="wrapper_Area">
    <!-- Forms Area -->
    <div class="forms__area">
      <!-- Login Form -->
      <form class="login__form" id="loginForm">
        <!-- Form Title -->
        <h1 class="form__title">Sign In!</h1>
        <!-- inputs Groups -->
        <div class="input__group">
          <label class="field">
            <input type="text" name="username" placeholder="Username" id="loginUsername">
          </label>
          <span class="input__icon"><i class="bi bi-person"></i></span>
          <small class="input__error_message"></small>
        </div>
        <div class="input__group">
          <label class="field">
            <input type="password" name="password" placeholder="Password" id="loginPassword">
          </label>
          <span class="input__icon"><i class="bi bi-lock"></i></span>
          <span class="showHide__Icon"><i class="bi bi-eye-slash"></i></span>
          <small class="input__error_message"></small>
        </div>
        <div class="form__actions">
          <label for="checkboxInput" class="remeber_me">
            <input type="checkbox" id="checkboxInput">
            <span class="checkmark"></span>
            <span>Remeber Me</span>
          </label>
          <div class="forgot_password">Forgot Password?</div>
        </div>
        <!-- Login Button -->
        <button type="submit" class="submit-button" id="loginSubmitBtn">Sign in</button>
        <!-- Alternate Login -->
      </form> <!-- End Login Form -->

      <!-- Sign Up Form -->
      <form class="sign-up__form" id="signUpForm">
        <!-- Form Title -->
        <h1 class="form__title">Sign Up!</h1>
        <!-- inputs Groups -->
        <div class="input__group">
          <label class="field">
            <input type="text" name="username" placeholder="Username123..." id="signUpUsername">
          </label>
          <span class="input__icon"><i class="bi bi-person"></i></span>
          <small class="input__error_message"></small>
        </div>
        <div class="input__group">
          <label class="field">
            <input type="text" name="email" placeholder="Email@example.com" id="signUpEmail">
          </label>
          <span class="input__icon"><i class="bi bi-at"></i></span>
          <small class="input__error_message"></small>
        </div>
        <div class="input__group">
          <label class="field">
            <input type="password" name="password" placeholder="Password123$#%&..." id="signUpPassword">
          </label>
          <span class="input__icon"><i class="bi bi-lock"></i></span>
          <span class="showHide__Icon"><i class="bi bi-eye-slash"></i></i></span>
          <small class="input__error_message"></small>
        </div>
        <div class="input__group confirm__group">
          <label class="field">
            <input type="password" name="confirm_password" placeholder="Confirm Password" id="signUpConfirmPassword">
          </label>
          <span class="input__icon"><i class="bi bi-lock"></i></span>
          <span class="showHide__Icon"><i class="bi bi-eye-slash"></i></span>
          <small class="input__error_message"></small>
        </div>
        <!-- Sign Up Button -->
        <button type="submit" class="submit-button" id="signUpSubmitBtn">Sign Up</button>
        <!-- Alternate Login -->
      </form> <!-- End Sign Up Form -->
    </div><!-- End Forms Area -->

    <!-- Aside Area -->
    <div class="aside__area" id="aside_Area">
      <div class="login__aside-info">

        <br>
        <img src="{{URL::asset('img/singin.png')}}" alt="Image">
        <p>Enter your personal details and start journey with us</p>
        <button id="aside_signUp_Btn">Sign Up</button>
      </div>
      <div class="sign-up__aside-info">
        <h4>Welcome</h4>
        <br>
        <img src="{{URL::asset('img/singup.png')}}" alt="Image">
        <p>To Keep connected with us please login with your personal info</p>
        <button id="aside_signIn_Btn">Sign In</button>
      </div>
    </div>
  </div>
  <!-- End Wrapper Area -->

@endsection
