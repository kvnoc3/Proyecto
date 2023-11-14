<?php

class Estudiante{

	public $codigo;
    public $nombre;
    public $apellidos;
    public $edad;
    public $dni;
    public $contraseña;
    public $correo;

    public function __construct($nombre, $apellidos, $codigo, $edad, $dni, $contraseña, $correo) {
		$this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->dni = $dni;
        $this->contraseña = $contraseña;
        $this->correo = $correo;
    }

    public function autenticarse($contraseña) {
        global $conexion; 

        $stmt = $conexion->prepare("SELECT * FROM estudiante WHERE codigo = ? LIMIT 1");
        $stmt->bind_param("i", $this->codigo);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $datos = $result->fetch_assoc();

            if (password_verify($contraseña, $datos["contraseña"])) {
                // Autenticación exitosa
                return true;
            } else {
                // Contraseña incorrecta
                return false;
            }
        } else {
            // Estudiante no encontrado
            return false;
        }
    }
}