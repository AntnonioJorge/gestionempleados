<?php 



class Empleado{

    public $idEmpleado;
    public $nombreEmpleado;
    public $apellidosEmpleado;
    public $correoEmpleado;
    public $salarioEmpleado;
<<<<<<< HEAD
=======
    //public $rolEmpleado;
>>>>>>> a9f726af0866cc740f7ebc2b98c8fd291848e574
    public $edadEmpleado;
    public $dipEmpleado;
    public $fotoEmpleado;

<<<<<<< HEAD
    public function __construct($nombreEmpleado, $apellidosEmpleado, $correoEmpleado, $salarioEmpleado,$edadEmpleado, $dipEmpleado, $fotoEmpleado) {
=======
    public function __construct($nombreEmpleado, $apellidosEmpleado, $correoEmpleado, $salarioEmpleado, /* $rolEmpleado, */ $edadEmpleado, $dipEmpleado, $fotoEmpleado) {
>>>>>>> a9f726af0866cc740f7ebc2b98c8fd291848e574
        $this->nombreEmpleado = $nombreEmpleado;
        $this->apellidosEmpleado = $apellidosEmpleado;
        $this->correoEmpleado = $correoEmpleado;
        $this->salarioEmpleado = $salarioEmpleado;
<<<<<<< HEAD
=======
       // $this->rolEmpleado = $rolEmpleado;
>>>>>>> a9f726af0866cc740f7ebc2b98c8fd291848e574
        $this->edadEmpleado = $edadEmpleado;
        $this->dipEmpleado = $dipEmpleado;
        $this->fotoEmpleado = $fotoEmpleado;
    }

    public function getIdEmpleado() {
        return $this->idEmpleado;
    }

    public function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }

    public function getNombreEmpleado() {
        return $this->nombreEmpleado;
    }

    public function setNombreEmpleado($nombreEmpleado) {
        $this->nombreEmpleado = $nombreEmpleado;
    }

    public function getApellidosEmpleado() {
        return $this->apellidosEmpleado;
    }

    public function setApellidosEmpleado($apellidosEmpleado) {
        $this->apellidosEmpleado = $apellidosEmpleado;
    }

    public function getCorreoEmpleado() {
        return $this->correoEmpleado;
    }

    public function setCorreoEmpleado($correoEmpleado) {
        $this->correoEmpleado = $correoEmpleado;
    }

    public function getSalarioEmpleado() {
        return $this->salarioEmpleado;
    }

    public function setSalarioEmpleado($salarioEmpleado) {
        $this->salarioEmpleado = $salarioEmpleado;
    }

<<<<<<< HEAD
=======
/*     public function getRolEmpleado() {
        return $this->rolEmpleado;
    }

    public function setRolEmpleado($rolEmpleado) {
        $this->rolEmpleado = $rolEmpleado;
    } */
>>>>>>> a9f726af0866cc740f7ebc2b98c8fd291848e574

    public function getEdadEmpleado() {
        return $this->edadEmpleado;
    }

    public function setEdadEmpleado($edadEmpleado) {
        $this->edadEmpleado = $edadEmpleado;
    }

    public function getDipEmpleado() {
        return $this->dipEmpleado;
    }

    public function setDipEmpleado($dipEmpleado) {
        $this->dipEmpleado = $dipEmpleado;
    }

    public function getFotoEmpleado() {
        return $this->fotoEmpleado;
    }

    public function setFotoEmpleado($fotoEmpleado) {
        $this->fotoEmpleado = $fotoEmpleado;
    }
}

class Empleados{

    public $idEmpleado;
    public $nombreEmpleado;
    public $apellidosEmpleado;
    public $correoEmpleado;
    public $salarioEmpleado;
   // public $rolEmpleado;
    public $edadEmpleado;
    public $dipEmpleado;
   // public $fotoEmpleado;

    public function __construct($idEmpleado,$nombreEmpleado, $apellidosEmpleado, $correoEmpleado, $salarioEmpleado, $edadEmpleado, $dipEmpleado /*, $fotoEmpleado */) {
        $this->idEmpleado = $idEmpleado;
        $this->nombreEmpleado = $nombreEmpleado;
        $this->apellidosEmpleado = $apellidosEmpleado;
        $this->correoEmpleado = $correoEmpleado;
        $this->salarioEmpleado = $salarioEmpleado;
       // $this->rolEmpleado = $rolEmpleado;
        $this->edadEmpleado = $edadEmpleado;
        $this->dipEmpleado = $dipEmpleado;
        //$this->fotoEmpleado = $fotoEmpleado;
    }

    public function getIdEmpleado() {
        return $this->idEmpleado;
    }

    public function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }

    public function getNombreEmpleado() {
        return $this->nombreEmpleado;
    }

    public function setNombreEmpleado($nombreEmpleado) {
        $this->nombreEmpleado = $nombreEmpleado;
    }

    public function getApellidosEmpleado() {
        return $this->apellidosEmpleado;
    }

    public function setApellidosEmpleado($apellidosEmpleado) {
        $this->apellidosEmpleado = $apellidosEmpleado;
    }

    public function getCorreoEmpleado() {
        return $this->correoEmpleado;
    }

    public function setCorreoEmpleado($correoEmpleado) {
        $this->correoEmpleado = $correoEmpleado;
    }

    public function getSalarioEmpleado() {
        return $this->salarioEmpleado;
    }

    public function setSalarioEmpleado($salarioEmpleado) {
        $this->salarioEmpleado = $salarioEmpleado;
    }



    public function getEdadEmpleado() {
        return $this->edadEmpleado;
    }

    public function setEdadEmpleado($edadEmpleado) {
        $this->edadEmpleado = $edadEmpleado;
    }

    public function getDipEmpleado() {
        return $this->dipEmpleado;
    }

    public function setDipEmpleado($dipEmpleado) {
        $this->dipEmpleado = $dipEmpleado;
    }

    // public function getFotoEmpleado() {
    //     return $this->fotoEmpleado;
    // }

    // public function setFotoEmpleado($fotoEmpleado) {
    //     $this->fotoEmpleado = $fotoEmpleado;
    // }
}

?>