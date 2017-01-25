<?php
include_once '../model/Notas.php';
include_once '../model/notaModel.php';
session_start();
?>
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
    <?php
        $nota = unserialize($_SESSION['nota']);
    ?>
    <div class="gtco-loader"></div>
    
    <div id="page">

    
    <div class="page-inner">
    
    <div class="gtco-section border-bottom">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-7 col-md-offset-2 animate-box">
                    <h3>Control de Notas</h3>
                    <form class="form-horizontal" action="../controller/controllerNotIns.php">
                    <div class="form-group">
                        <label class="control-label col-sm-4">ID:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="id"  value="<?php echo $nota->getID(); ?>" readonly="readonly" required>  
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">ESTUDIANTE:</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="ced_estudiante"  value="<?php echo $nota->getCED_ESTUDIANTE(); ?>" readonly="readonly" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">MATERIA:</label>
                        <div class="col-sm-8">
                        <select class="form-control" name="id_materia">
                        <option value="0">--Seleccionar--</option>
                        <?php
                        //include_once '../model/Database.php';
                        //$pdo =  Database::connect();
                        $pdo = new mysqli('localhost', 'root', '', 'sealider');
                        $query = $pdo->query("SELECT * FROM materias");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores[ID_MATERIA].'">'.$valores[DESCRIPCION].'</option>';
                            }?>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">TRIMESTRE:</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="trimestre">
                            <option value="0">--Seleccionar--</option>
                            <option>I</option>
                            <option>II</option>
                            <option>III</option>
                            <option selected>IV</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">NOTA 1 (Asistencia):</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" maxlength="2" pattern="[0-9]+" value="<?php echo $nota->getNOTA1(); ?>" name="nota1" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">NOTA 2 (Trabajos en Clase):</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" maxlength="2" pattern="[0-9]+" value="<?php echo $nota->getNOTA2(); ?>" name="nota2" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">NOTA 3 (Evaluaci&oacute;n a Distancia):</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" maxlength="2" pattern="[0-9]+" value="<?php echo $nota->getNOTA3(); ?>" name="nota3" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">NOTA 4 (Evaluaci&oacute;n Presencial):</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" maxlength="2" pattern="[0-9]+" value="<?php echo $nota->getNOTA4(); ?>" name="nota4" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="op" value="actualizarins">
                        <input type="submit" class="btn btn-primary col-md-offset-3" value="ACTUALIZAR">
                        <input type="submit" href="indexins.php" class="btn btn-primary col-md-offset-1" value="CANCELAR">
                    </div>
                    </form>     
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