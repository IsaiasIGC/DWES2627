<?php

    $titulo = "Acceso correcto";
    $rutaCss = "../../css/styles.css";

    include("../plantilla/encabezado.php");

?>

<main class="login">

    <div class="card shadow">

        <div class="card-body p-4 text-center">

            <i class="bi bi-check-circle-fill ok-icono"></i>

            <h2 class="mt-3">Acceso correcto</h2>

            <p class="text-secondary">
                El usuario introducido es correcto.
            </p>
        </div>
    </div>
</main>

<?php

    include("../plantilla/pie.php");

?>