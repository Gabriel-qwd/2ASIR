<!DOCTYPE html>
<html>
<head>
    <title>Datos del alumno</title>
</head>
<body style="font-family: Arial; padding: 50px;">

    <h1>📚 Datos del alumno</h1>

    <!-- FRASE FIJA -->
    <?php
        $nombre = "Ana";
        $ciclo = "ASIR";
        $curso = "2º";

        echo "<h2>Ejemplo: Me llamo $nombre, estudio $ciclo y estoy en $curso curso</h2>";
    ?>

    <hr>

    <h2>Introduce tus datos</h2>

    <!-- FORMULARIO -->
    <form method="POST">
        <p>Nombre: <input type="text" name="nombre" required></p>
        <p>Ciclo: <input type="text" name="ciclo" required></p>
        <p>Curso: <input type="text" name="curso" required></p>
        <input type="submit" value="Enviar">
    </form>

    <!-- RESULTADO DEL FORMULARIO -->
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombreForm = $_POST["nombre"];
            $cicloForm = $_POST["ciclo"];
            $cursoForm = $_POST["curso"];

            echo "<h2>Me llamo $nombreForm, estudio $cicloForm y estoy en $cursoForm curso</h2>";
        }
    ?>

</body>
</html>