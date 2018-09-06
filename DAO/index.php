<?php
require_once("config.php");

$sql = new Sql();

$result = $sql->select("SELECT * FROM aula1; ");

echo json_encode($result);


?>
