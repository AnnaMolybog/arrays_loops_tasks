<?php
for ($i = 1; $i <= 10; $i++) {
    for ($j =1; $j <= 10; $j++) {
        $result = 0;
        $result = $i * $j;
        echo $i . ' x ' . $j . ' = ' . $result . "<br>";
    }
}