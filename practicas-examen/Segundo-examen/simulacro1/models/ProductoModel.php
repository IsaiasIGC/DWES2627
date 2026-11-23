<?php
// ProductoModel.php
require_once "config/db.php";
class ProductoModel {
    private $conexion;

    public function __construct() {
        // Obtenemos la conexión desde tu archivo db.php
        $this->conexion = obtenerConexion();
    }

    public function obtenerTodos() {
        try {
            $sql = "SELECT * FROM productos";
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [];
        }
    }

    public function buscarPorId($id) {
        try {
            $sql = "SELECT * FROM productos WHERE id=:id";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [];
        }
    }

    public function insertar($nombre, $categoria, $precio, $stock) {
        try {
            $sql = "INSERT INTO productos (nombre, categoria, precio, stock) VALUES (:nombre, :categoria, :precio, :stock)";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':categoria', $categoria);
            $stmt->bindParam(':precio', $precio);
            $stmt->bindParam(':stock', $stock);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function actualizar($id, $nombre, $categoria, $precio, $stock) {
        try {
            $sql = "UPDATE productos SET nombre=:nombre, categoria=:categoria, precio=:precio, stock=:stock WHERE id=:id";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':categoria', $categoria);
            $stmt->bindParam(':precio', $precio);
            $stmt->bindParam(':stock', $stock);
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function eliminar($id) {
        try {
            $sql = "DELETE FROM productos WHERE id=:id";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }
}
