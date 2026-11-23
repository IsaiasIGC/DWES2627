<?php

$fichero = "usuarios.txt";
$alumnos = [];

// Comprobamos el fichero
if(!file_exists($fichero)) {
    $f = fopen($fichero, "w");
    fclose($f);
}

// Registramos alumnos
if(isset($_POST['enviar'])) {
    $nombre = trim($_POST['nombre'] ?? "");

    if($nombre !== "") {
        if ($fp = fopen($fichero, "a")) {
            fwrite($fp, $nombre . "\n");
            fclose($fp);
        } else {
            echo "No se ha podido abrir el archivo para escritura";
        }
    }
}


if (!$fp = fopen($fichero, "r")) {
    echo "No se ha podido abrir el archivo";
} else {
    while (!feof($fp)) {
        $linea = trim(fgets($fp));
        if ($linea !== "") {
            $alumnos[] = $linea;
        }
    }
    fclose($fp);
}

include("gestionUsuarios.view.php");

?>