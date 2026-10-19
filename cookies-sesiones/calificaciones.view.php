<?php
    $rutaCss = "../css/styles.css";
    $titulo = "Calificaciones";

    include("../plantilla/encabezado.php");
?>

<main class="contenedor">
    <div class="tarjeta">
        <form action="calificaciones.php" method="post">
            <div class="row align-items-end g-3">
                <div class="col-md">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre del alumno" required>
                </div>
                <div class="col-md">
                    <input type="number" class="form-control" name="nota1"
                           placeholder="1er trimestre" min="0" max="10"
                           step="0.01" required>
                </div>
                <div class="col-md">
                    <input type="number" class="form-control" name="nota2"
                           placeholder="2do trimestre" min="0" max="10"
                           step="0.01" required>
                </div>
                <div class="col-md">
                    <input type="number" class="form-control" name="nota3"
                           placeholder="3er trimestre" min="0" max="10"
                           step="0.01" required>
                </div>
                <div class="col-md-auto">
                    <button type="submit" class="btn btn-primary" name="anadir">
                        <i class="bi bi-person-plus-fill"></i> Añadir
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="tarjeta text-center">
        <h2>Lista de Alumnos:</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Alumno</th>
                    <th>1er trimestre</th>
                    <th>2do trimestre</th>
                    <th>3er trimestre</th>
                    <th>Media</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($alumnos as $i => $alumno) {
                        echo "<tr>";
                        echo "<td>" . $alumno['nombre'] ."</td>";
                        echo "<td>" . $alumno['nota1'] . "</td>";
                        echo "<td>" . $alumno['nota2'] . "</td>";
                        echo "<td>" . $alumno['nota3'] . "</td>";
                        echo "<td>" . $medias[$i] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>

        <form action="calificaciones.php" method="post">
            <button type="submit" class="btn btn-primary" name="borrar">
                <i class="bi bi-trash"></i> Borrar datos
            </button>
        </form>
    </div>

</main>

<?php
    include("../plantilla/pie.php");
?>