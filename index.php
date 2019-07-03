<?php
require_once "Pessoa.php";

require_once "Aluno.php";

$pessoa = new Pessoa();
$pessoa->cor = "Negra";

echo " Cor: $pessoa->cor <br>";

var_dump($pessoa);

$pessoaDois = new Pessoa();
$pessoaDois->cor = "Branca";

var_dump($pessoaDois);

$pessoaDois->falar();

$aluno = new Aluno();
$aluno->nome = "Bruno";
$aluno->cor = "Pardo";
$aluno->idade = 24;

$aluno->falar();

var_dump($aluno);

$xpto = Pessoa::falar();

var_dump($xpto);

?>
