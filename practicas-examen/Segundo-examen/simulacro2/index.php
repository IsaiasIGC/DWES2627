<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// index.php
require_once "controller/IncidenciaController.php";

// Instanciamos el controlador y ejecutamos su acción principal
$controlador = new IncidenciaController();
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

if ($action == 'create') {
    $controlador->create();
} elseif ($action == 'search' && $id) {
    $controlador->search($id);
} elseif ($action == 'update') {
    $controlador->updateEstado();
} elseif ($action == 'delete' && $id) {
    $controlador->delete($id);
} else {
    $controlador->index();
}
