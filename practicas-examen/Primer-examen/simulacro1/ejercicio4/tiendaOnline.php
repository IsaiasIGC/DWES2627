<?php

session_start();

$productos = [
    "Teclado" => 25,
    "Ratón" => 12,
    "Monitor" => 150,
    "Auriculares" => 35
];

// Inicializar el carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// AÑADIR PRODUCTOS
if (isset($_POST['anadir'], $_POST['producto'], $_POST['cantidad'])) {

    try {
        $carrito = $_SESSION['carrito'];
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];

        // Comprobar que el producto existe en el catálogo
        if (isset($productos[$producto])) {

            if (isset($carrito[$producto])) {
                $carrito[$producto] = $carrito[$producto] + $cantidad;
            } else {
                $carrito[$producto] = $cantidad;
            }

        } else {
            throw new Exception("Este producto no existe en el catálogo.");
        }

        // Actualizar el carrito
        $_SESSION['carrito'] = $carrito;

    } catch (Exception $e) {
        $mensaje = $e->getMessage();
    }
}

// ELIMINAR PRODUCTOS
if (isset($_POST['eliminarProducto'], $_POST['producto'])) {

    try {
        $carrito = $_SESSION['carrito'];
        $producto = $_POST['producto'];

        // Comprobar si existe en el carrito
        if (isset($carrito[$producto])) {
            unset($carrito[$producto]);
        } else {
            throw new Exception("Este producto no está en el carrito.");
        }

        // Actualizar el carrito
        $_SESSION['carrito'] = $carrito;

    } catch (Exception $e) {
        $mensaje = $e->getMessage();
    }
}

// VACIAR CARRITO
if (isset($_POST['vaciarCarrito'])) {
    $_SESSION['carrito'] = [];
}

// CALCULAR SUBTOTALES Y TOTAL
$detalleCarrito = [];
$total = 0;

foreach ($_SESSION['carrito'] as $producto => $cantidad) {
    $precio = $productos[$producto];
    $subtotal = $precio * $cantidad;
    $total += $subtotal;

    $detalleCarrito[$producto] = [
        "precio" => $precio,
        "cantidad" => $cantidad,
        "subtotal" => $subtotal
    ];
}

include("tiendaOnline.view.php");

?>