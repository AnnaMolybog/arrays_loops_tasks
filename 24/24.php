<?php
include "index.phtml";

if (!empty($_POST)) {
    $arr = $_POST;
    $num = $arr['inputNum'];
    $number[] = $arr['inputNum'];
    $check = $arr['inputCheck'];
    $i = 0;
    foreach ($number as $item) {
        $str = str_split($item);
        $n = count($str);
        foreach ($str as $value) {
            if ($value == $check) {
                $i++;
            }
        }
    }
    if ($i!=0) {
        echo "<b>" . $i . "</b>";
    } else {
        echo 'Цифра ' . $check . ' не встречается в числе ' . $num;
    }
    unset ($_POST);
}
