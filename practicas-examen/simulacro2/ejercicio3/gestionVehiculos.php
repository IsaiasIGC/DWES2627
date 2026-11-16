<?php
    include_once("Audi.php");

    $audi = new Audi();
    $audi->setPotencia(150);

    $ruedas = $audi->getRuedas();
    $potencia = $audi->getPotencia();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Coches</h1>
    <section>
        <h2>Audi:</h2>
        <p>Ruedas: <?php echo $ruedas; ?></p>
        <p>Potencia: <?php echo $potencia; ?> cv</p>
    </section>
</body>
</html>