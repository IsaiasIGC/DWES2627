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
        for ($i = $cant; $i > 0; $i--) {
            $num = intdiv($num, 10);
        }
        return $num;
    }

    function quitaPorDelante(int $num, int $cant): int {
        $num = substr($num, $cant);
        return (int) $num;
    }

    // Datos para probar las funciones
    $num = 123456;

    // Resultados
    $cantidadDigitos = digitos($num);

    $pos = 3;
    $digito = digitoN($num, $pos);

    $cantDetras = 2;
    $resultadoDetras = quitaPorDetras($num, $cantDetras);

    $cantDelante = 2;
    $resultadoDelante = quitaPorDelante($num, $cantDelante);


    $titulo = "Ejercicio - Matemáticas";
    $rutaCss = "../css/styles.css";

    include("matematicas.view.php");

?>