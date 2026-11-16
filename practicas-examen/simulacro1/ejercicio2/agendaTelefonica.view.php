<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Telefónica</title>
</head>
<body>
    <h1>Agenda Telefónica</h1>
    <section>
        <h2>Gestión:</h2>
        <article>
            <h3>Agregar a Pedro:</h3>
            <p>
                <?php
                    echo agregarContacto($agenda, "644444444", "Pedro")
                        ? "Agregado correctamente"
                        : "Ya existe este contacto.";
                ?>
            </p>
            <h3>Agregar a Carlos:</h3>
            <p>
                <?php
                    echo agregarContacto($agenda, "611111111", "Carlos")
                    ? "Agregado correctamente."
                    : "Ya existe este contacto.";
                    ?>
            </p>
        </article>
        <article>
            <h3>Eliminar el teléfono 622222222:</h3>
            <p>
                <?php
                echo eliminarContacto($agenda, "622222222")
                    ? "Eliminado correctamente."
                    : "No existe este contacto";
                ?>
            </p>
        </article>
        <article>
            <h3>Buscar el contacto 644444444:</h3>
            <p>
                <?php
                $resultado = buscarContacto($agenda, "644444444");
                echo $resultado
                    ? $resultado
                    : "No existe este contacto";
                ?>
            </p>
        </article>
    </section>
    <section>
        <h2>Contactos:</h2>
        <table>
            <thead>
                <tr>
                    <th>Télefono</th>
                    <th>Nombre del contacto</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($agenda as $telefono => $contacto) {
                        echo "<tr>";
                        echo "<td>". $telefono ."</td>";
                        echo "<td>". $contacto ."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </section>
</body>
</html>