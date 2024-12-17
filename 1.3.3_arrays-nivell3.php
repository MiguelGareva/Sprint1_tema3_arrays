<?php 

declare(strict_types=1);

function esPrimo(int $numero) : bool{
    if ($numero < 2) {
        return false;
    }
    for ($i=2; $i <= sqrt($numero) ; $i++) { 
        if($numero % $i == 0){
            return false;
        }
    }
    return true;
}

function sumarPrimos(int $suma, int $numero) : int{
    if (esPrimo($numero)) {
        return $suma + $numero;
    }
    return $suma;
}


?>