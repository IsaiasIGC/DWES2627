<?php
    class Estudiante extends Persona {
        private $numExpediente = 0;

        public function __construct($dni, $nombre, $email, $numExpediente) {
            parent::__construct($dni, $nombre, $email);
            $this->numExpediente = $numExpediente;
        }

        public function setNumExpediente($newNumExpediente) {
            $this->numExpediente = $newNumExpediente;
        }

        public function getNumExpediente() {
            return $this->numExpediente;
        }

        public function mostrar() {
            return parent::mostrar().' - '.$this->numExpediente;
        }
    }
?>