<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Gestión de Productos</h1>

    <!-- Mostrar mensajes del controlador -->
    <?php if (!empty($mensaje)) { ?>
        <div class="alerta"><?php echo htmlspecialchars($mensaje); ?></div>
    <?php } ?>

    <!-- Catálogo de productos -->
    <section>
        <h2>Catálogo de productos</h2>

        <?php if (!empty($productos)) { ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productos as $p) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($p["id"]); ?></td>
                            <td><?php echo htmlspecialchars($p["nombre"]); ?></td>
                            <td><?php echo htmlspecialchars($p["categoria"]); ?></td>
                            <td><?php echo htmlspecialchars($p["precio"]) . " €"; ?></td>
                            <td><?php echo htmlspecialchars($p["stock"]); ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <div class="alerta">No hay productos</div>
        <?php } ?>
    </section>

    <!-- Insertar producto -->
    <section>
        <h2>Añadir producto</h2>

        <form class="formulario" action="index.php?action=create" method="POST">
            <article class="campo">
                <label for="nombre_nuevo">Nombre:</label>
                <input type="text" name="nombre" id="nombre_nuevo" required>
            </article>
            <article class="campo">
                <label for="categoria_nueva">Categoría:</label>
                <input type="text" name="categoria" id="categoria_nueva" required>
            </article>
            <article class="campo">
                <label for="precio_nuevo">Precio:</label>
                <input type="number" name="precio" id="precio_nuevo" min="0" step="0.01" required>
            </article>
            <article class="campo">
                <label for="stock_nuevo">Stock:</label>
                <input type="number" name="stock" id="stock_nuevo" min="0" required>
            </article>

            <button type="submit">Añadir</button>
        </form>
    </section>

    <!-- Buscar producto para modificar -->
    <section>
        <h2>Modificar productos</h2>
        <?php if (!empty($productos)) { ?>
            <form class="formulario" action="index.php" method="GET">
                <input type="hidden" name="action" value="search">
                <article>
                    <label for="id_buscar">Elige el producto que quieres modificar:</label>
                    <select name="id" id="id_buscar">
                        <?php foreach ($productos as $p) { ?>
                            <option value="<?php echo htmlspecialchars($p["id"]); ?>">
                                <?php echo htmlspecialchars($p["nombre"]); ?>
                            </option>
                        <?php } ?>
                    </select>
                </article>

                <button type="submit">Buscar</button>
            </form>

        <?php } else { ?>
            <div class="alerta">No hay productos para modificar</div>
        <?php } ?>

        <!-- Mostrar producto seleccionado -->
        <?php if (!empty($producto)) { ?>
            <h2>Producto seleccionado</h2>
            <form class="formulario" action="index.php?action=update" method="POST">
                <article class="campo">
                    <label for="nombre_editar">Nombre:</label>
                    <input type="text" name="nombre" id="nombre_editar" value="<?php echo htmlspecialchars($producto['nombre']); ?>" required>
                </article>

                <article class="campo">
                    <label for="categoria_editar">Categoría:</label>
                    <input type="text" name="categoria" id="categoria_editar" value="<?php echo htmlspecialchars($producto['categoria']); ?>" required>
                </article>

                <article class="campo">
                    <label for="precio_editar">Precio:</label>
                    <input type="number" name="precio" id="precio_editar" min="0" step="0.01"
                           value="<?php echo htmlspecialchars($producto['precio']); ?>" required>
                </article>

                <article class="campo">
                    <label for="stock_editar">Stock:</label>
                    <input type="number" name="stock" id="stock_editar" min="0"
                           value="<?php echo htmlspecialchars($producto['stock']); ?>" required>
                </article>

                <input type="hidden" name="id" value="<?php echo htmlspecialchars($producto['id']); ?>">

                <button type="submit">Actualizar</button>
            </form>
        <?php } ?>
    </section>

    <!-- Eliminar producto -->
    <section>
        <h2>Eliminar producto</h2>
        <?php if (!empty($productos)) { ?>
            <form class="formulario" action="index.php" method="GET">
                <input type="hidden" name="action" value="delete">
                <article>
                    <label for="id_eliminar">Elige el producto que quieres eliminar:</label>

                    <select name="id" id="id_eliminar">
                        <?php foreach ($productos as $p) { ?>
                            <option value="<?php echo htmlspecialchars($p["id"]); ?>">
                                <?php echo htmlspecialchars($p["nombre"]); ?>
                            </option>
                        <?php } ?>
                    </select>
                </article>

                <button class="botonEliminar" type="submit">Eliminar</button>
            </form>
        <?php } else { ?>
            <div class="alerta">No hay productos para eliminar</div>
        <?php } ?>
    </section>
</body>

</html>