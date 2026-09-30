<?php
    $frase = "Hola que tal";

    $totalPalabras = str_word_count($frase);

    $palabras = str_word_count($frase, 1);

    $fraseSinEspacios = str_replace(" ", "", $frase);
    $totalLetras = strlen($fraseSinEspacios);

    // Calculamos el tamaño de cada palabra
    $tamanosPalabras = [];
    for ($i = 0; $i < count($palabras); $i++) {
        $tamanosPalabras[] = strlen($palabras[$i]);
    }

    $titulo = "Ejercicio - Analizador";

    include("analizadorWC.view.php");
?>
