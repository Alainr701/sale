<?php
require '../controllers/connection.php';
$id = $_GET['id'];

//eliminar 
$sql = "DELETE FROM formulario WHERE id_formulario = '$id'";
$conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Nuevo formulario agregado correctamente";
    header("Location: ../prestamos.php");
} else {
    echo "Error al agregar el formulario: " . $conn->error;
}

$conn->close();
?>