<?php
    require_once 'Persona.php';
    require_once 'Estudiante.php';

    // Creamos los objetos
    $persona = new Persona('12345678', 'Pepe Devesa', 'pepe@gmail.com');
    $estudiante = new Estudiante('13311973', 'Isaias Gregori', 'isaias@gmail.com', '11336660');

    // Modificamos algun atributo
    $persona->setEmail('peped@gmail.com');
    $estudiante->setNumExpediente('11336661');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
</head>
<body>
    <section>
        <h2>Persona</h2>
        <p><?php echo $persona->mostrar()?></p>
    </section>
    <section>
        <h2>Estudiante</h2>
        <p><?php echo $estudiante->mostrar()?></p>
    </section>
</body>
</html>