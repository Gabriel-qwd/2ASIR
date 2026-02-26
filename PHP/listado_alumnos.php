<?php
$alumnos = [
    ["id" => 1, "nombre" => "Ana",   "ciclo" => "ASIR", "curso" => 1, "nota" => 7],
    ["id" => 2, "nombre" => "Luis",  "ciclo" => "ASIR", "curso" => 2, "nota" => 8.5],
    ["id" => 3, "nombre" => "Marta", "ciclo" => "DAW",  "curso" => 1, "nota" => 6],
    ["id" => 4, "nombre" => "Juan",  "ciclo" => "DAW",  "curso" => 2, "nota" => 9],
    ["id" => 5, "nombre" => "Sara",  "ciclo" => "ASIR", "curso" => 1, "nota" => 5.5],
];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listado y media de notas</title>
</head>
<body style="font-family: Arial; padding: 50px;">

<h1>📋 Listado de alumnos</h1>

<table border="1" cellpadding="8">
    <tr style="background-color: #f2f2f2;">
        <th>ID</th>
        <th>Nombre</th>
        <th>Ciclo</th>
        <th>Curso</th>
        <th>Nota</th>
    </tr>

    <?php
    $sumaNotas = 0;

    foreach ($alumnos as $alumno):
        $sumaNotas += $alumno["nota"];
    ?>
        <tr>
            <td><?php echo $alumno["id"]; ?></td>
            <td><?php echo $alumno["nombre"]; ?></td>
            <td><?php echo $alumno["ciclo"]; ?></td>
            <td><?php echo $alumno["curso"]; ?></td>
            <td><?php echo $alumno["nota"]; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
$total = count($alumnos);
$media = $sumaNotas / $total;
?>

<hr>

<h2>📊 Resumen</h2>
<p><strong>Total alumnos:</strong> <?php echo $total; ?></p>
<p><strong>Nota media:</strong> <?php echo number_format($media, 2); ?></p>

</body>
</html>