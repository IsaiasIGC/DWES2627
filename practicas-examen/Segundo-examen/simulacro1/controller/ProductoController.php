<?php
// VideojuegoController.php
require_once "models/ProductoModel.php";
class ProductoController {
    private $modelo;

    public function __construct() {
        $this->modelo = new ProductoModel();
    }

    // Mostrar listado de productos
    public function index($mensaje = "", $producto = false) {

        $productos = $this->modelo->obtenerTodos();

        // Cargar la vista
        require_once "views/producto_view.php";
    }

    // Insertar un producto
    public function create() {
        $mensaje = "";

        if (
            $_SERVER['REQUEST_METHOD'] === 'POST' &&
            isset($_POST['nombre'], $_POST['categoria'], $_POST['precio'], $_POST['stock'])
        ) {
            $nombre = $_POST['nombre'];
            $categoria = $_POST['categoria'];
            $precio = $_POST['precio'];
            $stock = $_POST['stock'];

            $exito = $this->modelo->insertar(
                $nombre, $categoria, $precio, $stock
            );

            $mensaje = $exito ? "¡Producto guardado con éxito!" : "Error al guardar el producto.";
        }

        $this->index($mensaje);
    }

    // Buscar un producto para modificarlo
    public function search($id) {
        $producto = $this->modelo->buscarPorId($id);
        $mensaje = "";

        if (!$producto) {
            $mensaje = "No se ha encontrado el producto.";
        }

        $this->index($mensaje, $producto);
    }

    // Actualizar un producto
    public function update() {
        $mensaje = "";

        if (
            $_SERVER['REQUEST_METHOD'] === 'POST' &&
            isset($_POST['id'], $_POST['nombre'], $_POST['categoria'], $_POST['precio'], $_POST['stock'])
        ) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $categoria = $_POST['categoria'];
            $precio = $_POST['precio'];
            $stock = $_POST['stock'];

            $exito = $this->modelo->actualizar($id, $nombre, $categoria, $precio, $stock);

            $mensaje = $exito ? "¡Producto actualizado con éxito!" : "Error al actualizar el producto.";
        }
        $this->index($mensaje);
    }

    // Eliminar un producto
    public function delete($id) {
        $exito = $this->modelo->eliminar($id);

        $mensaje = $exito ? "¡Producto eliminado con éxito!" : "Error al eliminar el producto.";

        $this->index($mensaje);
    }
}
