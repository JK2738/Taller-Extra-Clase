<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 - Resultado de un Estudiante</title>
</head>
<body>
    <h2>4. Resultado de un Estudiante</h2>
    <form method="POST">
        <label>Nota del estudiante (0-100): </label>
        <input type="number" name="nota" min="0" max="100" required>
        <button type="submit">Ver Calificación</button>
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota = $_POST['nota'];

        if ($nota < 60) {
            echo "<strong>Resultado: Reprobado</strong>";
        } elseif ($nota >= 60 && $nota <= 79) {
            echo "<strong>Resultado: Aprobado</strong>";
        } elseif ($nota >= 80 && $nota <= 89) {
            echo "<strong>Resultado: Notable</strong>";
        } else {
            echo "<strong>Resultado: Excelente</strong>";
        }
    }
    ?>
</body>
</html>
