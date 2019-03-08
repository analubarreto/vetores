<?php

class ListaDeContatos {
    private $contato;
    private $lista;

    public function __construct($contato, $lista) {
        $this->contato = $contato;
        $this->lista = array();
    }

    public function mostrarLista() {
        foreach ($this->lista as $item) {
            return $item . "<br/>";
        }
    }

    public function adicionarItens($vI) {
        $max = sizeof($this->lista) - 1;
    
        if ($n < $max) {
            $i = $this->lista[$i]; 
            while ($i > 0 && $max > $vI) {
                $this->lista[$i] = $this->lista[$i - 1];  
                $i -= 1;
            }
            $this->lista[$i] = $vI;
        } else {
            return "Overflow";
        }
    }

    public function removerItens($vI) {
        if ($i < $this->lista[$i]) {
            $this->lista[$i] -= 1; //$n
    
            while ($i < $vI) {
                $this->lista[$i] = $this->lista[$i] + 1;
                $i += 1;
            }
        } else {
            return "Erro";
        }
    
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