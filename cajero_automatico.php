<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5 - Cajero Automático</title>
</head>
<body>
    <h2>5. Cajero Automático</h2>
    <form method="POST">
        <p>Saldo disponible en cuenta: $100.000</p>
        <label>Monto que desea retirar: $</label>
        <input type="number" name="monto" min="1" required>
        <button type="submit">Retirar</button>
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $saldo = 100000;
        $monto = $_POST['monto'];

        if ($monto <= $saldo) {
            $saldoRestante = $saldo - $monto;
            echo "<strong>Saldo restante: $" . $saldoRestante . "</strong>";
        } else {
            echo "<strong>Fondos insuficientes, intente nuevamente </strong>";
        }
    }
    ?>
</body>
</html>
