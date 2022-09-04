@extends('layout.guest')

@section('title', 'Bem vindo a Influenciou')

@section('header')
	@include('layout.components.header')
@endsection

@section('content')
<div class="sa4d25">
<div class="container-fluid">			
	<div class="row">
		<div class="col-xl-12 col-md-3 col-lg-12">
			<div class="section3125 mt-50">
				<h4 class="item_title">Cursos em destaque</h4>
				<a href="#" class="see150">Ver todos</a>
				<div class="la5lo1">
					<div class="owl-carousel featured_courses owl-theme">
						<div class="item">
							<div class="fcrse_1 mb-20">
								<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="fcrse_img">
									<img src="{{ asset('assets/images/courses/img-1.jpg') }}" alt="">
									<div class="course-overlay">
										<div class="badge_seller">Mais vendidos</div>
										<div class="crse_reVisualizações">
											<i class='uil uil-star'></i>4.5
										</div>
										<span class="play_btn1"><i class="uil uil-play"></i></span>
										<div class="crse_timer">
											25 horas
										</div>
									</div>
								</a>
								<div class="fcrse_content">
									<div class="eps_dots more_dropdown">
										<a href="#"><i class='uil uil-ellipsis-v'></i></a>
										<div class="dropdown-content">
											<span><i class='uil uil-Compartilhar-alt'></i>Compartilhar</span>
											<span><i class="uil uil-clock-three"></i>Assistir depois</span>
											<span><i class='uil uil-ban'></i>Não interessado</span>
											<span><i class="uil uil-windsock"></i>Relatório</span>
										 </div>																										
									</div>
									<div class="vdtodt">
										<span class="vdt14">109k Visualizações</span>
										<span class="vdt14">15 dias atrás</span>
									</div>
									<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="crse14s">Complete Python Bootcamp: Go from zero to hero in Python 3</a>
									<a href="#" class="crse-cate">Web Desenvolvimento | Python</a>
									<div class="auth1lnkprce">
										<p class="cr1fot">De <a href="#">John Doe</a></p>
										<div class="prce142">R$10,00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item" >
							<div class="fcrse_1 mb-20">
								<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="fcrse_img">
									<img src="{{ asset('assets/images/courses/img-2.jpg') }}" alt="">
									<div class="course-overlay">
										<div class="badge_seller">Mais Vendidos</div>
										<div class="crse_reVisualizações">
											<i class='uil uil-star'></i>4.5
										</div>
										<span class="play_btn1"><i class="uil uil-play"></i></span>
										<div class="crse_timer">
											28 horas
										</div>
									</div>
								</a>
								<div class="fcrse_content">
									<div class="eps_dots more_dropdown">
										<a href="#"><i class='uil uil-ellipsis-v'></i></a>
										<div class="dropdown-content">
											<span><i class='uil uil-Compartilhar-alt'></i>Compartilhar</span>
											<span><i class="uil uil-clock-three"></i>Assistir depois</span>
											<span><i class='uil uil-ban'></i>Não interessado</span>
											<span><i class="uil uil-windsock"></i>Relatório</span>
										 </div>																										
									</div>
									<div class="vdtodt">
										<span class="vdt14">5M Visualizações</span>
										<span class="vdt14">15 dias atrás</span>
									</div>
									<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="crse14s">The Complete JavaScript Course 2020: Build Real Projects!</a>
									<a href="#" class="crse-cate">Desenvolvimento | JavaScript</a>
									<div class="auth1lnkprce">
										<p class="cr1fot">De <a href="#">Jassica William</a></p>
										<div class="prce142">R$5,00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fcrse_1 mb-20">
								<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="fcrse_img">
									<img src="{{ asset('assets/images/courses/img-3.jpg') }}" alt="">
									<div class="course-overlay">
										<div class="badge_seller">Mais Vendidos</div>
										<div class="crse_reVisualizações">
											<i class='uil uil-star'></i>4.5
										</div>
										<span class="play_btn1"><i class="uil uil-play"></i></span>
										<div class="crse_timer">
											12 horas
										</div>
									</div>
								</a>
								<div class="fcrse_content">
									<div class="eps_dots more_dropdown">
										<a href="#"><i class='uil uil-ellipsis-v'></i></a>
										<div class="dropdown-content">
											<span><i class='uil uil-Compartilhar-alt'></i>Compartilhar</span>
											<span><i class="uil uil-clock-three"></i>Assistir depois</span>
											<span><i class='uil uil-ban'></i>Não interessado</span>
											<span><i class="uil uil-windsock"></i>Relatório</span>
										 </div>																											
									</div>
									<div class="vdtodt">
										<span class="vdt14">1M Visualizações</span>
										<span class="vdt14">18 dias atrás</span>
									</div>
									<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="crse14s">Beginning C++ Programming - From Beginner to Beyond</a>
									<a href="#" class="crse-cate">Desenvolvimento | C++</a>
									<div class="auth1lnkprce">
										<p class="cr1fot">De <a href="#">Joginder Singh</a></p>
										<div class="prce142">R$13,00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fcrse_1 mb-20">
								<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="fcrse_img">
									<img src="{{ asset('assets/images/courses/img-4.jpg') }}" alt="">
									<div class="course-overlay">
										<div class="badge_seller">Mais Vendidos</div>
										<div class="crse_reVisualizações">
											<i class='uil uil-star'></i>5.0
										</div>
										<span class="play_btn1"><i class="uil uil-play"></i></span>
										<div class="crse_timer">
											1 horas
										</div>
									</div>
								</a>
								<div class="fcrse_content">
									<div class="eps_dots more_dropdown">
										<a href="#"><i class='uil uil-ellipsis-v'></i></a>
										<div class="dropdown-content">
											<span><i class='uil uil-Compartilhar-alt'></i>Compartilhar</span>
											<span><i class="uil uil-clock-three"></i>Assistir depois</span>
											<span><i class='uil uil-ban'></i>Não interessado</span>
											<span><i class="uil uil-windsock"></i>Relatório</span>
										 </div>																										
									</div>
									<div class="vdtodt">
										<span class="vdt14">153k Visualizações</span>
										<span class="vdt14">3 months ago</span>
									</div>
									<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="crse14s">The Complete Digital Marketing Course - 12 Courses in 1</a>
									<a href="#" class="crse-cate">Digital Marketing | Marketing</a>
									<div class="auth1lnkprce">
										<p class="cr1fot">De <a href="#">Poonam Verma</a></p>
										<div class="prce142">R$12,00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fcrse_1 mb-20">
								<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="fcrse_img">
									<img src="{{ asset('assets/images/courses/img-5.jpg') }}" alt="">
									<div class="course-overlay">
										<div class="badge_seller">Mais Vendidos</div>
										<div class="crse_reVisualizações">
											<i class='uil uil-star'></i>4.5
										</div>
										<span class="play_btn1"><i class="uil uil-play"></i></span>
										<div class="crse_timer">
											1.5 horas
										</div>
									</div>
								</a>
								<div class="fcrse_content">
									<div class="eps_dots more_dropdown">
										<a href="#"><i class='uil uil-ellipsis-v'></i></a>
										<div class="dropdown-content">
											<span><i class='uil uil-Compartilhar-alt'></i>Compartilhar</span>
											<span><i class="uil uil-clock-three"></i>Assistir depois</span>
											<span><i class='uil uil-ban'></i>Não interessado</span>
											<span><i class="uil uil-windsock"></i>Relatório</span>
										 </div>																										
									</div>
									<div class="vdtodt">
										<span class="vdt14">53k Visualizações</span>
										<span class="vdt14">14 dias atrás</span>
									</div>
									<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="crse14s">Microsoft Excel - Excel from Beginner to Advanced</a>
									<a href="#" class="crse-cate">Office Productivity | Excel</a>
									<div class="auth1lnkprce">
										<p class="cr1fot">De <a href="#">Rock William</a></p>
										<div class="prce142">R$6,00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fcrse_1 mb-20">
								<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="fcrse_img">
									<img src="{{ asset('assets/images/courses/img-6.jpg') }}" alt="">
									<div class="course-overlay">
										<div class="badge_seller">Mais Vendidos</div>
										<div class="crse_reVisualizações">
											<i class='uil uil-star'></i>5.0
										</div>
										<span class="play_btn1"><i class="uil uil-play"></i></span>
										<div class="crse_timer">
											36 horas
										</div>
									</div>
								</a>
								<div class="fcrse_content">
									<div class="eps_dots more_dropdown">
										<a href="#"><i class='uil uil-ellipsis-v'></i></a>
										<div class="dropdown-content">
											<span><i class='uil uil-Compartilhar-alt'></i>Compartilhar</span>
											<span><i class="uil uil-clock-three"></i>Assistir depois</span>
											<span><i class='uil uil-ban'></i>Não interessado</span>
											<span><i class="uil uil-windsock"></i>Relatório</span>
										 </div>																										
									</div>
									<div class="vdtodt">
										<span class="vdt14">253k Visualizações</span>
										<span class="vdt14">10 dias atrás</span>
									</div>
									<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="crse14s">Angular 8 - The Complete Guide (2020 Edition)</a>
									<a href="#" class="crse-cate">Desenvolvimento | Angular</a>
									<div class="auth1lnkprce">
										<p class="cr1fot">De <a href="#">John Doe</a></p>
										<div class="prce142">R$15,00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fcrse_1 mb-20">
								<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="fcrse_img">
									<img src="{{ asset('assets/images/courses/img-7.jpg') }}" alt="">
									<div class="course-overlay">
										<div class="badge_seller">Mais Vendidos</div>
										<div class="crse_reVisualizações">
											<i class='uil uil-star'></i>5.0
										</div>
										<span class="play_btn1"><i class="uil uil-play"></i></span>
										<div class="crse_timer">
											5.4 horas
										</div>
									</div>
								</a>
								<div class="fcrse_content">
									<div class="eps_dots more_dropdown">
										<a href="#"><i class='uil uil-ellipsis-v'></i></a>
										<div class="dropdown-content">
											<span><i class='uil uil-Compartilhar-alt'></i>Compartilhar</span>
											<span><i class="uil uil-clock-three"></i>Assistir depois</span>
											<span><i class='uil uil-ban'></i>Não interessado</span>
											<span><i class="uil uil-windsock"></i>Relatório</span>
										 </div>																											
									</div>
									<div class="vdtodt">
										<span class="vdt14">109k Visualizações</span>
										<span class="vdt14">15 dias atrás</span>
									</div>
									<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="crse14s">WordPress for Beginners: Create a Website Step De Step</a>
									<a href="#" class="crse-cate">Design | Wordpress</a>
									<div class="auth1lnkprce">
										<p class="cr1fot">De <a href="#">Sabnam SIngh</a></p>
										<div class="prce142">R$18,00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fcrse_1 mb-20">
								<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="fcrse_img">
									<img src="{{ asset('assets/images/courses/img-8.jpg') }}" alt="">
									<div class="course-overlay">
										<div class="badge_seller">Mais Vendidos</div>
										<div class="crse_reVisualizações">
											<i class='uil uil-star'></i>4.0
										</div>
										<span class="play_btn1"><i class="uil uil-play"></i></span>
										<div class="crse_timer">
											23 horas
										</div>
									</div>
								</a>
								<div class="fcrse_content">
									<div class="eps_dots more_dropdown">
										<a href="#"><i class='uil uil-ellipsis-v'></i></a>
										<div class="dropdown-content">
											<span><i class='uil uil-Compartilhar-alt'></i>Compartilhar</span>
											<span><i class="uil uil-clock-three"></i>Assistir depois</span>
											<span><i class='uil uil-ban'></i>Não interessado</span>
											<span><i class="uil uil-windsock"></i>Relatório</span>
										 </div>																											
									</div>
									<div class="vdtodt">
										<span class="vdt14">196k Visualizações</span>
										<span class="vdt14">1 month ago</span>
									</div>
									<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="crse14s">CSS - The Complete Guide 2020 (incl. Flexbox, Grid & Sass)</a>
									<a href="#" class="crse-cate">Design | CSS</a>
									<div class="auth1lnkprce">
										<p class="cr1fot">De <a href="#">Jashanpreet Singh</a></p>
										<div class="prce142">R$10,00</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section3125 mt-30">
				<h4 class="item_title">Cursos mais recentes</h4>
				<a href="#" class="see150">Ver todos</a>
				<div class="la5lo1">
					<div class="owl-carousel featured_courses owl-theme">
						<div class="item">
							<div class="fcrse_1 mb-20">
								<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="fcrse_img">
									<img src="{{ asset('assets/images/courses/img-14.jpg') }}" alt="">
									<div class="course-overlay">
										<span class="play_btn1"><i class="uil uil-play"></i></span>
										<div class="crse_timer">
											12 horas
										</div>
									</div>
								</a>
								<div class="fcrse_content">
									<div class="eps_dots more_dropdown">
										<a href="#"><i class='uil uil-ellipsis-v'></i></a>
										<div class="dropdown-content">
											<span><i class='uil uil-Compartilhar-alt'></i>Compartilhar</span>
											<span><i class="uil uil-clock-three"></i>Assistir depois</span>
											<span><i class='uil uil-ban'></i>Não interessado</span>
											<span><i class="uil uil-windsock"></i>Relatório</span>
										 </div>																											
									</div>
									<div class="vdtodt">
										<span class="vdt14">15 Visualizações</span>
										<span class="vdt14">10 Min atrás</span>
									</div>
									<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="crse14s">Build Responsive Real World Websites with HTML5 and CSS3</a>
									<a href="#" class="crse-cate">Desenvolvimento | CSS</a>
									<div class="auth1lnkprce">
										<p class="cr1fot">De <a href="#">John Doe</a></p>
										<div class="prce142">R$4,00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fcrse_1 mb-20">
								<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="fcrse_img">
									<img src="{{ asset('assets/images/courses/img-11.jpg') }}" alt="">
									<div class="course-overlay">
										<span class="play_btn1"><i class="uil uil-play"></i></span>
										<div class="crse_timer">
											28 horas
										</div>
									</div>
								</a>
								<div class="fcrse_content">
									<div class="eps_dots more_dropdown">
										<a href="#"><i class='uil uil-ellipsis-v'></i></a>
										<div class="dropdown-content">
											<span><i class='uil uil-Compartilhar-alt'></i>Compartilhar</span>
											<span><i class="uil uil-clock-three"></i>Assistir depois</span>
											<span><i class='uil uil-ban'></i>Não interessado</span>
											<span><i class="uil uil-windsock"></i>Relatório</span>
										 </div>																										
									</div>
									<div class="vdtodt">
										<span class="vdt14">5 Visualizações</span>
										<span class="vdt14">15 Min atrás</span>
									</div>
									<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="crse14s">The Complete JavaScript Course 2020: Build Real Projects!</a>
									<a href="#" class="crse-cate">Desenvolvimento | JavaScript</a>
									<div class="auth1lnkprce">
										<p class="cr1fot">De <a href="#">Jassica William</a></p>
										<div class="prce142">R$5,00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fcrse_1 mb-20">
								<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="fcrse_img">
									<img src="{{ asset('assets/images/courses/img-18.jpg') }}" alt="">
									<div class="course-overlay">
										<span class="play_btn1"><i class="uil uil-play"></i></span>
										<div class="crse_timer">
											15 horas
										</div>
									</div>
								</a>
								<div class="fcrse_content">
									<div class="eps_dots more_dropdown">
										<a href="#"><i class='uil uil-ellipsis-v'></i></a>
										<div class="dropdown-content">
											<span><i class='uil uil-Compartilhar-alt'></i>Compartilhar</span>
											<span><i class="uil uil-clock-three"></i>Assistir depois</span>
											<span><i class='uil uil-ban'></i>Não interessado</span>
											<span><i class="uil uil-windsock"></i>Relatório</span>
										 </div>																										
									</div>
									<div class="vdtodt">
										<span class="vdt14">25 Visualizações</span>
										<span class="vdt14">2 Horas atrás</span>
									</div>
									<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="crse14s">The Complete Front-End Web Desenvolvimento Course!</a>
									<a href="#" class="crse-cate">Desenvolvimento | Web Desenvolvimento</a>
									<div class="auth1lnkprce">
										<p class="cr1fot">De <a href="#">Joginder Singh</a></p>
										<div class="prce142">R$9,00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fcrse_1 mb-20">
								<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="fcrse_img">
									<img src="{{ asset('assets/images/courses/img-19.jpg') }}" alt="">
									<div class="course-overlay">
										<div class="crse_reVisualizações">
											<i class='uil uil-star'></i>5.0
										</div>
										<span class="play_btn1"><i class="uil uil-play"></i></span>
										<div class="crse_timer">
											1 horas
										</div>
									</div>
								</a>
								<div class="fcrse_content">
									<div class="eps_dots more_dropdown">
										<a href="#"><i class='uil uil-ellipsis-v'></i></a>
										<div class="dropdown-content">
											<span><i class='uil uil-Compartilhar-alt'></i>Compartilhar</span>
											<span><i class="uil uil-clock-three"></i>Assistir depois</span>
											<span><i class='uil uil-ban'></i>Não interessado</span>
											<span><i class="uil uil-windsock"></i>Relatório</span>
										 </div>																										
									</div>
									<div class="vdtodt">
										<span class="vdt14">15 Visualizações</span>
										<span class="vdt14">6 horas ago</span>
									</div>
									<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="crse14s">Ethical Hacking - Most Advanced Level Penetration Testing</a>
									<a href="#" class="crse-cate">IT &amp; Software | Ethical Hacking</a>
									<div class="auth1lnkprce">
										<p class="cr1fot">De <a href="#">Poonam Verma</a></p>
										<div class="prce142">R$10,00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fcrse_1 mb-20">
								<a href="#" class="fcrse_img">
									<img src="{{ asset('assets/images/courses/img-12.jpg') }}" alt="">
									<div class="course-overlay">
										<div class="crse_reVisualizações">
											<i class='uil uil-star'></i>3.5
										</div>
										<span class="play_btn1"><i class="uil uil-play"></i></span>
										<div class="crse_timer">
											28 horas
										</div>
									</div>
								</a>
								<div class="fcrse_content">
									<div class="eps_dots more_dropdown">
										<a href="#"><i class='uil uil-ellipsis-v'></i></a>
										<div class="dropdown-content">
											<span><i class='uil uil-Compartilhar-alt'></i>Compartilhar</span>
											<span><i class="uil uil-clock-three"></i>Assistir depois</span>
											<span><i class='uil uil-ban'></i>Não interessado</span>
											<span><i class="uil uil-windsock"></i>Relatório</span>
										 </div>																											
									</div>
									<div class="vdtodt">
										<span class="vdt14">45 Visualizações</span>
										<span class="vdt14">20 horas ago</span>
									</div>
									<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="crse14s">Advanced CSS and Sass: Flexbox, Grid, Animations and More!</a>
									<a href="#" class="crse-cate">Desenvolvimento | Sass</a>
									<div class="auth1lnkprce">
										<p class="cr1fot">De <a href="#">Rock William</a></p>
										<div class="prce142">R$6,00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fcrse_1 mb-20">
								<a href="#" class="fcrse_img">
									<img src="{{ asset('assets/images/courses/img-13.jpg') }}" alt="">
									<div class="course-overlay">
										<span class="play_btn1"><i class="uil uil-play"></i></span>
										<div class="crse_timer">
											30 horas
										</div>
									</div>
								</a>
								<div class="fcrse_content">
									<div class="eps_dots more_dropdown">
										<a href="#"><i class='uil uil-ellipsis-v'></i></a>
										<div class="dropdown-content">
											<span><i class='uil uil-Compartilhar-alt'></i>Compartilhar</span>
											<span><i class="uil uil-clock-three"></i>Assistir depois</span>
											<span><i class='uil uil-ban'></i>Não interessado</span>
											<span><i class="uil uil-windsock"></i>Relatório</span>
										 </div>																											
									</div>
									<div class="vdtodt">
										<span class="vdt14">20 Visualizações</span>
										<span class="vdt14">1 day ago</span>
									</div>
									<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="crse14s">The Complete Node.js Developer Course (3rd Edition)</a>
									<a href="#" class="crse-cate">Desenvolvimento | Node.js</a>
									<div class="auth1lnkprce">
										<p class="cr1fot">De <a href="#">John Doe</a></p>
										<div class="prce142">R$3,00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fcrse_1 mb-20">
								<a href="#" class="fcrse_img">
									<img src="{{ asset('assets/images/courses/img-20.jpg') }}" alt="">
									<div class="course-overlay">
										<div class="crse_reVisualizações">
											<i class='uil uil-star'></i>5.0
										</div>
										<span class="play_btn1"><i class="uil uil-play"></i></span>
										<div class="crse_timer">
											21 horas
										</div>
									</div>
								</a>
								<div class="fcrse_content">
									<div class="eps_dots more_dropdown">
										<a href="#"><i class='uil uil-ellipsis-v'></i></a>
										<div class="dropdown-content">
											<span><i class='uil uil-Compartilhar-alt'></i>Compartilhar</span>
											<span><i class="uil uil-clock-three"></i>Assistir depois</span>
											<span><i class='uil uil-ban'></i>Não interessado</span>
											<span><i class="uil uil-windsock"></i>Relatório</span>
										 </div>																										
									</div>
									<div class="vdtodt">
										<span class="vdt14">200 Visualizações</span>
										<span class="vdt14">4 dias atrás</span>
									</div>
									<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="crse14s">WordPress Desenvolvimento - Themes, Plugins &amp; Gutenberg</a>
									<a href="#" class="crse-cate">Design | Wordpress</a>
									<div class="auth1lnkprce">
										<p class="cr1fot">De <a href="#">Joy Dua</a></p>
										<div class="prce142">R$14,00</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fcrse_1 mb-20">
								<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="fcrse_img">
									<img src="{{ asset('assets/images/courses/img-16.jpg') }}" alt="">
									<div class="course-overlay">
										<span class="play_btn1"><i class="uil uil-play"></i></span>
										<div class="crse_timer">
											22 horas
										</div>
									</div>
								</a>
								<div class="fcrse_content">
									<div class="eps_dots more_dropdown">
										<a href="#"><i class='uil uil-ellipsis-v'></i></a>
										<div class="dropdown-content">
											<span><i class='uil uil-Compartilhar-alt'></i>Compartilhar</span>
											<span><i class="uil uil-clock-three"></i>Assistir depois</span>
											<span><i class='uil uil-ban'></i>Não interessado</span>
											<span><i class="uil uil-windsock"></i>Relatório</span>
										 </div>																										
									</div>
									<div class="vdtodt">
										<span class="vdt14">11 Visualizações</span>
										<span class="vdt14">5 dias atrás</span>
									</div>
									<a href="{{ route('course-detail', ['id' => '55c3bf0d-dc56-4575-a0ed-0bf89143b1d1']) }}" class="crse14s">Vue JS 2 - The Complete Guide (incl. Vue Router & Vuex)</a>
									<a href="#" class="crse-cate">Desenvolvimento | Vue JS</a>
									<div class="auth1lnkprce">
										<p class="cr1fot">De <a href="#">Manreet Kaur</a></p>
										<div class="prce142">R$10,00</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<h4 class="item_title">Principais Categorias</h4>
			<div class="section3126">
				<div class="row">
					<div class="col-md-3">
						<div class="value_props">
							<div class="value_icon">
								<!-- :<i class='uil uil-history'></i> -->
								<img src="https://img.freepik.com/vetores-gratis/montagem-de-animacao-de-conceito-de-doodle-de-edicao-de-video_107791-13486.jpg?size=626&ext=jpg&ga=GA1.2.225381348.1649557978"
								 alt=""
								 style="width: 17rem;">
							</div>
							<div class="value_content">
								<h4>Design</h4>
								<!-- <p>Enjoy lifetime access to courses on Edututs+'s website</p> -->
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="value_props">
							<div class="value_icon">
								<!-- :<i class='uil uil-user-check'></i> -->
								<img src="https://img.freepik.com/vetores-gratis/ilustracao-em-vetor-conceito-abstrato-de-teste-de-automacao-automacao-de-processo-de-desenvolvimento-de-solucao-de-teste-de-software-otimizacao-de-desenvolvedor-de-site-servico-on-line-barra-de-menu-do-site-metafora-abstrata_335657-6140.jpg?size=338&ext=jpg&ga=GA1.2.225381348.1649557978" 
								alt=""
								style="height: 9rem; width:150px;">
							</div>
							<div class="value_content">
								<h4>Desenvolvimento</h4>
								<!-- <p>Select from top instructors around the world</p> -->
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="value_props">
							<div class="value_icon">
								<!-- <i class='uil uil-play-circle'></i> -->
								<img src="https://img.freepik.com/vetores-gratis/noticias-e-dicas-de-midia-social-ilustracao-vetorial-de-conceito-abstrato-noticias-de-algoritmo-de-marketing-de-midia-social-promovem-dicas-de-engajamento-de-perfil-ultimas-atualizacoes-conselhos-de-conteudo-metafora-abstrata_335657-6216.jpg?size=338&ext=jpg&ga=GA1.2.225381348.1649557978" 
								alt=""
								style="height: 9rem; width:150px;">
							</div>
							<div class="value_content">
								<h4>Marketing</h4>
								<!-- <p>Build your library for your career and personal growth</p> -->
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="value_props">
							<div class="value_icon">
								<!-- <i class='uil uil-presentation-play'></i> -->
								<img src="https://img.freepik.com/vetores-gratis/ilustracao-em-vetor-conceito-abstrato-de-oficina-de-codificacao-workshop-de-escrita-de-codigo-curso-de-programacao-on-line-app-e-desenvolvimento-de-jogos-aula-de-informatica-licao-de-desenvolvimento-de-software-metafora-abstrata_335657-5880.jpg?size=338&ext=jpg&ga=GA1.2.225381348.1649557978" 
								alt=""
								style="width: 150px; height:9rem;">
							</div>
							<div class="value_content">
								<h4>TI e Software</h4>
								<!-- <p>Explore a variety of fresh topics</p> -->
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="value_props">
							<div class="value_icon">
								<!-- <i class='uil uil-presentation-play'></i> -->
								<img src="https://img.freepik.com/vetores-gratis/conceito-de-desenho-animado-de-autocuidado-desenhado-a-mao-de-vetor-de-estilo-de-vida-saudavel_53876-126603.jpg?size=626&ext=jpg&ga=GA1.2.225381348.1649557978" 
								alt=""
								style="width: 150px; height:9rem;">
							</div>
							<div class="value_content">
								<h4>Desenvolvimento Pessoal</h4>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="value_props">
							<div class="value_icon">
								<!-- <i class='uil uil-presentation-play'></i> -->
								<img src="https://img.freepik.com/vetores-gratis/ilustracao-em-vetor-conceito-abstrato-cultura-no-local-de-trabalho-valores-compartilhados-sistemas-de-crenca-atitude-no-trabalho-equipe-da-empresa-cultura-corporativa-metafora-abstrata-de-saude-do-empregado-de-alto-desempenho_335657-6126.jpg?size=338&ext=jpg&ga=GA1.2.225381348.1649557978" 
								alt=""
								style="height: 9rem;">
							</div>
							<div class="value_content">
								<h4>Negócios</h4>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="value_props">
							<div class="value_icon">
								<!-- <i class='uil uil-presentation-play'></i> -->
								<img src="https://img.freepik.com/vetores-gratis/camera_1308-84380.jpg?w=826&t=st=1660671318~exp=1660671918~hmac=9399c5f22a4261d2392368986f409c339661231d04589039b6a6d43c4ac7e582" 
								alt=""
								style="height: 9rem;">
							</div>
							<div class="value_content">
								<h4>Fotografia</h4>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="value_props">
							<div class="value_icon">
								<!-- <i class='uil uil-presentation-play'></i> -->
								<img src="https://img.freepik.com/vetores-gratis/um-saxofone-com-notas-musicais-em-fundo-branco_1308-91530.jpg?size=626&ext=jpg&ga=GA1.2.225381348.1649557978" 
								alt=""
								style="height: 9rem; width:280px;">
							</div>
							<div class="value_content">
								<h4>Música</h4>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<div class="section3125 mt-50">
				<h4 class="item_title">Instrutores Populares</h4>
				
				<a href="all_instructor.html" class="see150">Ver todos</a>
				<a href="#" class="btn1542">Ensine na Influenciou</a>
				<div class="la5lo1">
					<div class="owl-carousel featured_courses owl-theme">
						<div class="item">
							<div class="fcrse_1 mb-20">
								<div class="tutor_img">
									<a href="instructor_profile_view.html"><img src="{{ asset('assets/images/left-imgs/img-1.jpg') }}" alt=""></a>												
								</div>
								<div class="tutor_content_dt">
									<div class="tutor150">
										<a href="instructor_profile_view.html" class="tutor_name">John Doe</a>
										<div class="mef78" title="Verify">
											<i class="uil uil-check-circle"></i>
										</div>
									</div>
									<div class="tutor_cate">Wordpress &amp; Plugin Tutor</div>
									<ul class="tutor_social_links">
										<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
									</ul>
									<div class="tut1250">
										<span class="vdt15">100K Estudantes</span>
										<span class="vdt15">15 Cursos</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fcrse_1 mb-20">
								<div class="tutor_img">
									<a href="instructor_profile_view.html"><img src="{{ asset('assets/images/left-imgs/img-2.jpg') }}" alt=""></a>											
								</div>
								<div class="tutor_content_dt">
									<div class="tutor150">
										<a href="instructor_profile_view.html" class="tutor_name">Kerstin Cable</a>
										<div class="mef78" title="Verify">
											<i class="uil uil-check-circle"></i>
										</div>
									</div>
									<div class="tutor_cate">Coach de Aprendizagem de Idiomas, Escritor, Tutor Online</div>
									<ul class="tutor_social_links">
										<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
									</ul>
									<div class="tut1250">
										<span class="vdt15">14K Estudantes</span>
										<span class="vdt15">11 Cursos</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fcrse_1 mb-20">
								<div class="tutor_img">
									<a href="instructor_profile_view.html"><img src="{{ asset('assets/images/left-imgs/img-3.jpg') }}" alt=""></a>												
								</div>
								<div class="tutor_content_dt">
									<div class="tutor150">
										<a href="instructor_profile_view.html" class="tutor_name">Jose Portilla</a>
										<div class="mef78" title="Verify">
											<i class="uil uil-check-circle"></i>
										</div>
									</div>
									<div class="tutor_cate">Chefe de Ciência de Dados, Pierian Data Inc.</div>
									<ul class="tutor_social_links">
										<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
									</ul>
									<div class="tut1250">
										<span class="vdt15">1M Estudantes</span>
										<span class="vdt15">25 Cursos</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fcrse_1 mb-20">
								<div class="tutor_img">
									<a href="instructor_profile_view.html"><img src="{{ asset('assets/images/left-imgs/img-4.jpg') }}" alt=""></a>											
								</div>
								<div class="tutor_content_dt">
									<div class="tutor150">
										<a href="instructor_profile_view.html" class="tutor_name">Farhat Amin</a>
										<div class="mef78" title="Verify">
											<i class="uil uil-check-circle"></i>
										</div>
									</div>
									<div class="tutor_cate">Cookery Coach</div>
									<ul class="tutor_social_links">
										<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
									</ul>
									<div class="tut1250">
										<span class="vdt15">1.5K Estudantes</span>
										<span class="vdt15">9 Cursos</span>
									</div>
								</div>
							</div>
						</div>									
						<div class="item">
							<div class="fcrse_1 mb-20">
								<div class="tutor_img">
									<a href="instructor_profile_view.html"><img src="{{ asset('assets/images/left-imgs/img-5.jpg') }}" alt=""></a>												
								</div>
								<div class="tutor_content_dt">
									<div class="tutor150">
										<a href="instructor_profile_view.html" class="tutor_name">Kyle Pew</a>
										<div class="mef78" title="Verify">
											<i class="uil uil-check-circle"></i>
										</div>
									</div>
									<div class="tutor_cate">Microsoft Certified Trainer - 380,000+ Udemy Students</div>
									<ul class="tutor_social_links">
										<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
									</ul>
									<div class="tut1250">
										<span class="vdt15">300K Estudantes</span>
										<span class="vdt15">18 Cursos</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fcrse_1 mb-20">
								<div class="tutor_img">
									<a href="instructor_profile_view.html"><img src="{{ asset('assets/images/left-imgs/img-7.jpg') }}" alt=""></a>												
								</div>
								<div class="tutor_content_dt">
									<div class="tutor150">
										<a href="instructor_profile_view.html" class="tutor_name">Jaysen Batchelor</a>
										<div class="mef78" title="Verify">
											<i class="uil uil-check-circle"></i>
										</div>
									</div>
									<div class="tutor_cate">Illustrator &amp; Designer</div>
									<ul class="tutor_social_links">
										<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
									</ul>
									<div class="tut1250">
										<span class="vdt15">491K Estudantes</span>
										<span class="vdt15">13 Cursos</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fcrse_1 mb-20">
								<div class="tutor_img">
									<a href="instructor_profile_view.html"><img src="{{ asset('assets/images/left-imgs/img-8.jpg') }}" alt=""></a>												
								</div>
								<div class="tutor_content_dt">
									<div class="tutor150">
										<a href="instructor_profile_view.html" class="tutor_name">Quinton Batchelor</a>
										<div class="mef78" title="Verify">
											<i class="uil uil-check-circle"></i>
										</div>
									</div>
									<div class="tutor_cate">Photographer & Instructor</div>
									<ul class="tutor_social_links">
										<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
									</ul>
									<div class="tut1250">
										<span class="vdt15">364K Estudantes</span>
										<span class="vdt15">6 Cursos</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fcrse_1 mb-20">
								<div class="tutor_img">
									<a href="instructor_profile_view.html"><img src="{{ asset('assets/images/left-imgs/img-6.jpg') }}" alt=""></a>												
								</div>
								<div class="tutor_content_dt">
									<div class="tutor150">
										<a href="instructor_profile_view.html" class="tutor_name">Eli Natoli</a>
										<div class="mef78" title="Verify">
											<i class="uil uil-check-circle"></i>
										</div>
									</div>
									<div class="tutor_cate">Entrepreneur - Passionate Teacher</div>
									<ul class="tutor_social_links">
										<li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
									</ul>
									<div class="tut1250">
										<span class="vdt15">615K Estudantes</span>
										<span class="vdt15">12 Cursos</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>

		<div class="col-xl-12 col-lg-12">
			<div class="section3125 mt-30">
				<h4 class="item_title">O que nosso aluno tem hoje</h4>
				<div class="la5lo1">
					<div class="owl-carousel Student_says owl-theme">
						<div class="item">
							<div class="fcrse_4 mb-20">
								<div class="say_content">
									<p>"Donec ac ex eu arcu euismod feugiat. In venenatis bibendum nisi, in placerat eros ultricies vitae. Praesent pellentesque blandit scelerisque. Suspendisse potenti."</p>
								</div>
								<div class="st_group">
									<div class="stud_img">
										<img src="{{ asset('assets/images/left-imgs/img-4.jpg') }}" alt="">												
									</div>
									<h4>Jassica William</h4>
								</div>											
							</div>
						</div>
						<div class="item">
							<div class="fcrse_4 mb-20">
								<div class="say_content">
									<p>"Cras id enim lectus. Fusce at arcu tincidunt, iaculis libero quis, vulputate mauris. Morbi facilisis vitae ligula id aliquam. Nunc consectetur malesuada bibendum."</p>
								</div>
								<div class="st_group">
									<div class="stud_img">
										<img src="{{ asset('assets/images/left-imgs/img-1.jpg') }}" alt="">												
									</div>
									<h4>Rock Smith</h4>
								</div>											
							</div>
						</div>
						<div class="item">
							<div class="fcrse_4 mb-20">
								<div class="say_content">
									<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos."</p>
								</div>
								<div class="st_group">
									<div class="stud_img">
										<img src="{{ asset('assets/images/left-imgs/img-7.jpg') }}" alt="">												
									</div>
									<h4>Luoci Marchant</h4>
								</div>											
							</div>
						</div>
						<div class="item">
							<div class="fcrse_4 mb-20">
								<div class="say_content">
									<p>"Nulla bibendum lectus pharetra, tempus eros ac, sagittis orci. Suspendisse posuere dolor neque, at finibus mauris lobortis in.  Pellentesque vitae laoreet tortor."</p>
								</div>
								<div class="st_group">
									<div class="stud_img">
										<img src="{{ asset('assets/images/left-imgs/img-6.jpg') }}" alt="">												
									</div>
									<h4>Poonam Sharma</h4>
								</div>											
							</div>
						</div>
						<div class="item">
							<div class="fcrse_4 mb-20">
								<div class="say_content">
									<p>"Curabitur placerat justo ac mauris condimentum ultricies. In magna tellus, eleifend et volutpat id, sagittis vitae est.  Pellentesque vitae laoreet tortor."</p>
								</div>
								<div class="st_group">
									<div class="stud_img">
										<img src="{{ asset('assets/images/left-imgs/img-3.jpg') }}" alt="">												
									</div>
									<h4>Davinder Singh</h4>
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
@endsection