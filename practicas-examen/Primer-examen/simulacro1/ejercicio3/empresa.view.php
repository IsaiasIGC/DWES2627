<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>
</head>

<body>
    <h1>Empresa</h1>
    <section>
        <h2>Trabajadores:</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Sueldo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (isset($trabajadores)) {
                        foreach ($trabajadores as $trabajador => $sueldo) {
                            echo "<tr>";
                            echo "<td>" . $trabajador . "</td>";
                            echo "<td>" . $sueldo . "</td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </section>
    <section>
        <h2>Añadir trabajador:</h2>
        <form action="empresa.php" method="POST">
            <article>
                <label for="nombre">Nombre del trabajador:</label>
                <input type="text" name="nombre" id="nombre" required>
            </article>
            <article>
                <label for="sueldoBase">Sueldo base en €:</label>
                <input type="number" name="sueldoBase" id="sueldoBase" required>
            </article>
            <article>
                <label for="nHijos">Número de hijos:</label>
                <select name="nHijos" id="nHijos" required>
                    <option value="0">0 hijos</option>
                    <option value="1">1 hijo</option>
                    <option value="2">2 hijos</option>
                    <option value="3">3 o más hijos</option>
                </select>
            </article>
            <button type="submit" name="anadir">Enviar</button>
        </form>
    </section>
    <?php if (isset($sueldoFinal, $nombre)) { ?>
        <section>
            <h2>Resultado del cálculo</h2>

            <p>Trabajador: <?php echo $nombre; ?></p>
            <p>Sueldo final: <?php echo $sueldoFinal; ?> €</p>
        </section>
    <?php } ?>
</body>

</html>