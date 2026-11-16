<?php

class Audi extends CocheAbstract {
    public function setPotencia($potencia) {
        $this->potencia = $potencia;
    }

    public function getPotencia() {
        return $this->potencia;
    }
}

?>