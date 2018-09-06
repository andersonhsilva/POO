<?php
// conexao com o sql server
//$conn = new PDO("sqlsrv:Database=udemy;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "qtfyy");
$conn = new PDO("mysql:dbname=udemy;host=localhost", "root", "qtfyy");
// muito importante para o banco de dados não bugar os retornos json
$conn->exec("set names utf8");

?>
