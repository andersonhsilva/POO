<?php

try {

  throw new Exception("Erro de teste", 400);


} catch (Exception $e) {
  echo json_encode(array(
    "Message"=>$e->getMessage(),
    "Line"=>$e->getLine(),
    "File"=>$e->getFile(),
    "Code"=>$e->getCode()
  ));
}




?>
