$(document).ready(function() {
    $("#FormularioUsuario").submit(function(event) {
        event.preventDefault();

        var formData = new FormData();
        formData.append("nombre",$("#nombre").val());
        formData.append("contrasena",$("#contraseña").val());
        formData.append("rol",$("#rol").val());
        formData.append("registrar",$("#btnregistrar").val());

        $.ajax({
            url: "../../controlador/c_usuario.php",
            type: "POST",
            data: formData,
            
            success: function(data) {
                
                    alert(data);
                
            },
            error: function(xhr, status, error) {
                alert("Error inesperado: " + error);
            }
        });
    });
});