<?php
    $hora = "12:63:11";

    $horaSeparada = explode(":", $hora);

    $horaValida = true;

    if (count($horaSeparada) != 3) {
        $horaValida = false;
    } else {
        for ($i=0; $i < count($horaSeparada); $i++) {
            if ($i == 0) {
                // La hora debe estar entre 0 y 23
                if ($horaSeparada[$i] < 0 || $horaSeparada[$i] > 23) {
                    $horaValida = false;
                }
            } else {
                // Minutos y segundos deben estar entre 0 y 59
                if ($horaSeparada[$i] < 0 || $horaSeparada[$i] > 59) {
                    $horaValida = false;
                }
            }
        }
    }

    $titulo = "Ejercicio - Comprobar hora";
    include("comprueba_hora.view.php");
?>
