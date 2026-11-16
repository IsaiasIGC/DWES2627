<?php

abstract class CocheAbstract {
    protected $potencia = 0;

    public function getRuedas() {
        return 4;
    }

    abstract public function setPotencia($potencia);

    abstract public function getPotencia();
}

?>