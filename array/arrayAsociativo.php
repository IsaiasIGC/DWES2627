<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Asociativo - PHP</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>

    <header>
        <h1>Ejercicios PHP</h1>
        <p>Arrays</p>
    </header>

    <main class="contenedor">
        <h2>Ejercicio 7.0.2 - Array Asociativo</h2>
        <div class="tarjeta">
            <h3>Enunciado</h3>
            <p>
                Rellena un array de 100 elementos de manera aleatoria con valores M o F (por ejemplo [“M”, “M”, “F”,
                “M”, …]). Una vez completado, vuelve a recorrerlo y calcula cuantos elementos hay de cada uno de los
                valores almacenando el resultado en un array asociativo [‘M’ => 44, ‘F’ => 66] (no utilices variables
                para contar las M o las F). Finalmente, muestra el resultado por pantalla
            </p>
        </div>

        <?php
            $array = [];

            // Rellenar el array de 100 elementos M o F
            for ($i=0; $i < 100; $i++) { 
                $numero = rand(0, 1);
                if ($numero === 0) {
                    $array[] = 'M';
                } else {
                    $array[] = 'F';
                }
            }

            // Contar cuantas M y F hay
            $conteo = ['M' => 0, 'F' => 0];
            foreach ($array as $valor) {
                if ($valor === 'M') {
                    $conteo['M'] += 1;
                } else {
                    $conteo['F'] += 1;
                }
            }
        ?>
        <div class="tarjeta">
            <h3>Resultado del conteo de 'M' y 'F':</h3>
            <p class="resultado">
                <?php
                    foreach ($conteo as $letra => $cantidad) {
                        echo "$letra: $cantidad<br>";
                    }
                ?>
            </p>
        </div>
    </main>

    <footer>
        <p>Ejercicios PHP · DAW</p>
    </footer>
</body>
</html>