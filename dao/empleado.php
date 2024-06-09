<?php
     function mostrarTodosEmpleados($con){
        $sql = "SELECT * FROM empleado";
        $con = $con->query($sql);
        return $con;
    }

    function actualizarEmpleado($con,$idEmpleado,$nombreEmpleado,$apellidosEmpleado,$correoEmpleado,$salarioEmpleado, $rolEmpleado, $edadEmpleado, $dipEmpleado, $fotoEmpleado)
    {
        try {
            $sql = "UPDATE empleado SET nombreEmpleado = $nombreEmpleado,
            apellidosEmpleado = $apellidosEmpleado, correoEmpleado = $correoEmpleado, salarioEmpleado = $salarioEmpleado, rolEmpleado = $rolEmpleado, edadEmpleado = $edadEmpleado, dipEmpleado = $dipEmpleado, fotoEmpleado = $fotoEmpleado WHERE idEmpleado = $idEmpleado";
            $db->query($sql);
            return true;
        }catch(Exception $e){
            echo "Error al actualizar: " . $e->getMessage();
            return false;
        }
    }


    function eliminarEmpleado($con, $idEmpleado){
       
        $sql = "DELETE FROM empleado where idEmpleado = $idEmpleado";
        $con = $con->query($sql);
        return $con;
       
    }

    function eliminarEmpleados($conexion, $idEmpleado) {
        // Prepara la consulta SQL para eliminar el empleado por su ID
        $sql = "DELETE FROM empleado WHERE idEmpleado = ?";
    
        // Prepara la sentencia
        if ($stmt = $conexion->prepare($sql)) {
            // Vincula el parámetro
            $stmt->bind_param("i", $idEmpleado);
    
            // Ejecuta la consulta
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
    
            // Cierra la sentencia
            $stmt->close();
        } else {
            return false;
        }
    }



?>