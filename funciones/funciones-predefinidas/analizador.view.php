<?php

    $rutaCss = "../../css/styles.css";

    include("../plantilla/encabezado.php");

?>

<main class="contenedor">
    <div class="titulo-ejercicio">
        <h2>Ejercicio - Analizador</h2>
        <p>Analizar una frase y mostrar información sobre sus palabras y caracteres.</p>
    </div>

    <div class="tarjeta">
        <h3>Enunciado</h3>
        <p>
            A partir de una frase con palabras separadas por espacios,
            mostrar el número total de letras, la cantidad de palabras
            y el tamaño de cada palabra.
        </p>
    </div>

    <div class="tarjeta">
        <h3>Resultado</h3>
        <div class="resultado">
            <p><strong>Frase:</strong><?= $frase ?></p>
            <p><strong>Total de palabras:</strong><?= $totalPalabras ?></p>
            <p><strong>Total de letras:</strong><?= $totalLetras ?></p>
        </div>
    </div>

    <div class="tarjeta">
        <h3>Tamaño de cada palabra</h3>
        <div class="resultado">
            <ul>
                <?php
                    for ($i = 0; $i < count($fraseSeparadaPorPalabras); $i++) {
                        echo "<li><strong>" . $fraseSeparadaPorPalabras[$i] . "</strong>: " . $tamanosPalabras[$i] . " caracteres</li>";
                    }
                ?>
            </ul>
        </div>
    </div>
</main>

<?php

    include("../plantilla/pie.php");

?>