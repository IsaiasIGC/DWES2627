<?php
    if (isset($_POST["btnSubir"]) && $_POST["btnSubir"] == "Subir") {

        if (is_uploaded_file($_FILES["imagen"]["tmp_name"])) {

            $nombre = $_FILES["imagen"]["name"];

            if (str_starts_with($_FILES["imagen"]["type"], "image/")) {

                if (move_uploaded_file($_FILES["imagen"]["tmp_name"], "uploads/$nombre")) {

                    $ruta = "uploads/$nombre";

                    $datosImagen = getimagesize($ruta);

                    $anchura = $datosImagen[0];
                    $altura = $datosImagen[1];

                    header("Refresh: 5; url=subidaImagen.php");

                    include("subidaImagen.view.php");

                } else {
                    echo "<p>Error al mover el archivo.</p>";
                    include("subidaImagen.view.php");
                }

            } else {
                echo "<p>El archivo seleccionado no es una imagen.</p>";
                include("subidaImagen.view.php");
            }
        }

    } else {
        include("subidaImagen.view.php");
    }
?>