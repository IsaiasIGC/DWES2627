<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio - Contadores</title>
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
                Utilizar una estructura <code>for</code> para contar los números
                del 1 al 100, separados por comas, y una estructura
                <code>while</code> para realizar una cuenta atrás del 10 al 0,
                separados por guiones.
            </p>
        </div>

        <div class="resultado">
            <h3>Contador del 1 al 100</h3>
            <p>
                <?php
                    for ($i = 1; $i <= 100; $i++) {
                        echo $i;

                        if ($i < 100) {
                            echo ", ";
                        }
                    }
                ?>
            </p>
            <h3>Cuenta atrás del 10 al 0</h3>
            <p>
                <?php
                    $i = 10;

                    while ($i >= 0) {
                        echo $i;

                        if ($i > 0) {
                            echo "-";
                        }
                        $i--;
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