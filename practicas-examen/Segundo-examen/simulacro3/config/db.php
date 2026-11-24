<?php
// db.php
function obtenerConexion() {
    $host = "localhost";
    $nombreBD = "equipos_simulacro";
    $usuario = "root";
    $password = "";
    try {
        $conexion = new PDO(
            "mysql:host=$host;dbname=$nombreBD;charset=utf8mb4",
            $usuario,
            $password
        );
        // Forzamos a PDO a lanzar excepciones si algo falla
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;
    } catch (PDOException $e) {
        // En producción, es mejor registrar esto en un log en vez de un echo
        echo "Error de conexión: " . $e->getMessage();
        exit;
    }
}
