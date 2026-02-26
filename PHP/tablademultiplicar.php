<!DOCTYPE html>
<html>
<head>
    <title>Tabla de multiplicar</title>
</head>
<body style="font-family: Arial; padding: 50px;">

    <h1>✖️ Tabla de multiplicar</h1>

    <!-- FORMULARIO -->
    <form method="POST">
        <p>Introduce un número:</p>
        <input type="number" name="numero" required>
        <input type="submit" value="Mostrar tabla">
    </form>

    <hr>

    <!-- PHP -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $numero = $_POST["numero"];

        echo "<h2>Tabla del $numero</h2>";

        for ($i = 1; $i <= 10; $i++) {
            echo "$numero x $i = " . ($numero * $i) . "<br>";
        }
    }
    ?>

</body>
</html>