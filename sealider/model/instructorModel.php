<?php
include_once 'Database.php';
include_once 'Instructores.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of instructorModel
 *
 * @author EddyA
 */
class instructorModel {
    public function getInstructores() {
        $pdo = Database::connect();
        $sql = "select * from instructor;";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $ins) {
            $instructor = new Instructores($ins['CED_INSTRUCTOR'], $ins['NOMBRE_APELLIDO'], $ins['NROTELF'], $ins['EMAIL']);
            array_push($listado, $instructor);
        }
        Database::disconnect();
        return $listado;
    }
    
    public function getIns($ced_instructor) {
        $pdo = Database::connect();
        $sql = "select * from instructor where ced_instructor=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($ced_instructor));
        $res = $consulta->fetch(PDO::FETCH_ASSOC);
        $instructor = new Instructores($res['CED_INSTRUCTOR'], $res['NOMBRE_APELLIDO'], $res['NROTELF'], $res['EMAIL']);
        Database::disconnect();
        return $instructor;
    }
    
    public function insertar($ced_instructor, $nombre_apellido, $nrotelf, $email) {
        $pdo = Database::connect();
        $sql = "insert into instructor(ced_instructor, nombre_apellido, nrotelf, email)values(?,?,?,?);";
        $resultado = $pdo->prepare($sql);
        try {
            $resultado->execute(array($ced_instructor, $nombre_apellido, $nrotelf, $email));
        } catch (PDOException $exc) {
            Database::disconnect();
            throw new Exception($exc->getMessage());
        }
        Database::disconnect();
    }
    
    public function eliminar($ced_instructor) {
        $pdo = Database::connect();
        $sql = "delete from instructor where ced_instructor=?;";
        $resultado = $pdo->prepare($sql);
        $resultado->execute(array($ced_instructor));
        Database::disconnect();
    }
    
    public function actualizar($ced_instructor, $nombre_apellido, $nrotelf, $email) {
        $pdo = Database::connect();
        $sql = "update instructor set nombre_apellido=?,nrotelf=?,email=? where ced_instructor=?;";
        $resultado = $pdo->prepare($sql);
        try {
            $resultado->execute(array($nombre_apellido, $nrotelf, $email, $ced_instructor));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }
}
