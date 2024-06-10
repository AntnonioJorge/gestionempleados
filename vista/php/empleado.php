<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Empleado</title>
    
</head>
<body>
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

        <label for="rol">Rol:</label>
        <input type="text" id="rol" name="rol" required><br>

        <label for="foto">foto:</label>
        <input type="file" id="foto" name="foto" ><br>

        <button type="submit">Registrar</button>
    </form>
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/empleado.js">
    
    </script>
</body>
</html>
