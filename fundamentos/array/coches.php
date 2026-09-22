<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garaje - PHP</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>

<body>

    <header>
        <h1>Ejercicios PHP</h1>
        <p>Arrays</p>
    </header>

    <main class="contenedor">
        <h2>Ejercicio 7.0.4 - Garaje</h2>
        <div class="tarjeta">
            <h3>Enunciado</h3>
            <p>
                Crea una página llamada coches.php. Define dentro un array bidimensional mixto donde:
                La primera dimensión sea asociativa. Aquí pondremos matrículas de coches. La segunda dimensión será numérica.
                En cada casilla guardaremos la marca, modelo y número de puertas del coche en cuestión. Por ejemplo, el coche
                con matrícula “111BCD” puede ser un “Ford” (casilla 0), modelo “Focus” (casilla 1) de 5 puertas (casilla 2).
                Rellena el array con al menos 3 o 4 coches, y después utiliza las estructuras adecuadas para recorrerlo
                mostrando los datos de los coches ordenados por matrícula.
            </p>
        </div>

        <?php
            $coches = [
                "111BCD" => [
                    0 => "Ford",
                    1 => "Focus",
                    2 => 5
                ],
                "222ABC" => [
                    0 => "Seat",
                    1 => "León",
                    2 => 5
                ],
                "333DEF" => [
                    0 => "Audi",
                    1 => "A3",
                    2 => 3
                ],
            ];

            ksort($coches);
        ?>
        <div class="tarjeta">
            <h3>Garaje:</h3>
            <table>
                <thead>
                    <tr>
                        <th>Matrícula</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Nº de puertas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($coches as $i => $value) {
                            echo "<tr>";
                            echo "<td>" . $i ."</td>";
                            echo "<td>" . $value[0] . "</td>";
                            echo "<td>" . $value[1] . "</td>";
                            echo "<td>" . $value[2] . "</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <p>Ejercicios PHP · DAW</p>
    </footer>
</body>
</html>