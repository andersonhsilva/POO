<?php

class Endereco {

  private $endereco;
  private $numero;
  private $cidade;

  public function __construct($endereco, $numero, $cidade){
    $this->endereco = $endereco;
    $this->numero = $numero;
    $this->cidade = $cidade;
  }

  public function __destruct(){
    // echo "DESTRUIR";
  }

  public function __toString(){
    return $this->endereco.", ".$this->numero.", ".$this->cidade;
  }


}

$meuEndereco = new Endereco("Rua Osmar Lins","278","Caruaru");
//var_dump($meuEndereco);

echo $meuEndereco;

?>
