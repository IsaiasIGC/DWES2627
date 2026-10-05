<?php

    $rutaCss = "../../css/styles.css";

    include("../../plantilla/encabezado.php");

?>

<main class="contenedor">

    <div class="titulo-ejercicio">
        <h2>Ejercicio - Palíndromo</h2>
        <p>Comprobar si una palabra o frase es un palíndromo.</p>
    </div>

    <div class="tarjeta">
        <h3>Enunciado</h3>
        <p>
            Escribir una función que devuelva un booleano indicando si una
            palabra o frase es palíndroma, es decir, si se lee igual de
            izquierda a derecha que de derecha a izquierda.
        </p>
    </div>

    <div class="tarjeta">
        <h3>Resultado</h3>
        <div class="resultado">
            <p>
                <strong>Frase:</strong>
                <?= $frase ?>
            </p>
            <p>
                <strong>¿Es palíndromo?</strong>
                <?= $resultado ? "Sí" : "No" ?>
            </p>
        </div>
    </div>
</main>

<?php

    include("../../plantilla/pie.php");

?>