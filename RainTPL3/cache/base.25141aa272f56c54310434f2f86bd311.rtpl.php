<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teste TPL</title>
  </head>
  <body>
    <h1>Teste TPL - <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
    <p>TPL para teste de PHP - <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?>!</p>

  </body>
</html>
