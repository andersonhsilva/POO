<?php

// sobrescreve as configurações do php.ini com esta função nativa do php
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];
echo $nome;


?>
