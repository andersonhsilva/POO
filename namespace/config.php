<?php

spl_autoload_register(function($nomeClasse){

  var_dump($nomeClasse);

  // nome da pasta onde esta os arquivos de class
  $dirClass = "class";
  // faz um replace na barra do namespace para funcionar no linux
  $fileName = str_replace ("\\", "/", "class" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");

  if (file_exists($fileName)){
    require_once($fileName);
  }

});


?>
