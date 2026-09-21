<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Clasificación de Edad</title>
</head>
<body>
    <h2>1. Clasificación de Edad</h2>
    <form method="POST">
        <label>Ingrese la edad de la persona: </label>
        <input type="number" name="edad" min="0" required>
        <button type="submit">Evaluar</button>
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $edad = $_POST['edad'];

        if ($edad >= 0 && $edad <= 12) {
            echo "Resultado: Es un niño";
        } elseif ($edad >= 13 && $edad <= 17) {
            echo "Resultado: Es un adolescente";
        } elseif ($edad >= 18 && $edad <= 59) {
            echo "Resultado: Es un adulto";
        } else {
            echo "Resultado: Es un adulto mayor";
        }
    }
    ?>
</body>
</html>
