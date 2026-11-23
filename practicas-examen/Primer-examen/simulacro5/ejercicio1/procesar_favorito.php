<?php

session_start();

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

// Añadir un favorito
function addFavorito($libroFavorito) {

    if (!isset($_SESSION['usuario']['favoritos'])) {
        $_SESSION['usuario']['favoritos'] = [];
    }

    if (!in_array($libroFavorito, $_SESSION['usuario']['favoritos'])) {
        $_SESSION['usuario']['favoritos'][] = $libroFavorito;
        return true;
    } else {
        return false;
    }
}

if (isset($_POST['anadir'], $_POST['favorito']) && !empty($_POST['favorito'])) {
    $libroFavorito = $_POST['favorito'];

    $libros = leerLibros("libros.txt");

    // Comprobar que el libro existe
    if (!isset($libros[$libroFavorito])) {
        header("Refresh:2; url=catalogo.php");
        echo '<p class="mensaje error">El libro seleccionado no existe</p>';
        exit();
    }

    $anadido = addFavorito($libroFavorito);

    if ($anadido) {
        header("Refresh:2; url=mis_favoritos.php");
        echo '<p class="mensaje exito">Añadido a favoritos correctamente</p>';
        exit();
    } else {
        header("Refresh:2; url=catalogo.php");
        echo '<p class="mensaje error">Este libro ya lo tienes en favoritos</p>';
        exit();
    }
} else {
    header("Location: catalogo.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar favorito</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
</body>
</html>