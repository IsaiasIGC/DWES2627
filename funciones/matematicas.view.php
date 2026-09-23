<?php

    include("plantilla/encabezado.php");

?>

<main class="contenedor">

    <h2>Ejercicio - Matemáticas</h2>

    <div class="tarjeta">

        <h3>Enunciado</h3>

        <p>
            Crear las funciones <strong>digitos</strong>,
            <strong>digitoN</strong>, <strong>quitaPorDetras</strong>
            y <strong>quitaPorDelante</strong>.
        </p>

    </div>

    <div class="tarjeta">

        <h3>Resultados</h3>

        <p class="resultado">
            Número: <?php echo $num; ?><br>
            Cantidad de dígitos: <?php echo $cantidadDigitos; ?><br>

            <!-- Aquí mostraremos los demás resultados -->

        </p>

    </div>

</main>

<?php

    include("plantilla/pie.php");

?>