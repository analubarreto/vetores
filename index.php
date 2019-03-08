<?php
require_once "class/Contato.php";
require_once "class/ListaDeContatos.php";

$anaLu = new Contato("Ana Luiza", 991828555);
$mandaChuva = new Contato("Manda Chuva", 998013344);
$luci = new Contato("Luci", "996667123");

var_dump($anaLu);

$listaDeContatos = new ListaDeContatos();
$listaDeContatos->adicionarItens($anaLu);
$listaDeContatos->adicionarItens($mandaChuva);
$listaDeContatos->adicionarItens($luci);

$listaDeContatos->mostraLista();

$listaDeContatos->procurarItens($anaLu);

$listaDeContatos->removerItens($luci);




