<!doctype html>
<html lang="en">
  <head>
  	<title>Codelabs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('login/css/style.css') }}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url({{ asset('login/images/bg-1.jpg'); }}">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      		</div>
						  		@if(session()->has('success'))
                                    <div id="result" class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @elseif(session()->has('fail'))
                                    <div id="result" class="alert alert-danger">
                                        {{ session()->get('fail') }}
                                    </div>
                                @endif
							<form action="{{ route('postlogin') }}" method="POST">
								@csrf
								<div class="form-group mb-3">
									<label class="label" for="email">Email</label>
									<input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
									@if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                               		@endif
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Password</label>
								<input type="password" class="form-control" name="password" placeholder="Password" required autofocus>
								@if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
								</div>
								<div class="form-group d-md-flex">
									<div class="w-50 text-left">
										<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
												<input type="checkbox" checked>
												<span class="checkmark"></span>
													</label>
												</div>
												<div class="w-50 text-md-right">
													<a href="#">Forgot Password</a>
												</div>
										</div>
		         			 	</form>
		          <p class="text-center">Not a member? <a href="{{ route('register') }}">Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('login/js/jquery.min.js') }}"></script>
  <script src="{{ asset('login/js/popper.js') }}"></script>
  <script src="{{ asset('login/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('login/js/main.js') }}"></script>

	</body>
</html>

