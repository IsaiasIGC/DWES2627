<?php

class Estudiante extends Persona {
    private $numExpediente = 0;

    public function __construct($dni, $nombre, $email, $numExpediente) {
        parent::__construct($dni, $nombre, $email);
        $this->numExpediente = $numExpediente;
    }

    public function setNumExpediente($nuevoNumExpediente) {
        $this->numExpediente = $nuevoNumExpediente;
    }

    public function getNumExpediente() {
        return $this->numExpediente;
    }

    public function Mostrar() {
        return parent::Mostrar()." - ".$this->numExpediente;
    }
}

?>