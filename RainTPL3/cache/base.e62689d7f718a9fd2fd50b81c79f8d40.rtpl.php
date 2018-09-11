<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teste TPL</title>
    <link rel="stylesheet" href="<?php echo static::$conf['base_url']; ?>templates/style.css" type="text/css" />
  </head>
  <body>

    <!--
      isso aqui é um comentario
      -->

    

    <h1>Teste TPL - <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
    <p>TPL para teste de PHP - <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?>!</p>
    <p>um dia do array -> <?php echo htmlspecialchars( $lista["2"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
    <ul>
  		<?php $counter1=-1;  if( isset($lista) && ( is_array($lista) || $lista instanceof Traversable ) && sizeof($lista) ) foreach( $lista as $key1 => $value1 ){ $counter1++; ?>

  		<li>
  			<?php echo htmlspecialchars( $key1, ENT_COMPAT, 'UTF-8', FALSE ); ?> <?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?>

  		</li>
  		<?php } ?>

  	</ul>

    <h2>If</h2>
  	condição:
    <?php if( $lista["2"] == 'Quarta' ){ ?>

      deu igual o resultado
    <?php }else{ ?>

      nao deu igual - resultado
    <?php } ?> <br><br>



  </body>
</html>
