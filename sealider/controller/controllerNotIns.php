<?php
include_once '../model/notaModel.php';
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$notModel = new notaModel();
$op = $_REQUEST['op'];

switch ($op) {

     case 'listarins':
        $listado = $notModel->getNotas();
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../notas/indexins.php");
        break;

    case 'insertarins':
        $ced_estudiante = $_REQUEST['ced_estudiante'];
        $id_materia = $_REQUEST['id_materia'];
        $trimestre = $_REQUEST['trimestre'];
        $nota1 = $_REQUEST['nota1'];
        $nota2 = $_REQUEST['nota2'];
        $nota3 = $_REQUEST['nota3'];
        $nota4 = $_REQUEST['nota4'];
        $notModel->insertar($ced_estudiante, $id_materia, $trimestre, $nota1, $nota2, $nota3, $nota4);
        $listado = $notModel->getNotas();
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../notas/indexins.php?resultado");
        break;
    
    
    case 'eliminarins':
        $id = $_REQUEST['id'];
        $notModel->eliminar($id);
        $listado = $notModel->getNot($id);
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../notas/indexins.php?resultado");
        break;
    
    case 'actualizarins':
        $id = $_REQUEST['id'];
        $ced_estudiante = $_REQUEST['ced_estudiante'];
        $id_materia = $_REQUEST['id_materia'];
        $trimestre = $_REQUEST['trimestre'];
        $nota1 = $_REQUEST['nota1'];
        $nota2 = $_REQUEST['nota2'];
        $nota3 = $_REQUEST['nota3'];
        $nota4 = $_REQUEST['nota4'];
        $notModel->actualizar($id, $ced_estudiante, $id_materia, $trimestre, $nota1, $nota2, $nota3, $nota4);
        $listado = $notModel->getNotas();
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../notas/indexins.php?resultado");
        break;

    case 'editarins':
        $id = $_REQUEST['id'];
        $nota = $notModel->getNot($id);
        $_SESSION['nota'] = serialize($nota);
        header("Location: ../notas/actualizarins.php");
        break;
    
    default:
        header("Location: ../notas/indexins.php?error");
}