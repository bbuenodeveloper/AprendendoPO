<?php

require_once "Pessoa.php";

class Aluno extends Pessoa{
    //Atributos
    public $nome;
    public $ra;

    //Métodos
    protected function estudar ($livro){

    }

    // Override
    //public function falar(){
      //  echo "Eu sou um aluno";
    // }

}

?>