<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia</title>
</head>

<body>
    <?php if (isset($_SESSION['nombre'], $_SESSION['visitas'])) { ?>
    <header>
        <h1>Bienvenido <?php  echo $_SESSION['nombre']; ?></h1>
        <p>Número de visitas: <?php  echo $_SESSION['visitas']; ?></p>
    </header>
    <?php } ?>
    <main>
        <h1>Academia</h1>
        <section>
            <form action="gestionAcademia.php" method="POST">
                <fieldset>
                    <legend>
                        <h2>Registro usuario</h2>
                    </legend>
                    <label for="nombre">Introduce tu nombre: </label>
                    <input type="text" name="nombre" id="nombre" value="<?php if(!empty($nombreRecordado)) echo $nombreRecordado; ?>" required>
                    <article>
                        <input type="checkbox" name="recordar" id="recordar" value="true">
                        <label for="recordar">Recordar mi nombre</label>
                    </article>
                    <button type="submit" name="enviar">Registrarse</button>
                </fieldset>
            </form>
        </section>
        <section>
            <form action="gestionAcademia.php" method="POST">
                <p>¿Deseas cerrar la sesión?</p>
                <button type="submit" name="cerrar">Cerrar sesión</button>
            </form>
        </section>
    </main>
</body>

</html>