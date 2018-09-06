<?php
 // define uma função php com parametro de arra yde int -> retornando uma string -> obs: o proprio php7 fez um cast para string
function soma(int ...$valores): string {

  return array_sum($valores);

}

var_dump(soma(2,2));
echo '<br>--------------<br>';
echo soma(2,2);
echo '<br>';
echo soma(25,33);
echo '<br>';
echo soma(1.5,3.2);
echo '<br>';

?>
