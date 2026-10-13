
<?php
    $rutaCss = "../../css/styles.css";
    $titulo = "Página de inicio";

    include("../../plantilla/encabezado.php");
?>

<?php if ($existsCookies) { ?>

    <main class="fondo-preferido" style="background-color: <?= $colorusu ?>;">
        <div class="contenedor">
            <div class="titulo-ejercicio">
                <h2>Mis preferencias</h2>
            </div>

            <div class="tarjeta text-center">
                <h3>Bienvenido, <?= $nombreusu ?></h3>

                <p>Tu color favorito es <?= $colorusu ?>.</p>

                <a href="preferencias.php" class="btn btn-primary">
                    Cambiar preferencias
                </a>
                <a href="borrar_prefs.php" class="btn btn-primary">
                    Borrar preferencias
                </a>
            </div>
        </div>
    </main>

<?php } else { ?>

    <main class="fondo-blanco" style="background-color: white;">
        <div class="contenedor">
            <div class="tarjeta text-center">
                <h2>Página de inicio</h2>
                <a href="preferencias.php" class="btn btn-primary">
                    Configurar preferencias
                </a>
            </div>
        </div>
    </main>

<?php } ?>

<?php
    include("../../plantilla/pie.php");
?>
