<?php

require_once "config/db.php";

class EquipoModel {
    private $conexion;

    public function __construct() {
        // Obtenemos la conexion desde el archivo db.php
        $this->conexion = obtenerConexion();
    }

    public function obtenerTodos() {
        try {
            $sql = "SELECT * FROM equipos";
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [];
        }
    }

    public function obtenerDisponibles() {
        try {
            $sql = "SELECT * FROM equipos WHERE estado='Disponible'";
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al consultar equipos: " . $e->getMessage();
            return [];
        }
    }

    public function buscarPorId($id) {
        try {
            $sql = "SELECT * FROM equipos WHERE id=:id";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function insertar($nombre, $tipo, $aula) {
        try {
            $estadoDefault = "Disponible";

            $sql = "INSERT INTO equipos (nombre, tipo, aula, estado) VALUES (:nombre, :tipo, :aula, :estado)";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':tipo', $tipo);
            $stmt->bindParam(':aula', $aula);
            $stmt->bindParam(':estado', $estadoDefault);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function actualizarEstado($id, $estado) {
        try {
            $sql = "UPDATE equipos SET estado=:estado WHERE id=:id";
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
            $sql = "DELETE FROM equipos WHERE id=:id";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>