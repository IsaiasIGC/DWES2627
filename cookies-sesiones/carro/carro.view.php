<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda deportiva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/carro.css">
</head>

<body>
    <header class="py-4">
        <div class="container">
            <h1>Tienda deportiva</h1>
        </div>
    </header>

    <main class="container">

        <section class="mb-5">
            <h2>Productos disponibles</h2>

            <div class="row g-3">
                <?php foreach ($articulos as $articulo): ?>
                    <div class="col-3 d-flex">
                        <div class="card p-3 w-100">
                            <h3 class="h5"><?= htmlspecialchars($articulo['nombre']) ?></h3>
                            <p><?= $articulo['precio'] ?> €</p>
                            <a href="carro.php?id=<?= $articulo['id'] ?>" class="btn btn-primary">Añadir al carrito</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mb-5">
            <h2>Mi carrito</h2>

            <?php foreach ($_SESSION['carrito'] as $articulo): ?>
                <div class="card mb-3 p-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h3 class="h5 mb-0">
                                <?= htmlspecialchars($articulo['nombre']) ?>
                            </h3>
                        </div>
                        <div class="col-3 text-end">
                            <p class="mb-0"><?= $articulo['precio'] ?> €</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            
            <h3>Total: <?= $total ?> €</h3>
        </section>
    </main>

    <footer class="py-3">
        <div class="container">
            <p>&copy; 2026 Tienda deportiva</p>
        </div>
    </footer>
</body>
</html>