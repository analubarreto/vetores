<?php

// Lista de Telefones

$vetorLista = array();

function mostrarLista($arr) {
    foreach ($arr as $item) {
        return $item . "<br/>";
    }
}

function adicionarItens($arr, $vI) {
    $max = sizeof($arr) - 1;

    if ($n < $max) {
        $i = $arr[$i]; 
        while ($i > 0 && $max > $vI) {
            $arr[$i] = $arr[$i - 1];  
            $i -= 1;
        }
        $arr[$i] = $vI;
    } else {
        return "Overflow";
    }
}

function removerItens($arr, $vI) {
    if ($i < $arr[$i]) {
        $arr[$i] -= 1; //$n

        while ($i < $vI) {
            $arr[$i] = $arr[$i] + 1;
            $i += 1;
        }
    } else {
        return "Erro";
    }

}

function procurarItens($arr, $p) {
    $limiteInf = 0;
    $limiteSup = sizeof($arr) - 1;

    while ($limiteInf <= $limiteInf) {
        $meio = ($limiteInf + $limiteSup) / 2;

        if ($meio < $p) {
            $limiteInf += 1;
        } else if ($meio > $p) {
            $limiteSup -= 1;
        } else {
            return $meio;
        }
    }
}