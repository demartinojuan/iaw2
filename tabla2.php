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

<?php
// Obtener los valores enviados desde el formulario
$num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 1;
$num2 = isset($_POST['num2']) ? (int)$_POST['num2'] : 10;

// Validar que los números estén en el rango adecuado
if ($num1 < 1 || $num1 > 10 || $num2 < 10 || $num2 > 20 || $num1 >= $num2) {
    echo "<p>Por favor, ingrese valores válidos. El primer número debe estar entre 1 y 10, y el segundo entre 10 y 20.</p>";
    exit;
}
?>

<table>
    <tr>
        <th></th>
        <?php
        // Encabezado con los números del 50 al 60
        for ($col = 50; $col <= 60; $col++) {
            echo "<th>$col</th>";
        }
        ?>
    </tr>
    <?php
    // Generar filas desde el primer hasta el segundo número ingresado
    for ($row = $num1; $row <= $num2; $row++) {
        echo "<tr><th>$row</th>";
        for ($col = 50; $col <= 60; $col++) {
            // Verificar si el número de la columna es divisible por el número de la fila
            if ($col % $row == 0) {
                $colorClass = ($row % 2 == 0) ? "orange" : "yellow";
                echo "<td class='$colorClass'>*</td>";
            } else {
                $colorClass = ($row % 2 == 0) ? "orange" : "yellow";
                echo "<td class='$colorClass'>-</td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
