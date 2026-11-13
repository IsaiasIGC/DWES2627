<?php

require_once "../MVC/modelos/VideojuegoModel.php";

class VideojuegoController {
    private $modelo;

    public function __construct() {
        $this->modelo = new VideojuegoModel();
    }

    public function index() {
        $mensaje = "";

        // Si el usuario envió el formulario para añadir un juego
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            $genero = $_POST['genero'];
            $precio = $_POST['precio'];

            // Insertamos el videojuego mediante el modelo
            $exito = $this->modelo->insertar($nombre, $genero, $precio);
            $mensaje = $exito
                ? "¡Videojuego guardado con éxito!"
                : "Error al guardar el videojuego.";
        }

        // Obtenemos todos los videojuegos
        $videojuegos = $this->modelo->obtenerTodos();

        // Cargamos la vista
        require_once "../MVC/vista/Videojuego_View.php";
    }
}
?>