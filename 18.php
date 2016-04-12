<?php
$arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$i=0;
foreach ($arr as $value) {
    $i++;
    if (($i != 6) and ($i != 7)) {
        echo $value . "<br>";
    } else {
        echo "<b>" . $value . "</b>" . "<br>";
    }
}