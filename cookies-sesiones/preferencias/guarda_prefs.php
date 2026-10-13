<?php

    $nombreusu = $_POST['nombre'];
    $colorusu = $_POST['color'];

    setcookie('nombreusu', $nombreusu, time() + 300);
    setcookie('colorusu', $colorusu, time() + 300);

    header("Location: index.php");
?>