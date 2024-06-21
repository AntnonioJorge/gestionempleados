
<?php
        if(isset($_POST['actualizar'])){
            include ("../dao/d_conexion.php");
            include ("../dao/d_usuario.php");
            include ("../modelo/m_usuario.php");
            $bdd = conectar("localhost", "root", "", "gestionempleado");
            $usuarioActualizar = new Usuario($_POST["idUsuario"],$_POST["nombreUsuario"], $_POST["contrasenaUsuario"],$_POST["Rol"] );
            $resultado = actualizarUsuario($bdd, $usuarioActualizar);
            header("Location: ../vista/php/vistaSuperAdmin.php");
  
}
if(isset($_POST["registrar"])){

    echo "aser";
    include "../dao/d_conexion.php";
    include "../dao/d_usuario.php";
    include "../modelo/m_usuario.php";

    $conexion=conectar("localhost","root","","gestionempleado");
    $usuario= new CrearUsuario($_POST["nombre"],$_POST["contrasena"],$_POST["rol"]);
    
    insertarUsuario($conexion, $usuario);  
    header("Location: ../vista/php/vistaSuperAdmin.php");
  

} 



 
    ?>

   
