<?php
    $rutaCss = "../css/styles.css";
    $titulo = "Imágenes subidas";
    $subtitulo = "Trabajando con Formularios";

    include("../plantilla/encabezado.php");
?>

<main class="contenedor">

    <div class="titulo-ejercicio">
        <h2>Imágenes subidas</h2>
        <p>Listado de imágenes almacenadas.</p>
    </div>

    <div class="row g-4">

        <?php foreach ($imagenes as $imagen) { ?>

            <?php if ($imagen != "." && $imagen != "..") { ?>

                <div class="col-12 col-md-6 col-lg-4">

                    <div class="card h-100 shadow-sm">

                        <img
                            src="uploads/<?= $imagen ?>"
                            alt="<?= $imagen ?>"
                            class="card-img-top"
                            style="height: 220px; object-fit: contain; padding: 20px 20px 10px;">

                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <?= $imagen ?>
                            </h5>
                        </div>
                    </div>
                </div>

            <?php } ?>

        <?php } ?>

    </div>

</main>

<?php
    include("../plantilla/pie.php");
?>