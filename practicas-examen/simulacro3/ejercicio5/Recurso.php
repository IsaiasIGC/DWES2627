<?php

abstract class Recurso {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    abstract function mostrarTipo();
}

?>