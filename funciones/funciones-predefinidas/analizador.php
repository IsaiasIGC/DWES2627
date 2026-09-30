<?php
    $frase = "Hola que tal";

    $fraseSeparadaPorPalabras = explode(" ", $frase);
    $fraseSeparadaPorLetras = str_split($frase);

    $totalPalabras = count($fraseSeparadaPorPalabras);
    $totalLetras = 0;

    for ($i=0; $i < count($fraseSeparadaPorLetras); $i++) {
        // Si es impar entonces concatenamos las letras
        if ($fraseSeparadaPorLetras[$i] != " ") {
            $totalLetras++;
        }
    }

    $tamanosPalabras = [];
    for ($i = 0; $i < count($fraseSeparadaPorPalabras); $i++) {
        $tamanosPalabras[] = strlen($fraseSeparadaPorPalabras[$i]);
    }

    $titulo = "Ejercicio - Analizador";

    include("analizador.view.php");
?>
