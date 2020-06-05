<?php

class Usuario{
   
    private $idUs;
    private $nomUs;
    private $passUs;

    public function __construct($nomUs, $passUs){
        $this->nomUs = $nomUs;
        $this->passUs = $passUs;
    }

    public function setID($idUs){
        $this->idUs = $idUs;
    }

    public function setName($nomUs){
        $this->nomUs = $nomUs;
    }

    public function setPassword($passUs){
        $this->passUs = $passUs;
    }

    public function getID(){
        return $this->idUs;
    }

    public function getName(){
        return $this->nomUs;
    }

    public function getPassword(){
        return $this->passUs;
    }

}