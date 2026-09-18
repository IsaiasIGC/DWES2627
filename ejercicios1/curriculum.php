<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículum - PHP</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <header>
        <h1>Ejercicios PHP</h1>
        <p>Elementos básicos del lenguaje</p>
    </header>

    <main class="contenedor">
        <h2>Ejercicio - Currículum en 3 idiomas</h2>

        <?php
            // Estudios
            $estudios_es = "Soy graduado en ESO, Bachillerato y actualmente estoy cursando un Grado Superior en Desarrollo de Aplicaciones Web.";
            $estudios_va = "Soc graduat en ESO, Batxillerat i actualment estic cursant un Grau Superior en Desenvolupament d'Aplicacions Web.";
            $estudios_en = "I have completed Compulsory Secondary Education and the Baccalaureate, and I am currently studying a Higher Degree in Web Application Development.";
            // Idiomas
            $idiomas_es = "Hablo español, valenciano e inglés.";
            $idiomas_va = "Parle espanyol, valencià i anglés.";
            $idiomas_en = "I speak Spanish, Valencian and English.";

            // Idioma seleccionado
            $idioma = "va";

            // Variable variable
            $textoEstudios = "estudios_" . $idioma;
            $textoIdiomas = "idiomas_" . $idioma;

        ?>

        <div class="resultado">
            <p><?php echo $$textoEstudios; ?></p>
            <p><?php echo $$textoIdiomas; ?></p>
        </div>
    </main>

    <footer>
        <p>Ejercicios PHP · DAW</p>
    </footer>
</body>
</html>