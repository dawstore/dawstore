<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{URL::asset('img/logos/logoTello.png')}}" />
    <title>Forgot Password - Tello Store</title>
    <link href="{{URL::asset('/css/app.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<body>

    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Dashboard - Tello Store</h1>
                            <p class="lead">
                                Acount recovery
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <div class="text-center">
                                        <img src="{{URL::asset('/img/logos/logoTello.png')}}" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
                                    </div>
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">New Password</label>
                                            <input class="form-control form-control-lg" type="password" name="recovery-pass" placeholder="Enter your new password" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Repit Password</label>
                                            <input class="form-control form-control-lg" type="password" name="password" placeholder="Repit your new password" required />
                                        </div>
                                        <div class="text-center mt-3">
                                            <a href="{{url ('admin/dashboard')}}" class="btn btn-lg btn-primary">Recovery Account</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{URL::asset('/js/app.js')}}"></script>
</body>

</html>
