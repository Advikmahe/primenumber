<?php
echo "<table border ='1' style='border-collapse: collapse'>";
for ($row=2; $row <= 15; $row++) { 
    echo "<tr> ";
    for ($col=2; $col <= 15; $col++) { 
       $p = $col * $row;
       echo "<td>$p</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>    