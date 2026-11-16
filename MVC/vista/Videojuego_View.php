<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Videojuegos (MVC)</title>
</head>
<body>

    <h1>Gestión de Videojuegos</h1>

    <!-- Mostrar mensaje -->
    <?php if (!empty($mensaje)): ?>
        <p><?php echo htmlspecialchars($mensaje); ?></p>
    <?php endif; ?>

    <!-- Formulario para añadir videojuegos -->
    <h2>Añadir Nuevo Videojuego</h2>

    <form action="index.php" method="POST">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <br><br>

        <label for="genero">Género:</label>
        <input type="text" id="genero" name="genero" required>

        <br><br>

        <label for="precio">Precio (€):</label>
        <input type="number" id="precio" name="precio" step="0.01" required>

        <br><br>

        <button type="submit">Guardar Videojuego</button>

    </form>

    <!-- Listado de videojuegos -->
    <h2>Listado Actual</h2>

    <?php if (!empty($videojuegos)): ?>

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Género</th>
                    <th>Precio</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($videojuegos as $juego): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($juego['id']); ?></td>
                        <td><?php echo htmlspecialchars($juego['titulo']); ?></td>
                        <td><?php echo htmlspecialchars($juego['genero']); ?></td>
                        <td><?php echo htmlspecialchars($juego['precio']); ?> €</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <?php else: ?>

        <p>No hay videojuegos registrados en el sistema.</p>

    <?php endif; ?>

</body>
</html>