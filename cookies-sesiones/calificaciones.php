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

    // Si no existe la sesion la inicializamos
    if (!isset($_SESSION['lista_alumnos'])) {
        $_SESSION['lista_alumnos'] = $alumnosIniciales;
    }

    // Recuperamos los valores de alumnos de la sesion
    $alumnos = $_SESSION['lista_alumnos'];

    // El formulario se ha enviado?
    if (isset($_POST['anadir'])) {
        // Si no existen los datos del alumno los guardamos en la lista de alumnos
        if (isset($_POST['nombre'], $_POST['nota1'], $_POST['nota2'], $_POST['nota3'])) {
            $nombre = $_POST['nombre'];
            $nota1 = doubleval($_POST['nota1']);
            $nota2 = doubleval($_POST['nota2']);
            $nota3 = doubleval($_POST['nota3']);

            // Validamos la entrada de las notas
            if ($nota1 >= 0 && $nota1 <= 10 &&
                    $nota2 >= 0 && $nota2 <= 10 &&
                    $nota3 >= 0 && $nota3 <= 10) {

                // Creamos el nuevo alumno
                $nuevoAlumno = [
                    'nombre' => $nombre,
                    'nota1' => $nota1,
                    'nota2' => $nota2,
                    'nota3' => $nota3
                ];

                // Añadimos el nuevo alumno al array de alumnos
                array_push($alumnos, $nuevoAlumno);

                $_SESSION['lista_alumnos'] = $alumnos;
            }
        }
    }

    // Se ha pulsado el boton de borrar datos?
    if (isset($_POST['borrar'])) {
        // Borramos los alumnos
        $alumnos = [];

        // Actualizamos la session
        $_SESSION['lista_alumnos'] = $alumnos;
    }

    // Calculamos las medias de los alumnos
    $medias = [];

    foreach ($alumnos as $alumno) {
        $acumulador = $alumno['nota1'] + $alumno['nota2'] + $alumno['nota3'];

        $media = round($acumulador / 3, 2);

        $medias[] = $media;
    }

    include("calificaciones.view.php");
?>