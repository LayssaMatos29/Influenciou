<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8">		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">
		<title>Edututs+ - Forgot Password</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/fav.png">
		
		<!-- Stylesheets -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
		<link href='{{ asset('assets/vendor/unicons-2.0.1/css/unicons.css') }}' rel='stylesheet'>
		<link href="{{ asset('assets/css/vertical-responsive-menu.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/night-mode.css') }}" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/semantic/semantic.min.css') }}">	
		
	</head> 

<body class="sign_in_up_bg">
	<!-- Signup Start -->
	<div class="container">
		<div class="row justify-content-lg-center justify-content-md-center">
			<div class="col-lg-12">
				<div class="main_logo25" id="logo">
					<a href="index.html"><img src="{{ asset('assets/images/logo.svg') }}" alt=""></a>
					<a href="index.html"><img class="logo-inverse" src="{{ asset('assets/images/ct_logo.svg') }}" alt=""></a>
				</div>
			</div>
		
			<div class="col-lg-6 col-md-8">
				<div class="sign_form">
					<h2>Password Reset</h2>
                    @if (session('status'))
                        <div class="alert alert-info">
                            {{ session('status') }}
                        </div>
                    @endif
					@if (Session::has('errors'))
						<div class="alert alert-danger">
							@foreach ($errors->all() as $error)
								{!! $error.'<br>' !!}
							@endforeach
						</div>
					@endif
					<form action="{{ route('password.update') }}" method="POST">
                        @method('POST')
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
						<div class="ui search focus mt-50">
							<div class="ui left icon input swdh95">
								<input class="prompt srch_explore" type="email" name="email" value="{{ $email }}" id="id_email" required maxlength="64" placeholder="Seu email">															
								<i class="uil uil-envelope icon icon2"></i>
							</div>
						</div>
                        <div class="ui search focus mt-15">
							<div class="ui left icon input swdh95">
								<input class="prompt srch_explore" type="password" name="password" id="id_password" required maxlength="64" placeholder="Nova senha">															
								<i class="uil uil-key-skeleton-alt icon icon2"></i>
							</div>
						</div>
                        <div class="ui search focus mt-15">
							<div class="ui left icon input swdh95">
								<input class="prompt srch_explore" type="password" name="password_confirmation" id="id_password_confirmation" required maxlength="64" placeholder="Confirme a senha">															
								<i class="uil uil-key-skeleton-alt icon icon2"></i>
							</div>
						</div>
						<button class="login-btn" type="submit">Reset Password</button>
					</form>
					<p class="mb-0 mt-30">Go Back <a href="{{ route('login') }}">Sign In</a></p>
				</div>
				<div class="sign_footer"><img src="images/sign_logo.png" alt="">© 2020 <strong>Edututs+</strong>. All Rights Reserved.</div>
			</div>				
		</div>				
	</div>				
	<!-- Signup End -->	

	<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/OwlCarousel/owl.carousel.js') }}"></script>
	<script src="{{ asset('assets/vendor/semantic/semantic.min.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>	
	<script src="{{ asset('assets/js/night-mode.js') }}"></script>	
	
</body>
</html>