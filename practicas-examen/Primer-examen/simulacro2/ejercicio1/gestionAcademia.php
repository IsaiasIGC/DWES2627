<?php
    include_once("Persona.php");
    include_once("Estudiante.php");
    
    $persona1 = new Persona("11111111Z", "Pepe", "pepe@gmail.com");
    $estudiante1 = new Estudiante("13311973X", "Isaias", "isaias@gmail.com", 11336660);

    $persona1->setNombre("Pepe Devesa");
    $estudiante1->setNumExpediente(11336661);

    include("gestionAcademia.view.php");
?>