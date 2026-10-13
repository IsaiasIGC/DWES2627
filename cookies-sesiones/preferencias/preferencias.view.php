
<?php
    $rutaCss = "../../css/styles.css";
    $titulo = "Preferencias";

    include("../../plantilla/encabezado.php");
?>

<main class="contenedor">

    <div class="titulo-ejercicio">
        <h2>Preferencias de usuario</h2>
        <p>Introduce tu nombre y tu color favorito.</p>
    </div>

    <div class="tarjeta">
        <form action="guarda_prefs.php" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">Color favorito:</label>
                <input type="color" class="form-control form-control-color" id="color" name="color" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Guardar preferencias</button>
            </div>
        </form>
    </div>
</main>

<?php
    include("../../plantilla/pie.php");
?>
