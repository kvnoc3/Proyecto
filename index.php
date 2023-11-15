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

    <nav>
        <div class="logo">
            <img decoding="async" src="https://i.postimg.cc/2yn7n7zW/logo.png" alt="Logo Image">
        </div>

        <ul class="nav-links">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="index.php">Admision</a></li>
            <li><a href="index.php">Facultades</a></li>
            <li><a href="login.php" class="login-button">Iniciar Sesión</a></li>
        </ul>
    </nav>
</body>
</html>
