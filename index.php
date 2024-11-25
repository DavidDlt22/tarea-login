<?php
session_start();

// Si el usuario ya está autenticado, redirigir a la página de bienvenida
if (isset($_SESSION['user_id'])) {
    header("Location: public/welcome.php");
    exit();
} else {
    // Si no está autenticado, redirigir al login
    header("Location: public/login.html");
    exit();
}
?>
