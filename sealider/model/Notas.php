<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Notas
 *
 * @author EddyA
 */
class Notas {
    private $ID;
    private $CED_ESTUDIANTE;
    private $ID_MATERIA;
    private $TRIMESTRE;
    private $NOTA1;
    private $NOTA2;
    private $NOTA3;
    private $NOTA4;
    
    public function __construct($id, $ced_estudiante, $id_materia, $trimestre, $nota1, $nota2, $nota3, $nota4) {
        $this->ID = $id;
        $this->CED_ESTUDIANTE = $ced_estudiante;
        $this->ID_MATERIA = $id_materia;
        $this->TRIMESTRE = $trimestre;
        $this->NOTA1 = $nota1;
        $this->NOTA2 = $nota2;
        $this->NOTA3 = $nota3;
        $this->NOTA4 = $nota4;
    }
    
    function getID() {
        return $this->ID;
    }
    
    function getCED_ESTUDIANTE() {
        return $this->CED_ESTUDIANTE;
    }

    function getID_MATERIA() {
        return $this->ID_MATERIA;
    }

    function getTRIMESTRE() {
        return $this->TRIMESTRE;
    }

    function getNOTA1() {
        return $this->NOTA1;
    }

    function getNOTA2() {
        return $this->NOTA2;
    }

    function getNOTA3() {
        return $this->NOTA3;
    }

    function getNOTA4() {
        return $this->NOTA4;
    }

    function setID($ID) {
        $this->ID = $ID;
    }
    
    function setCED_ESTUDIANTE($CED_ESTUDIANTE) {
        $this->CED_ESTUDIANTE = $CED_ESTUDIANTE;
    }

    function setID_MATERIA($ID_MATERIA) {
        $this->ID_MATERIA = $ID_MATERIA;
    }

    function setTRIMESTRE($TRIMESTRE) {
        $this->TRIMESTRE = $TRIMESTRE;
    }

    function setNOTA1($NOTA1) {
        $this->NOTA1 = $NOTA1;
    }

    function setNOTA2($NOTA2) {
        $this->NOTA2 = $NOTA2;
    }

    function setNOTA3($NOTA3) {
        $this->NOTA3 = $NOTA3;
    }

    function setNOTA4($NOTA4) {
        $this->NOTA4 = $NOTA4;
    }

}
