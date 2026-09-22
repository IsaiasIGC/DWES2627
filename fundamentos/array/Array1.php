<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 1 - PHP</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>

<body>

    <header>
        <h1>Ejercicios PHP</h1>
        <p>Arrays</p>
    </header>

    <main class="contenedor">
        <h2>Ejercicio 7.0.1 - Array1</h2>
        <div class="tarjeta">
            <h3>Enunciado</h3>
            <p>
                Rellenar un array con 50 números aleatorios comprendidos
                entre 0 y 99 y mostrarlo en una lista desordenada.
            </p>

            <h3>Mejoras</h3>
            <ul>
                <li>Comprobar que los números no existan.</li>
                <li>Ordenar la salida del vector.</li>
                <li>Calcular el mayor.</li>
                <li>Calcular el menor.</li>
                <li>Calcular la media.</li>
            </ul>
        </div>

        <?php
            $numeros = [];

            // Generar 50 números sin repetir
            while (count($numeros) < 50) {
                $numero = rand(0, 99);

                if (!in_array($numero, $numeros)) {
                    $numeros[] = $numero;
                }
            }
            // Hacemos una copia para ordenar
            $numerosOrdenados = $numeros;
            sort($numerosOrdenados);
            // Calcular la suma de los números para la media
            $suma = 0;

            foreach ($numeros as $numero) {
                $suma += $numero;
            }
            // Calcular la media
            $media = $suma / count($numeros);
            // Seleccionamos el menor y el mayor
            $menor = $numerosOrdenados[0];
            $mayor = $numerosOrdenados[count($numerosOrdenados) - 1];

        ?>
        <div class="tarjeta">
            <h3>Números generados</h3>
            <p class="resultado">
                <?php
                    foreach ($numeros as $indice => $numero) {
                        echo $numero;

                        if ($indice < 49) {
                            echo ", ";
                        }
                    }
                ?>
            </p>
        </div>
        <div class="tarjeta">
            <h3>Números generados ordenados</h3>
            <p class="resultado">
                <?php
                    foreach ($numerosOrdenados as $indice => $numero) {
                        echo $numero;

                        if ($indice < 49) {
                            echo ", ";
                        }
                    }
                ?>
            </p>
        </div>
        <div class="tarjeta">
            <h3>Números mayores, menores y media</h3>
            <p class="resultado">
                <?php
                    echo "Menor: " . $menor . "<br>";
                    echo "Mayor: " . $mayor . "<br>";
                    echo "Media: " . $media;
                ?>
            </p>
        </div>
    </main>

    <footer>
        <p>Ejercicios PHP · DAW</p>
    </footer>
</body>
</html>