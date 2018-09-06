<?php

function __autoload($nomeClasse){
  //var_dump($nomeClasse);
  require_once("$nomeClasse.php");
}

$carro = new Gol();
$carro->acelerar(30);



 ?>
