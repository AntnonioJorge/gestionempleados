$(document).ready(function() {
    $("#FormularioEmpleado").submit(function(event) {
        event.preventDefault();

        var formData = {
            idEmpleado: $("#idEmpleado").val(),
            nombre: $("#nombre").val(),
            apellidos: $("#apellidos").val(),
            correo: $("#correo").val(),
            salario: $("#salario").val(),
            DIP: $("#dip").val(),
            edad: $("#edad").val(),
            rol: $("#rol").val(),
            foto: $("#foto").val()
        };

        $.ajax({
            url: "../../controlador/c_empleado.php",
            type: "POST",
            data: formData,
            success: function(data) {
                if (data === "success") {
                    alert("Empleado registrado con éxito!");
                    $("#empleadoForm")[0].reset();
                } else {
                    alert("Error al registrar empleado: " + data);
                }
            },
            error: function(xhr, status, error) {
                alert("Error inesperado: " + error);
            }
        });
    });
});