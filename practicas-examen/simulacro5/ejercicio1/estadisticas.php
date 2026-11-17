
<?php

session_start();

// Comprobar que el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Comprobar que tiene rol de bibliotecario
if ($_SESSION['usuario']['rol'] != "bibliotecario") {
    header("Location: catalogo.php");
    exit();
}

// Leer los libros
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

// Calcular estadísticas
$totalLibros = count($libros);
$totalUnidades = 0;

foreach ($libros as $libro) {
    $totalUnidades += $libro['disponibles'];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadísticas de la biblioteca</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <header>
        <h1>Estadísticas de la biblioteca</h1>
    </header>

    <main>

        <section class="tarjeta">

            <h2>Resumen general</h2>

            <p>
                Total de libros registrados:
                <strong><?= $totalLibros ?></strong>
            </p>

            <p>
                Total de unidades disponibles:
                <strong><?= $totalUnidades ?></strong>
            </p>

            <a href="catalogo.php">Volver al catálogo</a>

        </section>

    </main>

</body>
</html>
