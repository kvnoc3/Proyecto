<?php
include("conexion_bd.php");
include("clases/estudiante.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["codigo"]) || empty($_POST["contraseña"])) {
        $_SESSION['error_message'] = "Los campos no pueden estar vacíos";
    } else {
        $codigo = $_POST["codigo"];
        $contraseña = $_POST["contraseña"];

        $estudiante = new Estudiante(null, null, $codigo, null, null, $contraseña, null);

        if ($estudiante->autenticarse($contraseña)) {
            // Autenticación exitosa
            $_SESSION['codigo_estudiante'] = $codigo;
            session_write_close();
            header("location:dashboard.php");
            exit();
        } else {
            // Autenticación fallida
            $_SESSION['error_message'] = "Usuario o contraseña incorrectos";
            header("location:login.php");
            exit();
        }
    }
}
