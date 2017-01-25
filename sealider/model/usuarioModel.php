<?php
include_once 'Database.php';
include_once 'Usuarios.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuarioModel
 *
 * @author EddyA
 */
class usuarioModel {
    //put your code here
     public function getUsuarios() {
        $pdo = Database::connect();
        $sql = "select * from usuario;";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $us) {
            $usuario = new Usuarios($us['ID'], $us['USUARIO'], $us['CONTRASENA'], $us['TIPO'], $us['ESTADO']);
            array_push($listado, $usuario);
        }
        Database::disconnect();
        return $listado;
    }
    
    public function getUs($id) {
        $pdo = Database::connect();
        $sql = "select * from usuario where id=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($id));
        $res = $consulta->fetch(PDO::FETCH_ASSOC);
        $usuario = new Usuarios($res['ID'], $res['USUARIO'], $res['CONTRASENA'], $res['TIPO'], $res['ESTADO']);
        Database::disconnect();
        return $usuario;
    }
    
    public function insertar($usuario, $contrasena, $tipo, $estado) {
        $pdo = Database::connect();
        $sql = "insert into usuario(usuario, contrasena, tipo, estado)values(?,?,?,?);";
        $resultado = $pdo->prepare($sql);
        try {
            $resultado->execute(array($usuario, $contrasena, $tipo, $estado));
        } catch (PDOException $exc) {
            Database::disconnect();
            throw new Exception($exc->getMessage());
        }
        Database::disconnect();
    }
    
    public function eliminar($id) {
        $pdo = Database::connect();
        $sql = "delete from usuario where id=?;";
        $resultado = $pdo->prepare($sql);
        $resultado->execute(array($id));
        Database::disconnect();
    }
    
    public function actualizar($id, $usuario, $contrasena, $tipo, $estado) {
        $pdo = Database::connect();
        $sql = "update usuario set usuario=?,contrasena=?,tipo=?,estado=? where id=?;";
        $resultado = $pdo->prepare($sql);
        try {
            $resultado->execute(array($usuario, $contrasena, $tipo, $estado, $id));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }
    
}
