<?php

class Callejero(){

    private $idCan;
    private $calleCan;
    private $colCan;
    private $rasCan;
    private $condCan;

    public function __construct(
        $calleCan, 
        $colCan,
        $rasCan,
        $condCan 
    ) {
        $this->calleCan = $calleCan;
        $this->colCan = $colCan;
        $this->rasCan = $rasCan;
        $this->condCan = $condCan;
    }

    public function setIDCan($idCan){
        $this->idCan = $idCan;
    }

    public function setCalle($calleCan){
        $this->calleCan = $calleCan;
    }

    public function setColonia($colCan){
        $this->colCan = $colCan;
    }

    public function setRasgo($rasCan){
        $this->rasCan = $rasCan;
    }

    public function setCondicion($condCan){
        $this->condCan = $condCan;
    }

    public function getIDCan(){
        return $this->idCan;
    }

    public function getCalle(){
        return $this->calleCan;
    }

    public function getColonia(){
        return $this->colCan;
    }

    public function getRasgo(){
        return $this->rasCan;
    }
    
    public function getCondicion(){
        return $this->condCan;
    }

}