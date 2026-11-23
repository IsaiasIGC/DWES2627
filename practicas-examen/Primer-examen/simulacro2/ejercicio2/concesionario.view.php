<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concesionario</title>
</head>
<body>
    <h1>Concesionario</h1>
    <section>
        <h2>Coches:</h2>
        <?php echo "<p>".$coche->Mostrar()."</p>"; ?>
    </section>
    <section>
        <h2>Motocicletas:</h2>
        <?php echo "<p>".$motocicleta->Mostrar()."</p>"; ?>
    </section>
</body>
</html>