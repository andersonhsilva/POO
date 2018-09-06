<?php
require_once("config.php");

//$usuario = new Usuario();
//$usuario->loadById(8);
//echo $usuario;

//$lista = Usuario::getList();
//echo json_encode($lista);

//$lista = Usuario::search("%Henrique%");
//echo json_encode($lista);

echo Usuario::login("Anderson", "486486");


?>
