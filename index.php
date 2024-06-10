<?php

// Verificamos si se recibe la solicitud mediante POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibimos los datos del usuario
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contraseña'];

    // Imprimimos los datos del usuario (se puede hacer la inserción de la base de datos aquí)
    echo "nombre: $nombre,  contraseña: $contraseña";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario de Inicio de Sesión</title>
<link rel="stylesheet" href="vista/css/login.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
<div class="container">
    <h2>Inicio de Sesión</h2>
    <form action="controlador/c_login.php" method="post" id="Formulario-login">
        <div>
            <label for="nombre">Nombre de usuario:</label><br>
            <input type="text" id="nombre" name="nombre" required><br>
        </div>
        <div>
            <label for="contraseña">Contraseña:</label><br>
            <input type="password" id="contraseña" name="contraseña" required><br>
        </div>
        <input type="submit" value="Iniciar Sesión">
        <div class="error"></div>
    </form>
</div>
<!--<script src="vista/js/login.js"></script>-->
</body>
</html>

