<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>
</head>

<body>
    <h1>Tienda Online</h1>
    <section>
        <h2>Elegir articulos de la tienda</h2>
        <article>
            <?php
            if (isset($productos)) {
                foreach ($productos as $producto => $precio) {
                    echo "<p>" . $producto . "    " . $precio . "€</p>";
                }
            }
            ?>
        </article>
        <form action="tiendaOnline.php" method="POST">
            <label for="producto">Elegir producto: </label>
            <select name="producto" id="producto" required>
                <option value="Teclado">Teclado</option>
                <option value="Ratón">Ratón</option>
                <option value="Monitor">Monitor</option>
                <option value="Auriculares">Auriculares</option>
            </select>

            <label for="cantidad">Cantidad: </label>
            <input type="number" name="cantidad" id="cantidad" min="1" required>

            <button type="submit" name="anadir">Añadir al carrito</button>
        </form>
    </section>
    <section>
        <h2>Carrito:</h2>
        <?php if (!empty($detalleCarrito)) { ?>
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio unitario</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($detalleCarrito as $producto => $datosProducto) {
                        echo "<tr>";
                        echo "<td>" . $producto . "</td>";
                        echo "<td>" . $datosProducto["precio"] . "€</td>";
                        echo "<td>" . $datosProducto["cantidad"] . "</td>";
                        echo "<td>" . $datosProducto["subtotal"] . "€</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <h3>Precio total: <?php echo $total ?>€</h3>
        <?php
        } else {
            echo "<p>El carrito está vacío</p>";
        }
        ?>
        <form action="tiendaOnline.php" method="POST">
            <label for="producto">¿Quieres eliminar algún producto?</label>
            <select name="producto" id="producto" required>
                <option value="Teclado">Teclado</option>
                <option value="Ratón">Ratón</option>
                <option value="Monitor">Monitor</option>
                <option value="Auriculares">Auriculares</option>
            </select>
            <button type="submit" name="eliminarProducto">Eliminar producto</button>
        </form>
        <form action="tiendaOnline.php" method="POST">
            <label for="vaciarCarrito">¿Deseas vaciar el carrito?</label>
            <button type="submit" id="vaciarCarrito" name="vaciarCarrito">Vaciar carrito</button>
        </form>
    </section>
    <?php if (isset($mensaje)) { ?>
        <p><?php echo $mensaje; ?></p>
    <?php } ?>
</body>

</html>