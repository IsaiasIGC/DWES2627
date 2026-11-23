<?php
// IncidenciaController.php
require_once "models/IncidenciaModel.php";
class IncidenciaController {
    private $modelo;

    public function __construct() {
        $this->modelo = new IncidenciaModel();
    }

    // Mostrar listado de incidencias
    public function index($mensaje = "", $incidencia = false) {
        $incidencias = $this->modelo->obtenerTodas();

        // Cargar la vista
        require_once "views/incidencia_view.php";
    }

    // Insertar una incidencia
    public function create() {
        $mensaje = "";

        if (
            $_SERVER['REQUEST_METHOD'] === 'POST' &&
            isset($_POST['titulo'], $_POST['descripcion'], $_POST['prioridad'])
        ) {
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $prioridad = $_POST['prioridad'];

            $exito = $this->modelo->insertar($titulo, $descripcion, $prioridad);

            $mensaje = $exito ? "¡Incidencia guardada con éxito!" : "Error al guardar la incidencia.";
        }

        $this->index($mensaje);
    }

    // Buscar una incidencia
    public function search($id) {
        $incidencia = $this->modelo->buscarPorId($id);
        $mensaje = "";

        if (!$incidencia) {
            $mensaje = "No se ha encontrado la incidencia.";
        }

        $this->index($mensaje, $incidencia);
    }

    // Actualizar el estado de una incidencia
    public function updateEstado() {
        $mensaje = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['estado'])) {
            $id = $_POST['id'];
            $estado = $_POST['estado'];

            $exito = $this->modelo->actualizarEstado($id, $estado);

            $mensaje = $exito ? "¡Estado de la incidencia actualizado con éxito!" : "Error al actualizar el estado de la incidencia.";
        }
        $this->index($mensaje);
    }

    // Eliminar una incidencia
    public function delete($id) {
        $exito = $this->modelo->eliminar($id);

        $mensaje = $exito ? "Incidencia eliminada con éxito!" : "Error al eliminar la incidencia.";

        $this->index($mensaje);
    }
}
