<?php
// IncidenciaModel.php
require_once "config/db.php";
class IncidenciaModel {
    private $conexion;

    public function __construct() {
        // Obtenemos la conexión desde tu archivo db.php
        $this->conexion = obtenerConexion();
    }

    public function obtenerTodas() {
        try {
            $sql = "SELECT * FROM incidencias";
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [];
        }
    }

    public function buscarPorId($id) {
        try {
            $sql = "SELECT * FROM incidencias WHERE id=:id";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function insertar($titulo, $descripcion, $prioridad) {
        try {
            $estadoPorDefecto = "Pendiente";

            $sql = "INSERT INTO incidencias (titulo, descripcion, prioridad, estado) VALUES (:titulo, :descripcion, :prioridad, :estado)";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':titulo', $titulo);
            $stmt->bindParam(':descripcion', $descripcion);
            $stmt->bindParam(':prioridad', $prioridad);
            $stmt->bindParam(':estado', $estadoPorDefecto);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function actualizarEstado($id, $estado) {
        try {
            $sql = "UPDATE incidencias SET estado=:estado WHERE id=:id";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':estado', $estado);
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function eliminar($id) {
        try {
            $sql = "DELETE FROM incidencias WHERE id=:id";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }
}
