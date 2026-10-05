<?php

    $fichero = "csv/plantillas.csv";
    
    if (!$fp = fopen($fichero, "r")) {
        echo "No se ha podido abrir el archivo";
    } else {
        // Quitamos las cabeceras
        fgets($fp);

        $plantillaATM = [];

        while (!feof($fp)) {
            $linea = fgets($fp);
            
            if ($linea !== false) {
                $datos = explode(",", $linea);

                // Si juega en el atletico de madrid lo guardamos
                if ($datos[1] == "Atlético de Madrid") {
                    // Creamos un array asociativo y lo almacenamos en una array con los datos mas relevantes del jugador
                    $jugador = [
                        "apodo" => $datos[3],
                        "nombre" => $datos[4],
                        "apellidos" => $datos[5],
                        "edad" => $datos[7],
                        "pais" => $datos[9],
                        "posicion" => $datos[10],
                        "dorsal" => $datos[11],
                        "pj" => $datos[12] // pj = partidos jugados
                    ];

                    $plantillaATM[] = $jugador;
                }
            }
        }

        // Ordenamos la plantilla por dorsales
        usort($plantillaATM, function ($jugador1, $jugador2) {
            // Comparamos dorsales
            if ($jugador1["dorsal"] > $jugador2["dorsal"]) {
                return 1;
            } elseif ($jugador1["dorsal"] < $jugador2["dorsal"]) {
                return -1;
            } else {
                return 0;
            }
        });

        fclose($fp);
    }

    $titulo = "Ejercicio - Plantillas";

    include("plantillas.view.php");
?>