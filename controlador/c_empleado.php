<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "../dao/conexion.php";
    include "../dao/empleado.php";
    include "../modelo/m_empleado.php";

    $ruta="../vista/img/";
    $ruta_completa=$ruta.$_FILES["foto"]["name"];

    move_uploaded_file($_FILES["foto"]["tmp_name"],$ruta_completa);

    $conexion=conectar("localhost","root","","gestionempleado");
    $empleado= new Empleado($_POST["nombre"],$_POST["apellidos"],$_POST["correo"],$_POST["salario"],$_POST["edad"],$_POST["dip"],$_FILES["foto"]["name"]);
    
    insertarEmpleados($conexion,$empleado);
}

 
?>