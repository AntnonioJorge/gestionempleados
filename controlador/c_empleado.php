 <?php

if(isset($_POST['actualizar']))
{
    
    include "../dao/d_conexion.php";
    include "../dao/d_empleado.php";
    include "../modelo/m_empleado.php";
    /* $ruta="../vista/img/";
    $ruta_completa=$ruta.$_FILES["foto"]["name"];

    move_uploaded_file($_FILES["foto"]["tmp_name"],$ruta_completa); */

    $bdd=conectar("localhost","root","","gestionempleado");  

    $empleadoActualizar = new Empleados($_POST["idEmpleado"], $_POST["nombre"],$_POST["apellidos"],$_POST["correo"],$_POST["salario"],$_POST["edad"],$_POST["dip"]); 
    $resultado = actualizarEmpleado($bdd,$empleadoActualizar);
    header("Location: ../vista/php/vistaAdmin.php");
}

if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["registrar"])){

    echo "aser";
    include "../dao/d_conexion.php";
    include "../dao/d_empleado.php";
    include "../modelo/m_empleado.php";

    $ruta="../vista/img/";
    $ruta_completa=$ruta.$_FILES["foto"]["name"];

    move_uploaded_file($_FILES["foto"]["tmp_name"],$ruta_completa);

    $conexion=conectar("localhost","root","","gestionempleado");
    $empleado= new Empleado($_POST["nombre"],$_POST["apellidos"],$_POST["correo"],$_POST["salario"],$_POST["edad"],$_POST["dip"],$_FILES["foto"]["name"]);
    
    insertarEmpleados($conexion,$empleado);  

  

} 



 
?>