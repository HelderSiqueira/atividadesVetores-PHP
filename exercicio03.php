<?php

  //          0         1     2         3           4
  $vetor = ["Maria", "João", 100, "Abobrinha", "Espinafre"];

  function inverteVetor($vetor){

    for( $i = (count($vetor) - 1) ; $i >= 0 ; $i--){

      echo $vetor[$i] . " - ";

    }

  }

  inverteVetor($vetor);