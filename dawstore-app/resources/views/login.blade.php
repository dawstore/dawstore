<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tello Shoes | Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
</head>

<body class="main-bg">
  <!-- Login Form -->
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">Login</h2>
          </div>
          <div class="card-body">
            <form>
              <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required />
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" required />
              </div>
              <div class="mb-4">
                <input type="checkbox" class="form-check-input" id="remember" required />
                <label for="remember" class="form-label">Remember Me</label>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn text-dark bg-warning">Login</button>
                <a class="text-center mt-3 text-decoration-none" href="{{url ('register')}}">Haven´t an Account?</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
