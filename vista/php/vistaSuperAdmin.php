<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista del Superadministrador</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
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
                            <form class="d-flex " action="">
                                <input type="text" class="form-control">
                                <button type="button"></button>
                            </form>
                        </li>

                    </ul>
                    
                    <form class="">
                    <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button" id="btSesion">Cerrar Sesión</button>
                    </form>
                </div>

            </div>
        </nav>
        <main class="container">
            <h1>Bienvenido Superadministrador</h1>
            <h2>Lista de Administradores</h2>
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
                    <td><i></i><i></i></td>
                </tr>
            </table>
        </main>
    </div>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>