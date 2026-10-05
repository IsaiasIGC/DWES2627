<?php

    $rutaCss = "../../css/styles.css";

    include("../../plantilla/encabezado.php");

?>

<main class="contenedor">

    <div class="titulo-ejercicio">
        <h2>Ejercicio - Plantillas</h2>
        <p>
            Mostrar la plantilla del Atlético de Madrid ordenada por dorsal.
        </p>
    </div>

    <div class="tarjeta">
        <h3>Enunciado</h3>
        <p>
            Cargar los datos del archivo <strong>plantillas.csv</strong> y
            mostrar en una tabla HTML la plantilla del
            <strong>Atlético de Madrid</strong> ordenada por dorsal.
        </p>
    </div>

    <div class="tarjeta">
        <h3>Plantilla del Atlético de Madrid</h3>
        <table>
            <thead>
                <tr>
                    <th>Apodo</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>País</th>
                    <th>Posición</th>
                    <th>Dorsal</th>
                    <th>Partidos jugados</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($plantillaATM as $jugador) {
                        echo "<tr>";
                        echo "<td>" . $jugador["apodo"] . "</td>";
                        echo "<td>" . $jugador["nombre"] . "</td>";
                        echo "<td>" . $jugador["apellidos"] . "</td>";
                        echo "<td>" . $jugador["edad"] . "</td>";
                        echo "<td>" . $jugador["pais"] . "</td>";
                        echo "<td>" . $jugador["posicion"] . "</td>";
                        echo "<td>" . $jugador["dorsal"] . "</td>";
                        echo "<td>" . $jugador["pj"] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</main>

<?php

    include("../../plantilla/pie.php");

?>