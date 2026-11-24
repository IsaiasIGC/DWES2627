<?php

require_once "models/EquipoModel.php";

class EquipoController {
    private $modelo;

    public function __construct() {
        $this->modelo = new EquipoModel();
    }

    // Método principal para gestionar la página de equipos
    public function index($mensaje = "", $equipo = false) {
        // El controlador le pide la lista de equipos al modelo
        $equipos = $this->modelo->obtenerTodos();
        $equiposDisponibles = $this->modelo->obtenerDisponibles();
        // El controlador "carga" la vista. Las variables $equipos y $mensaje
        // estarán disponibles automáticamente dentro del archivo de la vista.
        require_once "views/EquipoView.php";
    }

    // create
    public function anadirEquipo() {
        $mensaje = "";
        // Si el usuario envió el formulario para añadir un equipo...
        if ($_SERVER['REQUEST_METHOD'] === 'POST' &&
            isset($_POST['nombre'], $_POST['tipo'], $_POST['aula'])) {
            $nombre = $_POST['nombre'];
            $tipo = $_POST['tipo'];
            $aula = $_POST['aula'];
            $exito = $this->modelo->insertar($nombre, $tipo, $aula);
            $mensaje = $exito ? "!Equipo guardado con éxito!" : "Error al guardar el equipo.";
        }

        $this->index($mensaje);
    }

    // read
    public function buscarEquipoPorId($id) {
        $mensaje = "";
        $equipo = $this->modelo->buscarPorId($id);

        if (!$equipo) {
            $mensaje = "No se ha encontrado el equipo.";
        }

        $this->index($mensaje, $equipo);
    }

    // update
    public function actualizarEstadoEquipo() {
        $mensaje = "";
        // Si el usuario envió el formulario para buscar un equipo por id...
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['estado'])) {
            $id = $_POST['id'];
            $estado = $_POST['estado'];
            $exito = $this->modelo->actualizarEstado($id, $estado);
            $mensaje = $exito ? "!Estado actualizado con éxito!" : "No se pudo actualizar el estado del equipo.";
        }

        $this->index($mensaje);
    }

    // delete
    public function eliminarEquipo($id) {
        $exito = $this->modelo->eliminar($id);

        $mensaje = $exito
            ? "¡Equipo eliminado con éxito!"
            : "No se pudo eliminar el equipo.";

        $this->index($mensaje);
    }
}


?>