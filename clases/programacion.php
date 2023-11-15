<?php

class Programacion
{
    public $grupo;
    public $hora;

    public function __construct($grupo, $hora = null){
        $this->grupo = $grupo;
        $this->hora = $hora;
    }
}