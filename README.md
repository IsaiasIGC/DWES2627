# Ejercicios 1 - PHP

Ejercicios básicos de PHP realizados durante el tema de **Elementos básicos del lenguaje**.

---

## Ejercicio - Información básica

### Enunciado

Crear una página `info_basica.php` que utilice dos variables para almacenar el nombre y el año de nacimiento y los muestre en una frase.

### Código

```php
<?php
$nombre = "Isaías";
$anyoNacimiento = 2000;
?>

<p class="resultado">
    Me llamo <?php echo $nombre; ?> y nací en el año <?php echo $anyoNacimiento; ?>.
</p>
```

### Captura del resultado

![Resultado del ejercicio](ejercicios1/img/info_basica.png)

---

## Ejercicio - Curriculum

### Enunciado

Crear una página ``curriculum.php`` utilizando variables variables para mostrar parte del currículum, como los estudios y los idiomas, en español, valenciano y otro idioma.

### Código

```php
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
$idioma = "es";

// Variables variables
$textoEstudios = "estudios_" . $idioma;
$textoIdiomas = "idiomas_" . $idioma;

?>

<p><?php echo $$textoEstudios; ?></p>
<p><?php echo $$textoIdiomas; ?></p>
```

### Captura del resultado

![Resultado del ejercicio](ejercicios1/img/curriculum.png)

---

## Ejercicio - Área de un círculo

### Enunciado

Crear una página `area_circulo.php` que utilice una variable `$radio` con el valor `3.5`.

Definir la constante `PI` y calcular en otra variable el área del círculo utilizando la fórmula `PI * radio²`.

Finalmente, mostrar por pantalla el texto "El área del círculo es XX.XX", donde `XX.XX` corresponde al resultado del cálculo con dos decimales.

### Código

```php
<?php
    // Variables PI y radio
    define('PI', 3.1416);
    $radio = 3.5;

    // Área
    $areaCirculo = PI * ($radio * $radio);
?>

<div class="resultado">
    <p>Calcula el área de un círculo cuyo radio es <?php echo $radio; ?>:</p>
    <p>El área del círculo es <?php echo number_format($areaCirculo, 2); ?></p>
</div>
```

### Captura del resultado

![Resultado del ejercicio](ejercicios1/img/area_circulo.png)
