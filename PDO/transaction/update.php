<?php
require_once("../conexao.php");
$conn->beginTransaction();

// prepara a query
$stmt = $conn->prepare("UPDATE aula1 SET nome = ?, endereco = ?, numero = ? WHERE aula1.id = ?; ");

$id = 8;
$nome = "Anderson Henrique";
$endereco = "Ribeirão";
$numero = "486";

$stmt->execute(array($nome, $endereco, $numero, $id));
$conn->commit();

?>
