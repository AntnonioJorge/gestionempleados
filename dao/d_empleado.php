<?php
     function mostrarTodosEmpleados($con){
        $sql = "SELECT * FROM empleado";
        $con = $con->query($sql);
        return $con;
    }

    function mostrarEmpleadosId($con, $idEmpleado) {
        // Preparar la consulta SQL
        $sql = "SELECT * FROM empleado WHERE idEmpleado = ?";
        
        // Preparar la declaración
        if ($stmt = $con->prepare($sql)) {
            // Vincular el parámetro
            $stmt->bind_param("i", $idEmpleado); // Suponiendo que idEmpleado es un entero
            
            // Ejecutar la declaración
            $stmt->execute();
            
            // Obtener el resultado
            $resultado = $stmt->get_result();
            
            if ($resultado) {
                return $resultado->fetch_assoc();
            } else {
                return null;
            }
            
            // Cerrar la declaración
            $stmt->close();
        } else {
            // Manejar errores de preparación
            return null;
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
    function insertarEmpleados($conexion,$empleado){
        try{
            $sql="INSERT INTO empleado(nombreEmpleado,apellidosEmpleado,correoEmpleado,salarioEmpleado,edadEmpleado,dipEmpleado,fotoEmpleado)
            VALUES('$empleado->nombreEmpleado','$empleado->apellidosEmpleado','$empleado->correoEmpleado','$empleado->salarioEmpleado','$empleado->edadEmpleado','$empleado->dipEmpleado','$empleado->fotoEmpleado')";
            $sql=$conexion->query($sql);
        }catch(Exception $e){
            echo "error al insertar empleado ".$e;
        }
    }
    function actualizarEmpleado($conexion, $empleado){
        try{
            $sql = "UPDATE empleado SET 
                    nombreEmpleado = '$empleado->nombreEmpleado', 
                    apellidosEmpleado = '$empleado->apellidosEmpleado', 
                    correoEmpleado = '$empleado->correoEmpleado', 
                    salarioEmpleado = '$empleado->salarioEmpleado', 
                    edadEmpleado = '$empleado->edadEmpleado', 
                    dipEmpleado = '$empleado->dipEmpleado'
                    
                    WHERE idEmpleado = '$empleado->idEmpleado'";
            $conexion->query($sql);
            //var_dump($sql);
        } catch(Exception $e) {
            echo "error al actualizar empleado: " . $e->getMessage();
        }
    }

    function buscarEmpleado($con, $texto,$parametro){
        $sql = "SELECT * FROM empleado  WHERE $parametro LIKE '$texto%'";
       
        $con = $con->query($sql);
        
        return $con->fetch_All();
    }
    

    



?>