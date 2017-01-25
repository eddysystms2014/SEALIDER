<?php

require_once '../login/login.class.php';
//accedemos al método singleton que es quién crea la instancia
//de nuestra clase y así podemos acceder sin necesidad de
//crear nuevas instancias, lo que ahorra consumo de recursos
$nuevoSingleton = Login::singleton_login();
 
if(isset($_POST['usuario']))
{
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $tipo = $_POST['tipo'];
    //accedemos al método usuarios y los mostramos
    $usuarios = $nuevoSingleton->login_users($usuario,$contrasena,$tipo);
    
    if($usuarios == TRUE and $tipo=="Administrador")
    {
        header('Location: ../administrador.php');
    }
    if($usuarios == TRUE and $tipo=="Docente")
    {
        header("Location: ../docente.php");
    }
    if($usuarios == TRUE and $tipo=="Estudiante")
    {
        header('Location: ../estudiante.php');
    }
    if($usuarios == FALSE)
    {
    	header("Location: ../index.php?error");
    }
}
?>