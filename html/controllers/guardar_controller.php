<?php
require 'connection.php';
$id = $_POST['id'];
$materia = $_POST['materia'];
$docente = $_POST['docente'];
$entregadoPor = $_POST['entregadoPor'];
$fechaHora = $_POST['fechaHora'];
$equipo = $_POST['equipo'];
$ambiente = $_POST['ambiente'];
$carrera = $_POST['carrera'];

$sql_equipo = "SELECT id_equipo, nombre_equipo FROM equipo WHERE id_equipo = $equipo";
$result_equipo = $conn->query($sql_equipo);
$equipo =   $result_equipo->fetch_assoc()['id_equipo'];

$sql_ambiente = "SELECT id_ambiente, nombre_ambiente FROM ambiente WHERE id_ambiente = $ambiente";
$result_ambiente = $conn->query($sql_ambiente);
$ambiente =   $result_ambiente->fetch_assoc()['id_ambiente'];

// $sql_insert = "INSERT INTO formulario (dato_docente, asignatura, entregado_por, fecha_hora, equipo, ambiente, carrera) 
//                VALUES ('$docente', '$materia', '$entregadoPor', '$fechaHora', '$equipo', '$ambiente', '$carrera')";
    $sql_update = "UPDATE formulario SET 
                    dato_docente = '$docente',
                    asignatura = '$materia',
                    entregado_por = '$entregadoPor',
                    fecha_hora = '$fechaHora',
                    equipo = '$equipo',
                    ambiente = '$ambiente',
                    carrera = '$carrera'
                    WHERE id_formulario = $id";


if ($conn->query($sql_update) === TRUE) {
    echo "Nuevo formulario agregado correctamente";
    header("Location: ../prestamos.php");
} else {
    echo "Error al agregar el formulario: " . $conn->error;
}

$conn->close();
?>