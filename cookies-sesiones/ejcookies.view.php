<?php
    $rutaCss = "../css/styles.css";
    $titulo = "Cookies";

    include("../plantilla/encabezado.php");
?>

<main class="contenedor">

    <div class="titulo-ejercicio">
        <h2>Ejercicio de Cookies</h2>
        <p>Comprobación de la cookie de usuario.</p>
    </div>

    <div class="tarjeta text-center">
        <h2>Cookie usuario:</h2>
        <p class="resultado">
            <?php 
                echo $usuario;
            ?>
        </p>
    </div>

</main>

<?php
    include("../plantilla/pie.php");
?>