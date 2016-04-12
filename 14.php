<?php
$arr = [4, 2, 5, 19, 13, 0, 10];
$result = 0;
foreach ($arr as $value) {
    $e = 2;
    if ($value == $e) {
       $result += 1;
        break;
    } else {
        $result = 0;
    }
    $e = 3;
    if ($value == $e) {
        $result += 1;
        break;
        } else {
        $result = 0;
    }
    $e = 4;
    if ($value == $e) {
        $result += 1;
        break;
    } else {
        $result = 0;
    }
}
if ($result == 0) {
    echo 'Нет!';
} else {
    echo 'Есть!';
}