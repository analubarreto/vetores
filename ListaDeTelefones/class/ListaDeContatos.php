<?php

class ListaDeContatos {
    private $lista = array();

    public function __toString() {
        return $this->lista;
    }

    public function adicionarItens($item) {
        array_push($this->lista, $item);
    }

    // $qtd é a quantidade itens que você quer manter no array
    public function removerItens($qtd) {
        array_splice($this->lista, $qtd);
    }

    public function procurarItens($p) {
        $limiteInf = 0;
        $limiteSup = sizeof($this->lista) - 1;
    
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
