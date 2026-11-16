<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Academia</title>
</head>
<body>
    <h1>Gestión academia</h1>
    <section>
        <h2>Personas:</h2>
        <?php echo "<p>".$persona1->Mostrar()."</p>"; ?>
    </section>
    <section>
        <h2>Estudiantes:</h2>
        <?php echo "<p>".$estudiante1->Mostrar()."</p>"; ?>
    </section>
</body>
</html>