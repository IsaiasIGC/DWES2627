<?php

session_start();

// Eliminar los datos del usuario de la sesión
unset($_SESSION['usuario']);

// Destruir la sesión
session_destroy();

// Redirigir al login
header("Location: login.php");
exit();

?>
