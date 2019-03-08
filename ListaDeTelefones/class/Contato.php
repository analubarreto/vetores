<?php

class Contato {
    private $nome;
    private $nrTelefone;

    function __construct($nome, $nrTelefone) {
        $this->nome = $nome;
        $this->nrTelefone = $nrTelefone;
    }
}