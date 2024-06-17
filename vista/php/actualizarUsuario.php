<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar usuarios</title>
</head>
<body>


    <?php
        include("../../dao/d_conexion.php");
        include("../../dao/d_usuario.php");
        $bdd = conectar("localhost", "root", "", "gestionempleado");
        $idUsuario = (isset($_GET['idUsuarioActualizar'])) ? $_GET['idUsuarioActualizar'] : 0;
        $datos = mostrarUsuarioId($bdd, $idUsuario);
        $roles = recuperarRoles($bdd);

        if ($datos) {
    ?>
    

    <form action="../../controlador/c_usuario.php" method="POST">
        <input type="hidden" value="<?php echo $datos['idUsuario'] ?>" name="idUsuario">
        <!-- <input type="text" value="<?php echo $datos['idUsuario'] ?>" name="idUsuarios"> -->
        <input type="text" placeholder="NombreUsuario" value="<?php echo $datos['nombreUsuario'] ?>" name="nombreUsuario"> <br><br>
        <input type="password" placeholder="ContrasenaUsuarios"  value="<?php echo $datos['contrasenaUsuario'] ?>" name="contrasenaUsuario"><br><br>
        <label for="rol">ROL</label>
        <select name="Rol" id="idRol">
             <?php
                foreach($roles as $rol)
                    {
                    ?>
                        <option value=" <?php echo $rol["idRol"];?>"> 
                         <?php echo $rol["rolUsuario"];?>
                        </option>
                    <?php   
                    }
                    ?>
                        
                    </select>
        <input type="submit" value=" ACTUALIZAR" name="actualizar">
        <input type="reset" value="CANCELAR">
    </form>
    <?php
    } else {
        echo "Error: No se encontró el usuario con el ID especificado.";
    }
?>
</body>
</html>