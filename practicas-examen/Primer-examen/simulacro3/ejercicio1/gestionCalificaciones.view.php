<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
</head>
<body>
    <h1>Calificaciones</h1>
    <section>
        <h2>Alumnos:</h2>
        <?php if (!empty($alumnos)) { ?>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Primera evaluación</th>
                    <th>Segunda evaluación</th>
                    <th>Tercera evaluación</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($alumnos as $alumno => $notas) {
                    echo "<tr>";
                    echo "<td>".$alumno."</td>";
                    echo "<td>".$notas[0]."</td>";
                    echo "<td>".$notas[1]."</td>";
                    echo "<td>".$notas[2]."</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <?php
        } else {
            echo "<p>No hay alumnos</p>";
        }
        ?>
    </section>
    <section>
        <h2>Estadísticas:</h2>
        <p>Número total de alumnos: <?php echo $totalAlumnos; ?></p>
        <p>Número de alumnos aprobados: <?php echo $alumnosAprobados; ?></p>
        <p>Número de alumnos suspensos: <?php echo $alumnosSuspensos; ?></p>
        <p>Media general de la clase: <?php echo $mediaGeneralClase; ?></p>
    </section>
</body>
</html>