<?php
$arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$current = 'Sunday';
foreach ($arr as $value) {
    if ($value != $current) {
        echo $value . "<br>";
    } else {
        echo "<i>" . $value . "</i>" . "<br>";
    }
}