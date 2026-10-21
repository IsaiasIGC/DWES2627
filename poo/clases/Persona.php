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

        public function setDni($newDni) {
            $this->dni = $newDni;
        }

        public function setNombre($newNombre) {
            $this->nombre = $newNombre;
        }

        public function setEmail($newEmail) {
            $this->email = $newEmail;
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

        public function mostrar() {
            return $this->dni.' - '.$this->nombre.' - '.$this->email;
        }
    }
?>