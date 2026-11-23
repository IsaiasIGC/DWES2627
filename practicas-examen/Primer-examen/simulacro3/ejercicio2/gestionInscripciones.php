<?php

$mensajeError = "";
$esValido = false;
$alumnos = [];

try {
    // Comprobamos si se ha enviado el formulario
    if (isset($_POST['enviar'])) {
        // Comprobamos que se han recibido los datos
        if (isset($_POST['nombre'], $_POST['apellidos'], $_POST['edad'], $_POST['curso'], $_POST['modalidad'])) {
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $edad = $_POST['edad'];
            $curso = $_POST['curso'];
            $modalidad = $_POST['modalidad'];

            if (empty($nombre) || empty($apellidos)) {
                throw new Exception("El nombre y los apellidos no pueden estar vacíos.");
            }

            if (!is_numeric($edad) || ($edad < 16 || $edad > 99)) {
                throw new Exception("La edad debe ser numérica y estar comprendida entre 16 y 99 años.");
            }

            if (empty($curso)) {
                throw new Exception("Se debe haber seleccionado un curso.");
            }

            if (empty($modalidad)) {
                throw new Exception("Se debe haber seleccionado una modalidad.");
            }
            
            $alumnos[$nombre." ".$apellidos] = [
                "nombre" => $nombre,
                "apellidos" => $apellidos,
                "edad" => $edad,
                "curso" => $curso,
                "modalidad" => $modalidad
            ];

            $esValido = true;
        }
    }
} catch (Exception $e) {
    $mensajeError = $e->getMessage();
}



include("gestionInscripciones.view.php");

?>