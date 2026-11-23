<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Incidencias</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Gestión de Incidencias</h1>

    <!-- Mostrar mensajes del controlador -->
    <?php if (!empty($mensaje)) { ?>
        <div class="alerta"><?php echo htmlspecialchars($mensaje); ?></div>
    <?php } ?>

    <!-- Lista de incidencias -->
    <section>
        <h2>Lista de incidencias</h2>

        <?php if (!empty($incidencias)) { ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Descripción</th>
                        <th>Prioridad</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($incidencias as $i) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($i["id"]); ?></td>
                            <td><?php echo htmlspecialchars($i["titulo"]); ?></td>
                            <td><?php echo htmlspecialchars($i["descripcion"]); ?></td>
                            <td><?php echo htmlspecialchars($i["prioridad"]); ?></td>
                            <td><?php echo htmlspecialchars($i["estado"]); ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <div class="alerta">No hay incidencias</div>
        <?php } ?>
    </section>

    <!-- Insertar incidencia -->
    <section>
        <h2>Reportar incidencia</h2>

        <form class="formulario" action="index.php?action=create" method="POST">
            <article class="campo">
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo" id="titulo" required>
            </article>
            <article class="campo">
                <label for="descripcion">Descripción:</label>
                <input type="text" name="descripcion" id="descripcion" required>
            </article>
            <article class="campo">
                <label for="prioridad">Prioridad:</label>
                <select name="prioridad" id="prioridad" required>
                    <option value="Alta">Alta</option>
                    <option value="Media">Media</option>
                    <option value="Baja">Baja</option>
                </select>
            </article>
            <button type="submit">Enviar</button>
        </form>
    </section>

    <!-- Buscar incidencia para modificar -->
    <section>
        <h2>Modificar estado de las incidencias</h2>
        <?php if (!empty($incidencias)) { ?>
            <form class="formulario" action="index.php" method="GET">
                <input type="hidden" name="action" value="search">
                <article>
                    <label for="id_buscar">Elige la incidencia que quieres modificar:</label>
                    <select name="id" id="id_buscar">
                        <?php foreach ($incidencias as $i) { ?>
                            <option value="<?php echo htmlspecialchars($i["id"]); ?>">
                                <?php echo htmlspecialchars($i["titulo"]); ?>
                            </option>
                        <?php } ?>
                    </select>
                </article>

                <button type="submit">Buscar</button>
            </form>

        <?php } else { ?>
            <div class="alerta">No hay incidencias para modificar</div>
        <?php } ?>

        <!-- Mostrar incidencia seleccionada -->
        <?php if (!empty($incidencia)) { ?>
            <h2>Incidencia seleccionada</h2>
            <form class="formulario" action="index.php?action=update" method="POST">
                <article class="campo">
                    <h3>Título: </h3>
                    <p><?php echo htmlspecialchars($incidencia['titulo']); ?></p>
                </article>

                <article class="campo">
                    <h3>Descripción:</h3>
                    <p><?php echo htmlspecialchars($incidencia['descripcion']); ?></p>
                </article>

                <article class="campo">
                    <h3>Prioridad:</h3>
                    <p><?php echo htmlspecialchars($incidencia['prioridad']); ?></p>
                </article>

                <article class="campo">
                    <h3>Estado:</h3>
                    <p><?php echo htmlspecialchars($incidencia['estado']); ?></p>
                    <label for="estado_nuevo">Actualizar Estado:</label>
                    <select name="estado" id="estado_nuevo" required>
                        <option value="Pendiente">Pendiente</option>
                        <option value="En proceso">En proceso</option>
                        <option value="Resuelta">Resuelta</option>
                    </select>
                </article>

                <input type="hidden" name="id" value="<?php echo htmlspecialchars($incidencia['id']); ?>">

                <button type="submit">Actualizar estado</button>
            </form>
        <?php } ?>
    </section>

    <!-- Eliminar incidencia -->
    <section>
        <h2>Eliminar incidencia</h2>
        <?php if (!empty($incidencias)) { ?>
            <form class="formulario" action="index.php" method="GET">
                <input type="hidden" name="action" value="delete">
                <article>
                    <label for="id_eliminar">Elige la incidencia que quieres eliminar:</label>

                    <select name="id" id="id_eliminar">
                        <?php foreach ($incidencias as $i) { ?>
                            <option value="<?php echo htmlspecialchars($i["id"]); ?>">
                                <?php echo htmlspecialchars($i["titulo"]); ?>
                            </option>
                        <?php } ?>
                    </select>
                </article>

                <button class="botonEliminar" type="submit">Eliminar</button>
            </form>
        <?php } else { ?>
            <div class="alerta">No hay incidencias para eliminar</div>
        <?php } ?>
    </section>
</body>

</html>