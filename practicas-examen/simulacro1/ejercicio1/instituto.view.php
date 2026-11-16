<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto</title>
</head>
<body>
    <h1>Gestión de las notas de los Alumnos</h1>
    <section>
        <h2>Notas de los alumnos:</h2>
        <table>
            <thead>
                <tr>
                    <th>Alumno</th>
                    <th>Nota</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($notas as $alumno => $nota) {
                        echo "<tr>";
                        echo "<td>". $alumno ."</td>";
                        echo "<td>". $nota ."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </section>
    <section>
        <h2>Estadísticas:</h2>
        <article>
            <h3>Suma de todas las notas:</h3>
            <p><?php echo $sumaNotas ?></p>
        </article>
        <article>
            <h3>Nota media del grupo:</h3>
            <p><?php echo $mediaNotas ?></p>
        </article>
        <article>
            <h3>Número de alumnos aprobados:</h3>
            <p><?php echo $nAlumnosAprobados ?> alumnos</p>
        </article>
    </section>
    <section>
        <h2>Resultados:</h2>
        <table>
            <thead>
                <tr>
                    <th>Alumno</th>
                    <th>Resultado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach (clasificarNotas($notas) as $alumno => $resultado) {
                        echo "<tr>";
                        echo "<td>". $alumno ."</td>";
                        echo "<td>". ($resultado ? "Aprobado" : "Suspenso") ."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </section>
</body>
</html>