<?php
    require_once 'Player.php';
    require_once 'Team.php';

    $fichero = '../../funciones/funciones-predefinidas/csv/plantillas.csv';
    if (!($fp = fopen($fichero, "r"))) {
        echo "No se ha podido abrir el archivo";
    } else {
        // Saltamos las cabeceras
        fgetcsv($fp, 0, ",");

        $plantillaATM = [];

        while ($datos = fgetcsv($fp, 0, ",")) {
            // Si juega en el atletico de madrid lo guardamos
            if ($datos[1] == "Atlético de Madrid") {
                $fecha = date("Y-m-d", strtotime(str_replace("/", "-", $datos[6])));

                // Creamos un player y lo almacenamos en el array de la plantilla
                $player = new Player(
                    $datos[3], 
                    $fecha,
                    $datos[9]
                );
                $player->setPosition($datos[10]);
                $player->setDorsal($datos[11]);
                $player->setMatches($datos[12]);
                $player->setMinutes($datos[16]);
                $player->setGoals($datos[17]);
                $player->setYellowCard($datos[18]);
                $player->setRedCard($datos[19]);

                $plantillaATM[] = $player;
            }
        }

        fclose($fp);

        $team = new Team("Atlético de Madrid", $plantillaATM);
    }

    $rutaCss = "../../css/styles.css";
    $titulo = "Plantilla Atlético de Madrid";

    include("../../plantilla/encabezado.php");
?>

<main class="contenedor">
    <div class="tarjeta">
        <?php
            $team->render();
        ?>
    </div>
</main>

<?php

    include("../../plantilla/pie.php");

?>