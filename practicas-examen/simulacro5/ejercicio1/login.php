<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main class="tarjeta">
        <h1>Inicia sesión</h1>

        <?php
        if (isset($_COOKIE['ultimo_login'])) {
            echo '<p>Último usuario que inició sesión: ' . $_COOKIE['ultimo_login'] . '</p>';
        }
        ?>

        <form action="validar_login.php" method="POST">
            <fieldset>
                <article>
                    <label for="usuario">Nombre de usuario</label>
                    <input type="text" name="usuario" id="usuario">
                </article>

                <article>
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password">
                </article>

                <button type="submit" name="enviar">Iniciar sesión</button>
            </fieldset>
        </form>
    </main>
</body>
</html>