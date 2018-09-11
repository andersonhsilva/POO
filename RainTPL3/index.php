<?php
// include
require_once("vendor/autoload.php");

// namespace
use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "templates/",
    "cache_dir"     => "cache/",
    "debug"         => false,
);
Tpl::configure($config);

// esta linha faz necessário para o uso de CSS no template HTML
Tpl::registerPlugin(new Tpl\Plugin\PathReplace());

// passa as variaveis PHP para o template HTML
$tpl = new Tpl;

// seta as variaveis
$variaveis = array(
    "name"  => "Bem vindo ao PHP com RainTPL3!",
    "version"  => PHP_VERSION,
    "safe_variable"  => "<script>console.log('this is safe')</script>",
    "lista"		=> array("Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo"),
    "user"		=> (object) array("name"=>"Rain", "citizen" => "Earth", "race" => "Human" ),
    "numbers"	=> array( 3, 2, 1 ),

);

// chama o template com o metodo draw
$tpl->assign($variaveis);
$tpl->draw("base");
?>
