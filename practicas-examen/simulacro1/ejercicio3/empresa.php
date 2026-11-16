<?php

$trabajadores = [
    "Ana" => 1500,
    "Luis" => 1200,
    "Marta" => 1800
];

// Si el formulario se ha enviado con los respectivos datos
if (isset($_POST['anadir']) && isset($_POST['nombre'], $_POST['sueldoBase'], $_POST['nHijos'])) {
    // Recogemos los datos del nuevo trabajador
    $nombre = $_POST['nombre'];
    $sueldoBase = $_POST['sueldoBase'];
    $numHijos = $_POST['nHijos'];

    $sueldoFinal = calcularSueldo($sueldoBase, $numHijos);
}

function calcularSueldo($sueldoBase, $numHijos) {
    $sueldoFinal = 0;

    switch ($numHijos) {
        case 0:
            $sueldoFinal = $sueldoBase;
            break;
        case 1:
            $sueldoFinal = $sueldoBase + 50;
            break;
        case 2:
            $sueldoFinal = $sueldoBase + 100;
            break;
        default:
            $sueldoFinal = $sueldoBase + 150;
            break;
    }

    return $sueldoFinal;
}

include("empresa.view.php");

?>