<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sweetalert2.min.css">

    <!-- SweetAlert2 JS -->
    <script src="../js/sweetalert2.all.min.js"></script>
    <title>Lista de usuarios</title>
</head>
<body>
    
<?php
        include ("../../dao/d_conexion.php");
        include ("../../dao/d_usuario.php");
        $bdd = conectar("localhost", "root", "","gestionempleado");
        $usuarios= mostrarTodosUsuarios($bdd);
       // $usuariosAEliminar = eliminarUsuario($bdd, $_GET['idUsuarioEliminar']);

        if (isset($_GET['idUsuarioEliminar'])) {
            // Verificar si el usuario realmente desea eliminar el empleado
            $confirmarEliminacion = isset($_GET['confirmarEliminacion']) && $_GET['confirmarEliminacion'] === 'true';

            if ($confirmarEliminacion) {
                if (eliminarUsuario($bdd, $_GET['idUsuarioEliminar'])) {
                    echo '
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                Swal.fire({
                                    icon: "success",
                                    title: "¡El usuario ha sido eliminado correctamente!",
                                    showConfirmButton: false,
                                    timer: 2000
                                }).then(function() {
                                    window.location.href = "listadeUsuarios.php"; // Redirige a la lista de empleados después de la notificación
                                });
                            });
                        </script>
                    ';
                } 
            } else {
                // Mostrar un mensaje de confirmación
                echo '
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            Swal.fire({
                                title: "¿Estás seguro de que deseas eliminar este usuario?",
                                text: "Esta acción es irreversible.",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#3085d6",
                                cancelButtonColor: "#d33",
                                confirmButtonText: "Sí, eliminar",
                                cancelButtonText: "Cancelar"
                            }).then(function(result) {
                                if (result.value) {
                                    window.location.href = "listadeUsuarios.php?idUsuarioEliminar=' . $_GET['idUsuarioEliminar'] . '&confirmarEliminacion=true";
                                }
                            });
                        });
                    </script>
                ';
            }
        }

                
                
                

                ?>
                <table>
            <caption>Lista de todos los usuarios</caption>
            <thead>
                <tr>
                    <td>Nombre</td>
                    <td>Contraseña</td>
                    <td>Rol</td>
                    <td>Actualizar</td>
                    <td>Eliminar</td>
                </tr>
            </thead>
            <tbody>

            <?php
                foreach($usuarios as $us){?>
            
            <tr>
          
                <td><?php echo $us["nombreUsuario"];?> </td>
                <td><?php echo $us["contraseñaUsuario"]; ?></td>
                <td><?php echo $us["rolUsuario"]; ?></td>
            
                <td>
                    <a href="actualizarUsuario.php?idUsuarioActualizar=<?php echo $us['idUsuario'];?>">Actualizar</a>
                </td>
                
                <td>
                    <a href="listadeUsuarios.php?idUsuarioEliminar=<?php echo $us['idUsuario'];?>  ">Eliminar</a>
                </td>

            
            <?php
                }             
            ?>







</body>
</html>