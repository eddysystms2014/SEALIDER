<?php

include_once '../model/estudianteModel.php';
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$estModel = new estudianteModel();
$op = $_REQUEST['op'];

switch ($op) {
    case 'listar':
        $listado = $estModel->getEstudiantes();
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../estudiante/index.php");
        break;
    
    case 'insertar':
        $ced_estudiante = $_REQUEST['ced_estudiante'];
        $nombre_apellido = $_REQUEST['nombre_apellido'];
        $email = $_REQUEST['email'];
        $nrotelf = $_REQUEST['nrotelf'];
        $congregacion = $_REQUEST['congregacion'];
        $cargo = $_REQUEST['cargo'];
        $estModel->insertar($ced_estudiante, $nombre_apellido, $email, $nrotelf, $congregacion, $cargo);
        $listado = $estModel->getEstudiantes();
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../estudiante/index.php?resultado");
        break;
    
    case 'eliminar':
        $ced_estudiante = $_REQUEST['ced_estudiante'];
        $estModel->eliminar($ced_estudiante);
        $listado = $estModel->getEstudiantes();
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../estudiante/index.php?resultado");
        break;
    
    case 'actualizar':
        $ced_estudiante = $_REQUEST['ced_estudiante'];
        $nombre_apellido = $_REQUEST['nombre_apellido'];
        $email = $_REQUEST['email'];
        $nrotelf = $_REQUEST['nrotelf'];
        $congregacion = $_REQUEST['congregacion'];
        $cargo = $_REQUEST['cargo'];
        $estModel->actualizar($ced_estudiante, $nombre_apellido, $email, $nrotelf, $congregacion, $cargo);
        $listado = $estModel->getEstudiantes();
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../estudiante/index.php?resultado");
        break;
    
    case 'editar':
        $ced_estudiante = $_REQUEST['ced_estudiante'];
        $estudiante = $estModel->getEst($ced_estudiante);
        $_SESSION['estudiante'] = serialize($estudiante);
        header("Location: ../estudiante/actualizar.php");
        break;
    
    default:
        header("Location: ../estudiante/index.php?error");
}

