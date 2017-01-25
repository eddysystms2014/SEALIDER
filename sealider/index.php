<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sistema SEALIDER</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Sistema SEA LIDER Distrito 2" />
	<meta name="keywords" content="ieanjesus, embajadores apostolicos, sealider, sistema sealider, ieanjesusd2, embajadores apostolicos d2, sistema notas d2" />
	<meta name="author" content="Edison Fueres" />
	 <!-- 
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
        <link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
        <link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
        <link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
        <link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="../js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<div class="page-inner">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.php">INICIO</a></div>
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(images/dead2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">SISTEMA DE CONTROL DE NOTAS SEA LIDER</span>
							<h1>Bienvenidos</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<ul class="tab-menu">
										<li class="active gtco-first"><a href="#" data-tab="signup">Registrarse</a></li>
										<li class="gtco-second"><a href="#" data-tab="login">Acceso</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<form class="form-horizontal" action="controller/controllerUs.php">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="usuario">Usuario*</label>
														<input type="text" class="form-control" placeholder="Ingrese nro. de c&eacute;dula" name="usuario" maxlength="10" pattern="[0-9]{10}" required>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="contrasena">Contrase&ntilde;a*</label>
														<input type="password" class="form-control" placeholder="Ingrese contrase&ntilde;a" name="contrasena" required>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="tipo">Tipo*</label>
														<select class="form-control" title="Seleccione" name="tipo">
															<option disabled>Administrador</option>
															<option disabled>Docente</option>
															<option selected>Estudiante</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="tipo">Estado</label>
														<select class="form-control" title="Seleccione" name="estado">
															<option selected>Habilitado</option>
															<option disabled>Deshabilitado</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
                                                                                                    <?php
                                                                                                    if (isset($_GET['resultado'])) {
                                                                                                        echo '
                                                                                                            <div class="alert alert-info">
                                                                                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                                                            <strong>REALIZADO</strong>
                                                                                                            <p><i>Acci&oacute;n realizada correctamente.</i></p>
                                                                                                            </div>';
                                                                                                        
                                                                                                    } else {
                                                                                                                echo '';
                                                                                                    }
												?>
                                                                                                    <div class="col-md-12">
													<input type="hidden" name="op" value="insertarprincipal">
													<input type="submit" class="btn btn-primary" value="Registrar">
                                                                                                    </div>
												</div>
											</form>	
										</div>

										<div class="tab-content-inner" data-content="login">
                                                                                    <form method="POST" action="login/login.php">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="usuario">Usuario*</label>
														<input type="text" class="form-control" placeholder="Ingrese nro. de c&eacute;dula" name="usuario" maxlength="10" pattern="[0-9]{10}" required>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">Contrase&ntilde;a*</label>
														<input type="password" class="form-control" placeholder="Ingrese contrase&ntilde;a" name="contrasena" required>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="tipo">Tipo*</label>
														<select class="form-control" data-style="btn-info" name="tipo">
															<option>Administrador</option>
															<option>Docente</option>
															<option selected>Estudiante</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
												<?php
												if (isset($_GET['error'])) {
													echo '
														<div class="alert alert-danger">
														<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
														<strong>ERROR</strong>
														<p><i>Revise su informaci&oacute;n y vuelva a intentarlo.</i></p>
														</div>';
													} else {
														echo '';
													}
												?>
												<div class="col-md-12">
														<input type="submit" class="btn btn-primary" value="Acceder">
												</div>
												</div>
											</form>	
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>

	<div id="gtco-products">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Embajadores Apost&oacute;licos Distrito 2</h2>
					<p>El Comit&eacute; de Distrital de Embajadores Apost&oacute;licos del Distrito 2 da la m&aacute;s cordial Bienvenida al Sistema de Control de Notas SEA LIDER.</p>
				</div>
			</div>
			<div class="row">
				<div class="owl-carousel owl-carousel-carousel">
					<div class="item">
						<a href="#"><img src="images/img_1.jpg" alt="Presidente"></a>
					</div>
					<div class="item">
						<a href="#"><img src="images/img_2.jpg" alt="Secretario"></a>
					</div>
					<div class="item">
						<a href="#"><img src="images/img_3.jpg" alt="Admin Financiero"></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">Embajadores Apost&oacute;licos Distrito 2</a></small>
						<small class="block">&copy; Copyright 2016. Todos los derechos reservados.</small> 
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>
	</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

