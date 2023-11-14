<?php

$conexion = new mysqli("localhost","root","onofre17","prueba");
$conexion->set_charset("utf8");

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}
