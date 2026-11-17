<?php

session_start();

// Comprobar que el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Leer los libros disponibles
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

$libros = leerLibros("libros.txt");

$favoritos = [];

if (isset($_SESSION['usuario']['favoritos'])) {
    $favoritos = $_SESSION['usuario']['favoritos'];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis favoritos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <header>
        <h1>Mis libros favoritos</h1>
    </header>

    <main>

        <section class="tarjeta">

            <?php if (empty($favoritos)) { ?>

                <p class="mensaje">Todavía no tienes libros favoritos.</p>

            <?php } else { ?>

                <h2>Libros guardados:</h2>

                <ul>
                    <?php foreach ($favoritos as $codigo) { ?>

                        <?php if (isset($libros[$codigo])) { ?>

                            <li>
                                <?= $libros[$codigo]['titulo'] ?>
                            </li>

                        <?php } ?>

                    <?php } ?>
                </ul>

            <?php } ?>

            <a href="catalogo.php">Volver al catálogo</a>

        </section>

    </main>

</body>
</html>
