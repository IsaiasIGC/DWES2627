<?php

$agenda = [
    "611111111" => "Ana",
    "622222222" => "Luis",
    "633333333" => "Marta"
];

function agregarContacto(&$agenda, $telefono, $nombre) {
    // Si ya existe no se añade, si no entonces se añade
    if (isset($agenda[$telefono])) {
        return false;
    } else {
        $agenda[$telefono] = $nombre;
        return true;
    }
}

function eliminarContacto(&$agenda, $telefono) {
    // Si existe se elimina, si no devolvemos false
    if (isset($agenda[$telefono])) {
        unset($agenda[$telefono]);
        return true;
    } else {
        return false;
    }
}

function buscarContacto($agenda, $telefono) {
    // Si existe devolvemos el nombre del contacto, si no false
    if (isset($agenda[$telefono])) {
        return $agenda[$telefono];
    } else {
        return false;
    }
}

include("agendaTelefonica.view.php");

?>