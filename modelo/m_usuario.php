<?php
class Usuario {
    public $idUsuario;
    public $nombreUsuario;
    public $contraseñaUsuario;
    public $rol;
   
    // Constructor opcional para inicializar las variables
    public function __construct($idUsuario,$nombreUsuario, $contraseñaUsuario, $rol) {
        $this->idUsuario = $idUsuario;
        $this->nombreUsuario = $nombreUsuario;
        $this->contraseñaUsuario = $contraseñaUsuario;
        $this->rolUsuario = $$rol;
    }


}

?>
