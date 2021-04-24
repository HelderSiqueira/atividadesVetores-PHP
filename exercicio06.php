<?php

function getKeys (array $vetor){
    $chaves =[];
    foreach ($vetor as $key => $value){
        $chaves[] = $key;
    }
    return $chaves;
}

$vetorQualquer =[
    "chave1" => "valor1",
    999 => "valor2",
    "abrobrinha" => "valor3"
];

$vetorDeChaves = getKeys($vetorQualquer);

print_r($vetorDeChaves);

?>