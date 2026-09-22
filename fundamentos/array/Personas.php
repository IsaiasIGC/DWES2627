<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas - PHP</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>

<body>

    <header>
        <h1>Ejercicios PHP</h1>
        <p>Arrays</p>
    </header>

    <main class="contenedor">
        <h2>Ejercicio 7.0.3 - Personas</h2>
        <div class="tarjeta">
            <h3>Enunciado</h3>
            <p>
                Mediante un array bidimensional, almacena el nombre, altura y email de 5 personas. Para ello, crea un array
                de personas, siendo cada persona un array asociativo:
                [ [‘nombre’=>‘Aitor’, ‘altura’=>182,‘email’=>‘aitor@correo.com’],[…],… ]
                Posteriormente, recorre el array y muéstralo en una tabla HTML.
            </p>
        </div>

        <?php
            $personas = [
                [
                    'nombre' => 'Aitor',
                    'altura' => 182,
                    'email' => 'aitor@correo.com'
                ],
                [
                    'nombre' => 'Isaias',
                    'altura' => 175,
                    'email' => 'isaias@correo.com'
                ],
                [
                    'nombre' => 'Diego',
                    'altura' => 190,
                    'email' => 'diego@correo.com'
                ],
                [
                    'nombre' => 'David',
                    'altura' => 170,
                    'email' => 'david@correo.com'
                ],
                [
                    'nombre' => 'Joel',
                    'altura' => 195,
                    'email' => 'joel@correo.com'
                ],
            ];
        ?>
        <div class="tarjeta">
            <h3>Personas:</h3>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Altura</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($personas as $i => $value) {
                            echo "<tr>";
                            echo "<td>" . $value['nombre'] . "</td>";
                            echo "<td>" . $value['altura'] . "</td>";
                            echo "<td>" . $value['email'] . "</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <p>Ejercicios PHP · DAW</p>
    </footer>
</body>
</html>