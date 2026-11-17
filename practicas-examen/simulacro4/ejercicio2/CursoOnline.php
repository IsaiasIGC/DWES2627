<?php

class CursoOnline extends Recursos {
    private $horas;

    public function __construct($codigo, $titulo, $horas) {
        parent::__construct($codigo, $titulo);
        $this->horas = $horas;
    }

    public function __get($name) {
        if ($name == 'Horas') return $this->horas;
    }

    public function __set($name, $value) {
        if ($name == 'Horas' && $value > 0) {
            $this->horas = $value;
        }
    }

    public function calcularPrecio() {
        $precio = $this->horas * 15;
        return $precio;
    }

    public function __toString() {
        $texto = parent::__toString();
        $texto .= 'Horas: ' . $this->horas . '<br>';
        return $texto;
    }
}

?>