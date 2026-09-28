<?php
    // Creamos usuarios y sus respectivas contraseñas
    $usuarios = [
        "admin" => "1234",
        "usuario" => "abcd"
    ];

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    if (isset($usuarios[$usuario])) {

        if ($usuarios[$usuario] === $password) {

            include("ok.php");

        } else {

            $mensaje = "La contraseña es incorrecta.";

            include("ko.php");
        }

    } else {

        $mensaje = "El usuario y la contraseña son incorrectos.";

        include("ko.php");
    }

?>