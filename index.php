<?php
    session_start();
    
    if(isset($_GET["cerrar"])){
        session_destroy();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario de Inicio de Sesión</title>
<link rel="stylesheet" href="vista/css/login.css">
<link rel="stylesheet" href="vista/css/bootstrap.min.css">
</head>

<body>

<div class="containerl">
<?php
    if(isset($_GET["error"])){
        echo '<div class="btn alert-warning">error en el usuario o contraseña</div>';
    }
 ?>
    <h2>Inicio de Sesión</h2>
    <form action="controlador/c_login.php" method="post" id="Formulario-login">
        <div>
            <label for="nombre">Nombre de usuario:</label><br>
            <input type="text" id="nombre" name="nombreUsuario" required><br>
        </div>
        <div>
            <label for="contraseña">Contraseña:</label><br>
            <input type="password" id="contraseña" name="contrasenaUsuario" required><br>
        </div>
        <input type="submit" value="Iniciar Sesión">
        <div class="error"></div>
    </form>
</div>
<!--<script src="vista/js/login.js"></script>-->
</body>
</html>

