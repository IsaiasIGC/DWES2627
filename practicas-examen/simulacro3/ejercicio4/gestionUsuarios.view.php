<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro usuarios</title>
</head>
<body>
    <header>
        <h1>Registro usuarios</h1>
    </header>
    <main>
        <form action="gestionUsuarios.php" method="POST">
            <fieldset>
                <legend>Registro</legend>
                <label for="nombre">Introduce tu nombre: </label>
                <input type="text" name="nombre" id="nombre" required>

                <button type="submit" name="enviar">Registrarme</button>
            </fieldset>
        </form>
        <?php if (!empty($alumnos)) {?>
        <section>
            <h2>Usuarios registrados:</h2>
            <table>
                <thead>
                    <tr>
                        <th>Usuario</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($alumnos as $alumno) {
                        echo "<tr>";
                        echo "<td>".$alumno."</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
        <?php } ?>
    </main>
</body>
</html>