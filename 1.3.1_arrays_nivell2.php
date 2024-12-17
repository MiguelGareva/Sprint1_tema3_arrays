<?php

$array1 = [1, 5, 7, 9, 11, 25];
$array2 = [3, 5, 8, 13, 15, 25];

$arrayIntersection = array_intersect($array1, $array2);

$arrayFusion = array_merge($array1, $array2);

print_r($arrayIntersection);
echo "<br>"; 
print_r($arrayFusion);
?>