<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf8">
    <style>

        .main-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 10px;
            margin-top: 50px;
            max-width: 400px;
            text-align: center;
            margin: auto;
        }

        .titulo-container h1 {
            font-size: 24px;
        }

        .container2 h1 {
            font-size: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #981c34;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: #981c34;
        }

        .social-container h2 {
            font-size: 18px;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }

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
            margin: 0 30px;
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

    </style>
</head>
<body>
    <nav style="margin-bottom: 20px;">
        <div class="logo">
            <img decoding="async" src="https://i.postimg.cc/2yn7n7zW/logo.png" alt="Logo Image">
        </div>

        <ul class="nav-links">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="login.php" class="login-button">Iniciar Sesión</a></li>
        </ul>
    </nav>

    <form method="post" action="controlador.php">
        <div class="main-container">
            <div class="titulo-container">
                <h1>Hola, identifícate</h1>
            </div>

            <div class="container2">
                <input type="text" id="codigo" placeholder="Código de Estudiante" name="codigo" required>
                <input type="password" id="contraseña" placeholder="Contraseña" name="contraseña" required>
                <button type="submit">Iniciar sesión</button><br><br>
                <a href="#">Olvidé mi contraseña</a>
            </div>
            
            <div id="error-message" class="error-message">
                <?php
                // Verifica si hay un mensaje de error y lo muestra
                if (isset($_SESSION['error_message'])) {
                    echo $_SESSION['error_message'];
                    unset($_SESSION['error_message']); // Limpia el mensaje después de mostrarlo
                }
                ?>
            </div>
        </div>
    </form>
</body>
</html>

