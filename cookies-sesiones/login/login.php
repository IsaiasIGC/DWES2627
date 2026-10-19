<?php
    session_start();

    $error = "";

    // Se ha realizado una petición POST?
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Se han enviado el login y la contraseña?
        if (isset($_POST['login']) && isset($_POST['password'])) {
            $usuarios = file("usuarios.txt");
            $login = $_POST['login'];
            $password = $_POST['password'];

            foreach ($usuarios as $usuario) {
                $user = explode(":", $usuario, 2);
                
                if (count($user) === 2) {
                    $loginFichero = trim($user[0]);
                    $passwordFichero = trim($user[1]);

                    // Si los datos coinciden con los del fichero entonces guardamos y redirigimos a index.php
                    if ($login == $loginFichero && $password == $passwordFichero) {
                        $_SESSION['loginusu'] = $login;
                        header("Location: index.php");
                        exit;
                    }
                }
            }

            $error = "El login o la contraseña son incorrectos.";
        }
    }

    include "login.view.php";
?>