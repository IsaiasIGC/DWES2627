<?php

class Libro extends Recursos {
    private $paginas;

    public function __construct($codigo, $titulo, $paginas) {
        parent::__construct($codigo, $titulo);
        $this->paginas = $paginas;
    }

    public function getPaginas() {
        return $this->paginas;
    }

    public function setPaginas($nuevasPaginas) {
        $this->paginas = $nuevasPaginas;
    }

    public function calcularPrecio() {
        $precio = 3.50 + ($this->paginas * 0.05);
        return $precio;
    }

    public function __toString() {
        $texto = parent::__toString();
        $texto .= 'Páginas: ' . $this->paginas . '<br>';
        return $texto;
    }
}

?>