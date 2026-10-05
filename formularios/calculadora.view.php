<?php

    $rutaCss = "../css/styles.css";

    include("../plantilla/encabezado.php");

?>

<main class="contenedor">
    <div class="titulo-ejercicio">
        <h2>Ejercicio - Calculadora</h2>
        <p>Operaciones y datos recibidos mediante parámetros GET.</p>
    </div>

    <div class="tarjeta">
        <h3>Parámetros recibidos</h3>
        <div class="resultado">
            <p><strong>x:</strong> <?= $x ?></p>
            <p><strong>y:</strong> <?= $y ?></p>
        </div>
    </div>

    <div class="tarjeta">
        <h3>Operaciones</h3>
        <table>
            <thead>
                <tr>
                    <th>Operación</th>
                    <th>Resultado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Suma</td>
                    <td><?= $suma ?></td>
                </tr>
                <tr>
                    <td>Resta</td>
                    <td><?= $resta ?></td>
                </tr>
                <tr>
                    <td>Multiplicación</td>
                    <td><?= $multiplicacion ?></td>
                </tr>
                <tr>
                    <td>División</td>
                    <td><?= $division ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="tarjeta">
        <h3>Información de la petición</h3>
        <div class="resultado">
            <p>
                <strong>Ordenador que realiza la petición:</strong>
                <?= $ordenador ?>
            </p>
            <p>
                <strong>Variable de los parámetros:</strong>
                <?= $variableParam ?>
            </p>
            <p>
                <strong>Ruta del sitio web:</strong>
                <?= $rutaSitio ?>
            </p>
        </div>
    </div>
</main>

<?php

    include("../plantilla/pie.php");

?>