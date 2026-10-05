<?php

    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $url = $_POST["url"];
    $sexo = $_POST["sexo"];
    $convivientes = $_POST["convivientes"];
    $aficiones = $_POST["aficiones"];
    $menu = $_POST["menu"];

    include("formulario.view.php");
?>