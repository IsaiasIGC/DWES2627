<?php

class Alumno extends Persona {
    private $curso;

    public function __construct($nombre, $edad, $curso) {
        parent::__construct($nombre, $edad);
        $this->curso = $curso;
    }

    public function setCurso($nuevoCurso) {
        $this->curso = $nuevoCurso;
    }

    public function getCurso() {
        return $this->curso;
    }
}

?>