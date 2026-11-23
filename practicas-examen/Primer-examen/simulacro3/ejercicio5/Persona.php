<?php

class Persona {
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function setNombre($nuevoNombre) {
        $this->nombre = $nuevoNombre;
    }
    public function setEdad($nuevaEdad) {
        $this->edad = $nuevaEdad;
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function getEdad() {
        return $this->edad;
    }

    public function __toString() {
        $texto = 'Nombre: ' . $this->nombre . '<br>';
        $texto .= 'Edad: ' . $this->edad . '<br>';
        return $texto;
    }
}


?>