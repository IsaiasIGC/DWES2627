<?php

use Dwes\Matematicas\Calculadora;

include("Calculadora.php");

$calculadora = new Calculadora;

$resultadoSuma = $calculadora->sumar(2, 2);
$resultadoResta = $calculadora->restar(2, 2);

function dividir($a, $b) {
    if ($b == 0) {
        throw new Exception("No se puede dividir entre cero");
    } else {
        return $a / $b;
    }
}

$divisores = [2, 0, 5, 0, 4];

foreach ($divisores as $n) {
    try {
        $resultadoDivision = dividir(100, $n);
    } catch (Exception $e) {
        echo "Excepción: ".$e->getMessage()."<br>";
    } finally {
        echo "Operación finalizada<br>";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <p>Suma: 2 + 2 = <?php echo $resultadoSuma; ?></p>
    <p>Resta: 2 - 2 = <?php echo $resultadoResta; ?></p>
</body>
</html>