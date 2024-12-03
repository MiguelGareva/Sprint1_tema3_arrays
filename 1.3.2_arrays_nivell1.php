<?php 

$X = array (10, 20, 30, 40, 50,60);

echo count($X) . "<br>";

unset($X[4]);

$X = array_values($X);

echo count($X);

?>