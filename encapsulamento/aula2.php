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

class Programador extends Pessoa {

  public function verDados(){

    echo get_class($this) . "<br>";

    echo $this->nome . "<br>";
    echo $this->idade . "<br>";
    // echo $this->$senha . "<br>"; -> este atributo nao é acessado por conta da class anterior ue esta private
  }

}

$obj = new Programador();
$obj->verDados();

?>
