<?php
require_once("conexao.php");

// prepara a query
$stmt = $conn->prepare("INSERT INTO aula1 (id, nome, endereco, numero) VALUES (NULL, ?, ?, ?); ");
// o sss define os tipos de campos passados como parametro -> s = string | i = int e por ai vai
// atenção obrigatoriamente o metodo bind_param da class Mysqli só recebe os dados de variáveis e nao atribuidos na hora
$stmt->bind_param("sss", $nome, $endereco, $numero);
// inseri os dados do banco
for ($i=0; $i < 5; $i++) {

  $nome = "Alex";
  $endereco = "Ribeirão";
  $numero = "486";

  $stmt->execute();

}


?>
