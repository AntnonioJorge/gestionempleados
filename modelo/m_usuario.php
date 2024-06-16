<?php
class Usuario {
    public $idUsuario;
    public $nombreUsuario;
    public $contraseñaUsuario;
   
    // Constructor opcional para inicializar las variables
    public function __construct($idUsuario,$nombreUsuario, $contraseñaUsuario) {
        $this->idUsuario = $idUsuario;
        $this->nombreUsuario = $nombreUsuario;
        $this->contraseñaUsuario = $contraseñaUsuario;
        
    }


}

?>
