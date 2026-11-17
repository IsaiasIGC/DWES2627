<?php

class Libro extends Recurso {

    public function __construct($nombre) {
        parent::__construct($nombre);
    }

    public function mostrarTipo() {
        return "Libro<br>";
    }
}

?>