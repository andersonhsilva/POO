<?php
require_once("../conexao.php");

$conn->beginTransaction();

// prepara a query
$stmt = $conn->prepare("DELETE FROM aula1 WHERE aula1.id = ?; ");

$id = 3;
$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();



?>
