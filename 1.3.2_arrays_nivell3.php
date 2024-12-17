<?php

declare(strict_types=1);

function esPar(string $palabra) : bool{
    return strlen(string : $palabra) % 2 == 0;
}

$arrayPalabras = array("no", "asgo", "cazcalear", "axiomatico", "concubinato");
$arrayPares = array_filter($arrayPalabras, 'esPar');

print_r($arrayPares);

?>