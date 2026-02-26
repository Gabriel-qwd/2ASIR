<?php
session_start();

// Crear array de módulos si no existe
if (!isset($_SESSION["modulos"])) {
    $_SESSION["modulos"] = [];
}

// Si se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $modulo = $_POST["modulo"];
    
    if (!empty($modulo)) {
        $_SESSION["modulos"][] = $modulo;
    }

    // Redirección para evitar reenviar formulario al recargar
    header("Location: modulos_asix.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Módulos ASIX</title>
</head>
<body style="font-family: Arial; padding: 50px;">

<h1>📚 Módulos del ciclo ASIX</h1>

<!-- FORMULARIO -->
<form method="POST">
    <p>Introduce un módulo:</p>
    <input type="text" name="modulo" required>
    <input type="submit" value="Añadir módulo">
</form>

<hr>

<h2>Lista de módulos:</h2>

<?php
// Mostrar módulos guardados en SESSION
foreach ($_SESSION["modulos"] as $m) {
    echo "• " . $m . "<br>";
}
?>

</body>
</html>