<?php

    $titulo = "Login";
    $rutaCss = "../../css/styles.css";

    include("../plantilla/encabezado.php");

?>

<main class="login">

    <div class="card shadow">

        <div class="card-body p-4">

            <div class="text-center mb-4">

                <i class="bi bi-person-circle login-icono"></i>

                <h2 class="mt-3">Iniciar sesión</h2>

                <p class="text-secondary">
                    Introduce tus datos de acceso
                </p>
            </div>

            <form action="compruebaLogin.php" method="post">

                <div class="mb-3">
            
                    <label for="usuario" class="form-label">
                        <i class="bi bi-person"></i>
                        Usuario
                    </label>
            
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Introduce tu usuario" required>
                </div>
            
                <div class="mb-4">
            
                    <label for="password" class="form-label">
                        <i class="bi bi-lock"></i>
                        Contraseña
                    </label>
            
                    <input type="password" class="form-control" id="password" name="password" placeholder="Introduce tu contraseña" required>
            
                </div>
            
                <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-box-arrow-in-right"></i>
                    Acceder
                </button>
            
            </form>
        </div>
    </div>
</main>

<?php

    include("../plantilla/pie.php");

?>