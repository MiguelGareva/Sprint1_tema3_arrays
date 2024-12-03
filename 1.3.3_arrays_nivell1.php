<?php

declare(strict_types=1);

function searchCommonCharacter(array $array, string $character) : string {

    $cointidence = true;

    foreach ($array as $words) {
        if (strpos($words, $character) === false){
            $cointidence = false;
        } 
    }
    if ($cointidence){
        return "Todas las palabras contienen el carácter " . $character;
    } else {
        return "No todas las palabras contienen el carácter " . $character;
    }
    
}

$array1 = ["hola", "Php", "Html"];
$char = "h";
echo searchCommonCharacter($array1, $char);
?>