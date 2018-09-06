<?php
require_once("conexao.php");

// prepara a query
$stmt = $conn->prepare("DELETE FROM aula1 WHERE aula1.id = :ID; ");

$id = 4;
$stmt->bindParam(":ID", $id);

$stmt->execute();



?>
