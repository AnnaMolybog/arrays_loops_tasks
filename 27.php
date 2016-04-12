<?php
$colors = array('red','yellow','blue','gray','maroon','brown','green');
define ('MIN', 1);
define ('MAX', 10);
$col = rand(MIN,MAX);
$row = rand(MIN,MAX);
echo "<table border = '1'>";
for ($i = 0; $i < $row; $i++){
    echo "<tr>";
    for ($j = 0; $j < $col; $j++) {
        $num = rand(MIN,MAX);
        $color = array_rand($colors);
        $str = $colors[$color];
        echo "<td width = '50' height='50' bgcolor=$str align='center'>" . "<b>" . $num . "</b>" . "</td>";
    }
    echo "</tr>";
}
echo "</table>";