<!DOCTYPE html>
<html>
<head>
    <title>Contador de caracteres</title>
</head>
<body style="font-family: Arial; padding: 50px;">

<h1>⌨️ Contador de caracteres</h1>

<form method="POST">
    <p>Escribe un texto:</p>
    <textarea name="texto" id="texto" rows="5" cols="50"></textarea>
    
    <p>Caracteres: <span id="contador">0</span></p>
    
    <br>
    <input type="submit" value="Contar caracteres">
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST["texto"];
    $longitud = strlen($texto);

    echo "<h2>El texto tiene $longitud caracteres</h2>";
}
?>

<!-- JAVASCRIPT EXTRA -->
<script>
const textarea = document.getElementById("texto");
const contador = document.getElementById("contador");

textarea.addEventListener("input", function() {
    let longitud = textarea.value.length;
    contador.textContent = longitud;

    if (longitud >= 100) {
        contador.style.color = "red";
        contador.style.fontWeight = "bold";
    } else {
        contador.style.color = "black";
        contador.style.fontWeight = "normal";
    }
});
</script>

</body>
</html>