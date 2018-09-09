<?php


function error_handler($code, $message, $file, $line){
  echo json_encode(array(
    "Code"=>$code,
    "Message"=>$message,
    "File"=>$file,
    "Line"=>$line
  ));
}

// passa o nome da função que eu criei para o php
set_error_handler("error_handler");

$total = 5 / 0;




?>
