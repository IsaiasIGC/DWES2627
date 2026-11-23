<?php

class Software {
    private $codigo;
    private $titulo;

    public function __construct($codigo, $titulo) {
        $this->codigo = $codigo;
        $this->titulo = $titulo;
    }

    public function __get($nombre) {
        if ($nombre == 'Cod')
            return $this->codigo;
        else if ($nombre == 'Titulo')
            return $this->titulo;
    }

    public function __set($nombre, $valor) {
        if ($nombre == 'Cod' && $valor > 0)
            $this->codigo = $valor;
        else if ($nombre == 'Titulo')
            $this->titulo = $valor;
    }

    public function __toString() {
        $texto = 'Codigo: ' . $this->codigo . '<br>';
        $texto .= 'Titulo: ' . $this->titulo . '<br>';
        return $texto;
    }
}

?>