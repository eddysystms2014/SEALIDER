<?php

include_once '../model/usuarioModel.php';
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$usModel = new usuarioModel();
$op = $_REQUEST['op'];
switch ($op) {
    case 'listar':
        $listado = $usModel->getUsuarios();
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../usuario/index.php");
        break;
    
    case 'insertarprincipal':
        $usuario = $_REQUEST['usuario'];
        $contrasena = $_REQUEST['contrasena'];
        $hash = sha1($contrasena);
        $tipo = $_REQUEST['tipo'];
        $estado = $_REQUEST['estado'];
        $usModel->insertar($usuario, $hash, $tipo, $estado);
        $listado = $usModel->getUsuarios();
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../index.php?resultado");
        break;

    case 'insertar':
        $usuario = $_REQUEST['usuario'];
        $contrasena = $_REQUEST['contrasena'];
        $hash = sha1($contrasena);
        $tipo = $_REQUEST['tipo'];
        $estado = $_REQUEST['estado'];
        $usModel->insertar($usuario, $hash, $tipo, $estado);
        $listado = $usModel->getUsuarios();
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../usuario/index.php?resultado");
        break;
    
    case 'eliminar':
        $id = $_REQUEST['id'];
        $usModel->eliminar($id);
        $listado = $usModel->getUsuarios();
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../usuario/index.php?resultado");
        break;
    
    case 'actualizar':
        $id = $_REQUEST['id'];
        $usuario = $_REQUEST['usuario'];
        $contrasena = $_REQUEST['contrasena'];
        $hash = sha1($contrasena);
        $tipo = $_REQUEST['tipo'];
        $estado = $_REQUEST['estado'];
        $usModel->actualizar($id, $usuario, $hash, $tipo, $estado);
        $listado = $usModel->getUsuarios();
        $_SESSION['listado'] = serialize($listado);
        header("Location: ../usuario/index.php?resultado");
        break;
    
    case 'editar':
        $id = $_REQUEST['id'];
        $usuario = $usModel->getUs($id);
        $_SESSION['usuario'] = serialize($usuario);
        header("Location: ../usuario/actualizar.php");
        break;
    
    default:
        header("Location: ../usuario/index.php?error");
}

