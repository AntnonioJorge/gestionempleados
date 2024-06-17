<?php
session_start();
if(isset($_SESSION["nombre"])){?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista del administrador</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sweetalert2.min.css">
    <script src="../js/all.min.js"></script>
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
                            <button class="btn btn-success" aria-current="page" onclick="document.getElementById('modal_empleado').showModal()">Crear Empleado</button>
                        </li>
                        
                        <li>
                            <form class="d-flex " action="">
                                <input type="text" class="form-control">
                                <button type="button"></button>
                            </form>
                        </li>

                    </ul>
                    
                    <form class="">
                    <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button" onclick="window.location.href='../../index.php?cerrar'" id="btSesion">Cerrar Sesión</button>
                    </form>
                </div>

            </div>
        </nav>
        <?php
        include ("../../dao/d_conexion.php");
        include ("../../dao/d_empleado.php");
        $bdd = conectar("localhost", "root", "","gestionempleado");
        $empleados= mostrarTodosEmpleados($bdd);

        if (isset($_GET['idEmpleadoEliminar'])) {
            // Verificar si el usuario realmente desea eliminar el empleado
            $confirmarEliminacion = isset($_GET['confirmarEliminacion']) && $_GET['confirmarEliminacion'] === 'true';

            if ($confirmarEliminacion) {
                if (eliminarEmpleados($bdd, $_GET['idEmpleadoEliminar'])) {
                    echo '
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                Swal.fire({
                                    icon: "success",
                                    title: "¡El empleado ha sido eliminado correctamente!",
                                    showConfirmButton: false,
                                    timer: 2000
                                }).then(function() {
                                    window.location.href = "vistaAdmin.php"; // Redirige a la lista de empleados después de la notificación
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
                                title: "¿Estás seguro de que deseas eliminar este empleado?",
                                text: "Esta acción es irreversible.",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#3085d6",
                                cancelButtonColor: "#d33",
                                confirmButtonText: "Sí, eliminar",
                                cancelButtonText: "Cancelar"
                            }).then(function(result) {
                                if (result.value) {
                                    window.location.href = "vistaAdmin.php?idEmpleadoEliminar=' . $_GET['idEmpleadoEliminar'] . '&confirmarEliminacion=true";
                                }
                            });
                        });
                    </script>
                ';
            }
        }
        ?>
        <main class="container">
            <h1>Bienvenido <?php echo $_SESSION["nombre"]; ?></h1>
            <h2>Lista de Empleados</h2>
            <table class="table table-dark table-bordered mt-3">

            <thead>
                <tr>
                    <td>Foto</td>
                    <td>Nombre</td>
                    <td>Apellidos</td>
                    <td>Correo</td>
                    <td>Dip</td>
                    <td hidden>Rol</td>
                    <td>Salario</td>
                    <td>Edad</td>
                    <td>Accion</td>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($empleados as $empleado){?>
                <tr>
                    <td > <img style="border:1px solid black; border-radius: 10%" scope="row" alt="" width="80" hight="" src="../img/<?php echo $empleado["fotoEmpleado"]; ?>"> </td>
                    <td><?php echo $empleado["nombreEmpleado"];?> </td>
                    <td><?php echo $empleado["apellidosEmpleado"]; ?></td>
                    <td><?php echo $empleado["correoEmpleado"]; ?></td>
                    <td><?php echo $empleado["dipEmpleado"]; ?></td>
                    <td hidden><?php echo $empleado["rolEmpleado"]; ?></td>
                    <td><?php echo $empleado["salarioEmpleado"]; ?></td>
                    <td><?php echo $empleado["edadEmpleado"]; ?></td>
                    <td>
                        <a class="btn btn-warning btn-sm " href="actualizarEmpleado.php?idEmpleadoActualizar=<?php echo $empleado['idEmpleado'];?>"><i class="fa-regular fa-edit"></i></a> 
                        <a class="btn btn-sm btn-danger" href="vistaAdmin.php?idEmpleadoEliminar=<?php echo $empleado['idEmpleado'];?> id='btnEliminar' value='empleado'"> <i class="fa-regular fa-trash-can"></i></a>
                    </td>
        
                </tr>
                <?php
                }             
            ?>
            </table>
            <dialog id="modal_empleado">
                <h1>Registro de Empleado</h1>
                <form id="FormularioEmpleado" >
                

                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required><br>

                    <label for="apellidos">Apellidos:</label>
                    <input type="text" id="apellidos" name="apellidos" required><br>

                    <label for="correo">Correo:</label>
                    <input type="email" id="correo" name="correo" required><br>

                    <label for="salario">Salario:</label>
                    <input type="text" id="salario" name="salario" required><br>

                    <label for="DIP">DIP:</label>
                    <input type="text" id="dip" name="dip" required><br>

                    <label for="edad">Edad:</label>
                    <input type="number" id="edad" name="edad" required><br>

                    <!-- <label for="rol">Rol:</label>
                    <input type="text" id="rol" name="rol" required><br> -->

                    <label for="foto">foto:</label>
                    <input type="file" id="foto" name="foto" ><br>

                    <button type="submit">Registrar</button>
                    
                    <input type="reset" value="Cancelar">
                </form>
            </dialog>
        </main>
    </div>

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/empleado.js"></script>
</body>
</html>
<?php 
    } 
        ?>