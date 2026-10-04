<?php
    $frase = "Hola que tal";

    function cani(string $cadena): string {
        $resultado = "";

        // Recorremos la cadena y alternamos las mayusculas si es par
        for ($i=0; $i < strlen($cadena); $i++) { 
            if ($i % 2 == 0) {
                $resultado .= strtoupper($cadena[$i]);
            } else {
                $resultado .= strtolower($cadena[$i]);
            }
        }
        return $resultado;
    }

    $fraseCani = cani($frase);

    $titulo = "Ejercicio - Cani";

    include("cani.view.php");
?>
