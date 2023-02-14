<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tello Shoes | Sign Up</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
  <!-- data-aos-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="main-bg" data-aos="fade-up">
  <!-- Login Form -->
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">Sign Up</h2>
          </div>
          <div class="card-body">
          <form action="{{route ('register')}}" method="POST">
                @csrf
            <div class="mb-4">
                <input type="text" class="form-control" id="username" name="full_name" value="{{old('full_name')}}" placeholder="Full Name" />
                @error('name') <div class="alert alert-danger mt-3" role="alert">{{$message}}</div>@enderror

              </div>
              <div class="mb-4">
                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Email"/>
                @error('email') <div class="alert alert-danger mt-3" role="alert">{{$message}}</div>@enderror

              </div>
              <div class="mb-4">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"/>
                @error('password') <div class="alert alert-danger mt-3" role="alert">{{$message}}</div>@enderror
              </div>

              <div class="mb-4">
                <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirm Password"/>
                @error('confirm-password') <div class="alert alert-danger mt-3" role="alert">{{$message}}</div>@enderror

              </div>
              <div class="d-grid">
                <button type="submit" class="btn text-dark bg-warning">Create Account</button>
                <a class="text-center mt-3 text-decoration-none" href="{{route('login')}}">Have an Account?</a>
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
