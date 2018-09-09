<?php
/*
    ATENÇÃO! Para que o codigo a baixo funciona tem que o php ter a biblioteca GD adicionada ao seu extension_dir do php.ini
    este codigo só funciona se tambem se setar a permissao do dono do arquivo no usuario e grupo de permissao do apache2.conf
*/

$image = imagecreatefromjpeg("certificado.jpg");
$titlecolor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);
$font_bevan = "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf";
$font_playball = "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf";

$nome_aluno = "Anderson Henrique";

// exibe texto com uma fonte personalizada
imagettftext($image, 32, 0, 320, 250, $titlecolor, $font_bevan, "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $titlecolor, $font_playball, $nome_aluno);

imagestring($image, 3, 440, 370, utf8_encode("Concluido em:").date("d/m/Y"),$titlecolor);

//imagejpeg($image, "Certificado-".date("Y,m,d").".jpg", 10);
header("Content-Type: image/jpeg");

imagejpeg($image); // exibe imagem na tela
//imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 60); // salva uma imagem local no servidor

// limpra a memoria do php
imagedestroy($image);

 ?>
