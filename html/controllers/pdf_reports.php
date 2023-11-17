

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    tbody {
        background-color: #f2f2f2;
    }

    td {
        padding: 10px;
    }
</style>
</head>
<body>

<table>
<thead>
    <tr>
        <th>#</th>
        <th>Hora</th>
        <th>Materia</th>
        <th>Docente</th>
        <th>Equipo</th>
        <th>Ambiente</th>
        <th>Carrera</th>
        <th>Acciones</th>
    </tr>
</thead>
<tbody>
    <?php
    if ($result->num_rows > 0) {
        // Mostrar datos de la base de datos
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id_formulario"] . "</td>
                    <td>" . $row["fecha_hora"] . "</td>
                    <td>" . $row["asignatura"] . "</td>
                    <td>" . $row["dato_docente"] . "</td>
                    <td>" . $row["nombre_equipo"] . "</td>
                    <td>" . $row["nombre_ambiente"] . "</td>
                    <td>" . $row["carrera"] . "</td>
                    <td class='action'>
                        <a href='editar.php?id=" . $row["id_formulario"] ."' class='edit-btn'>Editar</a>
                    </td>
                </tr>";
        }
    } else {
        echo "<tr><td colspan='8'>No hay datos disponibles</td></tr>";
    }
    ?>
</tbody>
</table>
</body>
</html>