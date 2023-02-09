<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{URL::asset('img/logos/logoTello.png')}}" />
    <title>Create Admin - Tello Store</title>
    <link href="{{URL::asset('/css/app.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Get started</h1>
							<p class="lead">
								Create a brand new Admin Account.
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form action="" method="POST">
                                        @csrf
										<div class="mb-3">
											<label for="adminName" class="form-label">Name</label>
											<input class="form-control form-control-lg" type="text" name="adminName" id="adminName" placeholder="Enter your name" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" required />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" required />
										</div>
										<div class="text-center mt-3">
											<a href="{{url ('admin/admin-panel')}}" class="btn btn-lg btn-danger">Back to Dashboard</a>
                                            <button type="submit" class="btn text-dark bg-sucess">Create Account</button>
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
