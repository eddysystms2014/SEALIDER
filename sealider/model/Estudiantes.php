<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estudiantes
 *
 * @author Eddy
 */
class Estudiantes {
    //put your code here
    private $CED_ESTUDIANTE;
    private $NOMBRE_APELLIDO;
    private $EMAIL;
    private $NROTELF;
    private $CONGREGACION;
    private $CARGO;
            
    function __construct($ced_estudiante, $nombre_apellido, $email, $nrotelf, $congregacion, $cargo) {
        $this->CED_ESTUDIANTE = $ced_estudiante;
        $this->NOMBRE_APELLIDO = $nombre_apellido;
        $this->EMAIL = $email;
        $this->NROTELF = $nrotelf;
        $this->CONGREGACION = $congregacion;
        $this->CARGO = $cargo;
    }

    function getCED_ESTUDIANTE() {
        return $this->CED_ESTUDIANTE;
    }

    function getNOMBRE_APELLIDO() {
        return $this->NOMBRE_APELLIDO;
    }

    function getEMAIL() {
        return $this->EMAIL;
    }

    function getNROTELF() {
        return $this->NROTELF;
    }

    function getCONGREGACION() {
        return $this->CONGREGACION;
    }

    function getCARGO() {
        return $this->CARGO;
    }

    function setCED_ESTUDIANTE($CED_ESTUDIANTE) {
        $this->CED_ESTUDIANTE = $CED_ESTUDIANTE;
    }

    function setNOMBRE_APELLIDO($NOMBRE_APELLIDO) {
        $this->NOMBRE_APELLIDO = $NOMBRE_APELLIDO;
    }

    function setEMAIL($EMAIL) {
        $this->EMAIL = $EMAIL;
    }

    function setNROTELF($NROTELF) {
        $this->NROTELF = $NROTELF;
    }

    function setCONGREGACION($CONGREGACION) {
        $this->CONGREGACION = $CONGREGACION;
    }

    function setCARGO($CARGO) {
        $this->CARGO = $CARGO;
    }

}
