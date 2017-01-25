<?php
include_once 'Database.php';
include_once 'Notas.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of notaModel
 *
 * @author EddyA
 */
class notaModel {
    //put your code here
    public function getNotas() {
        $pdo = Database::connect();
        $sql = "select * from notas;";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $not) {
            $notas = new Notas($not['ID'], $not['CED_ESTUDIANTE'], $not['ID_MATERIA'], $not['TRIMESTRE'], $not['NOTA1'], $not['NOTA2'], $not['NOTA3'], $not['NOTA4']);
            array_push($listado, $notas);
        }
        Database::disconnect();
        return $listado;
    }
    
    public function getNot($id) {
        $pdo = Database::connect();
        $sql = "select * from notas where id=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($id));
        $res = $consulta->fetch(PDO::FETCH_ASSOC);
        $notas = new Notas($res['ID'], $res['CED_ESTUDIANTE'], $res['ID_MATERIA'], $res['TRIMESTRE'], $res['NOTA1'], $res['NOTA2'], $res['NOTA3'], $res['NOTA4']);
        Database::disconnect();
        return $notas;
    }
    
    public function insertar($ced_estudiante, $id_materia, $trimestre, $nota1, $nota2, $nota3, $nota4) {
        $pdo = Database::connect();
        $sql = "insert into notas(ced_estudiante, id_materia, trimestre, nota1, nota2, nota3, nota4)values(?,?,?,?,?,?,?);";
        $resultado = $pdo->prepare($sql);
        try {
            $resultado->execute(array($ced_estudiante, $id_materia, $trimestre, $nota1, $nota2, $nota3, $nota4));
        } catch (PDOException $exc) {
            Database::disconnect();
            throw new Exception($exc->getMessage());
        }
        Database::disconnect();
    }
    
    public function eliminar($id) {
        $pdo = Database::connect();
        $sql = "delete from notas where id=?;";
        $resultado = $pdo->prepare($sql);
        $resultado->execute(array($id));
        Database::disconnect();
    }
    
    public function actualizar($id, $ced_estudiante, $id_materia, $trimestre, $nota1, $nota2, $nota3, $nota4) {
        $pdo = Database::connect();
        $sql = "update notas set ced_estudiante=?,id_materia=?,trimestre=?,nota1=?,nota2=?,nota3=?,nota4=? where id=?;";
        $resultado = $pdo->prepare($sql);
        try {
            $resultado->execute(array($ced_estudiante, $id_materia, $trimestre, $nota1, $nota2, $nota3, $nota4, $id));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }
}
