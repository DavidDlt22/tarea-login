<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../public/login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
    <div class="welcome-container">
        <h1>¡Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>Te has autenticado exitosamente.</p>
        <a href="../logout.php" class="btn-secondary">Cerrar sesión</a>
    </div>
</body>
</html>
