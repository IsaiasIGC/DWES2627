<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Contadores</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>

<body>

    <header>
        <h1>Ejercicios PHP</h1>
        <p>Elementos básicos del lenguaje</p>
    </header>

    <main class="contenedor">
        <h2>Ejercicio - Contadores</h2>
        <div class="tarjeta">
            <h3>Enunciado</h3>
            <p>
                Modifica el ejercicio anterior y añádele algún h1 y párrafos explicativos a la página, fuera
                del código PHP, explicando lo que se va a hacer
            </p>
        </div>

        <h2>Contadores</h2>
        <div class="tarjeta">

            <h3>Este contador va del 1 al 100:</h3>

            <p>
                A continuación se muestran los números del 1 al 100
                separados por comas.
            </p>

            <div class="resultado">
                <?php

                    for ($i = 1; $i <= 100; $i++) {
                        echo $i;

                        if ($i < 100) {
                            echo ", ";
                        }
                    }

                ?>
            </div>

        </div>

        <div class="tarjeta">

            <h3>Este otro contador va del 10 al 0:</h3>

            <p>
                A continuación se muestra una cuenta atrás desde el 10
                hasta el 0, separando los números mediante guiones.
            </p>

            <div class="resultado">
                <?php

                    $numero = 10;

                    while ($numero >= 0) {
                        echo $numero;

                        if ($numero > 0) {
                            echo "-";
                        }

                        $numero--;
                    }

                ?>
            </div>

        </div>

    </main>

    <footer>
        <p>Ejercicios PHP · DAW</p>
    </footer>

</body>

</html>