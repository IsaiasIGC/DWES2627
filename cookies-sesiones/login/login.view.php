<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- CSS propio del login -->
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <main class="container d-flex justify-content-center align-items-center min-vh-100">

        <div class="login-card card p-4">
            <h1 class="text-center mb-2">
                <i class="bi bi-shield-lock"></i>
            </h1>
            <section>
                <h2 class="text-center">Iniciar sesión</h2>
                <p class="text-center">Introduce tus credenciales</p>
            </section>
            <?php
                if ($error !== "") {
                    echo '<div class="alert alert-danger">'
                        . htmlspecialchars($error) .
                        '</div>';
                }
            ?>
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="login" class="form-label"> 
                        <i class="bi bi-person"></i> Usuario
                    </label>
                    <input type="text" name="login" id="login" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">
                        <i class="bi bi-key"></i> Contraseña
                    </label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success w-100">
                    Entrar <i class="bi bi-arrow-right"></i>
                </button>
            </form>
        </div>

    </main>
</body>
</html>