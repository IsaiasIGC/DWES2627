<?php

class Coche extends Vehiculo {
    private $numPuertas = 0;

    public function __construct($marca, $modelo, $numPuertas) {
        parent::__construct($marca, $modelo);
        $this->numPuertas = $numPuertas;
    }

    public function setNumPuertas($nuevoNumPuertas) {
        $this->numPuertas = $nuevoNumPuertas;
    }

    public function getNumPuertas() {
        return $this->numPuertas;
    }

    public function Mostrar() {
        return parent::Mostrar()." - ".$this->numPuertas.(($this->numPuertas == 1) ? " puerta" : "puertas");
    }
}

?>