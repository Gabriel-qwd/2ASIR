<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
</head>
<body style="font-family: Arial; padding: 50px;">
    
    <h1>🧮 Calculadora Simple</h1>
    
    <!-- FORMULARIO -->
    <form method="POST">
        <p>
            Número 1: <input type="number" name="numero1" style="padding: 10px;">
            + 
            Número 2: <input type="number" name="numero2" style="padding: 10px;">
            <input type="submit" value="=" style="padding: 10px 20px; background: #FF9800; color: white; border: none; font-size: 20px;">
        </p>
    </form>
    
    <!-- PHP AQUÍ -->
    <!-- ESCRIBE TUS 4 LÍNEAS AQUÍ -->
     <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST["numero1"];
        $n2 = $_POST["numero2"];
        echo "<h2>Resultado: " . ($n1 + $n2) . "</h2>";
    }
?>
    
</body>
</html>
