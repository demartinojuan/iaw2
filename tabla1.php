<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Divisores</title>
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

<h1>Divisores de los Números entre 50 y 60</h1>
<table>
    <tr>
        <th></th>
        <?php
        // Crear encabezado de los números del 50 al 60
        for ($col = 50; $col <= 60; $col++) {
            echo "<th>$col</th>";
        }
        ?>
    </tr>
    <?php
    // Crear las filas para los números del 1 al 10
    for ($row = 1; $row <= 10; $row++) {
        echo "<tr><th>$row</th>";
        for ($col = 50; $col <= 60; $col++) {
            // Verificar si es divisor y cambiar el contenido y color de la celda
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

