<?php
echo "<table border = '1'>";
for ($k = 0; $k < 1; $k++) {
    echo "<tr>";
    for ($i = 1; $i <= 10; $i++) {
    for ($l = 0; $l < 1; $l++) {
        echo "<td width = '300' height='300' align='center'>";
            for ($j = 1; $j <= 10; $j++) {
                $result = 0;
                $result = $i * $j;
                echo $i . ' x ' . $j . ' = ' . $result . "<br>";
            }
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>