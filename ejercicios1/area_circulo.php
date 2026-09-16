<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículum - PHP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <h1>Ejercicios PHP</h1>
        <p>Elementos básicos del lenguaje</p>
    </header>

    <main class="contenedor">
        <h2>Ejercicio - Área de un círculo</h2>

        <?php
            // Variables PI y radio
            define('PI', 3.1416);
            $radio = 3.5;
            // Area
            $areaCirculo = PI * ($radio * $radio);
        ?>

        <div class="resultado">
            <p>Calcula el área de un círculo cuyo radio es <?php echo $radio; ?>:</p>
            <p>El área del círculo es <?php echo number_format($areaCirculo, 2); ?></p>
        </div>
    </main>

    <footer>
        <p>Ejercicios PHP · DAW</p>
    </footer>
</body>
</html>