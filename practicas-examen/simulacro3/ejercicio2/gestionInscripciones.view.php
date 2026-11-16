<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia</title>
</head>

<body>
    <h1>Gestión de una academia</h1>
    <section>
        <form action="gestionInscripciones.php" method="POST">
            <fieldset>
                <legend><h2>Formulario de inscripción:</h2></legend>
                <article>
                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" required>
                </article>

                <article>
                    <label for="apellidos">Apellidos: </label>
                    <input type="text" name="apellidos" id="apellidos" required>
                </article>

                <article>
                    <label for="edad">Edad: </label>
                    <input type="number" name="edad" id="edad" min="16" max="99" required>
                </article>

                <article>
                    <label for="curso">Curso elegido: </label>
                    <select name="curso" id="curso" required>
                        <option value="PHP">PHP</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="Java">Java</option>
                    </select>
                </article>

                <fieldset>
                    <legend>Modalidad:</legend>

                    <input type="radio" id="opcion1" name="modalidad" value="presencial" checked />
                    <label for="opcion1">Presencial</label>

                    <input type="radio" id="opcion2" name="modalidad" value="online" />
                    <label for="opcion2">Online</label>
                </fieldset>

                <button type="submit" name="enviar">Enviar datos</button>
                <?php
                if(empty($mensajeError) && $esValido) {
                    echo "<p>La inscripción ha finalizado con éxito.</p>";
                } else {
                    echo "<p>".$mensajeError."</p>";
                }
                ?>
            </fieldset>
        </form>
    </section>
    <section>
        <?php if ($esValido) { ?>
        <h2>Resumen de inscripción:</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Curso</th>
                    <th>Modalidad</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(!empty($alumnos)) {
                        foreach ($alumnos as $alumno => $value) {
                            echo "<tr>";
                            echo "<td>".$value["nombre"]."</td>";
                            echo "<td>".$value["apellidos"]."</td>";
                            echo "<td>".$value["edad"]."</td>";
                            echo "<td>".$value["curso"]."</td>";
                            echo "<td>".$value["modalidad"]."</td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
        <?php } ?>
    </section>
</body>

</html>