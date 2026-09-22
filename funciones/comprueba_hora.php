<?php
    $titulo = "Ejercicio - Mayor PHP";

    include("plantilla/encabezado.php");

    $hora = "21:30:12";

    $partes = explode(":", $hora);

    function mayor(): int {
        $numeros = func_get_args();
        $mayor = $numeros[0];

        for ($i=0; $i < count($numeros); $i++) { 
            if ($numeros[$i] > $mayor) {
                $mayor = $numeros[$i];
            }
        }

        return $mayor;
    }
    $resultado = mayor(5, 12, 3, 21, 13);
?>

<main class="contenedor">
    <h2>Ejercicio - Mayor</h2>

    <div class="tarjeta">
        <h3>Enunciado</h3>
        <p>
            Crear una función que devuelva el mayor de todos los números
            recibidos como parámetros variables utilizando
            <code>func_get_args()</code> y sin utilizar la función <code>max()</code>.
        </p>
    </div>

    <div class="tarjeta">
        <h3>Números recibidos</h3>
        <p class="resultado">
            5, 12, 3, 21, 13
        </p>
    </div>

    <div class="tarjeta">
        <h3>Resultado</h3>
        <p class="resultado">
            El número mayor es: <?php echo $resultado; ?>
        </p>
    </div>
</main>

<?php

    include("plantilla/pie.php");

?>