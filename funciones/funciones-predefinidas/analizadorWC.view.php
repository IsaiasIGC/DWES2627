<?php

    $rutaCss = "../../css/styles.css";

    include("../plantilla/encabezado.php");

?>

<main class="contenedor">
    
    <div class="titulo-ejercicio">
        <h2>Ejercicio - Analizador WC</h2>
        <p>Analizar una frase utilizando la función <strong>str_word_count()</strong>.</p>
    </div>

    <div class="tarjeta">
        <h3>Enunciado</h3>
        <p>
            Investigar el funcionamiento de <strong>str_word_count()</strong>
            y volver a realizar el ejercicio anterior utilizando esta función.
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
                <strong>Total de palabras:</strong>
                <?= $totalPalabras ?>
            </p>
            <p>
                <strong>Total de letras:</strong>
                <?= $totalLetras ?>
            </p>
        </div>
    </div>

    <div class="tarjeta">
        <h3>Tamaño de cada palabra</h3>
        <div class="resultado">
            <ul>
                <?php
                    for ($i = 0; $i < count($palabras); $i++) {
                        echo "<li><strong>" . $palabras[$i] . "</strong>: " . $tamanosPalabras[$i] . " caracteres</li>";
                    }
                ?>
            </ul>
        </div>
    </div>
</main>

<?php

    include("../plantilla/pie.php");

?>