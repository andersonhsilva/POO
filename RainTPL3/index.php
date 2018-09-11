<?php
// include
require_once("vendor/autoload.php");

// namespace
use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "templates/",
    "cache_dir"     => "cache/",
    "debug"         => false, // set to false to improve the speed
);
Tpl::configure( $config );
// Add PathReplace plugin (necessary to load the CSS with path replace)
//Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );

// passa as variaveis PHP para o template HTML
$tpl = new Tpl;
$tpl->assign( "name", "Teste de variavel de PHP parse..." );
$tpl->assign( "version", PHP_VERSION );
// estudar a passagens de array em variaveis pelo rain
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// chama o template com o metodo draw
$tpl->draw( "base" );
?>
