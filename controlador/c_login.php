<?php 

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        include "../dao/conexion.php";
        include "../dao/usuario.php";
       
        if(!empty($_POST["nombre"]) and !empty($_POST["contraseña"])){
            $conexion=conectar("localhost","root","","gestionempleado");
            $nombre=$_POST["nombre"];
            $contra=$_POST["contraseña"];
            $persona=recuperarUsuarioContrasena($conexion,$nombre,$contra);

            if($nombre==$persona["nombreUsuario"] && $contra==$persona["contrasenaUsuario"]){
                echo "datos correctos,procedemos a iniciar sesión";
                header("Location:../vista/php/vistaAdmin.php");
            }
            else{
                echo "datos incorrectos";
            }
        }
        
    }
?>