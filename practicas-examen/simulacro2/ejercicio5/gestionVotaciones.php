<?php

session_start();

$candidatos = [
    "Ana" => 0,
    "Luis" => 0,
    "Marta" => 0
];

// Si no existe la sesion la inicializamos con el array candidatos
if(!isset($_SESSION['votaciones'])) {
    $_SESSION['votaciones'] = $candidatos;
}

function registrarVoto(&$votaciones, $candidato) {
    // Si el candidato existe aumentamos sus votos en 1
    if (isset($votaciones[$candidato])) {
        $votaciones[$candidato] += 1;
        return true;
    } else {
        return false;
    }
}

$isVotoRegistrado = false;

// Si se han enviado los datos necesarios procedemos a realizar el voto
if (isset($_POST['votacion'], $_POST['candidato'])) {
    // Recogemos los calores de la session y del candidato votado
    $votaciones = $_SESSION['votaciones'];
    $candidato = $_POST['candidato'];

    // Registramos el voto
    $isVotoRegistrado = registrarVoto($votaciones, $candidato);

    // Actualizamos la sesion
    $_SESSION['votaciones'] = $votaciones;
}

$totalVotos = 0;

foreach ($_SESSION['votaciones'] as $candidato => $votos) {
    $totalVotos += $votos;
}

include("gestionVotaciones.view.php");

?>