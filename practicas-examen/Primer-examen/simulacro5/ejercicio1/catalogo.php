<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

$fichero = "libros.txt";
$libros = [];

$sesionUsuario = $_SESSION['usuario'];
$usuario = $sesionUsuario['usuario'];
$rol = $sesionUsuario['rol'];

function leerLibros($fichero) {
    $libros = [];

    if (file_exists($fichero)) {
        if (!$fp = fopen($fichero, "r")) {
            echo '<p class="mensaje error">No se ha podido abrir el archivo</p>';
        } else {
            while (!feof($fp)) {
                $linea = trim(fgets($fp));

                if ($linea != "") {
                    $libro = explode("|", $linea);

                    $libros[$libro[0]] = [
                        "codigo" => $libro[0],
                        "titulo" => $libro[1],
                        "autor" => $libro[2],
                        "disponibles" => $libro[3]
                    ];
                }
            }

            fclose($fp);
        }
    }

    return $libros;
}

$libros = leerLibros($fichero);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <h1>Catálogo</h1>
        <p>Sesión iniciada por: <?php echo $usuario; ?></p>
    </header>

    <main>
        <?php if (!empty($libros)) { ?>
            <table>
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Unidades disponibles</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($libros as $libro) {
                        echo "<tr>";
                        echo "<td>" . $libro["codigo"] . "</td>";
                        echo "<td>" . $libro["titulo"] . "</td>";
                        echo "<td>" . $libro["autor"] . "</td>";
                        echo "<td>" . $libro["disponibles"] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        <?php } ?>

        <?php if ($rol == "lector") { ?>
            <section>
                <h3>¿Quieres añadir libros a favoritos?</h3>

                <form action="procesar_favorito.php" method="POST">
                    <select name="favorito" id="favorito">
                        <?php
                        foreach ($libros as $libro) {
                            echo '<option value="' . $libro["codigo"] . '">' . $libro["titulo"] . '</option>';
                        }
                        ?>
                    </select>

                    <button type="submit" name="anadir">Añadir a favoritos</button>
                </form>
            </section>
        <?php } ?>

        <?php if ($rol == "bibliotecario") { ?>
            <p>
                <a href="estadisticas.php">¿Quieres ver las estadísticas?</a>
            </p>
        <?php } ?>

    </main>
    <a href="cerrar_sesion.php">Cerrar sesión</a>
</body>

</html>