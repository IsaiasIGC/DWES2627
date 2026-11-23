<?php
    include_once("Vehiculo.php");
    include_once("Coche.php");
    include_once("Motocicleta.php");

    $coche = new Coche("SEAT", "León", 5);
    $motocicleta = new Motocicleta("Kawasaki", "KLR650", 652);

    $coche->setNumPuertas(7);
    $motocicleta->setCilindrada(700);

    include("concesionario.view.php");
?>