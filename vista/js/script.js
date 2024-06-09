document.addEventListener('DOMContentLoaded', function() {
    console.log("Estamos dentro");
    if(document.getElementById('btnEliminar') != null){
        var btnEliminar = document.getElementById('btnEliminar');
        btnEliminar.addEventListener('click', function(event) {
            event.preventDefault();
            if(btnEliminar.getAttribute("value") == "empleado"){
                var confirmacion = confirm('¡Atención, se eliminará el empleado!');

            }else{
                var confirmacion = confirm('¡Atención, se eliminará!');
            }

            if (confirmacion) {
                window.location.href = this.href;
            }
        });
    }
});

