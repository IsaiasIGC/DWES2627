<?php

class Persona {
    private $dni = "";
    private $nombre = "";
    private $email = "";

    public function __construct($dni, $nombre, $email) {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function setDni($nuevoDni) {
        $this->dni = $nuevoDni;
    }
    public function setNombre($nuevoNombre) {
        $this->nombre = $nuevoNombre;
    }
    public function setEmail($nuevoEmail) {
        $this->email = $nuevoEmail;
    }

    public function getDni() {
        return $this->dni;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getEmail() {
        return $this->email;
    }

    public function Mostrar() {
        return $this->dni." - ".$this->nombre." - ".$this->email;
    }
}

?>