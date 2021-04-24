<?php

function getMaiorMenor(array $inteiro){
    //Aqui estamos inicializando dizendo que o núro de 
    //posição '0' será o valor preecher a variavel 'maior'
    //Claro que isso irá mudar a medida que o 'foreach' percorrerá
    //o vetor, mas ppara se inicializar será na posição '0' do vetor
    //que será o 100.
    $maior = $inteiro[0];
    $menor = $inteiro [0];
//Aqui estamos fazendo a condição lógica, o 'foreach' está chamando 
//o vetor 'inteiro' e os nomeando de  'numeros' os elementos dentro dele
    foreach ($inteiro as $numero) {
        if ($numero > $maior){
            $maior = $numero;
        }
        if ($numero < $menor){
            $menor = $numero;
        }
    }
    //Aqui estamos nomeando as posições
    return [
        "maior" => $maior,
        "menor" => $menor
    ];
}
//vetor declarado
 $vetor = [100, 99, 65, 1001,2, 3];
//exibindo, chamando a função criada junto com o vetor 
 print_r(getMaiorMenor($vetor));