<?php 
    function recuperarUsuarioContrasena($conexion,$user,$contra){
        try{
            $sql="SELECT * FROM usuario
            WHERE nombreUsuario='$user' and contrasenaUsuario='$contra'";
            $resultado=$conexion->query($sql);
            return $resultado->fetch_assoc();
        }catch(Exception $e){
            echo "error al recuperar usuario y contrasena ".$e;
            return null;
        }

    }
?>