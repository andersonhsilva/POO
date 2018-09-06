<?php

class Usuario {

  private $id;
  private $nome;
  private $endereco;
  private $numero;

  public function getId()      {
    return $this->id;
  }

  public function setId($id)    {
    $this->id = $id;
    return $this;
  }

  public function getNome()    {
    return $this->nome;
  }

  public function setNome($nome)     {
    $this->nome = $nome;
    return $this;
  }

  public function getEndereco()     {
    return $this->endereco;
  }

  public function setEndereco($endereco)    {
      $this->endereco = $endereco;
      return $this;
  }

  public function getNumero()    {
      return $this->numero;
  }

  public function setNumero($numero)    {
    $this->numero = $numero;
    return $this;
  }

  public function loadById($id){

      $sql = new Sql();

      $result = $sql->select("SELECT * FROM aula1 WHERE id = :ID; ", array(
        ":ID"=>$id
      ));

      if (count($result) > 0){
        $row = $result[0];
        $this->setId($row['id']);
        $this->setNome($row['nome']);
        $this->setEndereco($row['endereco']);
        $this->setNumero($row['numero']);
      }

  }

  public function __toString(){
    return "Objeto Usuario com nome de: ".$this->getNome();
  }

}

 ?>
