<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">
		<title>Influenciou - Visualização de detalhes do curso</title>
		
		<!-- Favicon Icon -->
		<!-- <link rel="icon" type="image/png" href="images/fav.png"> -->
		
		<!-- Stylesheets -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
		<link href="{{ asset('assets/vendor/unicons-2.0.1/css/unicons.css') }}" rel='stylesheet'>
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
	<!-- Video Model Start -->
	<div class="modal vd_mdl fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="modal-body">
					<iframe  src="https://www.youtube.com/embed/Ohe_JzKksvA" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				
			</div>
		</div>
	</div>
	<!-- Video Model End -->
	<!-- Header Start -->
	<header class="header clearfix">
		<button type="button" id="toggleMenu" class="toggle_menu">
		  <i class='uil uil-bars'></i>
		</button>
		<button id="collapse_menu" class="collapse_menu">
			<i class="uil uil-bars collapse_menu--icon "></i>
			<span class="collapse_menu--label"></span>
		</button>
		<div class="main_logo" id="logo">
			<!-- <a href="{{ route('welcome') }}"><img src="images/logo.svg" alt=""></a>
			<a href="{{ route('welcome') }}"><img class="logo-inverse" src="images/ct_logo.svg" alt=""></a> -->
			<a href="{{ route('welcome') }}"><img src="{{ asset('assets/images/influencioulogo (2).png') }}" alt="" width="30" height="24" class="" style="width: 15rem; height:15rem;"></a>
			<a href="{{ route('welcome') }}"><img src="{{ asset('assets/images/influencioulogo (1).png') }}" alt="" width="30" height="24" class=" logo-inverse" style="width: 15rem; height:15rem;"></a>
		</div>
		<div class="search120">
			<div class="ui search">
			  <div class="ui left icon input swdh10">
				<input class="prompt srch10" type="text" placeholder="Pesquisar">
				<i class='uil uil-search-alt icon icon1'></i>
			  </div>
			</div>
		</div>
		<div class="night_mode_switch__btn" style="margin-right: 20px;">
			<a href="#" id="night-mode" class="btn-night-mode" style="padding:30px;">
				<i class="uil uil-moon" ></i>
				<span class="btn-night-mode-switch" >
					<span class="uk-switch-button"></span>
				</span>
			</a>
		</div>
	</header>
	<!-- Header End -->
	<!-- Left Sidebar Start -->
	<nav class="vertical_nav">
		<div class="left_section menu_left" id="js-menu" >
			<div class="left_section">
				<ul>
					<li class="menu--item">
						<a href="{{ route('welcome') }}" class="menu--link" title="Home">
							<i class='uil uil-home-alt menu--icon'></i>
							<span class="menu--label">Home</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="live_streams.html" class="menu--link" title="Live Streams">
							<i class='uil uil-kayak menu--icon'></i>
							<span class="menu--label">Transmissões ao vivo</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="explore.html" class="menu--link" title="Explore">
							<i class='uil uil-search menu--icon'></i>
							<span class="menu--label">Explorar</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="liked_courses.html" class="menu--link" title="Liked Courses">
							<i class='uil uil-thumbs-up menu--icon'></i>
							<span class="menu--label">Cursos de que gostou</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="categories.html" class="menu--link" title="Categories">
							<i class='uil uil-layers menu--icon'></i>
							<span class="menu--label">Categorias</span>
						</a>
					</li>
					<li class="menu--item  menu--item__has_sub_menu">
						<label class="menu--link" title="Tests">
						  <i class='uil uil-clipboard-alt menu--icon'></i>
						  <span class="menu--label">Testes</span>
						</label>
						<ul class="sub_menu">
							<li class="sub_menu--item">
								<a href="certification_center.html" class="sub_menu--link">Centro de Certificação</a>
							</li>
							<li class="sub_menu--item">
								<a href="certification_start_form.html" class="sub_menu--link">Formulário de preenchimento de certificação</a>
							</li>
							<li class="sub_menu--item">
								<a href="certification_test_view.html" class="sub_menu--link">
									Visualização de teste</a>
							</li>
							<li class="sub_menu--item">
								<a href="certification_test__result.html" class="sub_menu--link">
									Resultado do teste</a>
							</li>
							<li class="sub_menu--item">
								<a href="http://www.gambolthemes.net/html-items/edututs+/Instructor_Dashboard/my_certificates.html" class="sub_menu--link">My Certification</a>
							</li>
						</ul>
					</li>
					<li class="menu--item">
						<a href="history.html" class="menu--link" title="History">
						  <i class='uil uil-history menu--icon'></i>
						  <span class="menu--label">Histórico</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="watch_later.html" class="menu--link" title="Watch Later">
						  <i class='uil uil-clock-three menu--icon'></i>
						  <span class="menu--label">
							Assistir depois</span>
						</a>
					</li>
					<li class="menu--item  menu--item__has_sub_menu">
						<label class="menu--link" title="Pages">
						  <i class='uil uil-file menu--icon'></i>
						  <span class="menu--label">Páginas</span>
						</label>
						<ul class="sub_menu">
							<li class="sub_menu--item">
								<a href="about_us.html" class="sub_menu--link">Sobre</a>
							</li>
							<li class="sub_menu--item">
								<a href="sign_in.html" class="sub_menu--link">Entrar</a>
							</li>
							<li class="sub_menu--item">
								<a href="sign_up.html" class="sub_menu--link">Inscrever-se</a>
							</li>
							<li class="sub_menu--item">
								<a href="sign_up_steps.html" class="sub_menu--link">
									Etapas de inscrição</a>
							</li>
							<li class="sub_menu--item">
								<a href="membership.html" class="sub_menu--link">Associação paga</a>
							</li>
							<li class="sub_menu--item">
								<a href="course_detail_view.html" class="sub_menu--link">Visualização de detalhes do curso</a>
							</li>
							<li class="sub_menu--item">
								<a href="checkout_membership.html" class="sub_menu--link">
									Confira</a>
							</li>
							<li class="sub_menu--item">
								<a href="invoice.html" class="sub_menu--link">Fatura</a>
							</li>
							<li class="sub_menu--item">
								<a href="career.html" class="sub_menu--link">
									Carreira</a>
							</li>
							<li class="sub_menu--item">
								<a href="apply_job.html" class="sub_menu--link">Aplicar tarefa</a>
							</li>
							<li class="sub_menu--item">
								<a href="our_blog.html" class="sub_menu--link">Nosso Blog</a>
							</li>
							<li class="sub_menu--item">
								<a href="blog_single_view.html" class="sub_menu--link">Visualização de detalhes do blog</a>
							</li>
							<li class="sub_menu--item">
								<a href="company_details.html" class="sub_menu--link">
									Detalhes da Companhia</a>
							</li>
							<li class="sub_menu--item">
								<a href="press.html" class="sub_menu--link">Press</a>
							</li>
							<li class="sub_menu--item">
								<a href="live_output.html" class="sub_menu--link">
									Visualização de transmissão ao vivo</a>
							</li>
							<li class="sub_menu--item">
								<a href="add_streaming.html" class="sub_menu--link">
									Adicionar transmissão ao vivo</a>
							</li>
							<li class="sub_menu--item">
								<a href="search_result.html" class="sub_menu--link">
									Resultado da pesquisa</a>
							</li>
							<li class="sub_menu--item">
								<a href="thank_you.html" class="sub_menu--link">Obrigado(a)</a>
							</li>
							<li class="sub_menu--item">
								<a href="coming_soon.html" class="sub_menu--link">Em breve</a>
							</li>
							<li class="sub_menu--item">
								<a href="error_404.html" class="sub_menu--link">Erro 404</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>

			<div class="left_section pt-2">
				<ul>
					<li class="menu--item">
						<a href="setting.html" class="menu--link" title="Setting">
							<i class='uil uil-cog menu--icon'></i>
							<span class="menu--label">Configurações</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="help.html" class="menu--link" title="Help">
							<i class='uil uil-question-circle menu--icon'></i>
							<span class="menu--label">Ajuda</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="report_history.html" class="menu--link" title="Report History">
							<i class='uil uil-windsock menu--icon'></i>
							<span class="menu--label">Histórico de relatórios</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="feedback.html" class="menu--link" title="Send Feedback">
							<i class='uil uil-comment-alt-exclamation menu--icon'></i>
							<span class="menu--label">Enviar comentários</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="left_footer">
				<ul>
					<li><a href="about_us.html">Sobre</a></li>
					<li><a href="press.html">Press</a></li>
					<li><a href="contact_us.html">Contato</a></li>
					<li><a href="coming_soon.html">
						Anunciar</a></li>
					<li><a href="coming_soon.html">Desenvolvedores</a></li>
					<li><a href="terms_of_use.html">Direito Autoral</a></li>
					<li><a href="terms_of_use.html">Política de Privacidade</a></li>
					<li><a href="terms_of_use.html">Termos</a></li>
				</ul>
				<div class="left_footer_content">
					<p>© 2022 <strong>Influenciou</strong>. 
						Todos os direitos reservados.</p>
				</div>
			</div>
		</div>
	</nav>
	<!-- Left Sidebar End -->
	<!-- Body Start -->
	<div class="wrapper _bg4586">
		<div class="_215b01">
			<div class="container-fluid">			
				<div class="row">
					<div class="col-lg-12">
						<div class="section3125">							
							<div class="row">						
								<div class="col-xl-4 col-lg-5 col-md-6">						
									<div class="preview_video">						
										<a href="#" class="fcrse_img" data-toggle="modal" data-target="#videoModal">
											<img src="{{ asset('assets/images/courses/img-2.jpg') }}" alt="">
											<div class="course-overlay">
												<div class="badge_seller">
													Mais vendidos</div>
												<span class="play_btn1"><i class="uil uil-play"></i></span>
												<span class="_215b02">
													Visualizar este curso</span>
											</div>
										</a>
									</div>
									<div class="_215b10">										
										<a href="#" class="_215b11">										
											<span><i class='uil uil-heart-alt'></i></span>
											Lista de Desejos
										</a>
										<a href="#" class="_215b12">										
											<span><i class="uil uil-windsock"></i></span>
											Denunciar abuso
										</a>
									</div>
								</div>
								<div class="col-xl-8 col-lg-7 col-md-6">
									<div class="_215b03">
										<h2>Complete Python Bootcamp: Go from zero to hero in Python 3</h2>
										<span class="_215b04">Web Desenvolvimento | Python</span>
									</div>
									<div class="_215b05">
										<div class="crse_reviews mr-2">
											<i class="uil uil-star"></i>4.5
										</div>
										(81,665 avaliações)
									</div>
									<div class="_215b05">										
										13.946 alunos
									</div>
									<div class="_215b06">										
										<div class="_215b07">										
											<span><i class='uil uil-comment'></i></span>
											Português
										</div>
										<div class="_215b08">										
											<span><i class='uil uil-closed-captioning'></i></span>
											<span>Português [Automático]
												<span class="caption_tooltip">
													
													<span class="caption-content">
														<span>French</span>
														<span>Hindi</span>
														<span>German [Auto-generated]</span>
														<span>Indonesian [Auto-generated]</span>
														<span>Italian [Auto-generated]</span>
														<span>Japanese [Auto-generated]</span>
														<span>Korean</span>
														<span>Polish</span>
														<span>Portuguese [Auto-generated]</span>
														<span>Spanish [Auto-generated]</span>
														<span>Traditional Chinese</span>
														<span>Turkish [Auto-generated]</span>
													 </span>
												</span>
											</span>
										</div>
									</div>
									<div class="_215b05">										
										Última atualização em 05/2022
									</div>
									<ul class="_215b31">										
										<li><button class="btn_adcart">Adicionar ao Carrinho</button></li>
										<li><button class="btn_buy">Compre Agora</button></li>
									</ul>
									<div class="_215fgt1">										
										Garantia de devolução do dinheiro em 30 dias
									</div>
								</div>							
							</div>							
						</div>							
					</div>															
				</div>
			</div>
		</div>
		<div class="_215b15 _byt1458">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="user_dt5">
							<div class="user_dt_left">
								<div class="live_user_dt">
									<div class="user_img5">
										<a href="#"><img src="data:image/jpeg;base64,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" alt=""></a>												
									</div>
									<div class="user_cntnt">
										<a href="#" class="_df7852">Johnson Smith</a>
										<button class="subscribe-btn">
											Se inscrever</button>
									</div>
								</div>
							</div>
							<div class="user_dt_right">
								<ul>
									<li>
										<a href="#" class="lkcm152"><i class="uil uil-eye"></i><span>1452</span></a>
									</li>
									<li>
										<a href="#" class="lkcm152"><i class="uil uil-thumbs-up"></i><span>100</span></a>
									</li>
									<li>
										<a href="#" class="lkcm152"><i class="uil uil-thumbs-down"></i><span>20</span></a>
									</li>
									<li>
										<a href="#" class="lkcm152"><i class="uil uil-share-alt"></i><span>9</span></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="course_tabs">
							<nav>
								<div class="nav nav-tabs tab_crse justify-content-center" id="nav-tab" role="tablist">
									<a class="nav-item nav-link active" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-selected="true">Sobre</a>
									<a class="nav-item nav-link" id="nav-courses-tab" data-toggle="tab" href="#nav-courses" role="tab" aria-selected="false">Conteúdo dos cursos</a>
									<a class="nav-item nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews" role="tab" aria-selected="false">Avaliações</a>
								</div>
							</nav>						
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="_215b17">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="course_tab_content">
							<div class="tab-content" id="nav-tabContent">
								<div class="tab-pane fade show active" id="nav-about" role="tabpanel">
									<div class="_htg451">
										<div class="_htg452">
											<h3>
												Requisitos</h3>
											<ul>
												<li><span class="_5f7g11">Have a computer with Internet</span></li>
												<li><span class="_5f7g11">Be ready to learn an insane amount of awesome stuff</span></li>
												<li><span class="_5f7g11">Prepare to build real web apps!</span></li>
											</ul>
										</div>
										<div class="_htg452 mt-35">
											<h3>Descrição</h3>
											<span class="_abc123">Just updated to include Bootstrap 4.1.3!</span>
											<p>Hi! Welcome to the Web Developer Bootcamp, the <strong>only course you need to learn web development</strong>. There are a lot of options for online developer training, but this course is without a doubt the most comprehensive and effective on the market.  Here's why:</p>
											<ul class="_abc124">
												<li><span class="_5f7g11">This is the only online course taught by a professional bootcamp instructor.</span></li>
												<li><span class="_5f7g11">94% of my in-person bootcamp students go on to get full-time developer jobs. Most of them are complete beginners when I start working with them.</span></li>
												<li><span class="_5f7g11">The previous 2 bootcamp programs that I taught cost $14,000 and $21,000.  This course is just as comprehensive but with brand new content for a fraction of the price.</span></li>
												<li><span class="_5f7g11">Everything I cover is up-to-date and relevant to today's developer industry. No PHP or other dated technologies. This course does not cut any corners.</span></li>
												<li><span class="_5f7g11">This is the only complete beginner full-stack developer course that covers NodeJS.</span></li>
												<li><span class="_5f7g11">We build 13+ projects, including a gigantic production application called YelpCamp. No other course walks you through the creation of such a substantial application.</span></li>
												<li><span class="_5f7g11">The course is constantly updated with new content, projects, and modules.  Think of it as a subscription to a never-ending supply of developer training.</span></li>
											</ul>
											<p>When you're learning to program you often have to sacrifice learning the exciting and current technologies in favor of the "beginner friendly" classes.  With this course, you get the best of both worlds.  This is a course designed for the complete beginner, yet it covers some of the most exciting and relevant topics in the industry.</p>
											<p>Throughout the course we cover tons of tools and technologies including:</p>
											<ul class="_abc124">												
												<li><span class="_5f7g11"><strong>HTML5</strong></span></li>
												<li><span class="_5f7g11"><strong>CSS3</strong></span></li>
												<li><span class="_5f7g11"><strong>JavaScript</strong></span></li>
												<li><span class="_5f7g11"><strong>Bootstrap 4</strong></span></li>
												<li><span class="_5f7g11"><strong>SemanticUI</strong></span></li>
												<li><span class="_5f7g11"><strong>DOM Manipulation</strong></span></li>
												<li><span class="_5f7g11"><strong>jQuery</strong></span></li>
												<li><span class="_5f7g11"><strong>Unix(Command Line) Commands</strong></span></li>
												<li><span class="_5f7g11"><strong>NodeJS</strong></span></li>
												<li><span class="_5f7g11"><strong>NPM</strong></span></li>
												<li><span class="_5f7g11"><strong>ExpressJS</strong></span></li>
												<li><span class="_5f7g11"><strong>REST</strong></span></li>
												<li><span class="_5f7g11"><strong>MongoDB</strong></span></li>
												<li><span class="_5f7g11"><strong>Database Associations</strong></span></li>
												<li><span class="_5f7g11"><strong>Authentication</strong></span></li>
												<li><span class="_5f7g11"><strong>PassportJS</strong></span></li>
												<li><span class="_5f7g11"><strong>Authorization</strong></span></li>
											</ul>
											
												<p>This course is also unique in the way that it is structured and presented. Many online courses are just a long series of "watch as I code" videos.  This course is different. I've incorporated everything I learned in my years of teaching to make this course not only more effective but more engaging. The course includes:</p>
												<ul class="_abc124">												
													<li><span class="_5f7g11">Lectures</span></li>
													<li><span class="_5f7g11">Code-Alongs</span></li>
													<li><span class="_5f7g11">Projects</span></li>
													<li><span class="_5f7g11">Exercises</span></li>
													<li><span class="_5f7g11">Research Assignments</span></li>
													<li><span class="_5f7g11">Slides</span></li>
													<li><span class="_5f7g11">Downloads</span></li>
													<li><span class="_5f7g11">Readings</span></li>
												</ul>
												<p>If you have any questions, please don't hesitate to contact me.  I got into this industry because I love working with people and helping students learn.  Sign up today and see how fun, exciting, and rewarding web development can be!</p>
										</div>
										<div class="_htg452 mt-35">
											<h3>
												Para quem é este curso:</h3>
											<ul class="_abc124">												
												<li><span class="_5f7g11">This course is for anyone who wants to learn about web development, regardless of previous experience</span></li>
												<li><span class="_5f7g11">It's perfect for complete beginners with zero experience</span></li>
												<li><span class="_5f7g11">It's also great for anyone who does have some experience in a few of the technologies(like HTML and CSS) but not all</span></li>
												<li><span class="_5f7g11">If you want to take ONE COURSE to learn everything you need to know about web development, take this course</span></li>
											</ul>
										</div>	
										<div class="_htgdrt mt-35">
											<h3>O que você vai aprender</h3>
											<div class="_scd123">
												<div class="row">
													<div class="col-lg-6">
														<ul class="_htg452 _abcd145">												
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Donec ultricies elit porttitor, ultrices enim a, commodo dolor.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Nunc dapibus ligula sed justo porta, id volutpat odio iaculis.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Maecenas pharetra mi quis nisl mollis, molestie imperdiet lorem molestie.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Maecenas ultricies felis in pulvinar blandit.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Praesent ac libero consequat, efficitur tortor et, interdum sem.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Nullam non lacus nibh. Etiam et fringilla neque, ut vulputate sapien. Sed vitae tortor gravida, interdum felis at, pulvinar enim. Integer tempor urna leo.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Phasellus ultrices tellus sed volutpat vestibulum. Curabitur aliquet dictum leo non congue.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>In hac habitasse platea dictumst. Aenean vel fermentum neque.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Suspendisse semper feugiat urna dictum interdum.</span></div></li>
														</ul>
													</div>
													<div class="col-lg-6">
														<ul class="_htg452 _abcd145">
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Nullam non lacus nibh. Etiam et fringilla neque, ut vulputate sapien. Sed vitae tortor gravida, interdum felis at, pulvinar enim. Integer tempor urna leo.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Phasellus ultrices tellus sed volutpat vestibulum. Curabitur aliquet dictum leo non congue.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>In hac habitasse platea dictumst. Aenean vel fermentum neque.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Suspendisse semper feugiat urna dictum interdum.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Donec ultricies elit porttitor, ultrices enim a, commodo dolor.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Nunc dapibus ligula sed justo porta, id volutpat odio iaculis.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Maecenas pharetra mi quis nisl mollis, molestie imperdiet lorem molestie.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Maecenas ultricies felis in pulvinar blandit.</span></div></li>
															<li><div class="_5f7g15"><i class="fas fa-check-circle"></i><span>Praesent ac libero consequat, efficitur tortor et, interdum sem.</span></div></li>
														</ul>
													</div>
												</div>
											</div>
										</div>							
									</div>							
								</div>
								<div class="tab-pane fade" id="nav-courses" role="tabpanel">
									<div class="crse_content">
										<h3>
											Conteúdo do curso</h3>
										<div class="_112456">
											<ul class="accordion-expand-holder">
												<li><span class="accordion-expand-all _d1452">Expand all</span></li>
												<li><span class="_fgr123"> 402 lectures</span></li>
												<li><span class="_fgr123">47:06:29</span></li>
											</ul>
										</div>
										<div id="accordion" class="ui-accordion ui-widget ui-helper-reset">
											<a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">												
												<div class="section-header-left">
													<span class="section-title-wrapper">
														<i class='uil uil-presentation-play crse_icon'></i>
														<span class="section-title-text">Introduction to this Course</span>
													</span>
												</div>
												<div class="section-header-right">
													<span class="num-items-in-section">8 lectures</span>
													<span class="section-header-length">22:08</span>
												</div>
											</a>
											<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">A Note On Asking For Help</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:12</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Introducing Our TA</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">01:42</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Join the Online Community</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:51</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Why This Course?</div>
														</div>
													</div>
													<div class="details">
														<a href="#" class="preview-text">Preview</a>
														<span class="content-summary">07:48</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file-download-alt icon_142'></i>
														<div class="top">
															<div class="title">Syllabus Download</div>
														</div>
													</div>
													<div class="details">
														<a href="#" class="preview-text">Preview</a>
														<span class="content-summary">2 pages</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Syllabus Walkthrough</div>
														</div>
													</div>
													<div class="details">
														<a href="#" class="preview-text">Preview</a>
														<span class="content-summary">01:42</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Lecture Slides</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:11</span>
													</div>
												</div>
											</div>
											<a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">												
												<div class="section-header-left">
													<span class="section-title-wrapper">
														<i class='uil uil-presentation-play crse_icon'></i>
														<span class="section-title-text">Introduction to Front End Development</span>
													</span>
												</div>
												<div class="section-header-right">
													<span class="num-items-in-section">6 lectures</span>
													<span class="section-header-length">27:26</span>
												</div>
											</a>
											<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Unit Objectives</div>
														</div>
													</div>
													<div class="details">
													<a href="#" class="preview-text">Preview</a>
														<span class="content-summary">01.40</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Setting Up Front-End Developer Environment</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:30</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Setting Up Front-End Developer Environment</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">03:11</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Introduction to the Web</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:11</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Introduction to the Web</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">10.08</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">The Front End Holy Trinity</div>
														</div>
													</div>
													<div class="details">
														<a href="#" class="preview-text">Preview</a>
														<span class="content-summary">11:46</span>
													</div>
												</div>
											</div>
											<a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">												
												<div class="section-header-left">
													<span class="section-title-wrapper">
														<i class='uil uil-presentation-play crse_icon'></i>
														<span class="section-title-text">Introduction to HTML</span>
													</span>
												</div>
												<div class="section-header-right">
													<span class="num-items-in-section">13 lectures</span>
													<span class="section-header-length">58:55</span>
												</div>
											</a>
											<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Unit Objectives</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">01.38</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">HTML Basicsng Up Front-End Developer Environment</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">05:53</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Introduction to MDN</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:19</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Introduction to MDN</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">01:51</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">HTML Boilerplate and Comments</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">09:42</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Basic Tags</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">08:23</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">HTML Lists</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">04:32</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">HTML Lists Assignment</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">01:23</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">HTML Lists Assignment: SOLUTION</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">05:59</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Divs and Spans</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">05:23</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">HTML Attributes</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">09:00</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Recreate Webpage Assignment</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">01:00</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Recreate Webpage Assignment: SOLUTION</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">03:56</span>
													</div>
												</div>
											</div>
											<a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">												
												<div class="section-header-left">
													<span class="section-title-wrapper">
														<i class='uil uil-presentation-play crse_icon'></i>
														<span class="section-title-text">Intermediate HTML</span>
													</span>
												</div>
												<div class="section-header-right">
													<span class="num-items-in-section">13 lectures</span>
													<span class="section-header-length">01.12:29</span>
												</div>
											</a>
											<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Unit Objectives</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">01.19</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">HTML Tables</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">06:03</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Tables Exercise</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">01:18</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Introduction to Forms</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">06:19</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Playing with Inputs</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">03:04</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">The Form Tag</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">06:36</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Labels</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">03:32</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Form Validations</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">03:43</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Dropdowns and Radio Buttons</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">11:19</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Form Exercise</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">07:23</span>
													</div>
												</div>												
											</div>
											<a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">												
												<div class="section-header-left">
													<span class="section-title-wrapper">
														<i class='uil uil-presentation-play crse_icon'></i>
														<span class="section-title-text">Introduction to CSS</span>
													</span>
												</div>
												<div class="section-header-right">
													<span class="num-items-in-section">15 lectures</span>
													<span class="section-header-length">01.40:15</span>
												</div>
											</a>
											<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Unit Objectives</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">02.28</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">CSS Basics</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">05:25</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Our First Stylesheet</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">10:18</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about CSS Colors and Background and Border (next 2 lectures)</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:20</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">CSS Colors</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">14:35</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Background and Border</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">06:58</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Selectors Basics Todo List</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:32</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Selectors Basics Todo List</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">10:43</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Introduction to Chrome Inspector</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">05:43</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">More Advanced Selectors</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">09:23</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Specificity and the Cascade</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:23</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Specificity and the Cascade</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">10:38</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Selectors Practice Exercise</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:22</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Selectors Practice Exercise</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">04:28</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Selectors Practice Exercise: SOLUTION</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">16:48</span>
													</div>
												</div>
											</div>
											<a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">												
												<div class="section-header-left">
													<span class="section-title-wrapper">
														<i class='uil uil-presentation-play crse_icon'></i>
														<span class="section-title-text">Intermediate CSS</span>
													</span>
												</div>
												<div class="section-header-right">
													<span class="num-items-in-section">16 lectures</span>
													<span class="section-header-length">01.26:40</span>
												</div>
											</a>
											<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Unit Objectives</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">01.40</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Text and Fonts</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">09:55</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">More Text and Fonts</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">04:42</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Google Fonts</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:22</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Using Google Fonts</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">04:35</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Introduction to the Box Model</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">11:58</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Creating a Tic Tac Toe Board</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">01:41</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Creating a Tic Tac Toe Board: SOLUTION</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">07:43</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Image Gallery Code Along Pt. 1</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:20</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Image Gallery Code Along Pt. 1</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">08:20</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about changes to Google Fonts</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:40</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Image Gallery Code Along Pt. 2</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">05:46</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">CSS Blog From Scratch Exercise Intro</div>
														</div>
													</div>
													<div class="details">
														<a href="#" class="preview-text">Preview</a>
														<span class="content-summary">03:23</span>
													</div>
												</div>											
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">CSS Blog From Scratch Exercise SOLUTION Pt. 1</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">08:38</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">CSS Blog From Scratch Exercise SOLUTION Pt. 2</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">08:12</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">CSS Blog From Scratch Exercise SOLUTION Pt. 3</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">07:28</span>
													</div>
												</div>												
											</div>
											<a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">												
												<div class="section-header-left">
													<span class="section-title-wrapper">
														<i class='uil uil-presentation-play crse_icon'></i>
														<span class="section-title-text">Bootstrap</span>
													</span>
												</div>
												<div class="section-header-right">
													<span class="num-items-in-section">16 lectures</span>
													<span class="section-header-length">01.59:54</span>
												</div>
											</a>
											<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Unit Objectives</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">02.28</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Bootstrap versions</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:44</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">What is Bootstrap?</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">08:02</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Adding Bootstrap to a Project</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">09:15</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Forms and Inputs</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">14:00</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Nav Bars</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">15:44</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about The Grid System</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:11</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">The Grid System</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">08:43</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Grid System Pt. 2</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">11:43</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Bootstrap Image Gallery Pt. 1</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:55</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Bootstrap Image Gallery Pt. 1</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">14:20</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Font Awesome</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:16</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Bootstrap Image Gallery Pt. 2</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">09:46</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Creating a Startup Landing Page Code Along</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">14:23</span>
													</div>
												</div>											
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Creating a Startup Landing Page Code Along Pt. 2</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">10:30</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about making bootstrap responsive on mobile devices</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:14</span>
													</div>
												</div>																								
											</div>
											<a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">												
												<div class="section-header-left">
													<span class="section-title-wrapper">
														<i class='uil uil-presentation-play crse_icon'></i>
														<span class="section-title-text">Bootstrap 4!</span>
													</span>
												</div>
												<div class="section-header-right">
													<span class="num-items-in-section">11 lectures</span>
													<span class="section-header-length">01.16:28
													</span>
												</div>
											</a>
											<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">A History of Bootstrap 4</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">04.40</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">The Bootstrap 4 Documentation</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">02:24</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Changes from Bootstrap 3 to 4</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">07:52</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Bootstrap 4 Code/Solutions Download</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:41</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Getting Started With Bootstrap 4</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">05:15</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Bootstrap 4 Colors and Backgrounds</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">05:59</span>
													</div>
												</div>												
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Typography</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">11:12</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">New Fancy Spacing Utilities</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">12:28</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Responsive Breakpoints</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">10:55</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Bootstrap4 Navbars</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">08:20</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">The New Display Utility</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">07:26</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Bootstrap 4: Flexbox and Layout</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">10:14</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Flexbox Utilities Part 2</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">07:23</span>
													</div>
												</div>											
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Navs and Flexbox</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">09:56</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">The Bootstrap 4 Grid</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">08:56</span>
													</div>
												</div>											
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">PATTERN PROJECT Part 1</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">12:06</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">PATTERN PROJECT Part 2</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">11:30</span>
													</div>
												</div>											
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">The Grid + Flexbox</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">11:44</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Museum of Candy Project Part 1</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">05:36</span>
													</div>
												</div>																						
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Note about Museum of Candy Project Part 2</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">00:12</span>
													</div>
												</div>
											</div>
											<a href="javascript:void(0)" class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">												
												<div class="section-header-left">
													<span class="section-title-wrapper">
														<i class='uil uil-presentation-play crse_icon'></i>
														<span class="section-title-text">Introduction to JavaScript</span>
													</span>
												</div>
												<div class="section-header-right">
													<span class="num-items-in-section">12 lectures</span>
													<span class="section-header-length">56:21</span>
												</div>
											</a>
											<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Unit Objectives</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">04.41</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">The JavaScript Console</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">02:22</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Primitives</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">13:22</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-file icon_142'></i>
														<div class="top">
															<div class="title">Primitives Exercises</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">03:21</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Variables</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">06:15</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Null and Undefined</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">02:33</span>
													</div>
												</div>												
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Useful Built-In Methods</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">05:12</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Writing JavaScript in a Separate File</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">04:28</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">JS Stalker Exercise</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">01:55</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">JS Stalker Exercise: SOLUTION</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">04:45</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Age Calculator Exercise</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">01:10</span>
													</div>
												</div>
												<div class="lecture-container">
													<div class="left-content">
														<i class='uil uil-play-circle icon_142'></i>
														<div class="top">
															<div class="title">Age Calculator Exercise: SOLUTION</div>
														</div>
													</div>
													<div class="details">
														<span class="content-summary">04:01</span>
													</div>
												</div>												
											</div>											
										</div>
										<a class="btn1458" href="#">20 More Sections</a>
									</div>
								</div>
								<div class="tab-pane fade" id="nav-reviews" role="tabpanel">
									<div class="student_reviews">
										<div class="row">
											<div class="col-lg-5">
												<div class="reviews_left">
													<h3>Comentários do Aluno</h3>
													<div class="total_rating">
														<div class="_rate001">4.6</div>														
														<div class="rating-box">
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
															<span class="rating-star half-star"></span>
														</div>
														<div class="_rate002">Avaliação do curso</div>	
													</div>
													<div class="_rate003">
														<div class="_rate004">
															<div class="progress progress1">
																<div class="progress-bar w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="rating-box">
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
															</div>
															<div class="_rate002">70%</div>
														</div>
														<div class="_rate004">
															<div class="progress progress1">
																<div class="progress-bar w-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="rating-box">
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star empty-star"></span>
															</div>
															<div class="_rate002">40%</div>
														</div>
														<div class="_rate004">
															<div class="progress progress1">
																<div class="progress-bar w-5" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="rating-box">
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star empty-star"></span>
																<span class="rating-star empty-star"></span>
															</div>
															<div class="_rate002">5%</div>
														</div>
														<div class="_rate004">
															<div class="progress progress1">
																<div class="progress-bar w-2" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="rating-box">
																<span class="rating-star full-star"></span>
																<span class="rating-star full-star"></span>
																<span class="rating-star empty-star"></span>
																<span class="rating-star empty-star"></span>
																<span class="rating-star empty-star"></span>
															</div>
															<div class="_rate002">1%</div>
														</div>
														<div class="_rate004">
															<div class="progress progress1">
																<div class="progress-bar w-1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="rating-box">
																<span class="rating-star full-star"></span>
																<span class="rating-star empty-star"></span>
																<span class="rating-star empty-star"></span>
																<span class="rating-star empty-star"></span>
																<span class="rating-star empty-star"></span>
															</div>
															<div class="_rate002">1%</div>
														</div>
													</div>
												</div>												
											</div>
											<div class="col-lg-7">
												<div class="review_right">
													<div class="review_right_heading">
														<h3>Avaliações</h3>
														<div class="review_search">
															<input class="rv_srch" type="text" placeholder="Pesquisar">
															<button class="rvsrch_btn"><i class='uil uil-search'></i></button>
														</div>
													</div>
												</div>
												<div class="review_all120">
													<div class="review_item">
														<div class="review_usr_dt">
															<img src="images/left-imgs/img-1.jpg" alt="">
															<div class="rv1458">
																<h4 class="tutor_name1">John Doe</h4>
																<span class="time_145">2 horas atrás</span>
															</div>
														</div>
														<div class="rating-box mt-20">
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
															<span class="rating-star half-star"></span>
														</div>
														<p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
														<div class="rpt100">
															<span>Esta avaliação foi útil?</span>
															<div class="radio--group-inline-container">
																<div class="radio-item">
																	<input id="radio-1" name="radio" type="radio">
																	<label for="radio-1" class="radio-label">Sim</label>
																</div>
																<div class="radio-item">
																	<input id="radio-2" name="radio" type="radio">
																	<label  for="radio-2" class="radio-label">Não</label>
																</div>
															</div>
															<a href="#" class="report145">Relatório</a>
														</div>
													</div>
													<div class="review_item">
														<div class="review_usr_dt">
															<img src="images/left-imgs/img-2.jpg" alt="">
															<div class="rv1458">
																<h4 class="tutor_name1">Jassica William</h4>
																<span class="time_145">12 horas atrás</span>
															</div>
														</div>
														<div class="rating-box mt-20">
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
															<span class="rating-star empty-star"></span>
														</div>
														<p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
														<div class="rpt100">
															<span>Esta avaliação foi útil?</span>
															<div class="radio--group-inline-container">
																<div class="radio-item">
																	<input id="radio-3" name="radio1" type="radio">
																	<label for="radio-3" class="radio-label">Sim</label>
																</div>
																<div class="radio-item">
																	<input id="radio-4" name="radio1" type="radio">
																	<label  for="radio-4" class="radio-label">Não</label>
																</div>
															</div>
															<a href="#" class="report145">Relatório</a>
														</div>
													</div>
													<div class="review_item">
														<div class="review_usr_dt">
															<img src="images/left-imgs/img-3.jpg" alt="">
															<div class="rv1458">
																<h4 class="tutor_name1">Albert Dua</h4>
																<span class="time_145">5 dias atrás</span>
															</div>
														</div>
														<div class="rating-box mt-20">
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
															<span class="rating-star half-star"></span>
															<span class="rating-star empty-star"></span>
														</div>
														<p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
														<div class="rpt100">
															<span>Esta avaliação foi útil?</span>
															<div class="radio--group-inline-container">
																<div class="radio-item">
																	<input id="radio-5" name="radio2" type="radio">
																	<label for="radio-5" class="radio-label">Sim</label>
																</div>
																<div class="radio-item">
																	<input id="radio-6" name="radio2" type="radio">
																	<label  for="radio-6" class="radio-label">Não</label>
																</div>
															</div>
															<a href="#" class="report145">Relatório</a>
														</div>
													</div>
													<div class="review_item">
														<div class="review_usr_dt">
															<img src="images/left-imgs/img-4.jpg" alt="">
															<div class="rv1458">
																<h4 class="tutor_name1">Zoena Singh</h4>
																<span class="time_145">15 dias atrás</span>
															</div>
														</div>
														<div class="rating-box mt-20">
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
														</div>
														<p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
														<div class="rpt100">
															<span>Esta avaliação foi útil?</span>
															<div class="radio--group-inline-container">
																<div class="radio-item">
																	<input id="radio-7" name="radio3" type="radio">
																	<label for="radio-7" class="radio-label">Sim</label>
																</div>
																<div class="radio-item">
																	<input id="radio-8" name="radio3" type="radio">
																	<label  for="radio-8" class="radio-label">Não</label>
																</div>
															</div>
															<a href="#" class="report145">Relatório</a>
														</div>
													</div>
													<div class="review_item">
														<div class="review_usr_dt">
															<img src="images/left-imgs/img-5.jpg" alt="">
															<div class="rv1458">
																<h4 class="tutor_name1">Joy Dua</h4>
																<span class="time_145">20 dias atrás</span>
															</div>
														</div>
														<div class="rating-box mt-20">
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
															<span class="rating-star full-star"></span>
															<span class="rating-star empty-star"></span>
															<span class="rating-star empty-star"></span>
														</div>
														<p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
														<div class="rpt100">
															<span>Esta avaliação foi útil?</span>
															<div class="radio--group-inline-container">
																<div class="radio-item">
																	<input id="radio-9" name="radio4" type="radio">
																	<label for="radio-9" class="radio-label">Sim</label>
																</div>
																<div class="radio-item">
																	<input id="radio-10" name="radio4" type="radio">
																	<label  for="radio-10" class="radio-label">Não</label>
																</div>
															</div>
															<a href="#" class="report145">Relatório</a>
														</div>
													</div>
													<div class="review_item">
														<a href="#" class="more_reviews">Ver mais comentários</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer mt-30">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6">
						<div class="item_f1">
							<a href="about_us.html">Sobre</a>
							<a href="our_blog.html">Blog</a>
							<a href="career.html">Carreiras</a>
							<a href="press.html">Press</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6">
						<div class="item_f1">
							<a href="help.html">Ajuda</a>
							<a href="coming_soon.html">Anunciar</a>
							<a href="coming_soon.html">Desenvolvedores</a>
							<a href="contact_us.html">Contato</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6">
						<div class="item_f1">
							<a href="terms_of_use.html">Direito Autoral</a>
							<a href="terms_of_use.html">Termos</a>
							<a href="terms_of_use.html">Política de Privacidade</a>
							<a href="#">Mapa do Site</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6">
						<div class="item_f3">
							<a href="#" class="btn1542">Ensine no Influenciou</a>
							<div class="lng_btn">
								<div class="ui language bottom right pointing dropdown floating" id="languages" data-content="Select Language">
									<a href="#"><i class='uil uil-globe lft'></i>Language<i class='uil uil-angle-down rgt'></i></a>
									<div class="menu">
										<div class="scrolling menu">
											<div class="item" data-percent="100" data-value="en" data-english="English">
												<span class="description">English</span>
												English
											</div>
											<div class="item" data-percent="94" data-value="da" data-english="Danish">
												<span class="description">dansk</span>
												Danish
											</div>
											<div class="item" data-percent="94" data-value="es" data-english="Spanish">
												<span class="description">Español</span>
												Spanish
											</div>
											<div class="item" data-percent="34" data-value="zh" data-english="Chinese">
												<span class="description">简体中文</span>
												Chinese
											</div>
											<div class="item" data-percent="54" data-value="zh_TW" data-english="Chinese (Taiwan)">
												<span class="description">中文 (臺灣)</span>
												Chinese (Taiwan)
											</div>
											<div class="item" data-percent="79" data-value="fa" data-english="Persian">
												<span class="description">پارسی</span>
												Persian
											</div>
											<div class="item" data-percent="41" data-value="fr" data-english="French">
												<span class="description">Français</span>
												French
											</div>
											<div class="item" data-percent="37" data-value="el" data-english="Greek">
												<span class="description">ελληνικά</span>
												Greek
											</div>
											<div class="item" data-percent="37" data-value="ru" data-english="Russian">
												<span class="description">Русский</span>
												Russian
											</div>
											<div class="item" data-percent="36" data-value="de" data-english="German">
												<span class="description">Deutsch</span>
												German
											</div>
											<div class="item" data-percent="23" data-value="it" data-english="Italian">
												<span class="description">Italiano</span>
												Italian
											</div>
											<div class="item" data-percent="21" data-value="nl" data-english="Dutch">
												<span class="description">Nederlands</span>
												Dutch
											</div>
											<div class="item" data-percent="19" data-value="pt_BR" data-english="Portuguese">
												<span class="description">Português(BR)</span>
												Portuguese
											</div>
											<div class="item" data-percent="17" data-value="id" data-english="Indonesian">
												<span class="description">Indonesian</span>
												Indonesian
											</div>
											<div class="item" data-percent="12" data-value="lt" data-english="Lithuanian">
												<span class="description">Lietuvių</span>
												Lithuanian
											</div>
											<div class="item" data-percent="11" data-value="tr" data-english="Turkish">
												<span class="description">Türkçe</span>
												Turkish
											</div>
											<div class="item" data-percent="10" data-value="kr" data-english="Korean">
												<span class="description">한국어</span>
												Korean
											</div>
											<div class="item" data-percent="7" data-value="ar" data-english="Arabic">
												<span class="description">العربية</span>
												Arabic
											</div>
											<div class="item" data-percent="6" data-value="hu" data-english="Hungarian">
												<span class="description">Magyar</span>
												Hungarian
											</div>
											<div class="item" data-percent="6" data-value="vi" data-english="Vietnamese">
												<span class="description">tiếng Việt</span>
												Vietnamese
											</div>
											<div class="item" data-percent="5" data-value="sv" data-english="Swedish">
												<span class="description">svenska</span>
												Swedish
											</div>
											<div class="item" data-precent="4" data-value="pl" data-english="Polish">
												<span class="description">polski</span>
												Polish
											</div>
											<div class="item" data-percent="6" data-value="ja" data-english="Japanese">
												<span class="description">日本語</span>
												Japanese
											</div>
											<div class="item" data-percent="0" data-value="ro" data-english="Romanian">
												<span class="description">românește</span>
												Romanian
											</div>										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="footer_bottm">
							<div class="row">
								<div class="col-md-6">
									<ul class="fotb_left">
										<li>
											<a href="{{ route('welcome') }}">
												<div class="footer_logo">
													<img src="images/logo1.svg" alt="">
												</div>
											</a>
										</li>
										<li>
											<p>© 2022 <strong>Influenciou</strong>. 
												Todos os direitos reservados.</p>
										</li>
									</ul>
								</div>
								<div class="col-md-6">
									<div class="edu_social_links">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-google-plus-g"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
										<a href="#"><i class="fab fa-youtube"></i></a>
										<a href="#"><i class="fab fa-pinterest-p"></i></a>
									</div>
								</div>		
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- Body End -->

	<script src="{{ asset('assets/js/vertical-responsive-menu.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/OwlCarousel/owl.carousel.js') }}"></script>
	<script src="{{ asset('assets/vendor/semantic/semantic.min.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>	
	<script src="{{ asset('assets/js/night-mode.js') }}"></script>	
	
</body>
</html>