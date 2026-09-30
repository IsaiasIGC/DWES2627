<?php
    $frase = "Que tal";

    $fraseSeparada = str_split($frase);
    $fraseImpares = "";

    // Inicializamos en 1 para hacer visible solo la concatenacion de impares
    for ($i=1; $i <= count($fraseSeparada); $i++) {
        // Si es impar entonces concatenamos las letras
        if ($i % 2 != 0) {
            $fraseImpares .= $fraseSeparada[$i - 1];
        }
    }

    $titulo = "Ejercicio - Frase Impares";

    include("fraseImpares.view.php");
?>
