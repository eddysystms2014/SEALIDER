<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Instructores
 *
 * @author EddyA
 */
class Instructores {
    private $CED_INSTRUCTOR;
    private $NOMBRE_APELLIDO;
    private $NROTELF;
    private $EMAIL;
    
    public function __construct($ced_instructor, $nombre_apellido, $nrotelf, $email) {
        $this->CED_INSTRUCTOR = $ced_instructor;
        $this->NOMBRE_APELLIDO = $nombre_apellido;
        $this->NROTELF = $nrotelf;
        $this->EMAIL = $email;
    }
    
    function getCED_INSTRUCTOR() {
        return $this->CED_INSTRUCTOR;
    }

    function getNOMBRE_APELLIDO() {
        return $this->NOMBRE_APELLIDO;
    }

    function getNROTELF() {
        return $this->NROTELF;
    }

    function getEMAIL() {
        return $this->EMAIL;
    }

    function setCED_INSTRUCTOR($CED_INSTRUCTOR) {
        $this->CED_INSTRUCTOR = $CED_INSTRUCTOR;
    }

    function setNOMBRE_APELLIDO($NOMBRE_APELLIDO) {
        $this->NOMBRE_APELLIDO = $NOMBRE_APELLIDO;
    }

    function setNROTELF($NROTELF) {
        $this->NROTELF = $NROTELF;
    }

    function setEMAIL($EMAIL) {
        $this->EMAIL = $EMAIL;
    }

}
