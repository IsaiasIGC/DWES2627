<?php

// Si existe la cookie guardamos su valor
if (isset($_COOKIE['nombre'])) {
    $nombreRecordado = $_COOKIE['nombre'];
} else {
    $nombreRecordado = "";
}

session_start();

// Si no existe la variable visitas en la sesion la inicializamos en 0
if(!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 0;
}

// Comprobamos que lleguen los datos
if (isset($_POST['enviar'], $_POST['nombre'])) {
    $nombre = $_POST['nombre'];

    // Guardamos el usuario que visita y aumentamos el contador de visitas
    $_SESSION['nombre'] = $nombre;
    $_SESSION['visitas']++;

    if (isset($_POST['recordar'])) {
        setcookie("nombre", $nombre, time() + 3600);
        $nombreRecordado = $nombre;
    } else {
        if (isset($_COOKIE['nombre'])) {
            setcookie("nombre", "", 1);
        }

        $nombreRecordado = "";
    }
}

// Si recibe la peticion de cerrar sesion entonces borramos los datos y la cerramos 
if(isset($_POST['cerrar'])) {
    unset($_SESSION['nombre']);
    unset($_SESSION['visitas']);
    session_destroy();
}

include("gestionAcademia.view.php");

?>