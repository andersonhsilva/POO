<?php

// esta função faz um require com o nome das classes a serem instanciadas, procurando pelos pastas configuradas
spl_autoload_register(function($nomeClasse){

  if (file_exists("$nomeClasse.php") === true){
    require_once("$nomeClasse.php");
  }

  if (file_exists("..".DIRECTORY_SEPARATOR."abstract".DIRECTORY_SEPARATOR.$nomeClasse.".php") === true){
    require_once("..".DIRECTORY_SEPARATOR."abstract".DIRECTORY_SEPARATOR.$nomeClasse.".php");
  }

});

$carro = new Gol();
$carro->acelerar(80);

?>
