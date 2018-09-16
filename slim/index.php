<?php
// include
require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/', function(){
    echo json_encode(date("y-m-d H:i:s"));
});

$app->get('/hello/:name+', function ($name) {
    echo "exibir -> " . $name;
});

$app->run();

?>
