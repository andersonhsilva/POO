<?php
require_once("config.php");

//$usuario = new Usuario();
//$usuario->loadById(8);
//echo $usuario;

//$lista = Usuario::getList();
//echo json_encode($lista);

//$lista = Usuario::search("%Henrique%");
//echo json_encode($lista);

//echo Usuario::login("Anderson", "486486");

//$usuario = new Usuario("Anderson TI pelo DAO insert", "04860", "rua teste agora vai 2", "04860111");
//$usuario->insert();
//echo $usuario;

$usuario = new Usuario();

$usuario->loadById(20);
$usuario->setNome("Anderson atualizado pelo PHP");
$usuario->setSenha(base64_encode("04860"));
$usuario->setEndereco("rua testado o endereço");
$usuario->setNumero("486");

$usuario->update();

?>
