<?php

function calacularMedia(array $notas){

    $soma = 0;
    foreach ($notas as $nota) {
        $soma += $nota;
    }

    $media = $soma / count ($notas);
    return $media;
}

$notasAlunos =[45, 60, 10, 0, 100, 100, 99];

$mediaDaSala = calacularMedia($notasAlunos);

echo "Média é igual a:". number_format($mediaDaSala, 0);

?>