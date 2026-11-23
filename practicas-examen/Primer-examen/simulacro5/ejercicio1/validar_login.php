<?php

session_start();

$fichero = "usuarios.txt";

$usuarios = [];

function leerUsuarios($fichero) {
    $usuarios = [];

    if (file_exists($fichero)) {
        if (!$fp = fopen($fichero, "r")) {
            echo '<p class=\"mensaje error\">No se ha podido abrir el archivo</p>';
        } else {
            while (!feof($fp)) {
                $linea = trim(fgets($fp));
                if ($linea != "") {
                    $usuario = explode(":", $linea);

                    $usuarios[$usuario[0]] = [
                        "usuario" => $usuario[0],
                        "password" => $usuario[1],
                        "rol" => $usuario[2]
                    ];
                }
            }
            fclose($fp);
        }
    }

    return $usuarios;
}

function autenticarUsuario($usuarios, $nombreUsuario, $password) {
    if (!empty($nombreUsuario) && !empty($password)) {
        foreach ($usuarios as $usuario) {
            if($usuario['usuario'] == $nombreUsuario && $usuario['password'] == $password) {
                return $usuario;
            }
        }
    }

    return false;
}

$usuarios = leerUsuarios($fichero);

if(isset($_POST['enviar'], $_POST['usuario'], $_POST['password'])) {
    $nombreUsuario = $_POST['usuario'];
    $password = $_POST['password'];
    
    $usuario = autenticarUsuario($usuarios, $nombreUsuario, $password);

    if ($usuario != false) {
        $_SESSION['usuario'] = [
            "usuario" => $usuario['usuario'],
            "rol" => $usuario['rol']
        ];

        setcookie("ultimo_login", $usuario['usuario'], time() + (86400 * 7));
        header("Refresh:2; url=catalogo.php");
        echo '<p class="mensaje exito">La autenticación ha terminado con éxito</p>';
    } else {
        header("Refresh:2; url=login.php");
        echo '<p class="mensaje error">La autenticación ha fallado: Los datos son incorrectos o incompletos</p>';
    }
} else {
    header("Refresh:2; url=login.php");
    echo '<p class="mensaje error">La autenticación ha fallado: Los datos son incorrectos o incompletos</p>';
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
</body>
</html>