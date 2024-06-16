<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vista/css/sweetalert2.min.css">
    <script src="../vista/js/sweetalert2.all.min.js" ></script>
</head>
<body>
    <?php
        if(isset($_POST['actualizar'])){
            include ("../dao/d_conexion.php");
            include ("../dao/d_usuario.php");
            include ("../modelo/m_usuario.php");
            $bdd = conectar("localhost", "root", "", "gestionempleado");
            $usuarioActualizar = new Usuario($_POST["idUsuario"],$_POST["nombreUsuario"], $_POST["contraseñaUsuario"], $_POST["contraseñaUsuario"]);
            $resultado = actualizarUsuario($bdd, $usuarioActualizar);
            header("Location: ../vista/php/listadeUsuarios.php");
           /*  if (!$resultado) {

        echo 
       
       ' <script>
        Swal.fire({
                    title: "¡Empleado actualizado!",
                    text: "Los datos del Usuario se han actualizado correctamente.",
                    icon: "success",
                    confirmButtonColor: "#3085d6",
                    timer: 1000,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.value) {
                        window.location.href = "../vista/php/listadeUsuarios.php";
                    }
               
                });
            </script>';
            
    }*/
}

 
    ?>

   
</body>
</html>