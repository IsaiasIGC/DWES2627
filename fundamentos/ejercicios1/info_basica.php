<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Información básica</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>

<body>
    <header>
        <h1>Ejercicios PHP</h1>
        <p>Elementos básicos del lenguaje</p>
    </header>

    <main class="contenedor">
        <h2>Ejercicio - Información básica con variables</h2>

        <?php
            $nombre = "Isaías";
            $anyoNacimiento = 2000;
        ?>

        <p class="resultado">
            Me llamo <?php echo $nombre; ?> y nací en el año <?php echo $anyoNacimiento; ?>.
        </p>
    </main>

    <footer>
        <p>Ejercicios PHP · 2DAW</p>
    </footer>
</body>
</html>