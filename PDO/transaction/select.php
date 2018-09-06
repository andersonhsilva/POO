<!-- <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> -->
<?php
require_once("../conexao.php");
$conn->beginTransaction();

// prepara a query
$stmt = $conn->prepare("SELECT * FROM aula1; ");
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$conn->commit();

echo json_encode($result);

// var_dump($result);

/*
foreach ($result as $row) {
  foreach ($row as $key => $value) {
    echo "<b>".$key.":</b>".$value."<br/>";
  }
  echo "===================<br>";
}
*/


?>
