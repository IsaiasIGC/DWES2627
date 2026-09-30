<?php

    $rutaCss = "../../css/styles.css";
    include("../plantilla/encabezado.php");

?>

<main class="contenedor">

    <div class="titulo-ejercicio">

        <h2>Ejercicio - Frase Impares</h2>

        <p>Obtener una nueva frase con los caracteres de las posiciones impares.</p>

    </div>

    <div class="tarjeta">

        <h3>Enunciado</h3>

        <p>
            Leer una frase y devolver una nueva con solo los caracteres
            que se encuentran en las posiciones impares.
        </p>

    </div>

    <div class="tarjeta">

        <h3>Resultado</h3>

        <p>
            <strong>Frase original:</strong>
            <?= $frase ?>
        </p>

        <p class="resultado">
            <strong>Caracteres de posiciones impares:</strong>
            <?= $fraseImpares ?>
        </p>

    </div>

</main>

<?php

    include("../plantilla/pie.php");

?>