<?php
    session_start();

    // Alumnos predeterminados
    $alumnosIniciales = [
        [
            'nombre' => 'Aitor',
            'nota1' => 6,
            'nota2' => 5,
            'nota3' => 7
        ],
        [
            'nombre' => 'Lucía',
            'nota1' => 8,
            'nota2' => 7,
            'nota3' => 9
        ],
        [
            'nombre' => 'Carlos',
            'nota1' => 4,
            'nota2' => 6,
            'nota3' => 4
        ]
    ];

    // Si la no existe lista_alumnos en la sesion le damos el valor inicial
    if (!isset($_SESSION['lista_alumnos'])) {
        $_SESSION['lista_alumnos'] = $alumnosIniciales;
    }

    // Recuperamos la lista actual de alumnos
    $alumnos = $_SESSION['lista_alumnos'];

    include("calificaciones.view.php");
?>