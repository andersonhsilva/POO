<?php
/*
    ATENÇÃO! Para que o codigo a baixo funciona tem que o php ter a biblioteca GD adicionada ao seu extension_dir do php.ini
*/

$image = imagecreatefromjpeg("certificado.jpg");
$tite_color = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

$nome_aluno = "Anderson Henrique da Silva";

// adiciona fontes para os textos na imagem
imagettftext($image, 32, 0, 320, 250, $tite_color, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $tite_color, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", $nome_aluno);
imagestring($image, 3, 440, 370, uft8_decode("Concluído em: ").date(d/m/Y), $gray);

header("Content-Type: image/png");

// p codigo a baixo ela gera a imagem somente na tela
//imagejpeg($image);

// o codigo a baixo gera uma imagem fisica no servidor
imagejpeg($image, "certificado-".date("Y-m-d").".jpg",10);

// destroi limpando a imagem da memoria do php
imagedestroy($image);

 ?>
