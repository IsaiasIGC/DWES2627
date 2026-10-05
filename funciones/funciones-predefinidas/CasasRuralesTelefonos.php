<?php

    $fichero = "csv/casas_rurales.csv";
    $descartes = 0;
    
    if (!$fp = fopen($fichero, "r")) {
        echo "No se ha podido abrir el archivo";
    } else {
        // Quitamos las cabeceras
        fgets($fp);

        $casas = [];

        while (!feof($fp)) {
            $linea = fgets($fp);
            
            if ($linea !== false) {
                $datos = explode(";", $linea);

                // Si tiene telefono lo mostramos, sino lo descartamos
                if ($datos[9] != "") {
                    // Creamos un array asociativo y lo almacenamos en una array con los datos seleccionados
                    $casa = [
                        "id" => $datos[0],
                        "localidad" => $datos[1],
                        "nombre" => $datos[3],
                        "telefono" => $datos[9]
                    ];

                    $casas[] = $casa;
                } else {
                    $descartes++;
                }
            }
        }

        fclose($fp);
    }

    $titulo = "Ejercicio - Casas Rurales";

    include("CasasRuralesTelefonos.view.php");
?>