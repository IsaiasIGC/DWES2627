<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "controller/EquipoController.php";
$controller = new EquipoController();
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

if ($action == 'create') {
    $controller->anadirEquipo();
} elseif ($action == 'delete' && $id) {
    $controller->eliminarEquipo($id);
} elseif ($action == 'search' && $id) {
    $controller->buscarEquipoPorId($id);
} elseif ($action == 'update') {
    $controller->actualizarEstadoEquipo();
} else {
    $controller->index();
}
