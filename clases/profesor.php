<?php

class Profesor
{
    public $nombre;
    public $apellidos;
    public $dni;
    public $codigo;

    public function __construct($nombre, $apellidos, $dni, $codigo){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->dni = $dni;
        $this->codigo = $codigo;
    }
}