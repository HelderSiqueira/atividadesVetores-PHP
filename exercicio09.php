<?php

function ehPrimo(int $numero){

    for ($i = 2; $i < $numero; $i++){

        $resto = $numero % $i;

        if ($resto == 0) {
            return "O $numero não é primo";
        }
    }
    return "O $numero é primo";
}


