<?php

include_once 'Database.php';
include_once 'Estudiantes.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of estudianteModel
 *
 * @author Eddy
 */
class estudianteModel {

    //put your code here
    public function getEstudiantes() {
        $pdo = Database::connect();
        $sql = "select * from estudiante;";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $est) {
            $estudiante = new Estudiantes($est['CED_ESTUDIANTE'], $est['NOMBRE_APELLIDO'], $est['EMAIL'], $est['NROTELF'], $est['CONGREGACION'], $est['CARGO']);
            array_push($listado, $estudiante);
        }
        Database::disconnect();
        return $listado;
    }

    public function getEst($ced_estudiante) {
        $pdo = Database::connect();
        $sql = "select * from estudiante where ced_estudiante=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($ced_estudiante));
        $res = $consulta->fetch(PDO::FETCH_ASSOC);
        $estudiante = new Estudiantes($res['CED_ESTUDIANTE'], $res['NOMBRE_APELLIDO'], $res['EMAIL'], $res['NROTELF'], $res['CONGREGACION'], $res['CARGO']);
        Database::disconnect();
        return $estudiante;
    }

    public function insertar($ced_estudiante, $nombre_apellido, $email, $nrotelf, $congregacion, $cargo) {
        $pdo = Database::connect();
        $sql = "insert into estudiante(ced_estudiante, nombre_apellido, email, nrotelf, congregacion, cargo)values(?,?,?,?,?,?);";
        $resultado = $pdo->prepare($sql);
        try {
            $resultado->execute(array($ced_estudiante, $nombre_apellido, $email, $nrotelf, $congregacion, $cargo));
        } catch (PDOException $exc) {
            Database::disconnect();
            throw new Exception($exc->getMessage());
        }
        Database::disconnect();
    }

    public function eliminar($ced_estudiante) {
        $pdo = Database::connect();
        $sql = "delete from estudiante where ced_estudiante=?;";
        $resultado = $pdo->prepare($sql);
        $resultado->execute(array($ced_estudiante));
        Database::disconnect();
    }

    public function actualizar($ced_estudiante, $nombre_apellido, $email, $nrotelf, $congregacion, $cargo) {
        $pdo = Database::connect();
        $sql = "update estudiante set nombre_apellido=?,email=?,nrotelf=?,congregacion=?,cargo=? where ced_estudiante=?;";
        $resultado = $pdo->prepare($sql);
        try {
            $resultado->execute(array($nombre_apellido, $email, $nrotelf, $congregacion, $cargo, $ced_estudiante));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

}
