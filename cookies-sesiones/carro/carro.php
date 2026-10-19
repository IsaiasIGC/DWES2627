<?php
    session_start();

    $articulos = array(
        array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
        array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
        array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50),
        array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio"=> 20)
    );

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    // Selecciona un articulo?
    if (isset($_GET['id'])) {
        $id = (int) $_GET['id'];

        foreach ($articulos as $articulo) {
            // Si el id coincide con el del articulo,lo guardamos en el carrito
            if ($id === $articulo['id']) {
                $carrito = $_SESSION['carrito'];
                array_push($carrito, $articulo);
                $_SESSION['carrito'] = $carrito;
            }
        }
    }

    $total = 0;

    foreach ($_SESSION['carrito'] as $articulo) {
        $total += $articulo['precio'];
    }

    echo $total;

    foreach ($_SESSION['carrito'] as $articulo) {
        echo $articulo['nombre'] . " - " . $articulo['precio'] . " euros";
        echo "<br>";
    }
?>