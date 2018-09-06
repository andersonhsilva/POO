<?php

class Pessoa {

  public $nome = "";

  public function falar(){

      return "O meu nome é: ".$this->nome;

  }// falar

}// class

$anderson = new Pessoa();
$anderson->nome = "Anderson Henrique";
echo $anderson->falar();


?>
