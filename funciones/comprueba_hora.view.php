<?php

    include("plantilla/encabezado.php");

?>

<main class="contenedor">

    <h2>Ejercicio - Comprobar hora</h2>

    <div class="tarjeta">

        <h3>Enunciado</h3>

        <p>
            Crear una variable de texto con una hora en ella y procesarla
            para extraer por separado la hora, el minuto y el segundo.
            Después, comprobar si la hora es válida.
        </p>

        <p>
            Por ejemplo, <strong>21:30:12</strong> es una hora válida,
            mientras que <strong>12:63:11</strong> no lo es porque 63 no es
            un minuto válido.
        </p>

    </div>

    <div class="tarjeta">

        <h3>Hora introducida</h3>

        <p class="resultado">
            <?php echo $hora; ?>
        </p>

    </div>

    <div class="tarjeta">

        <h3>Resultado</h3>

        <p class="resultado">

            <?php
                if ($horaValida) {
                    echo "La hora es válida.";
                } else {
                    echo "La hora no es válida.";
                }
            ?>

        </p>

    </div>

</main>

<?php

    include("plantilla/pie.php");

?>