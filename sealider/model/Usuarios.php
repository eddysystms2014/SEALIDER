<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuarios
 *
 * @author EddyA
 */
class Usuarios {
    //put your code here
    private $ID;
    private $USUARIO;
    private $CONTRASENA;
    private $TIPO;
    private $ESTADO;
    
    public function __construct($id, $usuario, $contrasena, $tipo, $estado) {
        $this->ID = $id;
        $this->USUARIO = $usuario;
        $this->CONTRASENA = $contrasena;
        $this->TIPO = $tipo;
        $this->ESTADO = $estado;
    }
    
    function  getID(){
        return $this->ID;
    }
    
    function getUSUARIO() {
        return $this->USUARIO;
    }

    function getCONTRASENA() {
        return $this->CONTRASENA;
    }

    function getTIPO() {
        return $this->TIPO;
    }

    function getESTADO() {
        return $this->ESTADO;
    }
    
    function setID($ID){
        $this->ID = $ID;
    }
    
    function setUSUARIO($USUARIO) {
        $this->USUARIO = $USUARIO;
    }

    function setCONTRASENA($CONTRASENA) {
        $this->CONTRASENA = $CONTRASENA;
    }

    function setTIPO($TIPO) {
        $this->TIPO = $TIPO;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }

}
