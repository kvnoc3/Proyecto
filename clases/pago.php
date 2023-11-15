<?php
class Pago{
    public $metodoPago;
    public function __construct($metodoPago){
        $this->metodoPago = $metodoPago;
    }
}