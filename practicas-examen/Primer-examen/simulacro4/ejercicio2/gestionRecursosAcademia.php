<?php

include_once("Recursos.php");
include_once("RecursoDuplicadoException.php");
include_once("Libro.php");
include_once("CursoOnline.php");

$recursos = [];

$libro1 = new Libro(12345, "Mago de Oz", 200);
$libro2 = new Libro(54321, "Harry Potter", 300);

$cursoOnline1 = new CursoOnline(67890, "Aprendiendo PHP", 50);
$cursoOnline2 = new CursoOnline(19876, "Introducción a MySQL", 60);
$cursoOnline2Repetido = new CursoOnline(19876, "Introducción a MySQL", 60);

try {
    registrarRecurso($recursos, $libro1);
    registrarRecurso($recursos, $libro2);
    registrarRecurso($recursos, $cursoOnline1);
    registrarRecurso($recursos, $cursoOnline2);
    
    // Intentamos registrar un recurso que ya existe
    registrarRecurso($recursos, $cursoOnline2Repetido);
} catch (RecursoDuplicadoException $e) {
    echo "<p>Excepción: ".$e->getMessage()."</p>";
} finally {
    echo "<p>Operaciones de registro terminadas</p>";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Recursos</title>
</head>
<body>
    <header>
        <h1>Gestión de los recurso de una Academia</h1>
    </header>
    <main>
        <h2>Recursos disponibles:</h2>
        <?php
            foreach ($recursos as $recurso) {
                echo "<p>".$recurso."</p>";
            }
        ?>
    </main>
</body>
</html>