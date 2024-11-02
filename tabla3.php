<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Divisores Personalizada</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
            font-size: 18px;
        }
        th {
            background-color: #B3A4FF;
            color: white;
        }
        .yellow {
            background-color: #FFFFB3;
        }
        .orange {
            background-color: #FFDFB3;
        }
    </style>
</head>
<body>

<h1>Divisores entre los Números 50 y 60</h1>

<!-- Formulario para enviar los números -->
<form method="POST" action="tabla_3.php">
    Número 1: <input type="number" name="num1" min="1" max="10" required>
    Número 2: <input type="number" name="num2" min="10" max="20" required>
    <input type="submit" value="Generar Tabla">
</form>

<?php
// Incluir el archivo recupera.php
include 'recupera.php';

// Obtener los valores enviados desde el formulario
$num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 1;
$num2 = isset($_POST['num2']) ? (int)$_POST['num2'] : 10;

// Validar que los números estén en el rango adecuado
if ($num1 < 1 || $num1 > 10 || $num2 < 10 || $num2 > 20 || $num1 >= $num2) {
    echo "<p>Por favor, ingrese valores válidos. El primer número debe estar entre 1 y 10, y el segundo entre 10 y 20.</p>";
    exit;
}

// Llamar a la función para generar la tabla de divisores
echo generaTablaDivisores($num1, $num2);
?>

</body>
</html>

