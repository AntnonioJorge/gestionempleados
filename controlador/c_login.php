<?php 
    session_start();
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        include "../dao/conexion.php";
        include "../dao/usuario.php";
       
        if(!empty($_POST["nombreUsuario"]) and !empty($_POST["contrasenaUsuario"])){
            $conexion=conectar("localhost","root","","gestionempleado");
            $nombre=$_POST["nombreUsuario"];
            $contra=$_POST["contrasenaUsuario"];
            $persona=recuperarUsuarioContrasena($conexion,$nombre,$contra);

            if($nombre==$persona["nombreUsuario"] && $contra==$persona["contrasenaUsuario"] && $persona["idRol"]==1){
                $_SESSION["nombre"]=$nombre;
    
                echo "datos correctos,procedemos a iniciar sesión";
                header("Location:../vista/php/vistaAdmin.php");
            }
            else{
                echo "datos incorrectos";
            }
        }
        
    }
?>