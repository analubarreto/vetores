<?php

// Lista de Telefones

$vetorLista = array();

function mostrarLista($arr) {
    foreach ($arr as $item) {
        return $item . "<br/>";
    }
}
/*

Considere:

$i = indice da lista
$n = posição atual na lista
$max = número máximo de posições do array
$vI (vetor item) = item sendo inserido/removido

*/

// inserção ordenada
function adicionarItens($arr, $vI) {
    $max = sizeof($arr) - 1;

    // Se a posição atual na lista for menor do que a posição máxima  
    if ($n < $max) {
        // Uma posição qualquer na lista será igual a atual
        $i = $arr[$i]; // $arr[$i] = $n

        // Procurando posição para inserir número
        // Enquanto o índice da lista for maior do que zero (ou seja, NÃO PODE SER 0!) e o valor do índice máximo do vetor for menor do que o valor do item a ser inserido ... 
        while ($i > 0 && $max > $vI) {
            // o índice será diminuído
            // e a posição representada será igual a sua anterior
            $arr[$i] = $arr[$i - 1];  
            $i -= 1;
        }
        // até achar a posição em que o número que se quer inserir pode ser inserido
        $arr[$i] = $vI;
        $n += 1;
    } else {
        // A posição atual na lista for maior do que a posição máxima, retornar overflow da lista
        return "Overflow";
    }
}

/*

Considere:

$i = indice da lista
$n = posição atual na lista
$max = número máximo de posições do array
$vI (vetor item) = item sendo inserido/removido

*/

// remoção ordenada
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

/*

Considere:

$p = item sendo procurado
$arr = array para ser buscado
$limiteInf = número mínimo de posições no array
$limtieSup = número máximo de posições no array

*/

// busca binária
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