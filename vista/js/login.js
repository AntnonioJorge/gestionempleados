
$(document).ready(function(){
    $("#Formulario-login").submit(function(event){
        event.preventDefault(); // Evitar el envío del formulario por defecto
        
        var nombre = $("#nombre").val();
        var contraseña = $("#contraseña").val();

        // Expresión regular para validar la contraseña: Al menos 8 caracteres, incluyendo al menos una letra mayúscula, una letra minúscula y un número.
        //var regexContraseña = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

        // if (nombre.trim() == '') {
        //     $(".error").html("Por favor ingresa un nombre de usuario.");
        //     return;
        // }
        // if (!regexContraseña.test(contraseña)) {
        //     $(".error").html("La contraseña debe tener al menos 8 caracteres, incluyendo al menos una letra mayúscula, una letra minúscula y un número.");
        //     return;
        // }

        // Envío de los datos mediante AJAX
        $.ajax({
            type: "POST",
            url: "controlador/c_login.php", // Cambiar esto por la ruta del archivo de procesamiento en el servidor de ivan
            data: {
                nombre: nombre,
                contraseña: contraseña
            },
            success: function(response){
                // Manejar la respuesta del servidor, como redireccionar al usuario o mostrar un mensaje de éxito
                alert(response);
            },
            error: function(xhr, status, error){
                // Manejar errores, como mostrar un mensaje de error al usuario
                alert("Error: " + xhr.responseText);
            }
        });
    });
});

