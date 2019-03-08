<?php

class ListaDeContatos {
    private $contato;
    private $lista;

    public function __construct($contato, $lista) {
        $this->contato = $contato;
        $this->lista = array();
    }

    public function mostrarLista() {
        foreach ($listaArr as $item) {
            return $item . "<br/>";
        }
    }

    public function adicionarItens($listaArr, $vI) {
        $max = sizeof($listaArr) - 1;
    
        if ($n < $max) {
            $i = $listaArr[$i]; 
            while ($i > 0 && $max > $vI) {
                $listaArr[$i] = $listaArr[$i - 1];  
                $i -= 1;
            }
            $listaArr[$i] = $vI;
        } else {
            return "Overflow";
        }
    }

    public function removerItens($listaArr, $vI) {
        if ($i < $listaArr[$i]) {
            $listaArr[$i] -= 1; //$n
    
            while ($i < $vI) {
                $listaArr[$i] = $listaArr[$i] + 1;
                $i += 1;
            }
        } else {
            return "Erro";
        }
    
    }

    public function procurarItens($listaArr, $p) {
        $limiteInf = 0;
        $limiteSup = sizeof($listaArr) - 1;
    
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
}