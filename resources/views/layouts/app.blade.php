<!doctype html>
<html lang="en">
  <head>
  	<title>Codelabs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('codelabs/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">

	</head>
	<body>
  <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Laravel Roles and Permissions</h2>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row justify-content-between">
				<!-- <div class="col">
					<a class="navbar-brand" href="index.html">Papermag <span>Magazine</span></a>
				</div> -->
				<div class="col d-flex justify-content-end">
					<div class="social-media">
		    		<p class="mb-0 d-flex">
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
		    		</p>
	        </div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
				<form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
		 
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="{{ route('users.index')}}" class="nav-link">Manage Users</a></li>
	        	<li class="nav-item"><a href="{{ route('roles.index') }}" class="nav-link">Manage Roles</a></li>
	        	<li class="nav-item"><a href="{{ route('books.index') }}" class="nav-link">Books</a></li>
				<li class="nav-item"><a href="#" class="nav-link">User Logs</a></li>
	         
			  @if(Auth::check('user'))
				<li class="nav-item"><a href="#" class="nav-link pull-right">Welcome, {{ Auth::user()->name }}</a></li>
			  @endif
			  <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link">Logout</a></li>
			  
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

	</section> 
  @yield('content')
  
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('codelabs/js/jquery.min.js') }}"></script>
  <script src="{{ asset('codelabs/js/popper.js') }}"></script>
  <script src="{{ asset('codelabs/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('codelabs/js/main.js') }}"></script>
  <script>
      $(document).ready(function () {
      $('#example').DataTable();
  });
  </script>
    </body>

    </html>