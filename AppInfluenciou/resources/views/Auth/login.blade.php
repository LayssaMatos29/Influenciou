<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8">		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">
		<title>Influenciou - Sign In</title>
		
		<!-- Favicon Icon -->
		<!-- <link rel="icon" type="image/png" href="images/fav.png"> -->
		
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

<body>
	<!-- Signup Start -->
	<div class="sign_in_up_bg">
		<div class="container">
			<div class="row justify-content-lg-center justify-content-md-center">
				<div class="col-lg-12">
					<div class="main_logo25" id="logo">
						<a href="index.html"><img src="images/" alt=""></a>
						<a href="index.html"><img class="logo-inverse" src="images/" alt=""></a>
					</div>
				</div>
			
				<div class="col-lg-6 col-md-8">
					<div class="sign_form">
						<h2>Bem vindo de volta</h2>
						<p>Faça login na sua conta Influenciou!</p>
						@if (Session::has('errors'))
							<div class="alert alert-danger">
								@foreach ($errors->all() as $error)
									{!! $error.'<br>' !!}
								@endforeach
							</div>
						@endif
						<button class="social_lnk_btn color_btn_fb" onclick="loginWithSocialite('{{ route('auth.google') }}')"><i class="uil uil-facebook-f"></i>Continue com o Facebook</button>
						<button class="social_lnk_btn mt-15 color_btn_tw" onclick="loginWithSocialite('{{ route('auth.google') }}')"><i class="uil uil-twitter"></i>Continue com o Twitter</button>
						<button class="social_lnk_btn mt-15 color_btn_go" onclick="loginWithSocialite('{{ route('auth.google') }}')"><i class="uil uil-google"></i>Continue com o Google</button>
						<form action="{{ route('login') }}" method="POST">
							@method('POST')
							@csrf
							<div class="ui search focus mt-15">
								<div class="ui left icon input swdh95">
									<input class="prompt srch_explore" type="email" name="email" value="{{ old('email') }}" id="id_email" required="" maxlength="64" placeholder="Endereço de email">															
									<i class="uil uil-envelope icon icon2"></i>
								</div>
							</div>
							<div class="ui search focus mt-15">
								<div class="ui left icon input swdh95">
									<input class="prompt srch_explore" type="password" name="password" value="" id="id_password" required="" maxlength="64" placeholder="Senha">
									<i class="uil uil-key-skeleton-alt icon icon2"></i>
								</div>
							</div>
							<div class="ui form mt-30 checkbox_sign">
								<div class="inline field">
									<div class="ui checkbox mncheck">
										<input type="checkbox" tabindex="0" class="hidden" name="remember">
										<label>Lembre de mim</label>
									</div>
								</div>
							</div>
							<button class="login-btn" type="submit">Entrar</button>
						</form>
						<p class="sgntrm145">ou <a href="{{ route('password.request') }}">Esqueci a Senha</a>.</p>
						<p class="mb-0 mt-30">Não tem uma conta? <a href="{{ route('register') }}">Inscrever-se</a></p>
					</div>
					<div class="sign_footer">© 2022 <strong>Influenciou</strong>.Todos os direitos reservados.</div>
				</div>				
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
	<script>
		function loginWithSocialite(url){
			window.location.href = url
		}
	</script>
</body>
</html>