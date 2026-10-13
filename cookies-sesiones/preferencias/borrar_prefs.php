<?php
    // Si las cookies existen entonces las borramos
    if (isset($_COOKIE['nombreusu']) && isset($_COOKIE['colorusu'])) {
        setcookie('nombreusu', "", 1);
        setcookie('colorusu', "", 1);
    }

    header("Location: index.php");
?>