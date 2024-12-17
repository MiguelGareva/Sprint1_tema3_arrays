<?php 

declare(strict_types=1);

$notas = array("Luffy" => [5, 6, 5, 6, 10],
                "Zoro" => [0, 10, 0, 10, 3],
                "Nami" => [8, 8, 8, 8, 8],
                "Ussop" => [5, 3, 4, 7, 9.5],
                "Sanji" => [1, 9, 1, 9, 2]);

function calcularMedias(array $notas): void{

    $mediaClase = 0;

    foreach ($notas as $nota) {
        $numNotas = count($notas);
        $sumaNotas = array_sum($notas);
        $mediaPersona = $sumaNotas / $numNotas;
        echo $mediaPersona . "<br>";
        $mediaClase += $mediaPersona;
    }
    echo $mediaPersona;
}
?>