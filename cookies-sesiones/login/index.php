<?php
    require "cabecera.inc";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/paginas.css">
</head>

<body>
    <div class="container mt-4">
        <h1>Bienvenido a la página principal</h1>
        <p>Usuario conectado: <?php echo htmlspecialchars($_SESSION['loginusu']); ?></p>
    </div>
</body>
</html>