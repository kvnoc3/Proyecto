<?php
session_start();


require_once('clases/estudiante.php');
require_once('conexion_bd.php');

// Obtener el código del estudiante 
$codigo_estudiante = $_SESSION['codigo_estudiante'];

// Consultar la base de datos para obtener los datos del estudiante
$sql = $conexion->prepare("SELECT * FROM estudiante WHERE codigo = ?");
$sql->bind_param("i", $codigo_estudiante);
$sql->execute();
$resultado = $sql->get_result();


// Obtener los datos del estudiante
$fila = $resultado->fetch_assoc();
$estudiante = new Estudiante(
        $fila['nombre'],
        $fila['apellidos'],
        $fila['codigo'],
        $fila['edad'],
        $fila['dni'],
        $fila['contraseña'],
        $fila['correo']
    );

?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
         body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #70043c;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .logo img {
            height: 50px;
            margin-left: 70px;
        }

        .nav-links {
            list-style-type: none;
            display: flex;
            margin: 10px 70px;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .nav-links li {
            position: relative;
            margin: 0 10px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
        }

        .submenu {
            display: none;
            position: absolute;
            background-color: #0056b3;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1;
            min-width: 150px;
        }

        .nav-links li:hover .submenu {
            display: block;
        }

        .submenu a {
            color: white;
            padding: 10px;
            display: block;
        }

        .login-button {
            background-color: #981c34;
            border: none;
            color: white;
            cursor: pointer;
            padding: 10px;
            border-radius: 10px;
        }

        .perfil-container {
            margin: auto;
            max-width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 20px;
        }

        .perfil-container h2 {
            text-align: center;
        }

        .perfil-container img {
            display: block;
            margin: 0 auto 20px; 
            border-radius: 50%;
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">
            <img decoding="async" src="https://i.postimg.cc/2yn7n7zW/logo.png" alt="Logo Image">
        </div>

        <ul class="nav-links">
            <li><a href="dashboard.php">Inicio</a></li>
            <li><a href="#">Matricula</a>
                <ul class="submenu">
                    <li><a href="#">Derecho de Matrícula</a></li>
                    <li><a href="#">Mi Matrícula</a></li>
                </ul>
            </li>
            <li><a href="#">Gestion Academica</a></li>
            <li><a href="#">Trámites y Servicios</a></li>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="logout.php" class="login-button">Cerrar Sesión</a></li>
        </ul>
    </nav>
    <div class="perfil-container">
        <img src="https://i.postimg.cc/KY9qYfzv/perfil.png" alt="Foto del Estudiante" style="width: 200px; height: 200px;">
        <p>Código: <?php echo $estudiante->codigo; ?></p>
        <p>Nombre: <?php echo $estudiante->nombre; ?></p>
        <p>Apellidos: <?php echo $estudiante->apellidos; ?></p>
        <p>Edad: <?php echo $estudiante->edad; ?></p>
        <p>DNI: <?php echo $estudiante->dni; ?></p>
        <p>Correo: <?php echo $estudiante->correo; ?></p>
    </div>

</body>

</html>
<?php

// Cerrar la conexión a la base de datos
$sql->close();
$conexion->close();
?>