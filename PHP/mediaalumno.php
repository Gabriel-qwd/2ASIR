<!DOCTYPE html>
<html>
<head>
    <title>Media del alumno</title>
</head>
<body style="font-family: Arial; padding: 50px;">

    <h1>📊 Calcular media del alumno</h1>

    <!-- FORMULARIO -->
    <form method="POST">
        <p>Nombre: <input type="text" name="nombre" required></p>
        <p>Nota ejercicio 1: <input type="number" step="0.1" name="n1" required></p>
        <p>Nota ejercicio 2: <input type="number" step="0.1" name="n2" required></p>
        <p>Nota ejercicio 3: <input type="number" step="0.1" name="n3" required></p>
        <input type="submit" value="Calcular media">
    </form>

    <hr>

    <!-- PHP AQUÍ -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombre = $_POST["nombre"];
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];

        $media = ($n1 + $n2 + $n3) / 3;

        echo "<h2>Media: " . round($media,2) . "</h2>";

        if ($media < 5) {
            echo "<h2>Lo siento, $nombre, estás suspendido.</h2>";
        }
        elseif ($media >= 5 && $media < 6) {
            echo "<h2>Bien, $nombre, estás aprobado.</h2>";
        }
        elseif ($media >= 6 && $media < 7) {
            echo "<h2>Perfecto $nombre, tienes un bien.</h2>";
        }
        elseif ($media >= 7 && $media < 9) {
            echo "<h2>Fenomenal $nombre, tienes un notable.</h2>";
        }
        elseif ($media >= 9) {
            echo "<h2>Enhorabuena $nombre, sobresaliente.</h2>";
        }

    }
    ?>

</body>
</html>