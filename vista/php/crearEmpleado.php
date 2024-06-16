<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../formularios.css">
    <title>Registro de Empleado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="file"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 45%;
        }

        #cancelar{
            background-color: red;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 45%;
        }

        button:hover {
            background-color: #218838;
        }

        @media (max-width: 600px) {
            form {
                width: 90%;
            }
        }
    </style>
    
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

        <!-- <label for="rol">Rol:</label>
        <input type="text" id="rol" name="rol" required><br> -->

        <label for="foto">foto:</label>
        <input type="file" id="foto" name="foto" ><br>

        <button type="submit" name="actualizar">Registrar</button>
        <button type="reset" id="cancelar">Cancelar</button>
    </form>
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/empleado.js">
    
    </script>
</body>
</html>
