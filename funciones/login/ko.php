<?php

    $titulo = "Acceso incorrecto";
    $rutaCss = "../../css/styles.css";

    include("../plantilla/encabezado.php");

?>

<main class="login">

    <div class="card shadow">

        <div class="card-body p-4 text-center">

            <i class="bi bi-x-circle-fill ko-icono"></i>

            <h2 class="mt-3">Acceso incorrecto</h2>

            <p class="text-secondary">
                <?= $mensaje ?>
            </p>

            <a href="login.php" class="btn btn-primary mt-3">
                <i class="bi bi-arrow-left"></i>
                Volver al login
            </a>

        </div>

    </div>

</main>

<?php

    include("../plantilla/pie.php");

?>