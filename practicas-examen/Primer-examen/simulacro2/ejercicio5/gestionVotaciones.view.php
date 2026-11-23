<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Votaciones</title>
</head>

<body>
    <h1>Votaciones</h1>
    <section>
        <h2>Candidatos</h2>
        <?php if (!empty($candidatos)) { ?>
            <table>
                <tbody>
                    <tr>
                        <?php
                        foreach ($candidatos as $candidato => $votos) {
                            echo "<td>" . $candidato . "</td>";
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        <?php } else {
            echo "<p>No hay candidatos</p>";
        } ?>
    </section>
    <section>
        <h2>Registrar Voto:</h2>
        <form action="gestionVotaciones.php" method="POST">
            <label for="candidato">Elige a tu candidato: </label>
            <select name="candidato" id="candidato">
                <option value="Ana">Ana</option>
                <option value="Luis">Luis</option>
                <option value="Marta">Marta</option>
            </select>
            <button type="submit" name="votacion">Registrar mi voto</button>
        </form>
        <?php if ($isVotoRegistrado) { ?>
            <p>Tu voto ha sido registrado correctamente</p>
        <?php } elseif (isset($_POST['votacion'])) { ?>
            <p>No se ha podido registrar el voto.</p>
        <?php } ?>
    </section>
    <section>
        <h2>Recuento de votos en directo:</h2>
        <?php if (!empty($_SESSION['votaciones'])) { ?>
            <table>
                <thead>
                    <tr>
                        <th>Candidato</th>
                        <th>Votos recibidos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($_SESSION['votaciones'] as $candidato => $votos) {
                        echo "<tr>";
                        echo "<td>" . $candidato . "</td>";
                        echo "<td>" . $votos . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <p>Total de votos registrados: <?php echo $totalVotos; ?></p>
        <?php } else {
            echo "<p>No hay candidatos</p>";
        } ?>
    </section>
</body>

</html>