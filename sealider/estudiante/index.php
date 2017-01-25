<?php session_start(); ?>
<?php if(isset($_SESSION['USUARIO']))
{
}else{ header("Location: ../index.php");}?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sistema SEALIDER - Bienvenid@ <?php echo $_SESSION['USUARIO'] ?></title>
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
        <link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="../css/icomoon.css">
	<!-- Themify Icons-->
        <link rel="stylesheet" href="../css/themify-icons.css">
	<!-- Bootstrap  -->
        <link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Magnific Popup -->
        <link rel="stylesheet" href="../css/magnific-popup.css">

	<!-- Owl Carousel  -->
        <link rel="stylesheet" href="../css/owl.carousel.min.css">
        <link rel="stylesheet" href="../css/owl.theme.default.min.css">

	<!-- Theme style  -->
        <link rel="stylesheet" href="../css/style.css">

	<!-- Modernizr JS -->
        <script src="../js/modernizr-2.6.2.min.js"></script>
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
                                    <div id="gtco-logo"><a href="../administrador.php">INICIO</a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li class="btn-cta"><a href="../logout.php"><span>Cerrar Sesi&oacute;n [<?php echo $_SESSION['USUARIO']; ?>]</span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(../images/banner-bg2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">SISTEMA DE CONTROL DE NOTAS SEA LIDER</span>
							<h1>Bienvenidos</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-7 col-md-offset-2 animate-box">
					<h3>Control de Estudiantes</h3>
					<form class="form-horizontal" action="../controller/controllerEst.php">
					<div class="form-group">
						<label class="control-label col-sm-4">C&Eacute;DULA:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" pattern="[0-9]{10}" maxlength="10" name="ced_estudiante" required>	
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4">NOMBRE Y APELLIDO:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" pattern="[a-zA-Z\s]*" name="nombre_apellido" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4">EMAIL:</label>
						<div class="col-sm-8">
							<input type="email" class="form-control" name="email">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4">NRO. TEL&Eacute;FONO:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" pattern="[0-9]*" maxlength="10" name="nrotelf">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4">CONGREGACI&Oacute;N</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" pattern="[a-zA-Z\s]*" name="congregacion" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4">CARGO</label>
						<div class="col-sm-8">
							<select class="form-control" name="cargo">
								<option>Presidente</option>
								<option>Vice Presidente</option>
								<option>Secretario</option>
								<option>Tesorero</option>
								<option>Vocal</option>
								<option>Encargado</option>
      						</select>
						</div>
					</div>
					<div class="form-group">
						<input type="hidden" name="op" value="insertar">
						<input type="submit" class="btn btn-primary col-md-offset-5" value="INGRESAR">
					</div>
					</form>
                                        <?php
                                        if (isset($_GET['resultado'])) {
                                            echo '
                                                <div class="alert alert-info">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <strong>REALIZADO</strong>
                                                <p><i>Acci&oacute;n realizada correctamente.</i></p>
                                                </div>';
                                        }
                                        if (isset($_GET['error'])) {
                                            echo '
                                                <div class="alert alert-danger">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <strong>ERROR</strong>
                                                <p><i>Ha ocurrido algo inesperado.</i></p>
                                                </div>';
                                        }
                                        ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="gtco-container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-12 animate-box">
				<form action="../controller/controllerEst.php">
            		<input type="hidden" name="op" value="listar">
            		<input type="submit" value="LISTAR" class="btn btn-primary">
        		</form>
        		<div class="table-responsive">
        		<table class="table" width="100%" style="background-color: white;">
            	<tr>
                	<th>CEDULA</th>
                	<th>NOMBRE APELLIDO</th>
               		<th>EMAIL</th>
                	<th>NRO. TELF.</th>
                	<th>CONGREGACION</th>
                	<th>CARGO</th>
                	<th>ELIMINAR</th>
                	<th>ACTUALIZAR</th>
            	</tr>
            	<?php
            	include_once '../model/Estudiantes.php';
            	if (isset($_SESSION['listado'])) {
                $listado = unserialize($_SESSION['listado']);
                foreach ($listado as $est) {
                   	echo "<tr>";
                   	echo "<td>" . $est->getCED_ESTUDIANTE() . "</td>";
                   	echo "<td>" . $est->getNOMBRE_APELLIDO() . "</td>";
                   	echo "<td>" . $est->getEMAIL() . "</td>";
                   	echo "<td>" . $est->getNROTELF() . "</td>";
                   	echo "<td>" . $est->getCONGREGACION() . "</td>";
                   	echo "<td>" . $est->getCARGO() . "</td>";
                   	echo "<td class='warning'><a href='delete.php?op=eliminar&ced_estudiante=" . $est->getCED_ESTUDIANTE() . "'><img src='../images/eliminarest.png' style='width:2em;height:2em'></a></td>";
                   	echo "<td class='active'><a href='../controller/controllerEst.php?op=editar&ced_estudiante=".$est->getCED_ESTUDIANTE()."'><img src='../images/actualizarest.png' style='width:2em;height:2em'></a></td>";
                   	echo "</tr>";
               		}
            	} else {
                	echo "No se han cargado los datos.";
            	}
            	?>
        		</table>
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
        <script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
        <script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
        <script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
        <script src="../js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
        <script src="../js/owl.carousel.min.js"></script>
	<!-- countTo -->
        <script src="../js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
        <script src="../js/jquery.magnific-popup.min.js"></script>
        <script src="../js/magnific-popup-options.js"></script>
	<!-- Main -->
        <script src="../js/main.js"></script>

	</body>
</html>

