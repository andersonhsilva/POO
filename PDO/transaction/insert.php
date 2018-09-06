<?php
require_once("../conexao.php");
$conn->beginTransaction();

// prepara a query
$stmt = $conn->prepare("INSERT INTO aula1 (id, nome, endereco, numero) VALUES (NULL, ?, ?, ?); ");

// inseri os dados do banco
for ($i=0; $i < 5; $i++) {

  $nome = "Anderson";
  $endereco = "Ribeirão";
  $numero = "486";

  $stmt->execute(array($nome, $endereco, $numero));

}
$conn->commit();


?>
