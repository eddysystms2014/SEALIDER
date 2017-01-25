
<?php
require_once('../lib/nusoap.php');
$cliente = new nusoap_client("http://sealiderd2.net23.net/sealider/notas/consultarnotas.php",false);
$cedula=$_POST['cedula'];

$parametros= array('cedula'=>$cedula);
$respuesta=$cliente->call('MetodoConsultar',$parametros);


$resultado=array();
foreach ($respuesta as $key => $value) {
	array_push($resultado, json_decode($value,true));
}

session_start();
$_SESSION['Resultado']=$resultado;

header("Location: ./resultadonotas.php");

?>
