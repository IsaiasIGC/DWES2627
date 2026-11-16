<?php

class Vehiculo {
    protected $marca = "";
    protected $modelo = "";

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function setMarca($nuevaMarca) {
        $this->marca = $nuevaMarca;
    }
    public function setModelo($nuevoModelo) {
        $this->modelo = $nuevoModelo;
    }

    public function getMarca() {
        return $this->marca;
    }
    public function getModelo() {
        return $this->modelo;
    }

    public function Mostrar() {
        return $this->marca." - ".$this->modelo;
    }
}

?>