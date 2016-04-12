<?php
include "index.phtml";
if (!empty($_POST)) {
    $arr = $_POST;
    $str = [];
    foreach ($arr as $value) {
        if (is_numeric($value)) {
            $str = str_split($value);
            $sum = 0;
            foreach ($str as $item) {
                $sum += $item;
            }
            echo "<b>" . $sum . "</b>";
        } else {
            echo 'There is no number. Please enter only numbers in the text box';
        }
    }
    unset($_POST);
}

