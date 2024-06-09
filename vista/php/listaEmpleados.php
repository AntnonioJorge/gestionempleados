<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="../css/sweetalert2.min.css">

    <!-- SweetAlert2 JS -->
    <script src="../js/sweetalert2.all.min.js"></script>

    <title>Lista de los empleados</title>
</head>
<body>
    <?php
        include ("../../dao/conexion.php");
        include ("../../dao/empleado.php");
        echo "hola empleado";
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
                            window.location.href = "listaEmpleados.php"; // Redirige a la lista de empleados después de la notificación
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
                            window.location.href = "listaEmpleados.php?idEmpleadoEliminar=' . $_GET['idEmpleadoEliminar'] . '&confirmarEliminacion=true";
                        }
                    });
                });
            </script>
        ';
    }
}

        
        
        

        ?>
        <table>
    <caption>Lista de todos los empleados</caption>
    <thead>
        <tr>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Correo</td>
            <td>Dip</td>
            <td>Rol</td>
            <td>Salario</td>
            <td>Actualizar</td>
            <td>Eliminar</td>
        </tr>
    </thead>
    <tbody>

    <?php
        foreach($empleados as $empleado){?>
    
    <tr>
       
        <td><?php echo $empleado["nombreEmpleado"]; ?></td>
        <td><?php echo $empleado["apellidosEmpleado"]; ?></td>
        <td><?php echo $empleado["correoEmpleado"]; ?></td>
        <td><?php echo $empleado["dipEmpleado"]; ?></td>
        <td><?php echo $empleado["rolEmpleado"]; ?></td>
        <td><?php echo $empleado["salarioEmpleado"]; ?></td>
       
        <td>
            <a href="listaEmpleados.php?idEmpleadoActualizar=<?php echo $empleado['idEmpleado'];?>">Actualizar</a>
        </td>
        
        <td>
            <a href="listaEmpleados.php?idEmpleadoEliminar=<?php echo $empleado['idEmpleado'];?> id='btnEliminar' value='empleado'">Eliminar</a>
        </td>

    
    <?php
        }             
    ?>







    <script src="../js/script.js"></script>
</body>
</html>