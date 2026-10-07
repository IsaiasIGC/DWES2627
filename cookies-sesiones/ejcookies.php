<?php

    // Existe la cookie?
    if (isset($_COOKIE['user'])) {
        $usuario = $_COOKIE['user'];

        // Está vacía? Rellenala
        if (empty($usuario)) {
            setcookie("user", "Isaías", time() + 1000);
        }
    } else { // Si no, creala
        setcookie("user", "Isaías", time() + 1000);
    }

    // En caso de querer eliminar la cookie
    // setcookie("user", "", 1);

    include("ejcookies.view.php");
?>