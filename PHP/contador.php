<!DOCTYPE html>
<html>
<head>
    <title>Contador PHP</title>
</head>
<body style="font-family: Arial; padding: 50px;">

    <h1>🔢 Contador</h1>

    <!-- FORMULARIO -->
    <form method="POST">
        <p>¿Cómo quieres contar?</p>
        <select name="tipo">
            <option value="asc">Ascendente</option>
            <option value="desc">Descendente</option>
        </select>

        <p>¿Hasta qué número?</p>
        <input type="number" name="numero" required>

        <br><br>
        <input type="submit" value="Contar">
    </form>

    <hr>

    <!-- PHP -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $tipo = $_POST["tipo"];
        $numero = $_POST["numero"];

        echo "<h2>Resultado:</h2>";

        if ($tipo == "asc") {
            for ($i = 1; $i <= $numero; $i++) {
                echo $i . " ";
            }
        } else {
            for ($i = $numero; $i >= 1; $i--) {
                echo $i . " ";
            }
        }
    }
    ?>

</body>
</html>