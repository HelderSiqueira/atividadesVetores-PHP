<?php

function estaContido(array $vetor, array $vetorContido){
  
  foreach ($vetorContido as $valorVetor2) {
          $encontrado = false;
     foreach ($vetor as $valorVetor1) {
        if ($valorVetor1 == $valorVetor2) {
             $encontrado = true;
              continue;
        }
             if (!$encontrado){
              return false;
             }
     }
  }
    return true;
}

$vetor1 = [1, 3, 5];
$vetor2 = [1, 2];

    if (estaContido($vetor1, $vetor2)) {
           echo "Sim, está contido";

    }else{
    echo "Não, não está contido";
    }
