<?php

$notas = [
    "Ana" => 6,
    "Luis" => 4,
    "Marta" => 9,
    "Carlos" => 7,
    "Elena" => 3
];

$sumaNotas = 0;
$nAlumnosAprobados = 0;

foreach ($notas as $alumno => $nota) {
    // Sumamos todas las notas
    $sumaNotas += $nota;

    // Si está aprobado se acumula
    if ($nota >= 5) {
        $nAlumnosAprobados++;
    }
}

$mediaNotas = doubleval($sumaNotas / count($notas));

function clasificarNotas($notas) {
    $resultados = [];

    $isAprobado = false;

    foreach ($notas as $alumno => $nota) {
        // Asignamos el booleano segun el resultado
        if ($nota >= 5) {
            $isAprobado = true;
        } else {
            $isAprobado = false;
        }

        $resultados[$alumno] = $isAprobado;
    }

    return $resultados;
}


include("instituto.view.php");

?>