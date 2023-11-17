<?php
require '../controllers/connection.php';
$materia = $_POST['materia'];
$docente = $_POST['docente'];
$entregadoPor = $_POST['entregadoPor'];
$fechaHora = $_POST['fechaHora'];
$equipo = $_POST['equipo'];
$ambiente = $_POST['ambiente'];
$carrera = $_POST['carrera'];

$sql_insert = "INSERT INTO formulario (dato_docente, asignatura, entregado_por, fecha_hora, equipo, ambiente, carrera) 
               VALUES ('$docente', '$materia', '$entregadoPor', '$fechaHora', '$equipo', '$ambiente', '$carrera')";

if ($conn->query($sql_insert) === TRUE) {
    echo "Nuevo formulario agregado correctamente";
    header("Location: ../prestamos.php");
} else {
    echo "Error al agregar el formulario: " . $conn->error;
}

$conn->close();
?>