
<?php
require_once '../../vendor/autoload.php';
// $html = file_get_contents('pdf_reports.php');//EL FILE_GET_CONTENTS ES UNA FUNCION DE PHP QUE OBTIENE UNA CADENA DE TEXTO DE UN ARCHIVO

require 'connection.php';
if(isset($_GET['fecha']) && !empty($_GET['fecha'])){
    $fecha = $_GET['fecha'];
$sql =  "SELECT f.id_formulario, f.fecha_hora, f.asignatura, f.dato_docente, e.nombre_equipo, a.nombre_ambiente, f.carrera 
FROM formulario f 
LEFT JOIN equipo e ON f.equipo = e.id_equipo 
LEFT JOIN ambiente a ON f.ambiente = a.id_ambiente
WHERE DATE(f.fecha_hora) = $fecha";
}else{
$sql = "SELECT f.id_formulario, f.fecha_hora, f.asignatura, f.dato_docente, e.nombre_equipo, a.nombre_ambiente, f.carrera 
FROM formulario f 
LEFT JOIN equipo e ON f.equipo = e.id_equipo 
LEFT JOIN ambiente a ON f.ambiente = a.id_ambiente";
}

$result = $conn->query($sql);
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }
    .text-center {
        text-align: center;
        width: 100%;
    }
    </style>
</head>
<body>
<h1 class="text-center">Préstamo de equipo o ambiente</h1>
<table class="table table-striped">
<thead>
    <tr>
        <th>#</th>
        <th>Hora</th>
        <th>Materia</th>
        <th>Docente</th>
        <th>Equipo</th>
        <th>Ambiente</th>
        <th>Carrera</th>
    </tr>
</thead>
<tbody>
';

foreach ($result as $row) {
    $html .= "<tr>
                <td>" . $row["id_formulario"] . "</td>
                <td>" . $row["fecha_hora"] . "</td>
                <td>" . $row["asignatura"] . "</td>
                <td>" . $row["dato_docente"] . "</td>
                <td>" . $row["nombre_equipo"] . "</td>
                <td>" . $row["nombre_ambiente"] . "</td>
                <td>" . $row["carrera"] . "</td>
            </tr>";
}

$html .= '
</tbody>
</table>
</body>
</html>
';
use Dompdf\Dompdf;
use Dompdf\Options;
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isPhpEnabled', true);
$options->set('isRemoteEnabled', true);
$options->set('defaultFont', 'Courier');

$dompdf = new Dompdf($options);
// $dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream("reporte.pdf", array("Attachment" => '0'));
?>