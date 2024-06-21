<?php   
    session_start();

    if(isset($_SESSION["nombre"])){
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista del Superadministrador</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/all.min.js"></script>
    <link rel="stylesheet" href="../css/sweetalert2.min.css">
    <script src="../js/sweetalert2.all.min.js"></script>
</head>
<body>
    <div class="container-fluid vh-100">
        <nav class="navbar navbar-expand-lg navbar-light p-3" id="menu">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item me-4">
                            <button class="btn btn-primary" aria-current="page" href="index.php?vista=home">Crear Administrador</button>
                        </li>
                        
                        <li>
                        <li class="nav-item">
                            <form class="d-flex " action="" method="POST">
                                <input type="text" class="form-control" name="txtBuscarUsuario" placeholder="buscar"  maxlength="30" >
                               
                                <div class="select is-rouded">
                                    <select  class="form-select" aria-label="Default select example" name="opciones" id="opciones">
                                        <option value="nombreUsuario" name="contrasenaUsuario">Por Usuario</option>
                                        <option value="rolUsuario" name="apellido">Por Contraseña</option>
                                        <option value="rolUsuario" name="correo">Por Rol</option>
                                    </select>
                                </div>
                                <button class="btn btn-outline-success" type="Submit" name="buscarUsuario"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </li>
                        </li>

                    </ul>
                    
                    <form class="">
                    <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button" onclick="window.location.href='../../index.php?cerrar'" id="btSesion">Cerrar Sesión</button>
                    </form>
                </div>

            </div>
        </nav>
        <main class="container">
            <h1>Bienvenido Superadministrador</h1>
            <h2>Lista de Administradores</h2>
    <?php
        include ("../../dao/d_conexion.php");
        include ("../../dao/d_usuario.php");
        $bdd = conectar("localhost", "root", "","gestionempleado");
        $usuarios= mostrarTodosUsuarios($bdd);

        if(isset($_POST['buscarUsuario'])){
            $parametro = $_POST['opciones'];
            $texto = $_POST['txtBuscarUsuario'];
            $usuarios=buscarUsuario($bdd, $texto, $parametro);
            

           // header("Location: ../vista/php/vistaAdmin.php");
        }


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
            <table class="table table-dark table-bordered mt-3">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Contraseña</td>
                    <td>Rol</td>
                    <td></td>
                </tr>
            </thead>

                 
                <tbody>
                <?php
                foreach($usuarios as $us){?> 
                    <tr>
                    <td><?php echo $us["idUsuario"];?> </td>
                    <td><?php echo $us["nombreUsuario"];?> </td>
                    <td><?php echo $us["contrasenaUsuario"]; ?></td>
                    <td><?php echo $us["rolUsuario"]; ?></td>
                        
                        <td>
                            <a class="btn btn-warning btn-sm " href="actualizarUsuario.php?idUsuarioActualizar=<?php echo $us['idUsuario'];?>"><i class="fa-regular fa-edit"></i></a> 
                            <a class="btn btn-sm btn-danger" href="vistaSuperAdmin.php?idUsuarioEliminar=<?php echo $us['idUsuario'];?> "> <i class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <?php
                }             
            ?>
                </tbody>      
               
            </table>
            
            <dialog id="modal_actualizar_usuario">
                <form action="../../controlador/c_usuario.php" method="POST">
                    <input type="hidden" value="<?php echo $datos['idUsuario'] ?>" name="idUsuario">
                    <input type="text" placeholder="NombreUsuario" value="<?php echo $datos['nombreUsuario'] ?>" name="nombreUsuario"> <br><br>
                    <input type="password" placeholder="ContrasenaUsuarios"  value="<?php echo $datos['contrasenaUsuario'] ?>" name="contrasenaUsuario"><br><br>
                    <label for="rol">ROL</label>
                    <select name="Rol" id="idRol">
                        <?php
                            foreach($roles as $rol)
                                {
                                ?>
                                    <option value=" <?php echo $rol["idRol"];?>"> 
                                    <?php echo $rol["rolUsuario"];?>
                                    </option>
                                <?php   
                                }
                                ?>
                                    
                                </select>
                    <input type="submit" value=" ACTUALIZAR" name="actualizar">
                    <input type="reset" value="CANCELAR">
            </form>
            </dialog>

        </main>
    </div>


    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
<<<<<<< HEAD

=======
<?php  
    }
?>
>>>>>>> fc8fd12bef7d92edf7d3ed2a68c9254da96c5b9b
