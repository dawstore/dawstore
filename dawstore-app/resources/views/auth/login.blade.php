<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tello Shoes | Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
  <!-- data-aos-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="main-bg"data-aos="fade-up">
  <!-- Login Form -->
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">Login</h2>
          </div>
          <div class="card-body">
            <form action="{{route ('login')}}" method="POST">
                @csrf
              <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" value="{{old('email')}}"  name="email" />
                @error('email') <div class="alert alert-danger mt-3" role="alert">{{$message}}</div>@enderror
              </div>

              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" />
                @error('password') <div class="alert alert-danger mt-3" role="alert">{{$message}}</div>@enderror


              </div>
              <div class="mb-4">
                <input type="checkbox" class="form-check-input" id="remember" name="remember" />
                <label for="remember" class="form-label">Remember Me</label>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn text-dark bg-warning">Login </button>
                    <a class="text-center mt-3 text-decoration-none" href="{{route ('register')}}">Haven´t an Account?</a>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                     @endif

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
</html>
