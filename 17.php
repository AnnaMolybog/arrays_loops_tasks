<?php
$arr = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
$month = 'April';
foreach ($arr as $value) {
    if ($value != $month) {
        echo $value . "<br>";
    } else {
        echo "<b>" . $value . "</b>" . "<br>";
    }
}