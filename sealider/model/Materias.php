<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Materias
 *
 * @author EddyA
 */
class Materias {
    private $ID_MATERIA;
    private $CED_INSTRUCTOR;
    private $DESCRIPCION;
    
    public function __construct($id_materia, $ced_instructor, $descripcion) {
        $this->ID_MATERIA=$id_materia;
        $this->CED_INSTRUCTOR = $ced_instructor;
        $this->DESCRIPCION = $descripcion;
    }
    
    function getID_MATERIA() {
        return $this->ID_MATERIA;
    }

    function getCED_INSTRUCTOR() {
        return $this->CED_INSTRUCTOR;
    }

    function getDESCRIPCION() {
        return $this->DESCRIPCION;
    }

    function setID_MATERIA($ID_MATERIA){
        $this->ID_MATERIA = $ID_MATERIA;
    }

    function setCED_INSTRUCTOR($CED_INSTRUCTOR) {
        $this->CED_INSTRUCTOR = $CED_INSTRUCTOR;
    }

    function setDESCRIPCION($DESCRIPCION) {
        $this->DESCRIPCION = $DESCRIPCION;
    }
    
}
