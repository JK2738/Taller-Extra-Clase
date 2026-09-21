<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - Mayor de Tres Números</title>
</head>
<body>
    <h2>3. Mayor de Tres Números</h2>
    <form method="POST">
        <label>Número 1: </label> <input type="number" name="n1" required><br><br>
        <label>Número 2: </label> <input type="number" name="n2" required><br><br>
        <label>Número 3: </label> <input type="number" name="n3" required><br><br>
        <button type="submit">Determinar Mayor</button>
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];

        echo "<div>";
        if ($n1 >= $n2 && $n1 >= $n3) {
            echo "<strong>El número mayor es: " . $n1 . "</strong>";
        } elseif ($n2 >= $n1 && $n2 >= $n3) {
            echo "<strong>El número mayor es: " . $n2 . "</strong>";
        } else {
            echo "<strong>El número mayor es: " . $n3 . "</strong>";
        }
        echo "</div>";
    }
    ?>
</body>
</html>
