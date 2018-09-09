<?php
require_once("conexao.php");

// prepara a query
$stmt = $conn->prepare("INSERT INTO aula1 (id, nome, endereco, numero) VALUES (NULL, :NOME, :ENDERECO, :NUMERO); ");

// inseri os dados do banco
for ($i=0; $i < 5; $i++) {

  $nome = "Anderson";
  $stmt->bindParam(":NOME", $nome);

  $endereco = "Ribeirão";
  $stmt->bindParam(":ENDERECO", $endereco);

  $numero = "486";
  $stmt->bindParam(":NUMERO", $numero);

  $stmt->execute();

}


?>
