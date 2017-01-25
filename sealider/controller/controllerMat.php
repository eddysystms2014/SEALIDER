<?php

include_once '../model/materiaModel.php';
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$matModel = new materiaModel();
$op = $_REQUEST['op'];

switch ($op) {
    case 'listar':
        $listado = $matModel->getMaterias();
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../materias/index.php");
        break;
    
    case 'insertar':
        $ced_instructor = $_REQUEST['ced_instructor'];
        $descripcion = $_REQUEST['descripcion'];
        $matModel->insertar($ced_instructor, $descripcion);
        $listado = $matModel->getMaterias();
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../materias/index.php?resultado");
        break;
    
    case 'eliminar':
        $id_materia = $_REQUEST['id_materia'];
        $matModel->eliminar($id_materia);
        $listado = $matModel->getMat($id_materia);
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../materias/index.php?resultado");
        break;
    
    case 'actualizar':
        $id_materia = $_REQUEST['id_materia'];
        $ced_instructor = $_REQUEST['ced_instructor'];
        $descripcion = $_REQUEST['descripcion'];
        $matModel->actualizar($id_materia, $ced_instructor, $descripcion);
        $listado = $matModel->getMaterias();
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../materias/index.php?resultado");
        break;
    
    case 'editar':
        $id_materia = $_REQUEST['id_materia'];
        $materia = $matModel->getMat($id_materia);
        $_SESSION['materia'] = serialize($materia);
        header("Location: ../materias/actualizar.php");
        break;
    
    default:
        header("Location: ../materias/index.php?error");
}
