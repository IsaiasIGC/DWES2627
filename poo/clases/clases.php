<?php
    require_once 'Persona.php';
    require_once 'Estudiante.php';

    // Creamos los objetos
    $persona = new Persona('12345678', 'Pepe Devesa', 'pepe@gmail.com');
    $estudiante = new Estudiante('13311973', 'Isaias Gregori', 'isaias@gmail.com', '11336660');

    // Modificamos algun atributo
    $persona->setEmail('peped@gmail.com');
    $estudiante->setNumExpediente('11336661');

    $rutaCss = "../../css/styles.css";
    $titulo = "Clases y Herencia";

    include("../../plantilla/encabezado.php");
?>

<main class="contenedor">
    <section class="tarjeta">
        <h2>Persona</h2>
        <p class="resultado"><?php echo $persona->mostrar()?></p>
    </section>
    <section class="tarjeta">
        <h2>Estudiante</h2>
        <p class="resultado"><?php echo $estudiante->mostrar()?></p>
    </section>
</main>

<?php

    include("../../plantilla/pie.php");

?>