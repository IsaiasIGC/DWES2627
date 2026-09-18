<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio - Array1.php</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <header>
        <h1>Ejercicios PHP</h1>
        <p>Elementos básicos del lenguaje</p>
    </header>

    <main class="contenedor">
        <h2>Array1.php</h2>
        <p>Rellena un array con 50 números aleatorios comprendidos entre el 0 y el 99, y luego muéstralo en una
            lista desordenada.</p>

        <?php
            $numeros = [];
            
            // Rellenamos el array con 50 numeros aleatorios
            for ($i = 0; $i < 50; $i++) { 
                $numeros[] = rand(0, 99);
            }
        ?>

        <div class="resultado">
            <h3>50 Números generados aleatoriamente:</h3>
            <p>
                <?php
                    foreach ($numeros as $i => $numero) {
                        echo $numero;

                        // Los separamos por comas, menos al ultimo
                        if ($i < 49) {
                            echo ", ";
                        } else {
                            echo ".";
                        }
                    }
                ?>
            </p>
        </div>
    </main>

    <footer>
        <p>Ejercicios PHP · 2DAW</p>
    </footer>
</body>
</html>