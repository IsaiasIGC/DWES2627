<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio - If Else</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>

<body>
    <header>
        <h1>Ejercicios PHP</h1>
        <p>Elementos básicos del lenguaje</p>
    </header>

    <main class="contenedor">
        <h2>Ejercicio - If Else</h2>

        <div class="tarjeta">
            <h3>Enunciado</h3>
            <p>
                Crear dos variables con dos notas de examen y utilizar
                una estructura if...else para determinar cuál de las dos
                notas es mayor.
            </p>
        </div>

        <?php
            $nota1 = 7.5;
            $nota2 = 8.25;
        ?>

        <div class="resultado">
            <?php
                echo "<h3>Notas: $nota1 y $nota2</h3>";
                if ($nota1 > $nota2) {
                    echo "<p>La nota mayor es: " . $nota1 . "</p>";
                } else {
                    echo "<p>La nota mayor es: " . $nota2 . "</p>";
                }
            ?>
        </div>
    </main>

    <footer>
        <p>Ejercicios PHP · DAW</p>
    </footer>
</body>
</html>