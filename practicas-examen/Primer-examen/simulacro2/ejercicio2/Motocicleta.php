<?php

class Motocicleta extends Vehiculo {
    private $cilindrada = 0;

    public function __construct($marca, $modelo, $cilindrada) {
        parent::__construct($marca, $modelo);
        $this->cilindrada = $cilindrada;
    }

    public function setCilindrada($nuevaCilindrada) {
        $this->cilindrada = $nuevaCilindrada;
    }

    public function getCilindrada() {
        return $this->cilindrada;
    }

    public function Mostrar() {
        return parent::Mostrar()." - ".$this->cilindrada." cc";
    }
}

?>