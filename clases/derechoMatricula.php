<?php

class DerechoMatricula {
    public $idderecho;
    public $costo;
    public $fechaVencimiento;
    public $codigoEstudiante;

    public function __construct($idderecho, $costo, $fechaVencimiento, $codigoEstudiante) {
        $this->idderecho = $idderecho;
        $this->costo = $costo;
        $this->fechaVencimiento = $fechaVencimiento;
        $this->codigoEstudiante = $codigoEstudiante;
    }
}
?>

