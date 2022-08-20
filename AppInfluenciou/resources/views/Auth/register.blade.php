<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">
		<title>Influenciou - Sign Up</title>
		
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
						<h2>Bem-vindo ao Influenciou</h2>
						<p>Inscreva-se e comece a aprender!</p>
						@if (Session::has('errors'))
							<div class="alert alert-danger">
								@foreach ($errors->all() as $error)
									{!! $error.'<br>' !!}
								@endforeach
							</div>
						@endif
						<form action="{{ route('register') }}" method="POST">
							@csrf
							@method('POST')
							<div class="ui search focus">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore" type="text" name="name" value="" id="id_fullname" required="" maxlength="64" placeholder="Nome Completo">															
								</div>
							</div>

							<select class="ui hj145 dropdown cntry152 prompt srch_explore mt-15" name="tipo">
								<option value="none">Selecione uma opção</option>
								<option value="instrutor">Sou Instrutor</option>
								<option value="aluno">Sou Aluno</option>
							</select>

							<div class="ui search focus mt-15">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore" type="email" name="email" value="" id="id_email" required="" maxlength="64" placeholder="Endereço de e-mail">															
								</div>
							</div>
							<div class="ui search focus mt-15">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore" type="password" name="password" value="" id="id_password" required="" maxlength="64" placeholder="Senha">															
								</div>
							</div>
							<div class="ui search focus mt-15">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore" type="password" name="password_confirmation" value="" id="id_password" required="" maxlength="64" placeholder="Confirme a senha">															
								</div>
							</div>
							<div class="ui form mt-30 checkbox_sign">
								<div class="inline field">
									<div class="ui checkbox mncheck">
										<input type="checkbox" tabindex="0" class="hidden" name="isNotification">
										<label>Eu aceito receber e-mails com recomendações de cursos e promoções.	</label>
									</div>
								</div>
							</div>
							<button class="login-btn" type="submit">Próximo</button>
						</form>
						<p class="sgntrm145">Ao se inscrever, você concorda com nossos <a href="terms_of_use.html">Termos de Uso</a> e <a href="terms_of_use.html"> Política de Privacidade.</a>.</p>
						<p class="mb-0 mt-30">já tem uma conta?  <a href="sign_in.html">Conecte-se</a></p>
					</div>
					<div class="sign_footer">© 2022 <strong>Influenciou</strong>. Todos os direitos reservados.</div>
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
	
</body>
</html>