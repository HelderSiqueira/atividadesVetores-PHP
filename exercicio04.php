<?php

  function deletarElemento($vetor, $elDeletar){

    //percorre o vetor, trazendo a chave e o valor
    foreach($vetor as $chave => $el){

      //verifica se encontrou o valor
      if($el == $elDeletar){

        //deleta o valor encontrado pela chave
        unset($vetor[$chave]);

        //retorna o valor modificado
        return $vetor;
      }

    }
    //caso percorra todo o vetor e não encontre, retorna false
    return false;
  }

  $vetor = [1,56,9, "bicicleta", "empinar", "cair", "se ralar"];

  $novoVetor = deletarElemento($vetor, "empinar");

  print_r($novoVetor);