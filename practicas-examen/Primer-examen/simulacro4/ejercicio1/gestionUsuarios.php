<?php

session_start();

$fichero = "usuarios.txt";

function leerUsuarios($fichero) {
    $usuarios = [];

    // Existe el fichero?
    if(file_exists($fichero)) {
        // Se puede abrir en modo lectura?
        if($fp = fopen($fichero, "r")) {
            // Mientras no esté al final del fichero
            while (!feof($fp)) {
                $linea = trim(fgets($fp));
                
                // Si la linea no está vacía cogemos sus propiedades y las ponemos en usuarios
                if ($linea != "") {
                    $usuario = explode(":", $linea);

                    $usuarios[$usuario[0]] = [
                        "login" => $usuario[0],
                        "password" => $usuario[1],
                        "nombre" => $usuario[2],
                        "rol" => $usuario[3]
                    ];
                }
            }

            // Cerramos el fichero de modo lectura
            fclose($fp);
        } else {
            echo "<p>No se ha podido abrir el fichero en modo lectura</p>";
        }
    }

    return $usuarios;
}

function autenticarUsuario($usuarios, $login, $password) {
    // Comprobamos que hemos recibido los datos necesarios
    if (!empty($login) && !empty($password)) {
        if(isset($usuarios[$login]) && $usuarios[$login]["password"] == $password) {
            return $usuarios[$login];
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function estadisticasUsuarios($usuarios) {
    $estadisticas = [];
    $totalUsuarios = 0;
    $numAlumnos = 0;
    $numProfesores = 0;
    $numAdministradores = 0;

    foreach ($usuarios as $usuario => $value) {
        if ($value['rol'] == "alumno") {
            $numAlumnos++;
        } else if ($value['rol'] == "profesor") {
            $numProfesores++;
        } else if ($value['rol'] == "administrador") {
            $numAdministradores++;
        }
        $totalUsuarios++;
    }

    $estadisticas = [
        "totalUsuarios" => $totalUsuarios,
        "numAlumnos" => $numAlumnos,
        "numProfesores" => $numProfesores,
        "numAdministradores" => $numAdministradores,
    ];

    return $estadisticas;
}

function puedeAcceder($rol, $seccion) {
    $secciones = [
        "cursos" => [
            "alumno",
            "profesor",
            "administrador"
        ],
        "gestion" => [
            "profesor",
            "administrador"
        ],
        "usuarios" => [
            "administrador"
        ]
    ];

    // Verificamos si la sección existe y si el rol está dentro de ella
    if (isset($secciones[$seccion]) && in_array($rol, $secciones[$seccion])) {
        return true;
    }
    
    return false;
}

function cerrarSesion() {
    if (isset($_SESSION['usuario'])) {
        unset($_SESSION['usuario']);
        session_destroy();
    }
}

$usuarios = leerUsuarios($fichero);

if (isset($_POST['enviar'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $usuario = autenticarUsuario($usuarios, $login, $password);

    if ($usuario !== false) {
        $_SESSION['usuario'] = [
            "login" => $usuario["login"],
            "nombre" => $usuario["nombre"],
            "rol" => $usuario["rol"]
        ];

        setcookie("login", $usuario["login"], time() + 3600);
    } else {
        echo "<p>Los datos no son correctos o están vacíos</p>";
    }
}

$mensajeBienvenida = "";

if(isset($_SESSION['usuario'])) {
    $mensajeBienvenida = "Bienvenid@ ".$_SESSION['usuario']['nombre'];
}

// Si envian peticion de cerrar
if (isset($_POST['cerrar'])) {
    cerrarSesion();
}

$estadisticas = estadisticasUsuarios($usuarios);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header>
        <h1>Gestión de Usuarios</h1>
        <?php 
        if(isset($_SESSION['usuario'])) {
            echo "<p>".$mensajeBienvenida."</p>";
        }
        ?>
    </header>
    <main>
        <form action="gestionUsuarios.php" method="POST">
            <fieldset>
                <legend>Inicio de sesión</legend>

                <article>
                    <label for="login">Login: </label>
                    <input type="text" name="login" id="login" required>
                </article>
                <article>
                    <label for="password">Contraseña: </label>
                    <input type="text" name="password" id="password" required>
                </article>
                <button type="submit" name="enviar">Iniciar sesión</button>
            </fieldset>
        </form>
        <form action="gestionUsuarios.php" method="POST">
            <h3>¿Desea cerrar la sesión?</h3>
            <button type="submit" name="cerrar">Cerrar sesión</button>
        </form>
    </main>
</body>
</html>