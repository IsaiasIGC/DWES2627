<?php
    $frase = "ligar es ser agil";

    function esPalindromo(string $cadena): bool {
        $cadena = str_replace(" ", "", $cadena);

        // Recorremos la mitad de la cadena y comparamos con su espejo
        for ($i=0; $i < strlen($cadena) / 2; $i++) { 
            if ($cadena[$i] != $cadena[strlen($cadena) - 1 - $i]) {
                return false;
            }
        }
        return true;
    }

    $resultado = esPalindromo($frase);

    $titulo = "Ejercicio - Palíndromo";

    include("palindromo.view.php");
?>
