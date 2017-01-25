<?php

include_once 'Database.php';
include_once 'Materias.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of materiaModel
 *
 * @author EddyA
 */
class materiaModel {
    //put your code here
    public function getMaterias() {
        $pdo = Database::connect();
        $sql = "select * from materias;";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $mat) {
            $materia = new Materias($mat['ID_MATERIA'], $mat['CED_INSTRUCTOR'], $mat['DESCRIPCION']);
            array_push($listado, $materia);
        }
        Database::disconnect();
        return $listado;
    }
    
    public function getMat($id_materia) {
        $pdo = Database::connect();
        $sql = "select * from materias where id_materia=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($id_materia));
        $res = $consulta->fetch(PDO::FETCH_ASSOC);
        $materia = new Materias($res['ID_MATERIA'], $res['CED_INSTRUCTOR'], $res['DESCRIPCION']);
        Database::disconnect();
        return $materia;
    }
    
    public function insertar($ced_instructor, $descripcion) {
        $pdo = Database::connect();
        $sql = "insert into materias(ced_instructor, descripcion)values(?,?);";
        $resultado = $pdo->prepare($sql);
        try {
            $resultado->execute(array($ced_instructor, $descripcion));
        } catch (PDOException $exc) {
            Database::disconnect();
            throw new Exception($exc->getMessage());
        }
        Database::disconnect();
    }
    
    public function eliminar($id_materia) {
        $pdo = Database::connect();
        $sql = "delete from materias where id_materia=?;";
        $resultado = $pdo->prepare($sql);
        $resultado->execute(array($id_materia));
        Database::disconnect();
    }
    
    public function actualizar($id_materia, $ced_instructor, $descripcion) {
        $pdo = Database::connect();
        $sql = "update materias set ced_instructor=?, descripcion=? where id_materia=?;";
        $resultado = $pdo->prepare($sql);
        try {
            $resultado->execute(array($ced_instructor, $descripcion, $id_materia));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }
}
