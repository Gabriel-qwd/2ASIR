<?php
session_start();

// Crear carrito si no existe
if (!isset($_SESSION["carrito"])) {
    $_SESSION["carrito"] = [
        ["nombre" => "Ratón",   "precio" => 10.0, "cantidad" => 2],
        ["nombre" => "Teclado", "precio" => 20.0, "cantidad" => 1],
        ["nombre" => "Monitor", "precio" => 150.0,"cantidad" => 1],
    ];
}

// Añadir producto desde formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nuevo = [
        "nombre" => $_POST["nombre"],
        "precio" => $_POST["precio"],
        "cantidad" => $_POST["cantidad"]
    ];
    $_SESSION["carrito"][] = $nuevo;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Carrito de la compra</title>
</head>
<body style="font-family: Arial; padding: 50px;">

<h1>🛒 Carrito de la compra</h1>

<h2>Añadir producto</h2>
<form method="POST">
    Nombre: <input type="text" name="nombre" required>
    Precio: <input type="number" step="0.01" name="precio" required>
    Cantidad: <input type="number" name="cantidad" required>
    <input type="submit" value="Añadir">
</form>

<hr>

<table border="1" cellpadding="8">
    <tr style="background:#f2f2f2;">
        <th>Producto</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Subtotal</th>
    </tr>

<?php
$total = 0;

foreach ($_SESSION["carrito"] as $item):
    $subtotal = $item["precio"] * $item["cantidad"];
    $total += $subtotal;
?>
    <tr>
        <td><?php echo $item["nombre"]; ?></td>
        <td><?php echo number_format($item["precio"], 2); ?> €</td>
        <td><?php echo $item["cantidad"]; ?></td>
        <td><?php echo number_format($subtotal, 2); ?> €</td>
    </tr>
<?php endforeach; ?>

</table>

<h2>Total a pagar: <?php echo number_format($total, 2); ?> €</h2>

</body>
</html>