<?php
require_once 'classes/user.php';
require_once 'classes/connection.php';
require_once 'classes/Consultation.php';

$user = new User;
$con = new Connection;
$consul = new Consultation;

  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Suas consultas</title>
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
			<a class="navbar-brand d-flex align-items-center" href="index.php"><span class="flaticon flaticon-stethoscope"></span><h1>UniPet<span class="mini">Petshop</span></h1></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="site-navigation collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">Ínicio</a></li>
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

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Início <i class="fa fa-chevron-right"></i></a></span> <span>Suas consultas <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-3 bread">Suas consultas</h1>
     </div>
   </div>
 </div>
</section>


<section class="ftco-section bg-light">
  <div class="container">
    <div class="row d-flex">
      <?php
$result = $consul->mostrar($_SESSION['ID']);
while($row = mysqli_fetch_assoc($result)){

?>
      <div class="col-lg-4 ftco-animate">
        <div class="blog-entry">
          <div class="desc">
           <div class="d-flex">
            <div class="meta pt-1 text-right pr-4">
             <div><a href="#"><span class="fa fa-calendar mr-2"></span><?=$row['data']?></a></div>
             <div><a href="#"><span class="far fa-clock mr-2"></span><?=$row['horario']?></a></div>
           </div>
           <div class="text d-block">
             <h3 class="heading"><a href="#"><?=$row['servico']?></a></h3>
             <p><?=$row['mensagem']?></p>
            <p><a href="blog.html" class="btn btn-primary py-2 px-3">Alterar</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php

}
?>
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
							<li><a href="index.php"><span class="fa fa-chevron-right mr-2"></span>Ínicio</a></li>
							<li><a href="index.php#about-section"><span class="fa fa-chevron-right mr-2"></span>Sobre</a></li>
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