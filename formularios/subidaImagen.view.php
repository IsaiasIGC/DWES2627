<?php
    $rutaCss = "../css/styles.css";
    $titulo = "Subir imagen";
    $subtitulo = "Trabajando con Formularios";

    include("../plantilla/encabezado.php");
?>

<main class="contenedor">

    <div class="titulo-ejercicio">
        <h2>Subir imagen</h2>
        <p>Selecciona una imagen para subirla.</p>
    </div>

    <?php if (isset($nombre)) { ?>

        <div class="tarjeta text-center">
            <h3>Imagen subida correctamente</h3>
            <p>
                <strong>Nombre:</strong>
                <?= $nombre ?>
            </p>
            <p>
                <strong>Ruta:</strong>
                <?= $ruta ?>
            </p>
            <p>
                <strong>Anchura:</strong>
                <?= $anchura ?> px
            </p>
            <p>
                <strong>Altura:</strong>
                <?= $altura ?> px
            </p>
            <img src="<?= $ruta ?>" alt="<?= $nombre ?>" class="img-fluid rounded">
        </div>

    <?php } else { ?>

        <div class="tarjeta">

            <form action="subidaImagen.php" method="post" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="imagen" class="form-label">Selecciona una imagen</label>
                    <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
                </div>

                <div class="text-center">
                    <button type="submit" name="btnSubir" value="Subir" class="btn btn-primary">
                        <i class="bi bi-upload me-1"></i>
                        Subir imagen
                    </button>
                </div>
            </form>

            <div class="text-center mt-4">
                <a href="imagenes.php" class="btn btn-secondary">
                    <i class="bi bi-images me-1"></i>
                    Ver imágenes subidas
                </a>
            </div>
        </div>

    <?php } ?>

</main>

<?php
    include("../plantilla/pie.php");
?>