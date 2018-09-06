<?php
require_once("config.php");

use cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Anderson Henrique");
$cad->setEmail("anderson.h.silva@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();


?>
