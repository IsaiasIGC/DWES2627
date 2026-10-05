<?php
    $x = $_GET["x"];
    $y = $_GET["y"];

    $suma = $x + $y;
    $resta = $x - $y;
    $multiplicacion = $x * $y;
    $division = $x / $y;

    $ordenador = $_SERVER["REMOTE_ADDR"];
    $variableParam = $_SERVER["REQUEST_METHOD"];
    $rutaSitio = $_SERVER["DOCUMENT_ROOT"];

    $titulo = "Ejercicio - Calculadora";

    include("calculadora.view.php")
?>