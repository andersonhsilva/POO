<?php
require_once("conexao.php");

// prepara a query
$stmt = $conn->prepare("UPDATE aula1 SET nome = :NOME, endereco = :ENDERECO, numero = :NUMERO WHERE aula1.id = :ID; ");

$id = 4;
$stmt->bindParam(":ID", $id);

$nome = "Anderson";
$stmt->bindParam(":NOME", $nome);

$endereco = "Ribeirão";
$stmt->bindParam(":ENDERECO", $endereco);

$numero = "486";
$stmt->bindParam(":NUMERO", $numero);

$stmt->execute();



?>
