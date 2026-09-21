<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Calculadora de Descuento</title>
</head>
<body>
    <h2>2. Calculadora de Descuento</h2>
    <form method="POST">
        <label>Precio del producto: $</label>
        <input type="number" name="precio" min="0" step="0.01" required>
        <button type="submit">Calcular Precio Final</button>
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $precio = $_POST['precio'];

        if ($precio >= 100) {
            $descuento = $precio * 0.10;
            $precioFinal = $precio - $descuento;
            echo "<strong>Se aplicó un 10% de descuento. El precio final es: $" . $precioFinal . "</strong>";
        } else {
            echo "<strong>No aplica descuento. El precio final es: $" . $precio . "</strong>";
        }
    }
    ?>
</body>
</html>
