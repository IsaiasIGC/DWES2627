<?php
    $existsCookies = false;

    // Si ambos existen recuperamos sus valores
    if (isset($_COOKIE['nombreusu']) && isset($_COOKIE['colorusu'])) {
        $nombreusu = $_COOKIE['nombreusu'];
        $colorusu = $_COOKIE['colorusu'];

        $existsCookies = true;
    }

    include("index.view.php");

?>