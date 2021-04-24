<?php

  function encontrarNome(array $vetor, $nomeProcurado){

    foreach($vetor as $nome){

      if($nome == $nomeProcurado){
        return true;
      }

    }
    return false;
  }

  $nomes = ["Gabriel", "Carine", "Italo", "Beatriz", "Gustavo"];
  $nomeAProcurar = "beAtriZ";

  if(encontrarNome($nomes, $nomeAProcurar)){
    echo "$nomeAProcurar está na lista";
  }else{
    echo "$nomeAProcurar não está na lista";
  }