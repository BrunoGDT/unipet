<?php
require_once 'classes/user.php';
require_once 'classes/connection.php';
require_once 'classes/Consultation.php';

$user = new User;
$con = new Connection;
$consul = new Consultation;
	$_SESSION['logado'] = 'nao';
	session_start();
	if(isset($_POST['marcar'])){
		if($_SESSION['logado'] == 'sim'){
			$ID = $_SESSION['ID'];
			$consulta = $consul->cadastrar($_POST);
			if($consulta =='horario'){
				echo "<script>alert('Horario indisponivel');</script>";
			}elseif($consulta == 'ok'){
				echo "<script>alert('Consulta marcada com sucesso');location.href='perfil.php?$ID';</script>";
			}
			else{
				echo "<script>alert('Erro ao realizar consulta');</script>";
			}

			}
		}

	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Petvet - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">
	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
	<div class="wrap">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-12 col-md d-flex align-items-center">
					<p class="mb-0 phone"><span class="mailus">Telefone :</span> <a href="#">(11) 4002-8922</a>  <span class="mailus">E-mail:</span> <a href="#">contato@unipet.com.br</a></p>
				</div>
				<div class="col-12 col-md d-flex justify-content-md-end">
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
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand d-flex align-items-center" href="index.php"><span class="flaticon flaticon-stethoscope"></span><h1>UniPet<span class="mini">Clínica veterinária</span></h1></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="site-navigation collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.php" class="nav-link">Ínicio</a></li>
					<li class="nav-item"><a href="#make-section" class="nav-link">sobre</a></li>
					<li class="nav-item"><a href="#services-section" class="nav-link">serviços</a></li>
					<li class="nav-item"><a href="<?php if(isset($_SESSION['logado'])){
						$id = $_SESSION['ID'];
						echo 'perfil.php?id='.$_SESSION['ID'];
					}else{echo 'login.php';
						}?>" class="nav-link">Ver suas consultas</a></li>


					<li class="nav-item cta"><a href="<?php if(isset($_SESSION['logado'])){
						$id = $_SESSION['ID'];
						echo 'perfil.php?id='.$_SESSION['ID'];
					}else{echo 'login.php';
						}?>" class="nav-link"><?=$_SESSION['nome'] ?? 'Fazer login'?></a></li>
						
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	
	<section class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg'); height: 754px !important;" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
				<div class="col-lg-6 pt-md-5 ftco-animate">
					<div class="mt-5">
						<h1 class="mb-4">Unipet</h1>
						<p class="mb-4">O tipo de cuidado que todoo animal de estimação merece</p>
						<p><a href="#consultation-section" class="btn btn-primary py-3 px-4">marque uma consulta</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light ftco-no-pt intro" id="services-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 d-flex align-self-stretch">
					<div class="d-block services d-flex justify-content-between">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-stethoscope"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Serviço veterinario</h3>
							<p class="mb-0">O cuidado com a saúde do seu pet não deve ocorrer apenas quando ele fica doente.</p>
							<!-- <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a> -->
						</div>
					</div>      
				</div>
				<div class="col-md-4 d-flex align-self-stretch">
					<div class="d-block services d-flex justify-content-between">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-pet"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Banho e tosa</h3>
							<p class="mb-0">O banho e tosa é responsável pelo bem-estar de seu animal, bem como a preservação de sua saúde e de todas as pessoas ao seu redor. </p>
							<!-- <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a> -->
						</div>
					</div>    
				</div>
				<div class="col-md-4 d-flex align-self-stretch">
					<div class="d-block services d-flex justify-content-between">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-cat"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Adestramento</h3>
							<p class="mb-0">Atendimentos presenciais, atendimentos online, socialização com outros pets / crianças / outras pessoas.</p>
							<!-- <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a> -->
						</div>
					</div>      
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb bg-light" id="make-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 col-lg-5 d-flex">
					<div class="img w-100 d-flex align-self-stretch align-items-center" style="background-image:url(images/about.jpg);">
					</div>
				</div>
				<div class="col-md-6 col-lg-7 pl-lg-5">
					<div class="py-md-4">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
								<span class="subheading">Bem-vindo ao Unipet</span>
								<h2 class="mb-4">Somos a melhor opção <br> para o seu pet</h2>
								<p>A Unipet possui ambiente familiar, onde você pode tomar um café, bater um papo e estreitar os laços com a nossa equipe. Queremos estar bem próximos de cada paciente, fazer parte da família e comemorar cada vitória.
Estamos em constante aprimoramento a fim de oferecer atendimento diferenciado e qualificado.</p>
								<ul class="list-services">
									<li class="d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
										<p>Serviço de qualidade</p>
									</li>
									<li class="d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
										<p>Mais de 20 anos de experiência</p>
									</li>
									<li class="d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
										<p>Amantes de animais</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 site-section" id='consultation-section'>
		<div class="container">
			<div class="row">
				<div class="col-md-12 py-5 text-center">
					<h3 class="appointment-heading">Faça uma consulta</h3>
					<div class="appointment-wrap d-flex align-items-center">
						<form action="" method="post" class="appointment-form ftco-animate">
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<input type="hidden" name="ID" value="<?=$_SESSION['ID'] ?? '' ?>">
										<input type="text" class="form-control" name="nome" value="<?=$_SESSION['nome'] ?? '' ?>" placeholder="Seu nome" readonly>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" value="<?=$_SESSION['petnome'] ?? '' ?>" placeholder="Nome de seu pet" readonly>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<div class="form-field">
											<div class="select-wrap">
												<div class="icon"><span class="fa fa-chevron-down"></span></div>
												<select name="servico" id="" class="form-control">
													<option value="Serviço veterinário">Serviço veterinário</option>
													<option value="Serviço  de banho">Serviço  de banho</option>
													<option value="Serviço de tosa">Serviço de tosa</option>
													<option value="Vacinação">Vacinação</option>
													<option value="Adestração">Adestração</option>
													<option value="Outros serviços">Outros serviços(especifique)</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="tel" placeholder="Telefone/celular" value="<?=$_POST['tel'] ?? ''?>">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<div class="input-wrap">
											<div class="icon"><span class="fa fa-calendar"></span></div>
											<input type="text" class="form-control appointment_date" name="data" placeholder="Data" min="<?=date('Y-m-d')?>" required>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<div class="input-wrap">
											<div class="icon"><span class="fa fa-clock-o"></span></div>
											<input type="text" class="form-control appointment_time" name="horario" placeholder="Horario" value="<?=$_POST['horario'] ?? ''?>" required>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<textarea class="form-control" name="mensagem" id="mensagem" cols="30" rows="2" placeholder="Mensagem" ><?=$_POST['mensagem'] ?? ''?></textarea>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
									<?php if(!$_SESSION){ ?>
										<a href="login.php" class="btn btn-secondary py-3 px-4" >Fazer login</a><?php } else{ ?>
										<input type="submit" class="btn btn-secondary py-3 px-4" name="marcar" value="Marcar Consulta"><?php } ?>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>




	<footer class="ftco-footer">
		<div class="container mb-5 pb-4">
			<div class="row">
				<div class="col-lg col-md-6">
					<div class="ftco-footer-widget">
						<h2 class="logo d-flex align-items-center">
							<a href="#" class="d-flex align-items-center">
								<div class="icon"><span class="flaticon-stethoscope flaticon"></span></div>
								<div class="logo1">
									<span>UniPet</span>
									<span class="sub">Clínica veterinária</span>
								</div>
							</a>
						</h2>
						<p>O tipo de cuidado que todoo animal de estimação merece.</p>
						<ul class="ftco-footer-social list-unstyled mt-4">
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg col-md-6">
					<div class="ftco-footer-widget">
						<h2 class="ftco-heading-2">Serviços</h2>
						<ul class="list-unstyled">
							<li><a><span class="fa fa-chevron-right mr-2"></span>Serviço veterinário</a></li>
							<li><a><span class="fa fa-chevron-right mr-2"></span>Serviço  de banho</a></li>
							<li><a ><span class="fa fa-chevron-right mr-2"></span>Serviço de tosa</a></li>
							<li><a><span class="fa fa-chevron-right mr-2"></span>Vacinação</a></li>
							<li><a><span class="fa fa-chevron-right mr-2"></span>Adestração</a></li>
							<li><a><span class="fa fa-chevron-right mr-2"></span>Outros serviços</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2 col-md-6">
					<div class="ftco-footer-widget">
						<h2 class="ftco-heading-2">Links</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Ínicio</a></li>
							<li><a href="#about-section"><span class="fa fa-chevron-right mr-2"></span>Sobre</a></li>
					</div>
				</div>

				<div class="col-lg col-md-6">
					<div class="ftco-footer-widget">
						<h2 class="ftco-heading-2">Alguma duvida?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="fa fa-map-marker mr-3"></span><span class="text">Rua Guaranésia, 425 - Vila Maria, São Paulo - SP, 02112-000</span></li>
								<li><a href="tel:11 40028922"><span class="fa fa-phone mr-3"></span><span class="text">11 40028922</span></a></li>
								<li><a href="mailto:contato@unipet.com.br"><span class="fa fa-paper-plane mr-3"></span><span class="text">contato@unipet.com.br</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg-primary py-5">
			<div class="row">
				<div class="col-md-12 text-center">
					
					<p class="mb-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</div>
		</footer>
		
		

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/jquery.timepicker.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="js/google-map.js"></script>
		
		<script src="js/main.js"></script>
		
	</body>
	</html>