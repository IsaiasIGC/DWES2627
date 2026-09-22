<?php

$titulo = "Ejercicio 1 - Contador PHP";

include("plantilla/encabezado.php");

function cuenta($n1, $n2) {

    for ($i = $n1; $i <= $n2; $i++) {

        echo $i;

        if ($i < $n2) {
            echo ", ";
        }
    }
}

$a = 10;
$b = 20;

?>

<main class="contenedor">

    <h2>Ejercicio 1 - Contador</h2>

    <div class="tarjeta">
        <h3>Enunciado</h3>

        <p>
            Crear una función llamada <strong>cuenta($a, $b)</strong> que reciba dos parámetros
            y vaya contando de un número al otro, separando los números por comas.
            Después, probar la función haciendo que cuente del 10 al 20.
        </p>
    </div>

    <div class="tarjeta">

        <h3>Cuenta de <?= $a . " a " . $b ?></h3>

        <p class="resultado">
            <?php cuenta($a, $b); ?>
        </p>

    </div>

</main>

<?php include("plantilla/pie.php"); ?>