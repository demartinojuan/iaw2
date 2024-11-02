<?php
function generaTablaDivisores($num1, $num2) {
    $resultado = '<table>
        <tr>
            <th></th>';
    for ($col = 50; $col <= 60; $col++) {
        $resultado .= "<th>$col</th>";
    }
    $resultado .= '</tr>';
    
    for ($row = $num1; $row <= $num2; $row++) {
        $resultado .= "<tr><th>$row</th>";
        for ($col = 50; $col <= 60; $col++) {
            if ($col % $row == 0) {
                $colorClass = ($row % 2 == 0) ? "orange" : "yellow";
                $resultado .= "<td class='$colorClass'>*</td>";
            } else {
                $colorClass = ($row % 2 == 0) ? "orange" : "yellow";
                $resultado .= "<td class='$colorClass'>-</td>";
            }
        }
        $resultado .= '</tr>';
    }
    $resultado .= '</table>';
    
    return $resultado;
}
?>
