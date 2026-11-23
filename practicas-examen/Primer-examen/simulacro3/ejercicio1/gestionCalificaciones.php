<?php

$alumnos = [
    "Ana" => [7, 8, 6],
    "Luis" => [4, 5, 3],
    "Marta" => [9, 8, 10],
    "Carlos" => [6, 5, 7],
    "Elena" => [3, 4, 5]
];

// Función que devuelve la media aritmética de un alumno
function calcularMedia($notas) {
    $sumaNotas = 0;

    foreach ($notas as $nota) {
        $sumaNotas += $nota;
    }

    $media = $sumaNotas / count($notas);

    return $media;
}

// Función que clasifica a los alumnos segun su resultado
function clasificarAlumnos($alumnos) {
    $resultadosAlumnos = [];

    foreach ($alumnos as $alumno => $notas) {
        $mediaAlumno = calcularMedia($notas);
        
        if ($mediaAlumno >= 5) {
            $resultadosAlumnos[$alumno] = "Aprobado";
        } else {
            $resultadosAlumnos[$alumno] = "Suspenso";
        }
    }

    return $resultadosAlumnos;
}

// ESTADISTICAS
$totalAlumnos = count($alumnos);
$resultadosAlumnos = clasificarAlumnos($alumnos);

$alumnosAprobados = 0;
$alumnosSuspensos = 0;

foreach ($resultadosAlumnos as $alumno => $resultado) {
    if ($resultado == "Aprobado") {
        $alumnosAprobados++;
    } else {
        $alumnosSuspensos++;
    }
}


// Funcion que calcula la media general de una clase
function calcularMediaGeneral($alumnos, $totalAlumnos) {
    $sumaMediaAlumnos = 0;
    
    foreach ($alumnos as $alumno => $notas) {
        $sumaMediaAlumnos += calcularMedia($notas);
    }
    
    $mediaGeneral = $sumaMediaAlumnos / $totalAlumnos;
    
    return $mediaGeneral;
}

$mediaGeneralClase = calcularMediaGeneral($alumnos, $totalAlumnos);

include("gestionCalificaciones.view.php");

?>