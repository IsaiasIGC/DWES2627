<?php

    $rutaCss = "../../css/styles.css";
    
    include("../plantilla/encabezado.php");

?>

<main class="contenedor">
    <div class="titulo-ejercicio">
        <h2>Ejercicio - Casas Rurales</h2>
        <p>
            Procesar un archivo CSV de casas rurales de la provincia de Castellón.
        </p>
    </div>

    <div class="tarjeta">
        <h3>Enunciado</h3>
        <p>
            Cargar los datos de un archivo CSV de casas rurales y quedarse
            únicamente con el <strong>id</strong>, la <strong>localidad</strong>,
            el <strong>nombre</strong> y el <strong>teléfono</strong> de las
            casas que tengan un teléfono definido.
        </p>
        <p>
            Los registros que tengan datos nulos deberán descartarse y se
            deberá indicar cuántos registros se han descartado.
        </p>
    </div>

    <div class="tarjeta">
        <h3>Registros descartados</h3>
        <p class="aviso">
            Se han descartado <?= $descartes ?> casas rurales por no tener teléfono.
        </p>
    </div>

    <div class="tarjeta">
        <h3>Casas rurales con teléfono</h3>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Localidad</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($casas as $casa) {
                        echo "<tr>";
                        echo "<td>" . $casa["id"] . "</td>";
                        echo "<td>" . $casa["localidad"] . "</td>";
                        echo "<td>" . $casa["nombre"] . "</td>";
                        echo "<td>" . $casa["telefono"] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</main>

<?php

    include("../plantilla/pie.php");

?>