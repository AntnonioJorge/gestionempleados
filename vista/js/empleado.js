$(document).ready(function() {
    $("#FormularioEmpleado").submit(function(event) {
        event.preventDefault();

        var formData = new FormData();
        formData.append("foto",$("#foto")[0].files[0]);
        formData.append("nombre",$("#nombre").val());
        formData.append("apellidos",$("#apellidos").val());
        formData.append("correo",$("#correo").val());
        formData.append("salario",$("#salario").val());
        formData.append("dip",$("#dip").val());
        formData.append("edad",$("#edad").val());
       // formData.append("rol",$("#rol").val());

        $.ajax({
            url: "../../controlador/c_empleado.php",
            type: "POST",
            data: formData,
            processData:false,
            contentType:false,
            cache:false,
            success: function(data) {
                
                    alert("naaa" + data);
                
            },
            error: function(xhr, status, error) {
                alert("Error inesperado: " + error);
            }
        });
    });
});