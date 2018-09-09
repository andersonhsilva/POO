<?php

function trataNome($nome){
  if (!$nome){
    throw new Exception("Nenhum nome foi definido pelo usuario!");
  }
  echo ucfirst("$nome")."<br>";
}

try {

  trataNome("anderson");
  trataNome("");


} catch (Exception $e) {
  echo $e->getMessage()."<br>";

} finally {
  echo "Executou o Try!";

}




?>
