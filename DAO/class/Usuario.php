<?php

class Usuario {

  private $id;
  private $nome;
  private $senha;
  private $endereco;
  private $numero;

  // construtor da class usuario -> logo ja seta os atributos de cara e define os valores iniciais, assim os campos nao ficam obrigatorios
  public function __construct($nome = "", $senha = "", $endereco = "", $numero = ""){
    $this->setNome($nome);
    $this->setSenha($senha);
    $this->setEndereco($endereco);
    $this->setNumero($numero);
  }

  // GETTERS E SETTERS -------------------------------

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

  public function getSenha()    {
    return $this->senha;
  }

  public function setNome($nome)     {
    $this->nome = $nome;
    return $this;
  }

  public function setSenha($senha)     {
    $this->senha = $senha;
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

// METODOS -------------------------------

// busca usuario no banco pelo id
  public function loadById($id){

      $sql = new Sql();

      $result = $sql->select("SELECT * FROM aula1 WHERE id = :ID; ", array(
        ":ID"=>$id
      ));

      if (count($result) > 0){
        // chama o metodo para setas os atributos da class
        $this->setData($result[0]);
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

  // insert dados do banco
  public function insert(){
    $sql = new Sql();
    $result = $sql->query("INSERT INTO aula1 (id, nome, senha, endereco, numero) VALUES (NULL, :NOME, :SENHA, :ENDERECO, :NUMERO); ", array(
      ":NOME"=>$this->getNome(),
      ":SENHA"=>$this->getSenha(),
      ":ENDERECO"=>$this->getEndereco(),
      ":NUMERO"=>$this->getNumero()
    ));

  }

  // update dados do banco
  public function update(){
    $sql = new Sql();
    $result = $sql->query("UPDATE aula1 SET nome = :NOME, senha = :SENHA, endereco = :ENDERECO, numero = :NUMERO WHERE aula1.id = :ID; ", array(
      ":ID"=>$this->getId(),
      ":NOME"=>$this->getNome(),
      ":SENHA"=>$this->getSenha(),
      ":ENDERECO"=>$this->getEndereco(),
      ":NUMERO"=>$this->getNumero()
    ));

  }

  // seta os atributos da class para nao ficar redundante toda vez ue eu precisar
  public function setData($data){
    $this->setId($data['id']);
    $this->setNome($data['nome']);
    $this->setSenha($data['senha']);
    $this->setEndereco($data['endereco']);
    $this->setNumero($data['numero']);
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
