<?php
define ('MIN', 0);
define ('MAX', 100);
define('N', 10);
$arr = [];
for ($i = 0; $i < N; $i++) {
    $arr[$i] = rand(MIN, MAX);
}
echo "<pre>";
print_r($arr);
$min = $arr[0];

for ($i = 0; $i < N; $i++) {
    for ($j = 0; $j < N; $j++){
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
    }
}
$max = $arr[0];

for ($i = 0; $i < N; $i++) {
    if ($max < $arr[$i]) {
        $max = $arr[$i];
    }
}
$indexMax = [];
$indexMin = [];
$j = 0;
$k = 0;
for ($i = 0; $i < N; $i++) {
    if ($arr[$i] == $max) {
        $indexMax[$j] = $i;
        $j++;
    }
    if ($arr[$i] == $min) {
        $indexMin[$k] = $i;
        $k++;
    }
}

echo 'max is ' . $max . "<br>" . 'min is ' . $min;
foreach ($indexMin as $value) {
    $arr[$value] = $max;
}
foreach ($indexMax as $item) {
    $arr[$item] = $min;
}

echo "<pre>";
print_r($arr);