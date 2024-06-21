<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formulario.css">
    <title>Actualizar de Empleado</title>
</head>
<body>
<?php
    include ("../../dao/d_conexion.php");
    include ("../../dao/d_empleado.php");
    
    $bdd = conectar("localhost", "root", "", "gestionempleado");
    $idEmpleado = (isset($_GET['idEmpleadoActualizarFoto'])) ? $_GET['idEmpleadoActualizarFoto'] : 0;
    $datos = mostrarEmpleadosId($bdd, $idEmpleado);
    
    if ($datos) {
?>

    <h1>Actualizar Foto</h1>
    <form action="../../controlador/c_empleado.php" id="FormularioEmpleado" method="POST" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data">
    
        <input type="hidden" value="<?php echo $_GET['idEmpleadoActualizarFoto'] ?>" id="idEmpleado" name="idEmpleado"><br>

        <label  for="foto">Foto:</label>
        <input  type="file" id="foto" name="foto" value="<?php echo $datos['fotoEmpleado'] ?>"><br>

        <input type="submit" name="actualizarFoto" value="Actualizar">
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
