<?php

class Software {
    private $codigo = 0;
    private $titulo = "";
    private $version = "";

    public function __construct($codigo, $titulo, $version) {
        $this->codigo = $codigo;
        $this->titulo = $titulo;
        $this->version = $version;
    }
    
    public function __get($nombre) {
        if ($nombre == 'Cod')
            return $this->codigo;
        else if ($nombre == 'Titulo')
            return $this->titulo;
        else if ($nombre == 'Version')
            return $this->version;
    }

    public function __set($nombre, $valor) {
        if ($nombre == 'Cod' && $valor > 0)
            $this->codigo = $valor;
        else if ($nombre == 'Titulo')
            $this->titulo = $valor;
        else if ($nombre == 'Version')
            $this->version = $valor;
    }

    public function __toString() {
        $texto = 'Código: ' . $this->codigo . '<br>';
        $texto .= 'Título: ' . $this->titulo . '<br>';
        $texto .= 'Version: ' . $this->version . '<br>';
        return $texto;
    }
}

?>