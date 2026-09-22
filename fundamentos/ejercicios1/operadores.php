<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio - Operadores</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>

<body>
    <header>
        <h1>Ejercicios PHP</h1>
        <p>Elementos básicos del lenguaje</p>
    </header>

    <main class="contenedor">
        <h2>Ejercicio - Operadores</h2>
        <div class="tarjeta">
            <h3>Enunciado</h3>

            <p>
                Intenta predecir qué resultado va a sacar por pantalla cada
                instrucción <code>echo</code> del código PHP y compruébalo
                ejecutando la página en el navegador.
            </p>
        </div>
        <div class="resultado">

            <?php
                $num1 = 3;
                $num2 = 5;
                $num3 = 8;
                $num1 *= 4;
                echo $num1;
                echo $num1 <= $num2;
                echo $num3 > $num1 and $num3 > $num2;
                echo $num3 > $num1 or $num3 > $num2;
                echo $num1 > $num2 xor $num1 > $num3;
                $num3--;
                echo $num3;
                $num3 += $num1;
                echo $num3;
            ?>
        </div>
    </main>

    <footer>
        <p>Ejercicios PHP · DAW</p>
    </footer>
</body>
</html>