<!-- <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> -->
<?php
require_once("conexao.php");

// prepara a query
$result = $conn->query("SELECT * FROM aula1; ");


$data = array();
while ($row = $result->fetch_assoc()) {

  array_push($data, $row);
  //var_dump($row);

}

echo json_encode($data);

?>
