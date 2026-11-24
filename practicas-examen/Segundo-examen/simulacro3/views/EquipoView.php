<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Equipos</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1>Gestión de Equipos Informáticos</h1>

    <!-- Mostrar mensajes del controlador -->
    <?php if (!empty($mensaje)) { ?>
        <div class="alerta">
            <?php echo htmlspecialchars($mensaje); ?>
        </div>
    <?php } ?>

    <!-- Contador de equipos disponibles -->
    <section>
        <h2>Resumen del inventario</h2>
        <?php if (!empty($equiposDisponibles)) { ?>
        <p>
            Equipos disponibles:
            <strong><?php echo count($equiposDisponibles); ?></strong>
        </p>
        <?php } else { ?>
            <div class="alerta">No hay equipos disponibles.</div>
        <?php } ?>
    </section>

    <!-- Listado de equipos -->
    <section>
        <h2>Listado de equipos</h2>

        <?php if (!empty($equipos)) { ?>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Aula</th>
                        <th>Estado</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($equipos as $e) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($e["id"]); ?></td>
                            <td><?php echo htmlspecialchars($e["nombre"]); ?></td>
                            <td><?php echo htmlspecialchars($e["tipo"]); ?></td>
                            <td><?php echo htmlspecialchars($e["aula"]); ?></td>
                            <td><?php echo htmlspecialchars($e["estado"]); ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        <?php } else { ?>
            <div class="alerta">No hay equipos registrados.</div>
        <?php } ?>
    </section>

    <!-- Insertar equipo -->
    <section>
        <h2>Añadir equipo</h2>

        <form class="formulario" action="index.php?action=create" method="POST">

            <article class="campo">
                <label for="nombre_nuevo">Nombre:</label>
                <input type="text" name="nombre" id="nombre_nuevo" required>
            </article>

            <article class="campo">
                <label for="tipo_nuevo">Tipo:</label>
                <input type="text" name="tipo" id="tipo_nuevo" required>
            </article>

            <article class="campo">
                <label for="aula_nueva">Aula:</label>
                <input type="text" name="aula" id="aula_nueva" required>
            </article>

            <button class="boton" type="submit">Añadir equipo</button>

        </form>
    </section>

    <!-- Buscar equipo para modificar -->
    <section>
        <h2>Modificar estado de un equipo</h2>

        <?php if (!empty($equipos)) { ?>

            <form class="formulario" action="index.php" method="GET">

                <input type="hidden" name="action" value="search">

                <article class="campo">
                    <label for="id_buscar">Selecciona el equipo:</label>

                    <select name="id" id="id_buscar" required>
                        <?php foreach ($equipos as $e) { ?>
                            <option value="<?php echo htmlspecialchars($e["id"]); ?>">
                                <?php echo htmlspecialchars($e["nombre"]); ?>
                            </option>
                        <?php } ?>
                    </select>
                </article>

                <button class="boton" type="submit">Buscar equipo</button>

            </form>

        <?php } else { ?>

            <div class="alerta">No hay equipos para modificar.</div>

        <?php } ?>

        <!-- Mostrar equipo seleccionado -->
        <?php if (!empty($equipo)) { ?>

            <h3>Equipo seleccionado</h3>

            <form class="formulario" action="index.php?action=update" method="POST">

                <article class="campo">
                    <h3>Nombre:</h3>
                    <p><?php echo htmlspecialchars($equipo["nombre"]); ?></p>
                </article>

                <article class="campo">
                    <h3>Tipo:</h3>
                    <p><?php echo htmlspecialchars($equipo["tipo"]); ?></p>
                </article>

                <article class="campo">
                    <h3>Aula:</h3>
                    <p><?php echo htmlspecialchars($equipo["aula"]); ?></p>
                </article>

                <article class="campo">
                    <label for="estado_nuevo">Estado actual: <?php echo htmlspecialchars($equipo["estado"]); ?></label>

                    <select name="estado" id="estado_nuevo" required>

                        <option value="Disponible"
                            <?php if ($equipo["estado"] == "Disponible") { echo "selected"; } ?>>
                            Disponible
                        </option>

                        <option value="En reparación"
                            <?php if ($equipo["estado"] == "En reparación") { echo "selected"; } ?>>
                            En reparación
                        </option>

                        <option value="Retirado"
                            <?php if ($equipo["estado"] == "Retirado") { echo "selected"; } ?>>
                            Retirado
                        </option>

                    </select>
                </article>

                <input type="hidden" name="id"
                       value="<?php echo htmlspecialchars($equipo["id"]); ?>">

                <button class="boton" type="submit">Actualizar estado</button>

            </form>

        <?php } ?>

    </section>

    <!-- Eliminar equipo -->
    <section>
        <h2>Eliminar equipo</h2>

        <?php if (!empty($equipos)) { ?>

            <form class="formulario" action="index.php" method="GET">

                <input type="hidden" name="action" value="delete">

                <article class="campo">
                    <label for="id_eliminar">Selecciona el equipo que quieres eliminar:</label>

                    <select name="id" id="id_eliminar" required>
                        <?php foreach ($equipos as $e) { ?>
                            <option value="<?php echo htmlspecialchars($e["id"]); ?>">
                                <?php echo htmlspecialchars($e["nombre"]); ?>
                            </option>
                        <?php } ?>
                    </select>
                </article>

                <button class="botonEliminar" type="submit">Eliminar equipo</button>

            </form>

        <?php } else { ?>

            <div class="alerta">No hay equipos para eliminar.</div>

        <?php } ?>

    </section>

</body>
</html>
