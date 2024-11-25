<?php
include('includes/db.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "El nombre de usuario ya está en uso.";
    } else {
        // Encriptar la contraseña
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (username, password, email) VALUES ('$username', '$password_hashed', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "Usuario registrado exitosamente. <a href='public/login.html'>Iniciar sesión</a>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>
