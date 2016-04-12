<?php
define ('MIN', -20);
define ('MAX', 100);
define('N', 10);
$arr = [];
for ($i = 0; $i < N; $i++) {
    $arr[$i] = rand(MIN, MAX);
}
echo "<pre>";
print_r($arr);
$p = 1;
$j = 0;
$k = 0;
$arr1 = [];
for ($i = 0; $i < N; $i += 2) {
    if (($arr[$i] > 0) and (($i%2) == 0)) {
        $p *=$arr[$i];
    }
}
for ($i = 0; $i < N; $i++) {
    if (($arr[$i] > 0) and (($i%2) != 0)) {
        $arr1[$j] = $arr[$i];
        $j++;
    }
}
echo $p;
echo "<pre>";
print_r($arr1);