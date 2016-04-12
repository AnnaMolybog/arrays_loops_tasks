<?php
define('NUMBER',5);
$j = 1;
$n = 20;
for ($i = 1; $i <= NUMBER; $i++) {
    $j = 1;
    while ($j <= $i) {
        echo "**";
        $j++;
    }
    echo "<br>";
}