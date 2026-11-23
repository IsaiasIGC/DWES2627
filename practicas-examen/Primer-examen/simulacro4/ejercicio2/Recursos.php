<?php

abstract class Recursos {
    protected $codigo;
    protected $titulo;

    public function __construct($codigo, $titulo) {
        $this->codigo = $codigo;
        $this->titulo = $titulo;
    }

    public function getCodigo() {
        return $this->codigo;
    }
    public function getTitulo() {
        return $this->titulo;
    }

    public function setCodigo($nuevoCodigo) {
        $this->codigo = $nuevoCodigo;
    }
    public function setTitulo($nuevoTitulo) {
        $this->titulo = $nuevoTitulo;
    }

    abstract public function calcularPrecio();

    public function __toString() {
        $texto = 'Codigo: ' . $this->codigo . '<br>';
        $texto .= 'Título: ' . $this->titulo . '<br>';
        $texto .= 'Precio: ' . $this->calcularPrecio() . '€<br>';
        return $texto;
    }

}

?>