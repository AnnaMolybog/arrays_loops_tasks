<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en[]=0;
$ru[]=0;
$i = 0;
   foreach ($arr as $key => $value) {
       $en[$i] = $key;
       $ru[$i] = $value;
       $i++;
}
echo "<pre>";
print_r($en);
print_r($ru);
echo "</pre>";