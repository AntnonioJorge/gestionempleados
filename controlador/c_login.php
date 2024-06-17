<?php 
    session_start();
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        include "../dao/d_conexion.php";
        include "../dao/d_usuario.php";
       
        if(!empty($_POST["nombreUsuario"]) and !empty($_POST["contrasenaUsuario"])){
            $conexion=conectar("localhost","root","","gestionempleado");
            $nombre=$_POST["nombreUsuario"];
            $contra=$_POST["contrasenaUsuario"];
            $persona=recuperarUsuarioContrasena($conexion,$nombre,$contra);

            if($nombre==$persona["nombreUsuario"] && $contra==$persona["contrasenaUsuario"] && $persona["idRol"]==1){
                $_SESSION["nombre"]=$nombre;
    
                header("Location:../vista/php/vistaAdmin.php");
            }
            elseif($nombre==$persona["nombreUsuario"] && $contra==$persona["contrasenaUsuario"] && $persona["idRol"]==2){
                $_SESSION["nombre"]=$nombre;

                header("Location:../vista/php/vistaSuperAdmin.php");
            }
            else{
                header("Location:../index.php?error");
            }
        }
        
    }
?>