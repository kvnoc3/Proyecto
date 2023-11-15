<?php

class Curso
{
    public $nombre;
    public $ciclo;
    public $creditos;
    public $codigo;
    public $prerequisitos;

    public function __construct($nombre, $ciclo, $creditos, $codigo, $prerequisitos){
        $this->nombre = $nombre;
        $this->ciclo = $ciclo;
        $this->creditos = $creditos;
        $this->codigo = $codigo;
        $this->prerequisitos = $prerequisitos;
    }
}