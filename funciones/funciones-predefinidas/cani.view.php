<?php

    $rutaCss = "../../css/styles.css";

    include("../../plantilla/encabezado.php");

?>

<main class="contenedor">
    <div class="titulo-ejercicio">
        <h2>Ejercicio - Cani</h2>
        <p>Transformar una cadena de texto al estilo cani.</p>
    </div>

    <div class="tarjeta">
        <h3>Enunciado</h3>
        <p>
            Escribir una función que transforme una cadena en cani,
            alternando mayúsculas y minúsculas.
        </p>
    </div>

    <div class="tarjeta">
        <h3>Resultado</h3>
        <div class="resultado">
            <p>
                <strong>Frase original:</strong>
                <?= $frase ?>
            </p>
            <p>
                <strong>Frase en cani:</strong>
                <?= $fraseCani ?>
            </p>
        </div>
    </div>
</main>

<?php

    include("../../plantilla/pie.php");

?>