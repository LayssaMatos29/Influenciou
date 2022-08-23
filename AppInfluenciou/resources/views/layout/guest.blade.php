<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>@yield('title')</title>
		
		<!-- Favicon Icon -->
		<!-- <link rel="icon" type="image/png" href="images/fav.png"> -->
		
		<!-- Stylesheets -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
		<link href='{{ asset('assets/vendor/unicons-2.0.1/css/unicons.css') }}' rel='stylesheet'>
		<link href="{{ asset('assets/css/vertical-responsive-menu.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
		
		<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/night-mode.css') }}" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/semantic/semantic.min.css') }}">	
		
	</head>

<body>
	<!-- Header Start -->
	<header class="header clearfix">

		  <div class="main_logo" id="logo">
			<a class="navbar-brand" href="#">
				<a href="{{ route('welcome') }}">
					<img src="{{ asset('assets/images/influencioulogo (2).png') }}" alt=""  class="" style="width: 16rem;">
				</a>
				<a href="{{ route('welcome') }}">
					<img src="{{ asset('assets/images/influencioulogo (1).png') }}" alt="" class="logo-inverse " style="width:16rem;">
				</a>
			</a>
		  </div>
		<div class="search120">
			<div class="ui search">
				<a href="search_result.html" style="text-decoration: none;">
			  <div class="ui left icon input swdh10">
				<input class="prompt srch10" type="text" placeholder="Procure vídeos de Tuts, Tutores, Testes e muito mais.">
				<i class='uil uil-search-alt icon icon1'></i>
			  </div>
			</a>
			</div>
		</div>
		<div class="night_mode_switch__btn">
			<a href="#" id="night-mode" class="btn-night-mode">
				<i class="uil uil-moon"></i> 
				<span class="btn-night-mode-switch">
					<span class="uk-switch-button"></span>
				</span>
			</a>
		</div>
		<div class="header_right">
            <ul>
                <li>
                    <a href="{{ route('login') }}" class="login_btn">Login</a>
                </li>
				<li>
					<a href="{{ route('register') }}" class="upload_btn">Fazer conta</a>
				</li>
            </ul>
		</div>
	</header>
	<!-- Header End -->
	<!-- Body Start -->
	<div class="wrapper">
		<div class="sa4d25">
            @yield('content')
        </div>
        @include('layout.components.footer')
    </div>

    <script src="{{ asset('assets/js/vertical-responsive-menu.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/OwlCarousel/owl.carousel.js') }}"></script>
	<script src="{{ asset('assets/vendor/semantic/semantic.min.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>
	<script src="{{ asset('assets/js/night-mode.js') }}"></script>

</body>
</html>