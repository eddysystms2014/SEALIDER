<?php

include_once '../model/instructorModel.php';
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$insModel = new instructorModel();
$op = $_REQUEST['op'];
switch ($op){
    case 'listar':
        $listado = $insModel->getInstructores();
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../instructor/index.php");
        break;

    case 'listarins':
        $listado = $insModel->getInstructores();
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../instructor/consultar.php");
        break;
    
    case 'insertar':
        $ced_instructor = $_REQUEST['ced_instructor'];
        $nombre_apellido = $_REQUEST['nombre_apellido'];
        $nrotelf = $_REQUEST['nrotelf'];
        $email = $_REQUEST['email'];
        $insModel->insertar($ced_instructor, $nombre_apellido, $nrotelf, $email);
        $listado = $insModel->getInstructores();
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../instructor/index.php?resultado");
        break;
    
    case 'eliminar':
        $ced_instructor = $_REQUEST['ced_instructor'];
        $insModel->eliminar($ced_instructor);
        $listado = $insModel->getIns($ced_instructor);
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../instructor/index.php?resultado");
        break;
    
    case 'actualizar':
        $ced_instructor = $_REQUEST['ced_instructor'];
        $nombre_apellido = $_REQUEST['nombre_apellido'];
        $nrotelf = $_REQUEST['nrotelf'];
        $email = $_REQUEST['email'];
        $insModel->actualizar($ced_instructor, $nombre_apellido, $nrotelf, $email);
        $listado = $insModel->getInstructores();
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../instructor/index.php?resultado");
        break;
    
    case 'editar':
        $ced_instructor = $_REQUEST['ced_instructor'];
        $instructor = $insModel->getIns($ced_instructor);
        $_SESSION['instructor'] = serialize($instructor);
        header("Location: ../instructor/actualizar.php");
        break;
    
    default:
        header("Location: ../instructor/index.php?error");
}
