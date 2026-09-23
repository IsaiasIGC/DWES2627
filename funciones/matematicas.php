<?php

    // Funciones matemáticas
    function digitos(int $num): int {
        $contador = 0;
        while ($num > 0) {
            $num = intdiv($num, 10);
            $contador++;
        }
        return $contador;
    }

    function digitoN(int $num, int $pos): int {
        $cantidadDigitos = digitos($num);
        $veces = $cantidadDigitos - $pos;

        while ($veces > 0) {
            $num = intdiv($num, 10);
            $veces--;
        }

        return $num % 10;
    }
    function quitaPorDetras(int $num, int $cant): int {
        // ...
    }

    function quitaPorDelante(int $num, int $cant): int {
        // ...
    }

    // Datos para probar las funciones
    $num = 123456;

    // Resultados
    $cantidadDigitos = digitos($num);

    // ...

    $titulo = "Ejercicio - Matemáticas";

    include("matematicas.view.php");

?>