<?php 

declare(strict_types=1);

function calcularCubo(float $numero): float{
    return $numero ** 3;
}

$arrayNumeros = array(2, 5, 6, 10, 25);
$arrayCubos = array_map('calcularCubo', $arrayNumeros);
print_r($arrayCubos);
?>