<?php
session_start();
if(isset($_SESSION["nombre"])){
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista del administrador</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/all.min.js"></script>
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
        <main class="container">
            <h1>Bienvenido <?php echo $_SESSION["nombre"]; ?></h1>
            <h2>Lista de Empleados</h2>
            <table class="table table-dark table-bordered mt-3">
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>apellidos</th>
                    <th>correo</th>
                    <th>salario</th>
                    <th>edad</th>
                    <th>dip</th>
                    <th>foto</th>
                    <th></th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>alex</td>
                    <td>miko</td>
                    <td>1@gnail.es</td>
                    <td>3000 xaf</td>
                    <td>29</td>
                    <td>000.347.774</td>
                    <td><img src="" alt="img"></td>
                    <td><a class="btn btn-warning btn-sm " href=""><i class="fa-regular fa-edit"></i></a> <a class="btn btn-sm btn-danger" href=""> <i class="fa-regular fa-trash-can"></i></a></td>
                </tr>
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

                    <button id="btnregistrar" name="registrar" type="submit">Registrar</button>
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