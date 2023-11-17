<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sistema_prestamos";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Falló la conexión: " . $conn->connect_error);
}

// echo "Conexión exitosa";

// // Cerrar la conexión
// $conn->close();
?>