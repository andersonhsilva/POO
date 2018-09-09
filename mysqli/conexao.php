<?php

$conn = new Mysqli("localhost","root","qtfyy","udemy");

// muito importante para o banco de dados não bugar os retornos json
if (!$conn->set_charset("utf8")){
  echo "Erro de charset -> ".$conn->error;
}

if ($conn->connect_error) {
  echo "Erro de conexao -> ".$conn->connect_error;
  exit;
}


?>
