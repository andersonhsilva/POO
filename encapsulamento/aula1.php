<?php

class Pessoa {

  public $nome = "Anderson Henrique";
  protected $idade = 33;
  private $senha = "123456";

  public function verDados(){
    echo $this->nome . "<br>";
    echo $this->idade . "<br>";
    echo $this->senha . "<br>";
  }

}

$obj = new Pessoa();
$obj->verDados()."<br>";

?>
