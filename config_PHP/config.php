<?php

// sobrescreve as configurações do php.ini com esta função nativa do php
error_reporting(E_ALL & ~E_NOTICE);

// define o local da data e a hora do servidor
date_default_timezone_set('America/Recife');

// configrações de autoload dos require das class a serem instanciadas
spl_autoload_register(function($class_name){
  $fileName = "class".DIRECTORY_SEPARATOR.$class_name.".php";
  if (file_exists($fileName)){
    require_once($fileName);
  }
});


?>
