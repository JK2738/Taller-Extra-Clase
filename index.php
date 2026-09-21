<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal - Taller 1 PHP</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f2f5; margin: 0; padding: 40px; color: #333; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        h1 { color: #1a73e8; font-size: 24px; text-align: center; margin-bottom: 10px; }
        .subtitle { text-align: center; color: #666; margin-bottom: 30px; font-size: 14px; }
        .menu-list { list-style: none; padding: 0; margin: 0; }
        .menu-item { margin-bottom: 15px; }
        .menu-link { display: block; padding: 15px 20px; background-color: #f8f9fa; border: 1px solid #e0e0e0; border-radius: 8px; color: #1a73e8; text-decoration: none; font-weight: 600; transition: all 0.2s ease; }
        .menu-link:hover { background-color: #1a73e8; color: white; border-color: #1a73e8; transform: translateY(-2px); box-shadow: 0 4px 8px rgba(26,115,232,0.2); }
        .footer { text-align: center; margin-top: 30px; font-size: 12px; color: #999; border-top: 1px solid #eee; padding-top: 15px; }
    </style>
</head>
<body>

    <div class="container">
        <h1>Taller #1 - Fundamentos de PHP</h1>
        <p class="subtitle">Desarrollo Web - 4to Semestre</p>
        
        <ul class="menu-list">
            <li class="menu-item">
                <a class="menu-link" href="clasificacion_de_edad.php">1. Clasificación de Edad</a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="calculadora_de_descuento.php">2. Calculadora de Descuento</a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="mayor_de_tres.php">3. Mayor de Tres Números</a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="resultado_estudiante.php">4. Resultado de un Estudiante</a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="cajero_automatico.php">5. Cajero Automático</a>
            </li>
        </ul>

        <div class="footer">
            Entregado por Estudiante de Programación
        </div>
    </div>

</body>
</html>
