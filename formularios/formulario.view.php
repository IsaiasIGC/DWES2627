<?php
    $rutaCss = "../css/styles.css";
    $titulo = "Resultado - Formulario";

    include("../plantilla/encabezado.php");
?>

<main class="contenedor">

    <div class="titulo-ejercicio">
        <h2>Datos introducidos</h2>
        <p>
            Resumen de los datos enviados mediante el formulario.
        </p>
    </div>

    <div class="tarjeta">

        <div class="table-responsive">

            <table class="tabla-formulario">
                <thead>
                    <tr>
                        <th>Campo</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Nombre</strong></td>
                        <td><?= $nombre ?></td>
                    </tr>
                    <tr>
                        <td><strong>Apellidos</strong></td>
                        <td><?= $apellidos ?></td>
                    </tr>
                    <tr>
                        <td><strong>Email</strong></td>
                        <td><?= $email ?></td>
                    </tr>
                    <tr>
                        <td><strong>Página personal</strong></td>
                        <td><?= $url ?></td>
                    </tr>
                    <tr>
                        <td><strong>Sexo</strong></td>
                        <td><?= $sexo ?></td>
                    </tr>
                    <tr>
                        <td><strong>Convivientes</strong></td>
                        <td><?= $convivientes ?></td>
                    </tr>
                    <tr>
                        <td><strong>Aficiones</strong></td>
                        <td>
                            <?php
                                foreach ($aficiones as $aficion) {
                                    echo $aficion . "<br>";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Menú favorito</strong></td>
                        <td>
                            <?php
                                foreach ($menu as $plato) {
                                    echo $plato . "<br>";
                                }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="formulario.html" class="btn btn-primary">
            <i class="bi bi-arrow-left me-1"></i>
            Volver al formulario
        </a>
    </div>

</main>

<?php
    include("../plantilla/pie.php");
?>