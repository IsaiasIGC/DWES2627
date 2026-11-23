<?php

class RecursoDuplicadoException extends Exception {
    
}

function registrarRecurso(&$recursos, $recurso) {
    foreach ($recursos as $recursoExistente) {
        if ($recursoExistente->getCodigo() == $recurso->getCodigo()) {
            throw new RecursoDuplicadoException("Este recurso ya existe en los recursos");
        }
    }

    $recursos[] = $recurso;
}

?>