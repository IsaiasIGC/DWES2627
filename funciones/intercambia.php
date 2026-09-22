<?php

    $titulo = "Ejercicio 2 - Intercambia PHP";

    include("plantilla/encabezado.php");

    function intercambia(&$n1, &$n2) {

        $temporal = $n1;
        $n1 = $n2;
        $n2 = $temporal;
    }

    $a = 10;
    $b = 20;

?>

<main class="contenedor">

    <h2>Ejercicio 2 - Intercambia</h2>

    <div class="tarjeta">

        <h3>Enunciado</h3>

        <p>
            Crear una función llamada <strong>intercambia</strong> que reciba
            dos parámetros numéricos por referencia y que intercambie sus valores.
        </p>

    </div>

    <div class="tarjeta">

        <h3>Valores antes de intercambiar</h3>

        <p class="resultado">
            A: <?php echo $a; ?><br>
            B: <?php echo $b; ?>
        </p>

    </div>

    <?php

        intercambia($a, $b);

    ?>

    <div class="tarjeta">

        <h3>Valores después de intercambiar</h3>

        <p class="resultado">
            A: <?php echo $a; ?><br>
            B: <?php echo $b; ?>
        </p>

    </div>

</main>

<?php

    include("plantilla/pie.php");

?>