<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Cargamos el controlador
require_once "controller/VideojuegoController.php";

// Creamos el controlador
$controlador = new VideojuegoController();

// Ejecutamos su método principal
$controlador->index();

?>