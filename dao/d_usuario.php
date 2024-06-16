<?php 
    function recuperarUsuarioContrasena($conexion,$user,$contra){
        try{
            $sql="SELECT * FROM usuarios
            WHERE nombreUsuario='$user' and contrasenaUsuario='$contra'";
            $resultado=$conexion->query($sql);
            return $resultado->fetch_assoc();
        }catch(Exception $e){
            echo "error al recuperar usuario y contrasena ".$e;
            return null;
        }

    }


    function mostrarTodosUsuarios($con){
        $sql = "SELECT * FROM usuarios u INNER JOIN rol r ON u.idRol=r.idRol";
        $con = $con->query($sql);
        return $con;
    }


    function eliminarUsuario($conexion, $idUsuario) {
        // Prepara la consulta SQL para eliminar el empleado por su ID
        $sql = "DELETE FROM usuarios WHERE idUsuario = ?";
    
        // Prepara la sentencia
        if ($stmt = $conexion->prepare($sql)) {
            // Vincula el parámetro
            $stmt->bind_param("i", $idUsuario);
    
            // Ejecuta la consulta
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
    
            // Cierra la sentencia
            $stmt->close();
        } else {
            return false;
        }
    }


    function actualizarUsuario($conexion, $usuario){
        try{
            $sql = "UPDATE usuarios SET 
                    nombreUsuario = '$usuario->nombreUsuario', 
                    contraseñaUsuario = '$usuario->contraseñaUsuario'
                    WHERE idUsuario = '$usuario->idUsuario'";
            $conexion->query($sql);
            
        } catch(Exception $e) {
            echo "error al actualizar empleado: " . $e->getMessage();
        }
    }
    

    function mostrarUsuarioId($con, $idUsuario) {

        $sql = "SELECT * FROM usuarios WHERE idUsuario = '$idUsuario'";
        $resultado=$con->query($sql);
        if($resultado)
        {
            return $resultado->fetch_assoc();
        }
        else 
            return null;
    }
    
    function recuperarRoles($con){
        $sql = "SELECT * FROM rol ";
        $con = $con->query($sql);
        return $con;
    }


?>