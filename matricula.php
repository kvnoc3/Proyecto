<?php
class Matricula
{
    public $fecha;
    public $estado;
    public $semestre;
    public $creditos;
    public $total;
	public $codigoEstudiante;

    public function __construct($fecha, $estado, $semestre, $creditos, $total, $codigoEstudiante){
        $this->fecha = $fecha;
        $this->estado = $estado;
        $this->semestre = $semestre;
        $this->creditos = $creditos;
        $this->total = $total;
		$this->codigoEstudiante = $codigoEstudiante;
    }
}