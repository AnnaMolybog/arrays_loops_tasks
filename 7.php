<?php
$arr = [2, 5, 9, 15, 0, 4];
define('MIN', 3);
define('MAX', 10);
foreach ($arr as $value) {
    if ($value > MIN and $value < MAX) {
        echo $value . "<br>";
    }
}