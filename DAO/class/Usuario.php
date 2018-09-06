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

// busca usuario no banco pelo id
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

  // lista os dados do banco
  public static function getList(){
    $sql = new Sql();
    return $sql->select("SELECT * FROM aula1 ORDER BY id DESC; ");
  }

  // consulta os dados do banco
  public static function search($condicao){
    $sql = new Sql();
    return $sql->select("SELECT * FROM aula1 WHERE nome LIKE :SEARCH; ", array(
      ":SEARCH"=>$condicao
    ));
  }

  // realiza login no banco
  public static function login($usuario, $senha): string {
    $sql = new Sql();
    $result = $sql->select("SELECT * FROM aula1 WHERE nome = :USUARIO AND senha = :SENHA; ", array(
      ":USUARIO"=>$usuario,
      ":SENHA"=>$senha
    ));

    if (count($result) > 0){
      $row = $result[0];
      return $row['nome'];

    } else {
      throw new Exception("Usuario ou senha incorreto!");
    }
  }

  // imprime o nome que eu quero pelo echo
  public function __toString(){
    return "Objeto Usuario com nome de: ".$this->getNome();
  }

}

 ?>
