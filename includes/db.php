<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>
