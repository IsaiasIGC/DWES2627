<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio - If Elseif Else</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <header>
        <h1>Ejercicios PHP</h1>
        <p>Elementos básicos del lenguaje</p>
    </header>

    <main class="contenedor">
        <h2>Ejercicio - If Elseif Else</h2>

        <div class="tarjeta">
            <h3>Enunciado</h3>
            <p>
                Modificar el ejercicio anterior añadiendo una tercera nota
                y determinar cuál de las tres notas es la mayor utilizando
                una estructura if..elseif..else.
            </p>
        </div>

        <?php
            $nota1 = 7.5;
            $nota2 = 8.25;
            $nota3 = 6.75;
        ?>

        <div class="resultado">
            <?php
                echo "<h3>Notas: $nota1 , $nota2 y $nota3</h3>";
                if ($nota1 >= $nota2 && $nota1 >= $nota3) {
                    echo "<p>La nota mayor es: " . $nota1 . "</p>";
                } elseif ($nota2 >= $nota1 && $nota2 >= $nota3) {
                    echo "<p>La nota mayor es: " . $nota2 . "</p>";
                } else {
                    echo "<p>La nota mayor es: " . $nota3 . "</p>";
                }
            ?>
        </div>
    </main>

    <footer>
        <p>Ejercicios PHP · DAW</p>
    </footer>
</body>
</html>