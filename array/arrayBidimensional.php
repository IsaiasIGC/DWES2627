<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array bidimensional - PHP</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>

    <header>
        <h1>Ejercicios PHP</h1>
        <p>Arrays</p>
    </header>

    <main class="contenedor">
        <h2>Ejercicio 7.0.5 - Array bidimensional</h2>
        <div class="tarjeta">
            <h3>Enunciado</h3>
            <p>
                Rellena un array bidimensional de 6 filas por 9 columnas con números aleatorios comprendidos entre 100 y 999
                (ambos incluidos). Todos los números deben ser distintos, es decir, no se puede repetir ninguno. Muestra a
                continuación por pantalla el contenido del array de tal forma que:
            </p>
            <ul>
                <li>La columna del máximo debe aparecer en azul.</li>
                <li>La fila del mínimo debe aparecer en verde.</li>
                <li>El resto de números deben aparecer en negro.</li>
            </ul>
        </div>

        <?php
            $arrayBidimensional = [];
            $usados = [];
            
            for ($i=0; $i < 6; $i++) { 
                $arrayBidimensional[$i] = [];
                for ($j=0; $j < 9; $j++) { 
                    do {
                        $n = rand(100, 999);
                    } while (in_array($n, $usados));

                    $arrayBidimensional[$i][$j] = $n;
                    $usados[] = $n;
                }
            }

            $maximo = $arrayBidimensional[0][0];
            $minimo = $arrayBidimensional[0][0];

            $filaMaximo = 0;
            $columnaMaximo = 0;

            $filaMinimo = 0;
            $columnaMinimo = 0;

            for ($i = 0; $i < 6; $i++) {
                for ($j = 0; $j < 9; $j++) {

                    if ($arrayBidimensional[$i][$j] > $maximo) {
                        $maximo = $arrayBidimensional[$i][$j];
                        $filaMaximo = $i;
                        $columnaMaximo = $j;
                    }
                    if ($arrayBidimensional[$i][$j] < $minimo) {
                        $minimo = $arrayBidimensional[$i][$j];
                        $filaMinimo = $i;
                        $columnaMinimo = $j;
                    }
                }
            }
        ?>
        <div class="tarjeta">
            <h3>Matriz</h3>
            <table>
                <tbody>
                    <?php
                        for ($i = 0; $i < 6; $i++) {
                            echo "<tr>";
                            for ($j = 0; $j < 9; $j++) {
                                if ($j == $columnaMaximo) {
                                    echo "<td style='background-color: blue; color: white; font-weight: bold;'>";
                                } elseif ($i == $filaMinimo) {
                                    echo "<td style='background-color: green; color: white; font-weight: bold;'>";
                                } else {
                                    echo "<td style='background-color: black; color: white;'>";
                                }
                                echo $arrayBidimensional[$i][$j];
                                echo "</td>";
                            }
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="tarjeta">

            <h3>Resultados</h3>

            <p class="resultado">
                Máximo: <?php echo $maximo; ?><br>
                Fila del máximo: <?php echo ($filaMaximo + 1); ?><br>
                Columna del máximo: <?php echo ($columnaMaximo + 1); ?><br>
                Mínimo: <?php echo $minimo; ?><br>
                Fila del mínimo: <?php echo ($filaMinimo + 1); ?><br>
                Columna del mínimo: <?php echo ($columnaMinimo + 1); ?>
            </p>

        </div>
    </main>

    <footer>
        <p>Ejercicios PHP · DAW</p>
    </footer>
</body>
</html>