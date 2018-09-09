<?php
/*
    ATENÇÃO! Para que o codigo a baixo funciona tem que o php ter a biblioteca GD adicionada ao seu extension_dir do php.ini
*/
$image = imagecreatefromjpeg("certificado.jpg");
$titlecolor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

$nome_aluno = "Anderson Henrique";

imagestring($image, 5, 450, 150, "CERTIFICADO",$titlecolor);
imagestring($image, 5, 440, 350, $nome_aluno, $titlecolor);
imagestring($image, 3, 440, 370, utf8_encode("Concluido em:").date("d/m/Y"),$titlecolor);

//imagejpeg($image, "Certificado-".date("Y,m,d").".jpg", 10);
header("Content-Type: image/jpeg");

//mkdir('teste');

//imagejpeg($image); // exibe imagem na tela
imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 60); // salva uma imagem local no servidor

// limpra a memoria do php
imagedestroy($image);

 ?>
