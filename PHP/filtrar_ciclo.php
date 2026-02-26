<?php
$alumnos = [
    ["id" => 1, "nombre" => "Ana",   "ciclo" => "ASIR", "curso" => 1, "nota" => 7],
    ["id" => 2, "nombre" => "Luis",  "ciclo" => "ASIR", "curso" => 2, "nota" => 8.5],
    ["id" => 3, "nombre" => "Marta", "ciclo" => "DAW",  "curso" => 1, "nota" => 6],
    ["id" => 4, "nombre" => "Juan",  "ciclo" => "DAW",  "curso" => 2, "nota" => 9],
    ["id" => 5, "nombre" => "Sara",  "ciclo" => "ASIR", "curso" => 1, "nota" => 5.5],
];

$cicloSeleccionado = "Todos";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cicloSeleccionado = $_POST["ciclo"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Filtrar por ciclo</title>
</head>
<body style="font-family: Arial; padding: 50px;">

<h1>🎓 Filtrar alumnos por ciclo</h1>

<!-- FORMULARIO -->
<form method="POST">
    <label>Selecciona un ciclo:</label>
    <select name="ciclo">
        <option value="Todos">Todos</option>
        <option value="ASIR">ASIR</option>
        <option value="DAW">DAW</option>
    </select>
    <input type="submit" value="Filtrar">
</form>

<hr>

<h2>Listado de alumnos</h2>

<table border="1" cellpadding="8">
    <tr style="background-color: #f2f2f2;">
        <th>ID</th>
        <th>Nombre</th>
        <th>Ciclo</th>
        <th>Curso</th>
        <th>Nota</th>
    </tr>

<?php
$contador = 0;

foreach ($alumnos as $alumno):

    if ($cicloSeleccionado == "Todos" || $alumno["ciclo"] == $cicloSeleccionado):
        $contador++;
?>
        <tr>
            <td><?php echo $alumno["id"]; ?></td>
            <td><?php echo $alumno["nombre"]; ?></td>
            <td><?php echo $alumno["ciclo"]; ?></td>
            <td><?php echo $alumno["curso"]; ?></td>
            <td><?php echo $alumno["nota"]; ?></td>
        </tr>
<?php
    endif;

endforeach;
?>

</table>

<hr>

<p><strong>Alumnos mostrados:</strong> <?php echo $contador; ?></p>

</body>
</html>