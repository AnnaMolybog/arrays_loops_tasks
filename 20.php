<?php
define('NUMBER',20);
$j = 1;
$n = 20;
for ($i = 1; $i <= NUMBER; $i++) {
    for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
    echo "<br>";
}
