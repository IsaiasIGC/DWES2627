<?php

include_once("Software.php");

$software = new Software(120, "apache", "v2");

$codigo = $software->Cod;

$software->Titulo = "apache2";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Software</title>
</head>
<body>
    <h1>Gestión Software</h1>
    <section>
        <h2>Atributos:</h2>
        <p>Codigo: <?php echo $codigo; ?></p>
        <p><?php echo $software; ?> cv</p>
    </section>
</body>
</html>