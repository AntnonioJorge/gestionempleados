<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formularios.css">
    <title>Actualizar de Empleado</title>
</head>
<body>
<?php
    include ("../../dao/d_conexion.php");
    include ("../../dao/d_empleado.php");
    
    $bdd = conectar("localhost", "root", "", "gestionempleado");
    $idEmpleado = (isset($_GET['idEmpleadoActualizar'])) ? $_GET['idEmpleadoActualizar'] : 0;
    $datos = mostrarEmpleadosId($bdd, $idEmpleado);
    
    if ($datos) {
?>

    <h1>Actualizar Empleado</h1>
    <form action="../../controlador/c_empleado.php" id="FormularioEmpleado" method="POST" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data">
    
        <input type="hidden" value="<?php echo $_GET['idEmpleadoActualizar'] ?>" id="idEmpleado" name="idEmpleado"><br>
        <label for="nombre">Nombre:</label>
        <input type="text" value="<?php echo $datos['nombreEmpleado'] ?>" id="nombre" name="nombre" required><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" value="<?php echo $datos['apellidosEmpleado'] ?>" id="apellidos" name="apellidos" required><br>

        <label for="correo">Correo:</label>
        <input type="email" value="<?php echo $datos['correoEmpleado'] ?>" id="correo" name="correo" required><br>

        <label for="salario">Salario:</label>
        <input type="text" value="<?php echo $datos['salarioEmpleado'] ?>" id="salario" name="salario" required><br>

        <label for="DIP">DIP:</label>
        <input type="text" value="<?php echo $datos['dipEmpleado'] ?>" id="dip" name="dip" required><br>

        <label for="edad">Edad:</label>
        <input type="number" value="<?php echo $datos['edadEmpleado'] ?>" id="edad" name="edad" required><br>

<!--         <label hidden for="rol">Rol:</label>
        <input hidden type="text" value="<?php// echo $datos['rolEmpleado'] ?>" id="rol" name="rol" ><br> -->

        <!-- <label  for="foto">Foto:</label>
        <input  type="file" id="foto" name="foto" value="<?//php echo $datos['fotoEmpleado'] ?>"><br> -->

        <!-- <input type="submit" name="actualizar" value="Actualizar"> -->
        <button type="submit" name="actualizar" >Actualizar</button>
    </form>
<?php
    } else {
        echo "Error: No se encontró el empleado con el ID especificado.";
    }
?>
    <!-- <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/empleado.js"></script> -->
</body>
</html>
